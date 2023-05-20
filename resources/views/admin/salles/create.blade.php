@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Ajouter une salle</h1>

    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <!-- Default Table -->
                        <form action="{{ route('admin.salles.store') }}" method="post">
                            @csrf
                            <div class="row mt-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nom de salle </label>
                                
                                <div class="col-md-6 position-relative">
                                    <input type="text" class="form-control @error('label') input-invalid @enderror" value="{{ old('label') }}" name="label" placeholder="Saisir libéllé de salle" id="validationTooltip03">
                                    @error('label')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Numéro de salle</label>
                                
                                <div class="col-md-6 position-relative">
                                    <input type="text" class="form-control @error('num') input-invalid @enderror" value="{{ old('num') }}" name="num" placeholder="Saisir numéro de salle" id="validationTooltip03">
                                    @error('num')
                                        <div class="invalid-tooltip d-block">
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
