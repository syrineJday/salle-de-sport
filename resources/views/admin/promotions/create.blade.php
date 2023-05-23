@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Ajouter un promotion</h1>

    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <!-- Default Table -->
                        <form action="{{ route('admin.promotions.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mt-3">
                                <label for="prix" class="col-sm-2 col-form-label">Abonnements </label>
                                
                                <div class="col-md-6 position-relative">
                                    <select class="form-select" name="abonnement_id" aria-label="Default select example">
                                        <option selected="" disabled>Sélectionner un abonnement</option>
                                        @foreach(App\Models\Abonnement::all() as $abonnement)
                                            <option value="{{ $abonnement->id }}">
                                                {{ $abonnement->label }}:  {{ $abonnement->prix }}DT

                                            </option>
                                        @endforeach
                                    </select>
                                    @error('abonnement_id')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Date fin </label>
                                
                                <div class="col-md-6 position-relative">
                                    <input type="date" class="form-control @error('dateFin') input-invalid @enderror" value="{{ old('dateFin') }}" name="dateFin" id="validationTooltip03">
                                    @error('dateFin')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nouveau prix </label>
                                
                                <div class="col-md-6 position-relative">
                                    <input type="text" class="form-control @error('prix') input-invalid @enderror" value="{{ old('prix') }}" name="prix" placeholder="Saisir nouveau prix d'abonnement" id="validationTooltip03">
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
