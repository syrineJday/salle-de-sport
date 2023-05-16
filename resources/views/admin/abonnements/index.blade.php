@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Liste des abonnements</h1>
        <a href="{{ route('admin.abonnements.create') }}">
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
                                    <th scope="col">Label</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Nombre d'activité inclus</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($abonnements as $abonnement)
                                    <tr>
                                        <td>{{ $abonnement->id }}</td>
                                        <td>{{ $abonnement->label }}</td>
                                        <td>{{ $abonnement->prix }}</td>
                                        <td>{{ $abonnement->type }}</td>
                                        <td>{{ $abonnement->activities()->count() }}</td>
                                        <td>
                                            <div class="d-flex justify-content-around">
                                                <button type="submit" class="btn-delete delete-confirm" data-model="abonnement" title="Supprimer un abonnement" data-url="{{ route('admin.abonnements.destroy', ['abonnement' => $abonnement]) }}" >
                                                    <i class="fa fa-trash" ></i>
                                                </button>
                                                <a href="{{ route('admin.abonnements.edit', ['abonnement' => $abonnement]) }}" data-model="abonnement" title="Modifier un abonnement" class="edit-confirm btn-edit">
                                                    <i class="fa fa-pen"></i>
                                                </a>
                                                <a href="{{ route('admin.abonnements.show', ['abonnement' => $abonnement]) }}" data-model="abonnement" title="Détail d'un abonnement" class="btn-edit">
                                                    <i class="fa fa-info-circle"></i>
                                                </a>
                                                <a href="{{ route('admin.abonnements.abonnees', ['abonnement' => $abonnement]) }}"  style="width: max-content; padding: 0px 10px;" class="btn-edit">
                                                    Voir abonnés
                                                </a>
                                            </div>
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
