@extends('layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Modifier une niveau</h1>

    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Modifier une niveau </h5>
                        <!-- Default Table -->
                        <form action="{{ route('admin.niveaux.update', ['niveau' => $niveau]) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Titre </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="label" value="{{ $niveau->label }}" placeholder="Saisir titre de niveau">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                    <button type="reset" class="btn btn-light">Annuler</button>
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
