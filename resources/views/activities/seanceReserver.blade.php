@extends('layouts.master')

@section('content')
<main>
    <div class="class-content-area pt-130 pb-100">
        <div class="container">
            @if(request()->session()->has('success'))
				<div class="alert alert-success">
					{{ request()->session()->get('success') }}
				</div>
			@endif
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="class-details-content mb-md-50 mb-xs-50">
                        <div class="class-details-thumb mb-50">
                            <img src="{{ asset('storage/'.$seance->activity->image) }}" alt="thumb">
                        </div>
                        <h3>{{ $seance->activity->label }}</h3>
                        <p>
                            {{ $seance->activity->description }}
                        </p>
                      
                        <h3>Nos entraineurs</h3>
                        <div class="row">
                        @foreach(App\Models\User::whereJsonContains('role->ROLE_ENTRAINEUR', true)->get() as $trainer)

                            <div class="col-xl-4 col-md-4">
                                <div class="team-wrap-4 mb-30">
                                    <div class="team-img">
                                        <img src="{{ asset('storage/'.$trainer->photo) }}" alt="img">
                                    </div>
                                    <div class="team-content">
                                        <h3><a href="javascript:void(0)">
                                            {{ $trainer->nom }}    
                                            {{ $trainer->prenom }} 
                                        </a></h3>   
                                        <span>
                                            {{ $trainer->specialite }}

                                        </span>
                                        <div class="team-social-link">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-10">
                    <div class="sidebar-area">
                        <div class="class-widget-wrap mb-60">
                           
                            <h3 class="widget-title">Seance réservé</h3>
                            <div class="class-download-widget">
                                <h2>
                                    Jour: <span style="font-weight: 300">{{ $seance->day }}</span>
                                </h2>
                                
                                <h2>
                                    Heure Début: <span style="font-weight: 300">{{ $seance->startTime }}</span>
                                </h2>
                                <h2>
                                    Heure Fin: <span style="font-weight: 300">{{ $seance->startTime }}</span>
                                </h2>
                                <h2>
                                    Salle: <span style="font-weight: 300">{{ $seance->salle->label }}</span>
                                </h2>
                                <h2>
                                    Prix: <span style="font-weight: 300">{{ $seance->activity->prixSeance }}DT</span>
                                </h2>
                                <form action="{{ route('paiement.index') }}" method="get">
                                    <input type="hidden" value="{{$seance->id}}" name="seance_id">
                                    <label for="date">Date</label>
                                    <input type="date" name="date" id="date" class="form-control">
                                    @if(count($errors) > 0)
                                        @foreach ($errors->all() as $error)
                                            <p class="invalid-feedback d-block">{{ $error }}</p>
                                        @endforeach
                                    @endif
                                    <button class="btn btn-gra mt-2 ">Procéder au paiement<i
                                            class="far fa-angle-double-right"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
