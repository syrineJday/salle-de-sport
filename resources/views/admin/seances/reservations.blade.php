@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">

        <h1>Liste des réservations de la séance de {{ $seance->day }} à {{ $seance->startTime }}</h1>
    </div><!-- End Page Title -->
    <section class="section dashboard">

        <div class="row">
            @if(Session::has('deleted'))
                <div class="alert alert-success">

                    {{ Session::get('deleted') }}
                </div>
            @endif
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Numéro de téléphone</th>
                                    <th scope="col">CIN</th>
                                    <th scope="col">Adresse</th>
                                    <th scope="col">Date de réservation</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reservations as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->nom }}</td>
                                        <td>{{ $user->prenom }}</td>
                                        <td>{{ $user->numTel }}</td>
                                        <td>{{ $user->cin }}</td>
                                        <td>{{ $user->adresse }}</td>
                                        <td>{{ $user->pivot->date }}</td>
                                        <td>
                                            @php 
                                                $userSeance = App\Models\UserSeance::where('seance_id', '=', $user->pivot->seance_id)->where('user_id', '=', $user->pivot->user_id)->first();
                                            @endphp
                                            <a href="{{ route('admin.reservationSeance.destroy', ['userSeance' => $userSeance]) }}" class="btn-delete " title="Annuler un réservation" >
                                                Annuler
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>

        </div>
    </section>

</main>
@endsection
