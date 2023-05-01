@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Liste des séances</h1>
        <a href="{{ route('admin.seances.create') }}">
            <button class="btn-delete">
                <i class="fa fa-plus"></i>
            </button>
        </a>
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
                                    <th scope="col">Date début</th>
                                    <th scope="col">Date fin</th>
                                    <th scope="col">Entraineur</th>
                                    <th scope="col">Salle</th>
                                    <th scope="col">Activité</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach($seances as $seance)
                                    <tr>
                                        <td>{{ $seance->id }}</td>
                                        <td>{{ $seance->startDate }}</td>
                                        <td>{{ $seance->endDate }}</td>
                                        <td>{{ $seance->user->nom }} {{ $seance->user->prenom }}</td>
                                        <td>{{ $seance->salle->label }}</td>
                                        <td>{{ $seance->activity->label }}</td>
                                        <td>
                                            <div class="d-flex justify-content-around">
                                                <button type="submit" class="btn-delete delete-confirm" data-model="seance" title="Supprimer un activitie" data-url="{{ route('admin.seances.destroy', ['seance' => $seance]) }}" >
                                                    <i class="fa fa-trash" ></i>
                                                </button>
                                                <a href="{{ route('admin.seances.edit', ['seance' => $seance]) }}" data-model="seance" title="Modifier un activite" class="edit-confirm btn-edit">
                                                    <i class="fa fa-pen"></i>
                                                </a>
                                            </div>
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
