@include("header")
<section class="slider-section">
	<!-- hero slider Start -->
	<div class="banner-wrap">
		<div class="banner-slider">
			<div class="banner-slide">
				<div class="container">
					<div class="row align-items-center">
						<div
							class="col-lg-6 col-md-6 col-sm-12 order-lg-1 order-md-1 order-sm-2">
							<div class="hero-content">
								<p class="text-black fs-5">Together, we’re Stronger !</p>
								<h1 class="fw-medium text-black lh-1">
									Let’s save<br>lives <span id="typed-text" class="text-danger"></span><br>With
									Us
								</h1>
								<p class="m-0 text-black mt-md-3 mt-xs-0">Find and Register to
									give blood or Plasma</p>
								<div class="cta-btn">
									<div class="btn-section mt-md-5 mt-sm-3">
									<?php if(!auth()->check()) {?>	
									<a href="<?= url('register'); ?>" id="slider-btn-1"
											class="btn btn-lg btn-danger me-2 fs-6 mb-4" type="button">Register
											</a>
											<?php }  ?>
											<a href="<?= url('search'); ?>" id="slider-btn-2"
											class="btn btn-lg btn-dark fs-6 mb-4" type="button">Find a
											Donor</a>
									</div>
								</div>
							</div>
						</div>
						<div
							class="col-lg-6 col-md-6 col-sm-12 order-lg-2 order-md-2 order-sm-1">
							<div class="hero-image">
								<img class="float-start w-50"
									src="{{ asset('public/images/slider-img-1.png') }}"
									alt="slider-img"> <img id="zoom" class="float-end w-25 mb-5"
									src="{{ asset('public/images/slider-img-3.png') }}"
									alt="slider-img"> <img class="float-end w-50"
									src="{{ asset('public/images/slider-img-2.png') }}"
									alt="slider-img"> <img id="blood-drop-icon" class="float-start"
									src="{{ asset('public/images/blood-drop-icon.png') }}"
									alt="slider-img">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hero-overlay"></div>
			<!-- hero slide end -->
		</div>
		<div class="shape">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280">
                <path fill="#ffffff" fill-opacity="1">
                  <animate attributeName="d" dur="20000ms"
					repeatCount="indefinite"
					values="M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z; M0,160L48,181.3C96,203,192,245,288,234.7C384,224,480,160,576,133.3C672,107,768,117,864,138.7C960,160,1056,192,1152,197.3C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z; M0,64L48,74.7C96,85,192,107,288,133.3C384,160,480,192,576,170.7C672,149,768,75,864,80C960,85,1056,171,1152,181.3C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z; M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;" />
                </path>
              </svg>
		</div>
	</div>
	<!-- hero slider end -->
