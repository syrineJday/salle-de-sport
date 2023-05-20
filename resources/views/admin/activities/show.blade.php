@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Détail d'un activité</h1>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Nom d'activité: {{ $activity->label }}
                        </h5>
                        <h5 class="card-title">
                            Prix Séance: {{ $activity->prixSeance }}DT
                        </h5>
                        <p>
                            {{ $activity->description }}
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </section>

</main>
@endsection
