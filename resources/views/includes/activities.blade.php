<div class="feature-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="section-title mb-70 mb-xs-50">
                    <h3>Bienvenue à nos activités</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="class-content-area pt-130 pb-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            @foreach(App\Models\Activity::all() as $activity)
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
                                        <a href="{{ route('activities.show',['activity' => $activity]) }}" class="read-more">
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
