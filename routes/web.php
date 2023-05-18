<?php

use App\Models\User;
use App\Models\Seance;
use App\Models\Contact;
use App\Models\Activity;
use App\Models\UserSeance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SalleController;
use App\Http\Controllers\Admin\SeanceController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AbonnementController;
use App\Http\Controllers\ActivityController as ActivityClientController; 
use App\Http\Controllers\AbonnementController as AbonnementClientController;
use Illuminate\Http\Request;

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
        "categories" => CategoryController::class,
        "seances" => SeanceController::class,
        "abonnements" => AbonnementController::class
    ]);
    Route::get('seances/{seance}/reservations', [SeanceController::class, "reservations"])->name('seances.reservations');
    Route::get('abonnements/{abonnement}/abonnees', [AbonnementController::class, "abonnees"])->name('abonnements.abonnees');
});


Route::get('/', function () {
    return view('welcome');
});

Route::resource('abonnements', AbonnementClientController::class);

Route::get('entraineurs', function(){
    return view('entraineurs.index');
})->name('entraineurs.index');

Route::get('schedule', function(){
    $jours = ['lundi', 'mardi','mercredi', 'jeudi','vendredi','samedi','dimanche'];
    foreach(Auth::user()->abonnements()->get() as $abonnement){
        foreach($abonnement->activities()->get() as $activity){
            foreach($activity->seances()->get() as $seance){
                $seanceIds[] = $seance->id;
            }
        }
    }

    $seances =  Seance::whereIn('id', $seanceIds)->get();

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


