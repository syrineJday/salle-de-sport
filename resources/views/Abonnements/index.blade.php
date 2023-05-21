@extends('layouts.master')

@section('content')
<main>
    <section class="breadcrumb-area pt-50 pb-50 pt-md-120 pb-md-120 pt-xs-100 pb-xs-100 bg-fix" data-overlay="black"
        data-opacity="7" data-background="assets/img/bg/breadcrumb-bg-4.jpg"
        style="background-image: url(&quot;assets/img/bg/breadcrumb-bg-4.jpg&quot;);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="breadcrumb-content">
                        <h3 class="title">Abonnements</h3>
                        <ul>
                            <li><a href="index.html">Accueil</a></li>
                            <li class="active">Abonnements</li>
                        </ul>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <div class="pricing-area bg-off-white pt-130 pb-100">
        <div class="container">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block mb-5">
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                            <strong>{{ $message }}</strong>
                    </div>
                @endif
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-12">
                    <div class="section-title-2 bar-theme-color text-center mb-35">
                        <h3>
                            Nous fournissons un plan de tarification confortable pour nos clients satisfaits
                        </h3>
                        <span>Tarification</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($abonnements as $abonnement)
                <div class="col-lg-4 col-md-7">
                    <div class="pricing-wrap mt-30 mb-30">
                        <h3>
                            {{ $abonnement->label }}
                        </h3>
                        <p>
                            <h2>
                                Activités inclus: 
                            </h2>
                            <ul>
                                @foreach($abonnement->activities()->get() as $activity)
                                    <li class="activity_inclu">
                                        {{ $activity->label }}
                                    </li>
                                @endforeach
                            </ul>
                        </p>
                        <span class="price">
                            {{ $abonnement->prix }}DT/{{ $abonnement->type }}
                        </span>
                        <div class="d-flex flex-column" style="gap: 0px">
                            <a href="{{ route('abonnements.show', ['abonnement' => $abonnement]) }}" class="order-btn">
                                Voir détail <i class="fas fa-angle-double-right"></i>
                            </a>
                        </div>
                        <div class="shape">
                            <img src="{{ asset('frontOffice/assets/img/shape/shape-11.png') }}" alt="shape">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</main>
@endsection
