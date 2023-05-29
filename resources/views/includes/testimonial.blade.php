<!-- testimonial-area start -->
	<div class="testimonial-area pt-130 pb-130" data-background="{{ asset('frontOffice/assets/img/bg/testimonial-bg-2.jpg') }}" data-overlay="dark"
	     data-opacity="4">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="section-title-2 text-white bar-theme-color mb-35">
						<h3>
							Ce que nos clients disent de nos services
						</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-6 col-lg-8 col-md-10">
					<div class="testimonial-slider">
						<div class="swiper-container">
							<div class="swiper-wrapper">
                                @foreach(App\Models\Avi::take(5)->orderBy('created_at', 'desc')->get() as $avis)
								<div class="swiper-slide single-slide">
									<div class="testimonial-wrap">
										<div class="author-info">
											<img src="{{ asset('storage/'.$avis->user->photo) }}" alt="author">
											<div class="author-content">
												<h4>
                                                    {{ $avis->user->nom }}
                                                    {{ $avis->user->prenom }}
                                                </h4>
											</div>
										</div>
										<div class="testimonial-content">
											<p>
                                                {{ $avis->content }}
                                            </p>
										</div>
										<div class="testimonial-icon">
											<i class="fab fa-twitter"></i>
										</div>
									</div>
								</div>
                                @endforeach
								
							</div>
						</div>
						<!-- If we need navigation buttons -->
						<div class="swiper-button-prev"><i class="far fa-angle-double-left"></i></div>
						<div class="swiper-button-next"><i class="far fa-angle-double-right"></i></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- testimonial-area end -->