<!--    header-area start    -->
<header class="header-area">
	<div class="container-fluid">
		<div class="row align-items-center justify-content-xl-center">
			<div class="col-xl-2 col-lg-3 col-md-3 col-6">
				<div class="logo-area">
					<a href="index.html"><img src="{{ asset('frontOffice/assets/img/logo/logo.png') }}" alt="Logo"></a>
				</div>
			</div>
			<div class="col-xl-8 d-xl-flex justify-content-center align-items-center d-none">
				<nav class="main-menu">
					<ul>
						<li class="has-dropdown">
							<a href="/">Accueil</a>
							
						</li>
						<li class="has-dropdown">
							<a href="{{ route('abonnements.index') }}">Abonnements</a>
							
						</li>
						<li class="has-dropdown">
							<a href="{{ route('entraineurs.index') }}">Entraineurs</a>
						</li>
					
						<li class="has-dropdown">
							<a href="{{ route('contact.index') }}">Contact</a>
							
						</li>

                        @guest
                        <li class="has-dropdown">   
							<a href="javascript:void(0)">Mon compte</a>
							<ul class="sub-menu">
								<li><a href="{{ route('login') }}">Se connecter</a></li>
								<li><a href="{{ route('register') }}">S'inscrire</a></li>
							</ul>
						</li>
                        @endif
						
					</ul>
				</nav>
				<div class="main-menu">
					<ul>
						<li>
							<a href="#" class="open-search"><i class="far fa-search"></i></a>
						</li>
                        @if(Auth::check())
						<li class="has-dropdown">
							<img src="{{ asset('frontOffice/assets/img/author/author-1.jpg') }}" alt="">
                            {{ Auth::user()->nom }}
                            {{ Auth::user()->prenom }}
                            <ul class="sub-menu">
								<li><a href="{{ route('login') }}">Mon profile</a></li>
								<li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        <i class="bi bi-box-arrow-right"></i>

                                        {{ __('Déconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
							</ul>
						</li>
                        @endif
					</ul>
				</div>
			</div>
			<div class="col-xl-2 col-lg-9 col-md-9 col-6 d-flex justify-content-end align-items-center">
				<div class="attr-menu d-none d-xl-none d-lg-inline-block d-md-inline-block pr-60">
					<ul>
						<li>
							<a href="#" class="open-search"><i class="far fa-search"></i></a>
						</li>
						<li>
							<a href="#"><i class="far fa-shopping-bag"></i></a>
						</li>
					</ul>
				</div>
				
			</div>
		</div>
	</div>
</header>
<!--    header-area end    -->