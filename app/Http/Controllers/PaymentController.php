<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Order;
use App\Models\Seance;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Abonnement;
use App\Models\UserSeance;
use Illuminate\Http\Request;
use App\Models\UsersAbonnement;
use App\Http\Requests\PaymentRequest;

class PaymentController extends Controller
{
    public function store(PaymentRequest $request){
        $payment = Payment::create($request->all());
        if($request->has('seance_id')){

            $userSeance = new UserSeance();
            
            $userSeance->date = $request->date;
            $userSeance->user_id = $request->user_id;
            $userSeance->seance_id = $request->seance_id;
    
            $userSeance->save();
        } else {
            $abonnement = Abonnement::find($request->abonnement_id);
            
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

       

        return redirect()->route('activities.seanceReserver', ['seance' => Seance::find($request->seance_id)])->with('success', 'Votre paiement est effectué avec succés');
    }
}
