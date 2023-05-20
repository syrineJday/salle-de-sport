@extends('layouts.master')

@section('content')
<main>
    <section class="breadcrumb-area pt-50 pb-50 bg-fix" data-overlay="black"
        data-opacity="7" data-background="assets/img/bg/breadcrumb-bg-4.jpg"
        style="background-image: url(&quot;assets/img/bg/breadcrumb-bg-4.jpg&quot;);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="breadcrumb-content">
                        <h3 class="title">Détail activité</h3>
                        <ul>
                            <li><a href="index.html">Acceuil</a></li>
                            <li class="active">Détail activité</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="class-content-area pt-130 pb-100">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-12 col-lg-12">
					<div class="class-details-content mb-md-50 mb-xs-50">
						
						<h3>{{ $activity->label }}</h3>
						<p>
							{{ $activity->description }}
						</p>
						
						<h3>Nos Entraineurs</h3>
						
						<div class="row">
							
							
                            @if(count($trainers))
                                @foreach($trainers as $trainer)
                                <div class="col-xl-4 col-md-4">
                                    <div class="team-wrap-4 mb-30">
                                        <div class="team-img">
                                            <img src="{{ asset('storage/'.$trainer->photo) }}" alt="img">
                                        </div>
                                        <div class="team-content">
                                            <h3><a href="trainer-details.html">
                                            {{ $trainer->nom }} {{ $trainer->prenom }}    
                                            </a></h3>
                                            <span>{{ $trainer->specialite }}</span>
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
                            @endif
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
    {{-- TRAINER DETAILS --}}
    {{-- @if($trainers->count() > 1)
    <div class="team-area pt-130 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="section-title-2 bar-theme-color mb-25">
                        <h3>
                            Nous avons un membre de l'équipe d'experts qui rencontre notre formateur
                        </h3>
                        <span>Team</span>
                    </div>
                    <div class="row">
                        @foreach($trainers as $trainer)
                        <div class="col-md-4">
                            <div class="team-wrap mb-30">
                                <div class="team-img">
                                    <img src="{{ asset('storage/'.$trainer->photo) }}" alt="Team">
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
                                            <li>
                                                <a href="#"><i class="fab fa-google"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3><a href="trainer-details.html">
                                            {{ $trainer->nom }}
                                            {{ $trainer->prenom }}
                                        </a></h3>
                                    <span>
                                        {{ $trainer->specialite }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="gray-bg"></div>
    </div>
    @else

        @if(count($trainers))
            <section class="trainer-details-area pt-130 pb-130">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-6 col-lg-7 col-md-8">
                            <div class="trainer-details-thumb mb-md-50 mb-xs-50">
                                <img src="{{ asset('storage/'.$trainers->first()->photo) }}" alt="thumb">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5">
                            <div class="trainer-details-content">
                                <h3>
                                    {{ $trainers->first()->nom }}
                                    {{ $trainers->first()->prenom }}
                                </h3>
                                <h4>
                                    {{ $trainers->first()->specialite }}

                                </h4>
                                <p>
                                    {{ $trainers->first()->description }}
                                </p>
                                <div class="trainer-info mt-50 mb-40">
                                    <div class="info-icon">
                                        <i class="flaticon-email"></i>
                                    </div>
                                    <div class="info-content">
                                        <h5>Email us</h5>
                                        <span>{{ $trainers->first()->email }}</span>
                                    </div>
                                </div>
                                <div class="trainer-info mb-40">
                                    <div class="info-icon">
                                        <i class="flaticon-whatsapp"></i>
                                    </div>
                                    <div class="info-content">
                                        <h5>Contact me</h5>
                                        <span class="heading-color">{{ $trainers->first()->numTel }}</span>
                                    </div>
                                </div>
                                <div class="trainer-info">
                                    <div class="info-icon">
                                        <i class="flaticon-pin"></i>
                                    </div>
                                    <div class="info-content">
                                        <h5>Adresse</h5>
                                        <span class="heading-color">{{ $trainers->first()->adresse }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between align-items-center pt-130">
                        <div class="col-xl-5 col-lg-6 col-md-12">
                            <div class="about-content-2 mb-50">
                                <div class="section-title-2 bar-theme-color mb-30">
                                    <h3>A propos l'entraineur</h3>
                                </div>
                                <div class="about-text">
                                    <p>
                                        Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                        ipsam voluptatem quia voluptas sit aspe
                                        rnatur aut odit aut fugit, sed quia consequmagni dolores eos
                                        qui ratione voluptatem sequi nesciunt.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
        @endif
    @endif --}}
    @include('includes.schedule')

</main>
@endsection
