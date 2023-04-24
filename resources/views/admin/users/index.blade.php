@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        @if(request()->role == "entraineur")
        <h1>Liste des entraineurs</h1>
        <a href="{{ route('admin.users.create') }}">
            <button class="btn-delete">
                <i class="fa fa-plus"></i>
            </button>
        </a>
        @else
        <h1>Liste des abonnées</h1>
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
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Numéro de téléphone</th>
                                    <th scope="col">Numéro de mobile</th>
                                    <th scope="col">CIN</th>
                                    <th scope="col">Adresse</th>
                                    <th scope="col">Date de naissance</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->nom }}</td>
                                        <td>{{ $user->prenom }}</td>
                                        <td>{{ $user->numTel }}</td>
                                        <td>{{ $user->numMobile }}</td>
                                        <td>{{ $user->cin }}</td>
                                        <td>{{ $user->adresse }}</td>
                                        <td>{{ $user->date_naissance }}</td>
                                        <td>
                                            <div class="d-flex justify-content-around">
                                                <button type="submit" class="btn-delete delete-confirm" data-model="entraineur" title="Supprimer un entraineur" data-url="{{ route('admin.users.destroy', ['user' => $user]) }}" >
                                                    <i class="fa fa-trash" ></i>
                                                </button>
                                                <a href="{{ route('admin.users.edit', ['user' => $user]) }}" data-model="entraineur" title="Modifier un entraineur" class="edit-confirm btn-edit">
                                                    <i class="fa fa-pen"></i>
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
