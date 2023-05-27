<?php

use App\Models\Avi;
use App\Models\User;
use App\Models\Seance;
use App\Models\Contact;
use App\Models\Activity;
use App\Models\Promotion;
use App\Models\Abonnement;
use App\Models\UserSeance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SalleController;
use App\Http\Controllers\Admin\SeanceController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\AbonnementController;
use App\Http\Controllers\ActivityController as ActivityClientController; 
use App\Http\Controllers\AbonnementController as AbonnementClientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('entraineur')->name('entraineur.')->group(function () {
    Route::get('seances', [SeanceController::class, "index"])->name('seances.index');
    Route::put('seances/{seance}/annuler', [SeanceController::class, "annuler"])->name('seances.annuler');
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resources([
        "users" => UserController::class,
        "salles" => SalleController::class,
        "activities" => ActivityController::class,
        "seances" => SeanceController::class,
        "abonnements" => AbonnementController::class,
        "promotions" => PromotionController::class
    ]);
    Route::delete('promotion/{promotion}', function(Promotion $promotion){
        

            $promotion->forceDelete();
        
        return response()->json(['deleted' => "Promotion a été supprimé avec succée"], 200);
        
    })->name('promotions.forceDelete');
    Route::get('seances/{seance}/reservations', [SeanceController::class, "reservations"])->name('seances.reservations');
    Route::get('abonnements/{abonnement}/abonnees', [AbonnementController::class, "abonnees"])->name('abonnements.abonnees');
});


Route::get('/', function () {
    $activities = Activity::all();
    return view('welcome', compact('activities'));
});

Route::resource('abonnements', AbonnementClientController::class);

Route::get('entraineurs', function(){
    return view('entraineurs.index');
})->name('entraineurs.index');

Route::get('schedule', function(){
    $jours = ['lundi', 'mardi','mercredi', 'jeudi','vendredi','samedi','dimanche'];
    $seances = [];
    $seanceIds = [];
    foreach(Auth::user()->abonnements()->get() as $abonnement){
        foreach($abonnement->activities()->get() as $activity){
            foreach($activity->seances()->get() as $seance){
                $seanceIds[] = $seance->id;
            }
        }
    }
    if(count($seanceIds) > 0){

        $seances =  Seance::whereIn('id', $seanceIds)->get();
    }

    return view('schedule.index', compact('jours', 'seances'));
})->name('schedule.index');

Route::put('seances/{seance}/reserver', function(Seance $seance){
    $userSeance = new UserSeance();

    $userSeance->user_id = Auth::user()->id;
    $userSeance->seance_id = $seance->id;

    $userSeance->save();

    return response()->json(['reserved' => "La séance de ".$seance->day." à ".$seance->startTime." a bien été réservé"], 200);

})->name('seances.reserver')->middleware('auth');

Route::resource('activities', ActivityClientController::class);

Route::get('activity/{activity}', function(Activity $activity){
    $jours = ['lundi', 'mardi','mercredi', 'jeudi','vendredi','samedi','dimanche'];
        $seanceIds = [];
        $trainersIds = [];
        foreach($activity->seances()->get() as $seance){
            $seanceIds[] = $seance->id;
            $trainersIds[] = $seance->user->id;
        }

        $seances =  Seance::whereIn('id', $seanceIds)->get();
        $trainers =  User::whereIn('id', $trainersIds)->get();

        return view('activities.show', compact('activity', 'jours', 'seances', 'trainers'));
})->middleware('auth')->name('activity.details');

Route::get('contact', function(){
    return view('contact.index');
})->name('contact.index');

Route::post('contact', function(Request $request){
    Contact::create($request->all());

    return view('contact.index')->with('success', 'Votre message a été envoyé avec succée');
})->name('contact.store');

Route::get('/home/dashboard', function(){
    return view('admin.home');
});

Route::get('abonnement/{abonnement}/participer', [AbonnementClientController::class, 'participer'])->name('abonnement.participer')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
Route::get('abonnement/{abonnement}/schedule', 
    [AbonnementClientController::class, 'schedule']
)->name('abonnements.schedule')->middleware('auth');
// PAYMENT PART 
Route::get('activities/{seance}/reservation', function(Seance $seance) {
    // return view('paiement.index', compact('seance'));
    return view('activities.seanceReserver', compact('seance'));
})->name('activities.seanceReserver')->middleware('auth');

Route::get('paiement', function(Request $request) {
    $days = [
        "Mon" => "lundi",
        "Tue" => "mardi",
        "Wed" => "mercredi",
        "Thu" => "jeudi",
        "Fri" => "vendredi",
        "Sat" => "samedi",
        "Sun" => "dimanche",
    ];
    $dayDate = date('D', strtotime($request->date));

    
    
    $seance = Seance::find($request->seance_id);
    // dump($seance->day);
    if($seance->day != $days[$dayDate]){
        return redirect()->back()->withErrors(['invalid-date' => "Choisir une date dans le jour de cette séance"]);
    }
    $date = $request->date;
    return view('paiement.index', compact('seance', 'date'));

})->name('paiement.index')->middleware('auth');
Route::get('abonnement/{abonnement}/}paiement', function(Abonnement $abonnement) {
    return view('abonnements.paiement', compact('abonnement'));
})->name('abonnement.paiement.index')->middleware('auth');
// {{ route('abonnement.participer', ['abonnement' => $abonnement]) }}

Route::post('paiement', [PaymentController::class, 'store'])->name('paiement.store');
Route::post('avis', function(Request $request){
    $avis = Avi::create($request->all());

    return redirect()->route('activities.show', ['activity' => $avis->activity]);
})->name('avis.store')->middleware('auth');