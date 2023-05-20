<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Seance;
use App\Models\Abonnement;
use Illuminate\Http\Request;
use App\Models\UsersAbonnement;

class AbonnementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abonnements = Abonnement::paginate(10);

        return view('abonnements.index', compact('abonnements'));
    }

    public function participer(Abonnement $abonnement){
        $userAbonnement = new UsersAbonnement();
        if($abonnement->type == "AN"){
            $monthsNumber = "+12 months";

        } else {
            $monthsNumber = "+".substr($abonnement->type, 0, 1)." months";
        }
        $userAbonnement->startDate = date('Y-m-d');
        $userAbonnement->endDate = date('Y-m-d', strtotime($monthsNumber, strtotime(date('Y-m-d'))));
        $userAbonnement->user_id = Auth::id();
        $userAbonnement->abonnement_id = $abonnement->id;

        $userAbonnement->save();

        return redirect()->route('abonnements.index')->with('success',"Vous avez participé a l'abonnement $abonnement->label avec succée");

    }

    public function show(Abonnement $abonnement)
    {
        $activities = $abonnement->activities()->get();
        $jours = ['lundi', 'mardi','mercredi', 'jeudi','vendredi','samedi','dimanche'];
        $seanceIds = [];
        foreach($activities as $activity){

            foreach($activity->seances()->get() as $seance){
                $seanceIds[] = $seance->id;
            }
        }

        $seances =  Seance::whereIn('id', $seanceIds)->get();
        return view('abonnements.show', compact('activities', 'abonnement', 'seances', 'jours'));
    }

    public function schedule(Abonnement $abonnement){
        $jours = ['lundi', 'mardi','mercredi', 'jeudi','vendredi','samedi','dimanche'];
        $seances = [];
        $seanceIds = [];
        foreach($abonnement->activities()->get() as $activity){
            foreach($activity->seances()->get() as $seance){
                $seanceIds[] = $seance->id;
            }
        }
        if(count($seanceIds) > 0){

            $seances =  Seance::whereIn('id', $seanceIds)->get();
        }

        return view('Abonnements.schedule', compact('jours', 'seances', 'abonnement'));
    }
}
