@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Ajouter un activité</h1>

    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Ajouter un activité </h5>
                        <!-- Default Table -->
                        <form action="{{ route('admin.activities.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                              <div class="row mt-3">
                                <label for="prix" class="col-sm-2 col-form-label">Catégories </label>
                                
                                <div class="col-md-6 position-relative">
                                    <select class="form-select" name="category_id" aria-label="Default select example">
                                        <option selected="" disabled>Sélectionner un catégorie</option>
                                        @foreach(App\Models\Category::all() as $category)
                                            <option value="{{ $category->id }}">{{ $category->label }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Libéllé </label>
                                
                                <div class="col-md-6 position-relative">
                                    <input type="text" class="form-control @error('label') input-invalid @enderror" value="{{ old('label') }}" name="label" placeholder="Saisir libéllé d'activité" id="validationTooltip03">
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
                                    <input type="number" class="form-control @error('prix') input-invalid @enderror" value="{{ old('prix') }}" name="prix" placeholder="Saisir tarif d'activité" id="validationTooltip03">
                                    @error('prix')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="prix" class="col-sm-2 col-form-label">Description </label>
                                
                                <div class="col-md-6 position-relative">
                                    <textarea class="form-control @error('description') input-invalid @enderror" name="description" placeholder="Saisir description pour l'activité" id="floatingTextarea" style="height: 100px;"></textarea>
                                    @error('description')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-md-6">
                                    <input class="form-control @error('image') input-invalid @enderror" name="image" type="file" id="formFile">
                                </div>
                                @error('image')
                                    <div class="invalid-tooltip  d-block ">
                                        {{ $message }}
                                    </div>
                                @enderror
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
