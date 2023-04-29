@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Modifier une salle</h1>

    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Modifier une salle </h5>
                        <!-- Default Table -->
                        <form action="{{ route('admin.salles.update', ['salle' => $salle]) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row mt-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Libéllé </label>
                                
                                <div class="col-md-6 position-relative">
                                    <input type="text" class="form-control @error('label') input-invalid @enderror" value="{{ $salle->label }}" name="label" placeholder="Saisir libéllé de salle" id="validationTooltip03">
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
                                    <input type="text" class="form-control @error('num') input-invalid @enderror" value="{{ $salle->num }}" name="num" placeholder="Saisir numéro de salle" id="validationTooltip03">
                                    @error('num')
                                        <div class="invalid-tooltip d-block">
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
