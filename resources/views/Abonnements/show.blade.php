@extends('layouts.master')

@section('content')
<main>
    <section class="breadcrumb-area pt-180 pb-180 pt-md-120 pb-md-120 pt-xs-100 pb-xs-100 bg-fix" data-overlay="black"
        data-opacity="7" data-background="assets/img/bg/breadcrumb-bg-4.jpg"
        style="background-image: url(&quot;assets/img/bg/breadcrumb-bg-4.jpg&quot;);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="breadcrumb-content">
                        <h3 class="title">Détail de l'abonnement {{ $abonnement->label }}</h3>
                        <ul>
                            <li><a href="index.html">Acceuil</a></li>
                            <li class="active">Détail d'un abonnement</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes.activities')

    

</main>
@endsection