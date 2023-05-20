@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Ajouter une séance</h1>

    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <!-- Default Table -->
                        <form action="{{ route('admin.seances.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mt-3">
                                <label for="prix" class="col-sm-2 col-form-label">Entraineur de base </label>
                                
                                <div class="col-md-6 position-relative">
                                    <select class="form-select" name="user_id" aria-label="Default select example">
                                        <option selected="" disabled>Sélectionner un entraineur</option>
                                        @foreach(App\Models\User::whereJsonContains('role->ROLE_ENTRAINEUR', true)->get() as $user)
                                            <option value="{{ $user->id }}">{{ $user->nom }}{{ $user->prenom }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="prix" class="col-sm-2 col-form-label">Entraineur remplacent </label>
                                
                                <div class="col-md-6 position-relative">
                                    <select class="form-select" name="entraineur_id" aria-label="Default select example">
                                        <option selected="" disabled>Sélectionner un entraineur</option>
                                        @foreach(App\Models\User::whereJsonContains('role->ROLE_ENTRAINEUR', true)->get() as $user)
                                            <option value="{{ $user->id }}">{{ $user->nom }} {{ $user->prenom }}</option>
                                        @endforeach
                                    </select>
                                    @error('entraineur_id')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="prix" class="col-sm-2 col-form-label">Numéro de salle </label>
                                
                                <div class="col-md-6 position-relative">
                                    <select class="form-select" name="salle_id" aria-label="Default select example">
                                        <option selected="" disabled>Sélectionner une salle</option>
                                        @foreach(App\Models\Salle::all() as $salle)
                                            <option value="{{ $salle->id }}">
                                                 {{ $salle->label }} : {{ $salle->num }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('salle_id')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="activity_id" class="col-sm-2 col-form-label">Activité </label>
                                
                                <div class="col-md-6 position-relative">
                                    <select class="form-select" id="activity_id" name="activity_id" aria-label="Default select example">
                                        <option selected="" disabled>Sélectionner une activité</option>
                                        @foreach(App\Models\Activity::all() as $activité)
                                            <option value="{{ $activité->id }}">{{ $activité->label }}</option>
                                        @endforeach
                                    </select>
                                    @error('activity_id')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="prix" class="col-sm-2 col-form-label">Jours </label>
                                
                                <div class="col-md-6 position-relative">
                                    <select class="form-select" name="day" aria-label="Default select example">
                                        <option selected="" disabled>Sélectionner un jour</option>
                                        <option value="lundi">lundi</option>
                                        <option value="mardi">mardi</option>
                                        <option value="mercredi">mercredi</option>
                                        <option value="jeudi">jeudi</option>
                                        <option value="vendredi">vendredi</option>
                                        <option value="samedi">samedi</option>
                                        <option value="dimanche">dimanche</option>
                                        
                                    </select>
                                    @error('day')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="startTime" class="col-sm-2 col-form-label">Temps début </label>
                                
                                <div class="col-md-6 position-relative">
                                    <input type="time" class="form-control @error('startTime') input-invalid @enderror" value="{{ old('startTime') }}" name="startTime" id="startTime">
                                    @error('startTime')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="endTime" class="col-sm-2 col-form-label">Temps fin </label>
                                
                                <div class="col-md-6 position-relative">
                                    <input type="time" class="form-control @error('endTime') input-invalid @enderror" value="{{ old('endTime') }}" name="endTime"  id="endTime">
                                    @error('endTime')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                          
                            
                            <div class="row mt-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">ajouter</button>
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
