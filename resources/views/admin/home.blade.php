@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">


    <section class="section dashboard">
        
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Dernière inscriptions</h5>

                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom </th>
                                    <th scope="col">Prénom </th>
                                    <th scope="col">E-mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(App\Models\User::whereJsonContains('role->ROLE_ADMIN', true)->limit(5)->get() as $etudiant)
                                    <tr>
                                        <td>{{ $etudiant->id }}</td>
                                        <td>{{ $etudiant->nom }}</td>
                                        <td>{{ $etudiant->prenom }}</td>
                                        <td>{{ $etudiant->email }}</td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>


            </div>
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Salles</h5>

                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Libéllé </th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(App\Models\Salle::limit(5)->get() as $salle)
                                    <tr>
                                        <td>{{ $salle->id }}</td>
                                        <td>{{ $salle->label }}</td>
                                        <td>{{ $salle->num }}</td>
                                        <td>
                                            {{-- <div class="d-flex justify-content-around">
                                                <button type="submit" class="btn-delete delete-confirm" data-model="étudiant" title="Supprimer un étudiant" data-url="{{ route('admin.matieres.destroy', ['matiere' => $salle]) }}" >
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                             
                                            </div> --}}
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
