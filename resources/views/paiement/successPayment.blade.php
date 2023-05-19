@extends('layouts.master')
@section('style')
    <link rel="stylesheet" href="{{ asset('frontOffice/assets/css/successPayment.css') }}">
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="cardPayment mt-5 mb-5">
                        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto; display: flex;
                            justify-content: center;">
                            <i class="checkmark">✓</i>
                        </div>
                        <h1>Succée</h1> 
                        <p>Votre paiement a été réalisé avec succès, et votre séance est réservé <br/> 
                        <a href="{{ route('abonnements.index') }}">Voir abonnements!</a>
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection