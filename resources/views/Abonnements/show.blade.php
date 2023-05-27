@extends('layouts.master')

@section('content')
<main>
    <section class="breadcrumb-area pt-180 pb-180 pt-md-120 pb-md-120 pt-xs-100 pb-xs-100 bg-fix" data-overlay="black"
        data-opacity="7" data-background="assets/img/bg/breadcrumb-bg-4.jpg"
        style="background-image: url(&quot;assets/img/bg/breadcrumb-bg-4.jpg&quot;);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="breadcrumb-content">
                        <h3 class="title">Détail de l'abonnement {{ $abonnement->label }}</h3>
                        <ul>
                            <li><a href="index.html">Acceuil</a></li>
                            <li class="active">Détail d'un abonnement</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="feature-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="section-title mb-70 mb-xs-50">
                    <h3>Bienvenue à notre activités</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="class-content-area pt-130 pb-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            @foreach($activities as $activity)
                            <div class="col-lg-4 col-md-4">
                                <div class="service-wrap-2 mb-30">
                                    <div class="service-img">
                                        <img src="{{ asset('storage/'.$activity->image) }}" alt="Services">
                                    </div>
                                    <div class="service-content">
                                        <div class="icon">
                                            <i class="flaticon-yoga-2"></i>
                                        </div>
                                        <h3>{{ $activity->label }}</h3>
                                        <p>
                                            {{ substr($activity->description, 0, 30) }}
                                        </p>
                                        <a href="{{ route('activity.show.abonnement',['activity' => $activity]) }}" class="read-more">
                                            <i class="fas fa-angle-double-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                </div>
            </div>
        </div>
    </div>
    <div class="feature-icon-thumb">
        <img src="{{ asset('frontOffice/assets/img/icon/icon-1.png') }}" alt="icon">
    </div>
</div>
{{-- EMPLOI  --}}
<div class="schedule-area pt-130 pb-130">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="section-title-2 bar-theme-color text-center mb-35">
						<h3>
                            L'emploi du temps de l'abonnement {{ $abonnement->label }}
						</h3>
						<span>Emploi</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="schedule-table">
						<table class="table bg-white">
							<thead>
								<tr>
									<th>Jours</th>
									@foreach($jours as $jour)
									<th></th>
									@endforeach
								</tr>
							</thead>
							<tbody>
								@foreach($jours as $jour)
								<tr>
									<td class="day">{{ $jour }}</td>
									@foreach($seances as $seance)
                                        @if($seance->day == $jour)
                                            <td class="active">
                                                <h4>{{ $seance->activity->label }}</h4>
                                                <p>
                                                    {{ $seance->startTime }} - {{ $seance->endTime }}
                                                </p>
                                                <div class="hover">
                                                    <h4>{{ $seance->activity->label }}</h4>
                                                    <p>
                                                        {{ $seance->startTime }} - {{ $seance->endTime }}
                                                    </p>
                                                    <span>
                                                        {{ $seance->user->nom }}
                                                        {{ $seance->user->prenom }}
                                                    </span><br>
                        
                                                    
                                                </div>
                                            </td>
                                        @endif
									@endforeach
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
            <div class="row">
                <div class="col-6 offset-3 text-center">
                    <form action="{{ route('abonnement.paiement.index', ['abonnement' => $abonnement]) }}" method="get">
                        <button class="btn btn-gra mt-2 ">Participer à cette abonnement<i
                                class="far fa-angle-double-right"></i>
                        </button>
                    </form>
                </div>
            </div>
		</div>
	</div>

    

</main>
@endsection