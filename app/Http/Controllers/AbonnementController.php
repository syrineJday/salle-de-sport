<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use Illuminate\Http\Request;
use App\Models\UsersAbonnement;
use Auth;
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
}
