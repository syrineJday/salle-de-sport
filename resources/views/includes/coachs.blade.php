<div class="team-area pt-130 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-title-2 bar-theme-color mb-25">
                    <h3>
                        Nous avons un membre de l'équipe d'experts qui rencontre notre formateur
                    </h3>
                    <span>Team</span>
                </div>
                <div class="row">
                    @foreach(App\Models\User::whereJsonContains('role->ROLE_ENTRAINEUR', true)->paginate(10) as $trainer)
                        <div class="col-md-4">
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
                </div>
            </div>
        </div>
    </div>
    <div class="gray-bg"></div>
</div>
