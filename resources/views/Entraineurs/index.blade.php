@extends('layouts.master')

@section('content')
<main>
    <section class="breadcrumb-area pt-180 pb-180 pt-md-120 pb-md-120 pt-xs-100 pb-xs-100 bg-fix" data-overlay="black"
        data-opacity="7" data-background="{{ asset('frontOffice/assets/img/bg/breadcrumb-bg-3') }}.jpg"
        style="background-image: url(&quot;{{ asset('frontOffice/assets/img/bg/breadcrumb-bg-3') }}.jpg&quot;);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="breadcrumb-content">
                        <h3 class="title">Nos Entraineurs</h3>
                        <ul>
                            <li><a href="index.html">Accueil</a></li>
                            <li class="active">Nos Entraineurs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="team-area-2 bg-off-white pt-130 pb-130">
		<div class="container">
			<div class="row align-items-center mb-60">
				<div class="col-xl-9">
					<div class="section-title-2 bar-theme-color team-title-2">
						<h3>Nous avons un membre de l'équipe d'experts qui rencontre notre formateur</h3>
						<span>équipe</span>
					</div>
				</div>
				<div class="col-xl-3 col-xl-3 text-xl-right text-lg-right text-center">
					<a href="trainer.html" class="btn btn-gra">
						LEARN MORE <i class="fas fa-angle-double-right"></i>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 col-md-6">
					<div class="team-wrap-2 mb-30">
						<div class="team-img">
							<img src="{{ asset('frontOffice/assets/img/team/team.jpg') }}" alt="Team">
						</div>
						<div class="team-content">
							<h3><a href="trainer-details.html">Howard C. Skinner</a></h3>
							<span>Dumbbell Trainer</span>
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
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="team-wrap-2 mb-30">
						<div class="team-img">
							<img src="{{ asset('frontOffice/assets/img/team/team-2.jpg') }}" alt="img">
						</div>
						<div class="team-content">
							<h3><a href="trainer-details.html">Raymond L. Brown</a></h3>
							<span>Boxing Trainer</span>
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
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="team-wrap-2 mb-30">
						<div class="team-img">
							<img src="{{ asset('frontOffice/assets/img/team/team-3.jpg') }}" alt="">
						</div>
						<div class="team-content">
							<h3><a href="trainer-details.html">Charles T. McAllister</a></h3>
							<span>Caradio Trainer</span>
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
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="team-wrap-2 mb-30">
						<div class="team-img">
							<img src="{{ asset('frontOffice/assets/img/team/team-4.jpg') }}" alt="">
						</div>
						<div class="team-content">
							<h3><a href="trainer-details.html">Solomon K. Sawyers</a></h3>
							<span>Beauty Trainer</span>
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
					</div>
				</div>
			</div>
		</div>
		<div class="team-shape-1">
			<img src="{{ asset('frontOffice/assets/img/shape/shape-17.png') }}" alt="shape">
		</div>
		<div class="team-shape-2">
			<img src="{{ asset('frontOffice/assets/img/shape/shape-18.png') }}" alt="shape">
		</div>
	</div>

</main>
@endsection
