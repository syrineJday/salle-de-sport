<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Order;
use App\Models\Seance;
use App\Models\Payment;
use App\Models\Product;
use App\Models\UserSeance;
use Illuminate\Http\Request;
use App\Http\Requests\PaymentRequest;

class PaymentController extends Controller
{
    public function store(PaymentRequest $request){
        $payment = Payment::create($request->all());

        $userSeance = new UserSeance();
        
        $userSeance->date = $request->date;
        $userSeance->user_id = $request->user_id;
        $userSeance->seance_id = $request->seance_id;

        $userSeance->save();

       

        return redirect()->route('activities.seanceReserver', ['seance' => Seance::find($request->seance_id)])->with('success', 'Votre paiement est effectué avec succés');
    }
}
