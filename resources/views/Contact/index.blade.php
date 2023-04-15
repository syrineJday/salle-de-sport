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
                        <h3 class="title">Contact Us</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact Us</li>
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
							<h3>N'hésitez pas à nous contacter ou à nous envoyer un e-mail</h3>
							<span>Salut</span>
						</div>
						<div class="contact-info justify-content-end">
							<div class="info-content">
								<h4>Contact me</h4>
								<span>+012 (345) 6789</span>
							</div>
							<div class="icon-box">
								<i class="flaticon-whatsapp"></i>
							</div>
						</div>
						<div class="contact-info justify-content-end">
							<div class="info-content">
								<h4>Email us</h4>
								<span>suport@gmail.com</span>
							</div>
							<div class="icon-box">
								<i class="flaticon-email"></i>
							</div>
						</div>
						<div class="contact-info justify-content-end">
							<div class="info-content">
								<h4>Location</h4>
								<span>670 New Road, USA</span>
							</div>
							<div class="icon-box">
								<i class="flaticon-pin"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="contact-form">
						<form action="#">
							<div class="input-wrap input-icon icon-name">
								<input type="text" placeholder="Full Name Here">
							</div>
							<div class="input-wrap input-icon icon-email">
								<input type="text" placeholder="Email Address">
							</div>
							<div class="input-wrap input-icon icon-select">
								<select name="" id="">
									<option value="">Subject</option>
									<option value="">Web</option>
									<option value="">UX/UI</option>
								</select>
							</div>
							<div class="input-wrap input-icon icon-msg">
								<textarea rows="5" placeholder="Write Message" spellcheck="false"></textarea>
							</div>
							<button type="submit" class="btn btn-gra">
								Send message <i class="fas fa-angle-double-right"></i>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</main>
@endsection
