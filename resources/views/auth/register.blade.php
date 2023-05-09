@extends('layouts.master')

@section('content')
<main>
    <section class="breadcrumb-area pt-180 pb-180 pt-md-120 pb-md-120 pt-xs-100 pb-xs-100 bg-fix" data-overlay="black"
        data-opacity="7" data-background="{{ asset('frontOffice/assets/img/bg/breadcrumb-bg-4.jpg') }}"
        style="background-image: url(&quot;{{ asset('assets/frontOffice/img/bg/breadcrumb-bg-4.jpg')}}&quot;);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="breadcrumb-content">
                        <h3 class="title">S'inscrire</h3>
                        <ul>
                            <li><a href="index.html">Accueil</a></li>
                            <li class="active">S'inscrire</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="contact-area pt-130 pb-130">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-6 col-lg-5">
					<div class="contact-text mb-xs-50">
						<div class="section-title-2 text-right bar-theme-color contact-title">
							<h3>Inscrivez-vous à travers ce formulaire</h3>
							<span>Hey</span>
						</div>
						
						
						
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="contact-form">
						<form action="{{ route('register') }}" method="post">
                            @csrf 
                          
							<div class="input-wrap input-icon icon-name">
								<input type="text" placeholder="Nom" name="nom">
                                @error('nom')
                                    <p>{{ $message }}</p>
                                @enderror
							</div>
							<div class="input-wrap input-icon icon-name">
								<input type="text" placeholder="Prénom" name="prenom">
                                @error('prenom')
                                    <p>{{ $message }}</p>
                                @enderror
							</div>
							<div class="input-wrap input-icon icon-name">
								<input type="number" placeholder="Numéro de téléphone" name="numTel">
                                @error('numTel')
                                    <p>{{ $message }}</p>
                                @enderror
							</div>
							<div class="input-wrap input-icon icon-name">
								<input type="number" placeholder="Numéro mobile" name="numMobile">
                                @error('numMobile')
                                    <p>{{ $message }}</p>
                                @enderror
							</div>
							<div class="input-wrap input-icon icon-name">
								<input type="number" placeholder="Carte d'identité national" name="cin">
                                @error('cin')
                                    <p>{{ $message }}</p>
                                @enderror
							</div>
							<div class="input-wrap input-icon icon-name">
								<input type="text" placeholder="Adresse" name="adresse">
                                @error('adresse')
                                    <p>{{ $message }}</p>
                                @enderror
							</div>
							<div class="input-wrap input-icon icon-name">
								<input type="date" placeholder="Date de naissance" name="date_naissance">
                                @error('date_naissance')
                                    <p>{{ $message }}</p>
                                @enderror
							</div>
							<div class="input-wrap input-icon icon-name">
								<input type="text" placeholder="E-mail adresse" name="email">
                                @error('email')
                                    <p>{{ $message }}</p>
                                @enderror
							</div>
							<div class="input-wrap input-icon icon-email">
								<input type="text" placeholder="Mot de passe" name="password">
                                @error('password')
                                    <p>{{ $message }}</p>
                                @enderror
							</div>
							<div class="input-wrap input-icon icon-email">
								<input type="text" placeholder="Confirmer mot de passe" name="password_confirmation">
							</div>
							
							
							<button type="submit" class="btn btn-gra">Connecter<i class="fas fa-angle-double-right"></i>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection
