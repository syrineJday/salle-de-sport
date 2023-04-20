@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Modifier un catégorie</h1>

    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Modifier un catégorie </h5>
                        <!-- Default Table -->
                        <form action="{{ route('admin.categories.update', ['category' => $category]) }}" method="post">
                            @csrf
                            @method('put')
                            
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Libéllé </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{ $category->label }}" name="label" placeholder="Saisir libéllé de catégorie">
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
