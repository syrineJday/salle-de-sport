@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Modifier une séance</h1>

    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Modifier une séance </h5>
                        <!-- Default Table -->
                        <form action="{{ route('admin.seances.update', ['seance' => $seance]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row mt-3">
                                <label for="prix" class="col-sm-2 col-form-label">Entraineur de base </label>
                                
                                <div class="col-md-6 position-relative">
                                    <select class="form-select" name="user_id" aria-label="Default select example">
                                        <option selected="" disabled>Sélectionner un entraineur</option>
                                        @foreach(App\Models\User::whereJsonContains('role->ROLE_ENTRAINEUR', true)->get() as $user)
                                            <option value="{{ $user->id }}" @if($user->id == $seance->user->id) selected @endif>{{ $user->nom }}{{ $user->prenom }}</option>
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
                                            <option value="{{ $user->id }}"  @if($user->id == $seance->entraineur->id) selected @endif>{{ $user->nom }}{{ $user->prenom }}</option>
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
                                <label for="prix" class="col-sm-2 col-form-label">Salle </label>
                                
                                <div class="col-md-6 position-relative">
                                    <select class="form-select" name="salle_id" aria-label="Default select example">
                                        <option selected="" disabled>Sélectionner une salle</option>
                                        @foreach(App\Models\Salle::all() as $salle)
                                            <option value="{{ $salle->id }}" @if($salle->id == $seance->salle->id) selected @endif>{{ $salle->label }}</option>
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
                                            <option value="{{ $activité->id }}" @if($activité->id == $seance->activity->id) selected @endif>{{ $activité->label }}</option>
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
                                        <option value="lundi" @if($seance->day == "lundi") selected @endif>lundi</option>
                                        <option value="mardi" @if($seance->day == "mardi") selected @endif>mardi</option>
                                        <option value="mercredi" @if($seance->day == "mercredi") selected @endif>mercredi</option>
                                        <option value="jeudi" @if($seance->day == "jeudi") selected @endif>jeudi</option>
                                        <option value="vendredi" @if($seance->day == "vendredi") selected @endif>vendredi</option>
                                        <option value="samedi" @if($seance->day == "samedi") selected @endif>samedi</option>
                                        <option value="dimanche" @if($seance->day == "dimanche") selected @endif>dimanche</option>
                                        
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
                                    <input type="time-local" class="form-control @error('startTime') input-invalid @enderror" value="{{ $seance->startTime }}" name="startTime" id="startTime">
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
                                    <input type="time-local" class="form-control @error('endTime') input-invalid @enderror" value="{{ $seance->endTime }}" name="endTime"  id="endTime">
                                    @error('endTime')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                          
                            
                            <div class="row mt-3">
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
