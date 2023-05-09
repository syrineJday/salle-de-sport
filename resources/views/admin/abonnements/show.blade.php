@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Détail d'un abonnement</h1>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Titre d'abonnement: {{ $abonnement->label }}
                        </h5>
                        <h5 class="card-title">
                            Prix: {{ $abonnement->prix }}DT/{{ $abonnement->type }}
                        </h5>
                        <h3 style="border-bottom: 2px solid black">
                            Les activités inclus
                        </h3>
                        @foreach($abonnement->activities()->get() as $activity)
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                    <img src="{{ asset('storage/'.$activity->image) }}" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                {{ $activity->label }}
                                            </h5>
                                            <p class="card-text">
                                                {{ $activity->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>

        </div>
    </section>

</main>
@endsection
