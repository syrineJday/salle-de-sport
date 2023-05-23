@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Liste des promotions</h1>
        <a href="{{ route('admin.promotions.create') }}">
            <button class="btn-delete">
                <i class="fa fa-plus"></i>
            </button>
        </a>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Date fin</th>
                                    <th scope="col">Abonnement</th>
                                    <th scope="col">Tarif abonnement</th>
                                    <th scope="col">Nouveau tarif</th>
                                    <th scope="col">Expiré</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($promotions as $promotion)
                                    <tr>
                                        <td>{{ $promotion->id }}</td>
                                        <td>{{ $promotion->dateFin }}</td>
                                        <td>{{ $promotion->abonnement->label }}</td>
                                        <td>{{ $promotion->abonnement->prix }}</td>
                                        <td>{{ $promotion->prix }}</td>
                                        <td>
                                            @if($promotion->deleted_at != null)
                                                oui
                                            @else 
                                                non
                                            @endif
                                        </td>
                                        <td>
                                            @if($promotion->deleted_at == null)

                                                <div class="d-flex justify-content-around">
                                                    <button type="submit" class="btn-delete delete-confirm" data-model="promotion" title="Supprimer un promotion" data-url="{{ route('admin.promotions.destroy', ['promotion' => $promotion]) }}" >
                                                        <i class="fa fa-trash" ></i>
                                                    </button>
                                                    <a href="{{ route('admin.promotions.edit', ['promotion' => $promotion]) }}" data-model="promotion" title="Modifier un promotion" class="edit-confirm btn-edit">
                                                        <i class="fa fa-pen"></i>
                                                    </a>
                                                </div>                                                
                                            @else 
                                                <button type="submit" class="btn-delete delete-confirm" data-model="promotion" title="Supprimer un promotion" data-url="{{ route('admin.promotions.forceDelete', ['promotion' => $promotion]) }}" >
                                                    <i class="fa fa-trash" ></i>
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $promotions->links() }}
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>

        </div>
    </section>

</main>
@endsection
