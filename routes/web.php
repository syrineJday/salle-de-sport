<?php

use App\Models\Seance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SalleController;
use App\Http\Controllers\Admin\SeanceController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AbonnementController;
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

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resources([
        "users" => UserController::class,
        "salles" => SalleController::class,
        "activities" => ActivityController::class,
        "categories" => CategoryController::class,
        "seances" => SeanceController::class,
        "abonnements" => AbonnementController::class
    ]);
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('abonnements', [AbonnementClientController::class, 'index'])->name('abonnements.index');
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

Route::get('contact', function(){
    return view('contact.index');
})->name('contact.index');

Route::get('/home/dashboard', function(){
    return view('admin.home');
});

Route::get('abonnement/{abonnement}/participer', [AbonnementClientController::class, 'participer'])->name('abonnement.participer')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


