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
                <div class="feature-slider-1">
                    <div class="row">

                        @foreach(App\Models\Activity::all() as $activity)
                        <div class="col">

                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                style="width: 290px; margin-right: 30px;" data-swiper-slide-index="6">
                                <div class="feature-wrap">
                                    <div class="feature-icon-wrap">
                                        <div class="feature-icon">
                                            <i class="flaticon-gym-3"></i>
                                        </div>
                                    </div>
                                    <div class="feature-details">
                                        <h3>{{ $activity->label }}</h3>
                                        <p>
                                            {{ $activity->description }}
                                        </p>
                                        <a href="{{ route('activities.show', ['activity' => $activity]) }}" class="read-more">
                                            AFFICHER TOUT
                                            <i class="fas fa-angle-double-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
