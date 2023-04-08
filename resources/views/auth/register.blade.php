@extends('layouts.master')

@section('content')
<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="assets/img/logo.png" alt="">
                                <span class="d-none d-lg-block">Gestion d'école</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Demande d'inscription</h5>
                                </div>

                                <form class="row g-3 needs-validation" action="{{ route('register') }}" method="post">
                                    @csrf
                                    <div class="col-12">
                                        <label for="nom" class="form-label">Nom</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="nom" class="form-control" id="nom">
                                            @error('nom')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="prenom" class="form-label">Prénom</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="prenom" class="form-control" id="prenom">
                                            @error('prenom')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="text" name="email" class="form-control" id="yourUsername">
                                            @error('email')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Mot de passe</label>
                                        <input type="password" name="password" class="form-control" id="yourPassword">
                                        @error('password')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Confirmer mot de passe</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            id="yourPassword">
                                    </div>
                                    <div class="col-12"> 
                                        <label class="col-form-label">Niveaux</label>
                                        <select class="form-select" name="niveau_id"
                                            aria-label="Default select example">
                                            <option selected="">Choisir niveaux</option>
                                            @foreach(App\Models\Niveau::all() as $niveau)
                                                <option value="{{ $niveau->id }}">{{ $niveau->label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12"> 
                                        <label class="col-form-label">Spécialités</label>
                                        <select class="form-select" name="specialite_id"
                                            aria-label="Default select example">
                                            <option selected="">Choisir spécialité</option>
                                            @foreach(App\Models\Specialite::all() as $specialite)
                                                <option value="{{ $specialite->id }}">{{ $specialite->label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">S'inscrire</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Avez-vous déjà un compte ? <a
                                                href="{{ url('login') }}">Connecter</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>

                        

                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->

@endsection