</section>
<section id="service-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h2 class="fw-bold text-center display-5" aria-hidden="true">Get a
					Match</h2>
			</div>
		</div>
		<div class="row g-5 pt-4 d-md-flex d-sm-block">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div id="service-item" class="rounded">
					<div class="row pb-5 px-4">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<i class="bi bi-geo-alt mb-4"></i>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12 ps-lg-0">
							<h5>Find a Your Location</h5>
							<p class="mb-0">Lorem Ipsum is simply dummy text of the printing
								and typesetting industry. Lorem Ipsum has been the industry's
								standard dummy text ever since the 1500s, when an unknown
								printer took a galley of type</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div id="service-item" class="rounded">
					<div class="row pb-5 px-4">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<i class="bi bi-person-check mb-4"></i>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12 ps-lg-0">
							<h5>Register</h5>
							<p class="mb-0">Lorem Ipsum is simply dummy text of the printing
								and typesetting industry. Lorem Ipsum has been the industry's
								standard dummy text ever since the 1500s, when an unknown
								printer took a galley of type</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div id="service-item" class="rounded">
					<div class="row pb-5 px-4">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<i class="bi bi-clock mb-4"></i>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12 ps-lg-0">
							<h5>Schedule Donation</h5>
							<p class="mb-0">Lorem Ipsum is simply dummy text of the printing
								and typesetting industry. Lorem Ipsum has been the industry's
								standard dummy text ever since the 1500s, when an unknown
								printer took a galley of type</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div id="service-item" class="rounded">
					<div class="row pb-5 px-4">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<i class="bi bi-heart-pulse mb-4"></i>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12 ps-lg-0">
							<h5>Organize Blood Donation</h5>
							<p class="mb-0">Lorem Ipsum is simply dummy text of the printing
								and typesetting industry. Lorem Ipsum has been the industry's
								standard dummy text ever since the 1500s, when an unknown
								printer took a galley of type</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="how-it-works" class="how-it-works">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-3 col-md-5 col-sm-12">
				<div class="row g-5 pt-5 d-md-flex d-sm-block">
					<div class="col-12">
						<div id="service-item" class="row rounded p-4 align-items-center">
							<div class="col-lg-4 col-md-4 col-sm-3">
								<i class="bi bi-person"></i>
							</div>
							<div class="col-lg-8 col-md-8 col-sm-9 ps-lg-0">
								<h5 class="mb-0">Get requests from near you</h5>
							</div>
						</div>
						<div class="col-12">
							<div id="service-item" class="row rounded p-4 align-items-center">
								<div class="col-lg-4 col-md-4 col-sm-3">
									<i class="bi bi-calendar-check"></i>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-9 ps-lg-0">
									<h5 class="mb-0">Update your availability</h5>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div id="service-item" class="row rounded p-4 align-items-center">
								<div class="col-lg-4 col-md-4 col-sm-3">
									<i class="bi bi-bell"></i>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-9 ps-lg-0">
									<h5 class="mb-0">Requests will be notified</h5>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div id="service-item" class="row rounded p-4 align-items-center">
								<div class="col-lg-4 col-md-4 col-sm-3">
									<i class="bi bi-telephone"></i>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-9 ps-lg-0">
									<h5 class="mb-0">Requests will contact you</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-7 col-sm-12">
				<img src="{{ asset('public/images/how-it-works.png') }}"
					class="w-100 pe-5" alt="BLOODONATION">
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
				<p class="text-uppercase mt-5 lh-1">After you register</p>
				<h1 class="fw-bold display-5 heading-title lh-2 pb-3">How It Works</h1>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random
					text. It has roots in a piece of classical Latin literature from 45
					BC, making it over 2000 years old. Richard McClintock, a Latin
					professor at Hampden-Sydney College in Virginia, looked up one of
					the more obscure Latin words, consectetur, from a Lorem Ipsum
					passage, and going through the cites of the word in classical
					literature</p>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random
					text. It has roots in a piece of classical</p>
					<?php if(!auth()->check()) {?>
				<a href="<?= url('register'); ?>" id="slider-btn-1"
					class="btn btn-lg me-2 fs-6 text-white mt-4" type="button">Register
					</a>
					<?php  }?>
			</div>
		</div>
	</div>
</section>
<section id="testimonials" class="border-0 ">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h1 class="fw-bold display-5 heading-title lh-2 pb-3 text-center">Testimonials</h1>
			</div>
		</div>
	</div>
	<div id="carouselExampleCaptions" class="carousel carousel-dark slide"
		data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide-to="0" class="active" aria-current="true"
				aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner pt-5">
			<div class="container text-center">
				<div class="row">
					<div
						class="col-lg-8 col-md-12 col-sm-12 offset-lg-2 offset-md-0 offset-sm-0">
						<div class="carousel-item active">
							<div
								class="carousel-caption d-md-block position-relative text-center mb-5">
								<img
									src="{{ asset('public/images/smile-2072907_640.png') }}"
									class="d-block m-auto mb-4" width="150" alt="...">
								<h5 class="text-black">
									<i>David Smith</i>
								</h5>
								<p class="text-black">Lorem Ipsum is simply dummy text of the
									printing and typesetting industry. Lorem Ipsum has been the
									industry's standard dummy text ever since the 1500s, when an
									unknown printer took a galley of type and scrambled it to make
									a type specimen book.</p>
							</div>
						</div>
						<div class="carousel-item">
							<div
								class="carousel-caption d-md-block position-relative text-center mb-5">
								<img
									src="{{ asset('public/images/smile-2072907_640.png') }}"
									class="d-block m-auto mb-4" width="150" alt="...">
								<h5 class="text-black">
									<i>David Smith</i>
								</h5>
								<p class="text-black">Lorem Ipsum is simply dummy text of the
									printing and typesetting industry. Lorem Ipsum has been the
									industry's standard dummy text ever since the 1500s, when an
									unknown printer took a galley of type and scrambled it to make
									a type specimen book.</p>
							</div>
						</div>
						<div class="carousel-item">
							<div
								class="carousel-caption d-md-block position-relative text-center mb-5">
								<img
									src="{{ asset('public/images/smile-2072907_640.png') }}"
									class="d-block m-auto mb-4" width="150" alt="...">
								<h5 class="text-black">
									<i>David Smith</i>
								</h5>
								<p class="text-black">Lorem Ipsum is simply dummy text of the
									printing and typesetting industry. Lorem Ipsum has been the
									industry's standard dummy text ever since the 1500s, when an
									unknown printer took a galley of type and scrambled it to make
									a type specimen book.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@include("footer")

