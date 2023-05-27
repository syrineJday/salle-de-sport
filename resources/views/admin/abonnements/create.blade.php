@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Ajouter un abonnement</h1>

    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Ajouter un abonnement </h5>
                        <!-- Default Table -->
                        <form action="{{ route('admin.abonnements.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mt-3">
                                <label for="prix" class="col-sm-2 col-form-label">Activités </label>
                                
                                <div class="col-md-6 position-relative">
                                    <select class="form-select" name="activity_id[]" aria-label="Default select example" multiple>
                                        <option selected="" disabled>Sélectionner des activités</option>
                                        @foreach(App\Models\Activity::all() as $activity)
                                            <option value="{{ $activity->id }}">{{ $activity->label }}</option>
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
                                            <option value="{{ $type }}">{{ $type }}</option>
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
                                <label for="inputText" class="col-sm-2 col-form-label">Titre </label>
                                
                                <div class="col-md-6 position-relative">
                                    <input type="text" class="form-control @error('label') input-invalid @enderror" value="{{ old('label') }}" name="label" placeholder="Saisir titre d'un abonnement" id="validationTooltip03">
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
                                    <input type="text" class="form-control @error('prix') input-invalid @enderror" value="{{ old('prix') }}" name="prix" placeholder="Saisir tarif d'un abonnement" id="validationTooltip03">
                                    @error('prix')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            
                          
                            
                            
                            <div class="row mb-3">
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
