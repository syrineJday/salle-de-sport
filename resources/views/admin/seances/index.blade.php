@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Liste des séances</h1>
        @if(Auth::user()->isAdmin())
        <a href="{{ route('admin.seances.create') }}">
            <button class="btn-delete">
                <i class="fa fa-plus"></i>
            </button>
        </a>
        @endif
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Jour</th>
                                    <th scope="col">Temps début</th>
                                    <th scope="col">Temps fin</th>
                                    <th scope="col">Entraineur</th>
                                    <th scope="col">Salle</th>
                                    <th scope="col">Activité</th>
                                    <th scope="col">Aujourd'hui</th>
                                    <th scope="col">Etat</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $days = [
                                        "lundi" => "Mon",
                                        "mardi" => "Tue",
                                        "mercredi" => "Wed",
                                        "jeudi" => "Thur",
                                        "vendredi" => "Fri",
                                        "samedi" => "Sat",
                                        "dimanche" => "Sun",
                                    ]
                                @endphp
                                @foreach($seances as $seance)
                                    <tr>
                                        <td>{{ $seance->id }}</td>
                                        <td>{{ $seance->day }}</td>
                                        <td>{{ $seance->startTime }}</td>
                                        <td>{{ $seance->endTime }}</td>
                                        <td>{{ $seance->user->nom }} {{ $seance->user->prenom }}</td>
                                        <td>{{ $seance->salle->num }}</td>
                                        <td>{{ $seance->activity->label }}</td>
                                        <td>
                                            @php 
                                                $currentDay = date('D');
                                                
                                            @endphp 
                                            @if($days[$seance->day] == $currentDay)
                                                Ce jour
                                            @else 
                                                ---------
                                            @endif
                                        </td>
                                        <td>
                                            @if($seance->canceled == 1)
                                                Annulé
                                            @else   
                                                -------
                                            @endif  
                                        </td>

                                        <td>
                                            @if(Auth::user()->isAdmin())
                                            <div class="d-flex justify-content-around">
                                                <button type="submit" class="btn-delete delete-confirm" data-model="seance" title="Supprimer un activitie" data-url="{{ route('admin.seances.destroy', ['seance' => $seance]) }}" >
                                                    <i class="fa fa-trash" ></i>
                                                </button>
                                                <a href="{{ route('admin.seances.edit', ['seance' => $seance]) }}" data-model="seance" title="Modifier un activite" class="edit-confirm btn-edit">
                                                    <i class="fa fa-pen"></i>
                                                </a>
                                                <a href="{{ route('admin.seances.reservations', ['seance' => $seance]) }}"  style="width: max-content; padding: 0px 10px;" class="btn-edit">
                                                    Voir réservation
                                                </a>

                                            </div>
                                            @else 
                                            <div class="d-flex justify-content-around">
                                                
                                                <button 
                                                @if($days[$seance->day] == $currentDay && $seance->canceled == true)
                                                disabled 
                                                @endif
                                                data-href="{{ route('entraineur.seances.annuler', ['seance' => $seance]) }}" data-model="seance" class="btn-cancel cancel-confirm">
                                                    Annuler Séance
                                                </button>

                                            </div>

                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>

                        {{ $seances->links() }}
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>

        </div>
    </section>

</main>
@endsection
