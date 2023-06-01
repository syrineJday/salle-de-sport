@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Accueil</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
    <section class="section profile">
        <div class="row">
            <div class="col">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="{{ asset('storage/'.Auth::user()->photo) }}" alt="Profile" class="rounded-circle">
                        <h2>
                            {{ Auth::user()->nom }}
                            {{ Auth::user()->prenom }}
                        </h2>
                        <h3>{{ Auth::user()->specialite }}</h3>
                        <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">









                        </ul>
                        <div class="tab-content pt-2">



                            <div class="tab-pane fade profile-edit pt-3 active show" id="profile-edit" role="tabpanel">

                                <!-- Profile Edit Form -->
                                <form action="{{ route('entraineur.profile') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="row mb-3">
                                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Image de profile</label>
                                        <div class="col-md-8 col-lg-9">
                                            <img src="{{ asset('storage/'.Auth::user()->photo) }}" alt="Profile">
                                                {{-- <label for="photo">
                                                    <label for="photo" class="btn btn-primary btn-sm"
                                                        title="Upload new profile image"><i class="bi bi-upload"></i></label>
                                                </label> --}}
                                                
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Photo </label>
                                        <div class="col-sm-8">
                                            <input type="file" id="photo" name="photo" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Nom </label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                class="form-control @error('nom') input-invalid @enderror"
                                                value="{{ Auth::user()->nom }}" name="nom"
                                                placeholder="Saisir nom d'un entraineur">
                                            @error('nom')
                                            <p class="mt-2" style="color: #7f2121">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Prenom </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" value="{{ Auth::user()->prenom }}"
                                                name="prenom" placeholder="Saisir prenom d'un entraineur">
                                            @error('prenom')
                                            <p class="mt-2" style="color: #7f2121">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">E-mail </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" value="{{ Auth::user()->email }}"
                                                name="email" placeholder="Saisir email d'un entraineur">
                                            @error('email')
                                            <p class="mt-2" style="color: #7f2121">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Numéro de téléphone
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" value="{{ Auth::user()->numTel }}"
                                                name="numTel" placeholder="Saisir numTel d'un entraineur">
                                            @error('numTel')
                                            <p class="mt-2" style="color: #7f2121">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">CIN </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" value="{{ Auth::user()->cin }}" name="cin"
                                                placeholder="Saisir cin d'un entraineur">
                                            @error('cin')
                                            <p class="mt-2" style="color: #7f2121">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Adresse </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" value="{{ Auth::user()->adresse }}"
                                                name="adresse" placeholder="Saisir adresse d'un entraineur">
                                            @error('adresse')
                                            <p class="mt-2" style="color: #7f2121">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                 








                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Mot de passe
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control"
                                                name="password" placeholder="Modifier mot de passe">
                                            @error('password')
                                            <p class="mt-2" style="color: #7f2121">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->

                            </div>





                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
@endsection
