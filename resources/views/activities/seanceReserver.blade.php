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
                        <h4>{{ $seance->activity->label }}</h4>
                        <p>
                            {{ $seance->activity->description }}
                        </p>
                      
                        <h3>L'entraineur de séance</h3>
                        <div class="row">

                            <div class="col-xl-4 col-md-4">
                                <div class="team-wrap-4 mb-30">
                                    <div class="team-img">
                                        <img src="{{ asset('storage/'.$seance->user->photo) }}" alt="img">
                                    </div>
                                    <div class="team-content">
                                        <h3><a href="javascript:void(0)">
                                            {{ $seance->user->nom }}    
                                            {{ $seance->user->prenom }} 
                                        </a></h3>   
                                        <span>
                                            {{ $seance->user->specialite }}

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

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-10">
                    <div class="sidebar-area">
                        <div class="class-widget-wrap mb-60">
                           
                            <h3 class="widget-title">Seance réservé</h3>
                            <div class="class-download-widget">
                                <h4>
                                    Jour: <span style="font-weight: 300">{{ $seance->day }}</span>
                                </h4>
                                
                                <h4>
                                    Heure Début: <span style="font-weight: 300">{{ $seance->startTime }}</span>
                                </h4>
                                <h4>
                                    Heure Fin: <span style="font-weight: 300">{{ $seance->endTime }}</span>
                                </h4>
                                <h4>
                                    Salle: <span style="font-weight: 300">
                                        {{ $seance->salle->label }}, 
                                        {{ $seance->salle->num }}
                                    </span>
                                </h4>
                                <h4>
                                    Prix: <span style="font-weight: 300">{{ $seance->activity->prixSeance }}DT</span>
                                </h4>
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
