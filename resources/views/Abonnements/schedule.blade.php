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
                        <h3 class="title">L'emploi du temps</h3>
                        <ul>
                            <li><a href="/">Accueil</a></li>
                            <li class="active">Emploi du temps</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="schedule-area pt-130 pb-130">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="section-title-2 bar-theme-color text-center mb-35">
						<h3>
                            Mon emploi du temps de l'abonnement {{ $abonnement->label }}
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
		</div>
	</div>
    

</main>
@endsection
