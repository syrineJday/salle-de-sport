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
                        <h3 class="title">Abonnements</h3>
                        <ul>
                            <li><a href="index.html">Accueil</a></li>
                            <li class="active">Abonnements</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="pricing-area bg-off-white pt-130 pb-100">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-12">
                    <div class="section-title-2 bar-theme-color text-center mb-35">
                        <h3>
                            Nous fournissons un plan de tarification confortable pour nos clients satisfaits
                        </h3>
                        <span>Tarification</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7">
                    <div class="pricing-wrap mt-30 mb-30">
                        <h3>Basic</h3>
                        <p>
                            Bobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
                            possimus, omnis volup tas assumenda est omnis dess
                        </p>
                        <span class="price">$45.99</span>
                        <a href="pricing.html" class="order-btn">
                            select plan <i class="fas fa-angle-double-right"></i>
                        </a>
                        <div class="shape">
                            <img src="{{ asset('frontOffice/assets/img/shape/shape-11.png') }}" alt="shape">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="pricing-wrap popular mt-50 mb-30">
                        <div class="popular-badge">
                            <span>Most Popular</span>
                        </div>
                        <h3>Standard</h3>
                        <p>
                            Procure him some great pleasure. To take a trivial example, which of us ever undertakes
                            laborious physical exercise, except to obtain some ad
                        </p>
                        <span class="price">$99.99</span>
                        <a href="pricing.html" class="order-btn">
                            select plan <i class="fas fa-angle-double-right"></i>
                        </a>
                        <div class="shape">
                            <img src="{{ asset('frontOffice/assets/img/shape/shape-11.png') }}" alt="shape">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="pricing-wrap mt-30 mb-30">
                        <h3>Premium</h3>
                        <p>
                            Bobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
                            possimus, omnis volup tas assumenda est omnis dess
                        </p>
                        <span class="price">$99.99</span>
                        <a href="pricing.html" class="order-btn">
                            select plan <i class="fas fa-angle-double-right"></i>
                        </a>
                        <div class="shape">
                            <img src="{{ asset('frontOffice/assets/img/shape/shape-11.png') }}" alt="shape">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
