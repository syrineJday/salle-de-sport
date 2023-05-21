@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Liste des activités</h1>
        <a href="{{ route('admin.activities.create') }}">
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
                                    <th scope="col">Image</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prix Séance</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($activities as $activity)
                                    <tr>
                                        <td>{{ $activity->id }}</td>
                                        <td><img src="{{ asset('storage/'.$activity->image) }}" width="160" height="160" style="border-radius: 50%; object-fit: cover;"></td>
                                        <td>{{ $activity->label }}</td>
                                        <td>{{ $activity->prixSeance }}</td>
                                        <td>
                                            <div class="d-flex justify-content-around">
                                                <button type="submit" class="btn-delete delete-confirm" data-model="activitz" title="Supprimer un activitie" data-url="{{ route('admin.activities.destroy', ['activity' => $activity]) }}" >
                                                    <i class="fa fa-trash" ></i>
                                                </button>
                                                <a href="{{ route('admin.activities.edit', ['activity' => $activity]) }}" data-model="activite" title="Modifier un activite" class="edit-confirm btn-edit">
                                                    <i class="fa fa-pen"></i>
                                                </a>
                                                <a href="{{ route('admin.activities.show', ['activity' => $activity]) }}" data-model="abonnement" title="Détail d'un abonnement" class="btn-edit">
                                                    <i class="fa fa-info-circle"></i>
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
