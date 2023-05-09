@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Modifier un entraineur</h1>

    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Modifier un entraineur </h5>
                        <!-- Default Table -->
                        <form action="{{ route('admin.users.update', ['user' => $user]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nom </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{ $user->nom }}" name="nom" placeholder="Saisir nom d'un entraineur">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Prenom </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{ $user->prenom }}" name="prenom" placeholder="Saisir prenom d'un entraineur">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">E-mail </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{ $user->email }}" name="email" placeholder="Saisir email d'un entraineur">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Numéro de téléphone </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{ $user->numTel }}" name="numTel" placeholder="Saisir numTel d'un entraineur">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">CIN </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{ $user->cin }}" name="cin" placeholder="Saisir cin d'un entraineur">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Adresse </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{ $user->adresse }}" name="adresse" placeholder="Saisir adresse d'un entraineur">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Spécialite </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{ $user->specialite }}" name="specialite" placeholder="Saisir specialite d'un entraineur">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Mot de passe </label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control"  name="password" placeholder="Saisir password d'un entraineur">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Date de naissance </label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" value={{ $user->date_naissance }} name="date_naissance">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Photo</label>
                                <div class="col-md-6">
                                    <input class="form-control @error('photo') input-invalid @enderror" name="photo" type="file" id="formFile">
                                </div>
                                @error('photo')
                                    <div class="invalid-tooltip  d-block ">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">modifier</button>
                                    <button type="reset" class="btn btn-light">annuler</button>
                                </div>
                            </div>
                        </form>
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>

        </div>
    </section>

</main>
@endsection
