@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Modifier un abonnement</h1>

    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Modifier un abonnement </h5>
                        <!-- Default Table -->
                        <form action="{{ route('admin.abonnements.update', ['abonnement' => $abonnement]) }}" method="post" enctype="multipart/form-data">
                            @csrf 
                            @method('put')

                            <div class="row mt-3">
                                <label for="prix" class="col-sm-2 col-form-label">Activités </label>
                                
                                <div class="col-md-6 position-relative">
                                    
                                    <select class="form-select" name="activity_id[]" aria-label="Default select example" multiple>
                                        <option selected="" disabled>Sélectionner des activités</option>
                                        @foreach(App\Models\Activity::all() as $activity)
                                            <option value="{{ $activity->id }}" @if(in_array($activity->id, $activitiesID, true)) selected @endif>{{ $activity->label }}</option>
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
                                <label for="prix" class="col-sm-2 col-form-label">Periode </label>
                                
                                <div class="col-md-6 position-relative">
                                    <select class="form-select" name="type" aria-label="Default select example">
                                        <option selected="" disabled>Sélectionner un periode</option>
                                        @foreach($types as $type)
                                            <option value="{{ $type }}" @if($abonnement->type == $type) selected @endif>{{ $type }}</option>
                                        @endforeach
                                    </select>
                                    @error('type')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Libéllé </label>
                                
                                <div class="col-md-6 position-relative">
                                    <input type="text" class="form-control @error('label') input-invalid @enderror" value="{{ $abonnement->label }}" name="label" placeholder="Saisir libéllé d'activité" id="validationTooltip03">
                                    @error('label')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="prix" class="col-sm-2 col-form-label">Tarif </label>
                                
                                <div class="col-md-6 position-relative">
                                    <input type="number" class="form-control @error('prix') input-invalid @enderror" value="{{ $abonnement->prix }}" name="prix" placeholder="Saisir tarif d'activité" id="validationTooltip03">
                                    @error('prix')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
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
