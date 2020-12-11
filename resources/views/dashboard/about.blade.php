@extends('dashboard.master')
@section('body')
<main class="main">
			<div class="page-header page-header-bg">
				<div class="container">
					<h1 class="text-white text-left">About Us</h1>
				</div><!-- End .container -->
			</div><!-- End .page-header -->

			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">About Us</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="about-section">
				<div class="container mb-3">
					<div class="row">
						<div class="col-lg-6 mb-3">
							<h2 class="subtitle text-primary pb-2">OUR HISTORY</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus a eros in venenatis. Cras mauris arcu, suscipit id lacinia sed, pulvinar in urna. Donec urna nisi, efficitur fermentum ullamcorper non, mattis et est. Nullam malesuada leo leo, non tempus turpis accumsan a. Sed tincidunt feugiat purus, sed lobortis justo consequat in. Phasellus lectus magna, accumsan eget felis in, hendrerit malesuada lectus. Duis orci nunc, vulputate vel sapien nec, sodales sollicitudin ligula.</p>
						</div><!-- End .col-lg-6 -->

						<div class="col-lg-6 mb-3">
							<h2 class="subtitle text-primary pb-2">CLIENT REVIEWS</h2>

							<div class="testimonials-slider owl-carousel owl-theme pt-3" data-owl-options="{
								'dots': false
							}">
								<div class="testimonial">
									<div class="testimonial-owner">
										<figure>
											<img src="{{ asset('/public/dashboard-template/images/clients/client1.png') }}"" alt="client">
										</figure>

										<div>
											<h4 class="testimonial-title">john Smith</h4>
											<span>Proto Co Ceo</span>
										</div>
									</div><!-- End .testimonial-owner -->

									<blockquote>
										<p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mipsum dolor sit amet, consectetur elitad adipiscing.</p>
									</blockquote>
								</div><!-- End .testimonial -->

								<div class="testimonial">
									<div class="testimonial-owner">
										<figure>
											<img src="{{ asset('/public/dashboard-template/images/clients/client2.png') }}"" alt="client">
										</figure>

										<div>
											<h4 class="testimonial-title">Bob Smith</h4>
											<span>Proto Co Ceo</span>
										</div>
									</div><!-- End .testimonial-owner -->

									<blockquote>
										<p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mipsum dolor sit amet, consectetur elitad adipiscing.</p>
									</blockquote>
								</div><!-- End .testimonial -->
							</div><!-- End .testimonials-slider -->
						</div><!-- End .col-lg-6 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</div><!-- End .about-section -->


			<div class="company-section">
				<div class="container">
					<div class="row align-items-lg-center">
						<div class="col-lg-6">
							<img src="{{ asset('/public/dashboard-template/images/about/img-1.jpg') }}"" alt="image">
						</div><!-- End .col-lg-6 -->

						<div class="col-lg-6 padding-left-lg">
							<h3 class="subtitle text-primary pb-2">OUR MISSION</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>

							<h3 class="subtitle text-primary pb-2">OUR VISION</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
						</div><!-- End .col-lg-6 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</div><!-- End .company-section -->

			<div class="features-section">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="info-box info-box-icon-left">
								<i class="icon-shipped"></i>

								<div class="info-box-content">
									<h4>FREE SHIPPING</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div><!-- End .info-box-content -->
							</div><!-- End .info-box -->
						</div><!-- End .col-md-4 -->
						
						<div class="col-md-4">
							<div class="info-box info-box-icon-left">
								<i class="icon-us-dollar"></i>

								<div class="info-box-content">
									<h4>100% MONEY BACK GUARANTEE</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div><!-- End .info-box-content -->
							</div><!-- End .info-box -->
						</div><!-- End .col-md-4 -->

						<div class="col-md-4">
							<div class="info-box info-box-icon-left">
								<i class="icon-online-support"></i>

								<div class="info-box-content">
									<h4>ONLINE SUPPORT 24/7</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div><!-- End .info-box-content -->
							</div><!-- End .info-box -->
						</div><!-- End .col-md-4 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</div><!-- End .features-section -->
		</main><!-- End .main -->
        @endsection
