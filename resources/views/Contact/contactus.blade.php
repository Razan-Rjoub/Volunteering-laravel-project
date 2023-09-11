@extends('layout.master')
@section('title','Contactus')
	@section('content')
	<div class="hero overlay" style="background-image: url('style/images/donation.jpeg')">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 text-center">
					<h1 class="heading text-white mb-2" data-aos="fade-up">Contact Us</h1>
					<p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">Contact us if you have any questions and we will respond to you as soon as possible</p>
					<p data-aos="fade-up"  data-aos-delay="100">
						<a href="#" class="btn btn-primary me-4">Donate Now</a> 
					</p>		
					
				</div>

				
			</div>
		</div>
	</div>

	<div class="section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-6" data-aos="fade-up">
					<h2 class="heading">Get In Touch</h2>
					<p class="text-black-50">Do you have any questions or comments? We are here to help you! Please feel free to contact us via the following means:
						Or you can fill out the form below and we will respond to your inquiries as soon as possible: We appreciate your communication with us and look forward to serving you with all your inquiries and needs.</p>
				</div>
			</div>

			<form action="{{route('store.contactus')}}" method="post" class="row justify-content-between">
				@csrf
				<div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
					<div class="row">

						<div class="mb-3 col-lg-6">
							<label for="name" class="ps-3 fw-bold mb-2">Name</label>
							<input type="text" class="form-control" id="name" name="name">
						</div>
						<div class="mb-3 col-lg-6">
							<label for="email" class="ps-3 fw-bold mb-2">Email</label>
							<input type="email" class="form-control" id="email" name="email">
						</div>

						<div class="mb-3 col-lg-12">
							<label for="message" class="ps-3 fw-bold mb-2">Message</label>
							<textarea  id="message" class="form-control" cols="30" rows="10" name="message"></textarea>
						</div>	

						<div class="col-lg-6">
							<input type="submit" class="btn btn-primary text-white py-3" value="Send Message">
						</div>

					</div>
				</div>
				<div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="200">
					<div class="row">
						<div class="col-6 col-lg-6 mb-4">
							<h3 class="h6 fw-bold text-secondary">Address</h3>
							<p>jordan.irbid</p>
						</div>
						<div class="col-6 col-lg-6 mb-4">
							<h3 class="h6 fw-bold text-secondary">Phone</h3>
							<p>
								009627999999 <br>
								009627888888
							</p>
						</div>

						{{-- <div class="col-6 col-lg-6 mb-4">
							<h3 class="h6 fw-bold text-secondary">Follow</h3>
							<ul class="list-unstyled social-custom">
								<li><a href="#"><span class="icon-instagram"></span></a></li>
								<li><a href="#"><span class="icon-twitter"></span></a></li>
								<li><a href="#"><span class="icon-facebook"></span></a></li>
								<li><a href="#"><span class="icon-linkedin"></span></a></li>
								<li><a href="#"><span class="icon-pinterest"></span></a></li>
								<li><a href="#"><span class="icon-dribbble"></span></a></li>
							</ul>
						</div> --}}
						<div class="col-6 col-lg-6 mb-4">
							<h3 class="h6 fw-bold text-secondary">Email</h3>
							<p>
								<a href="#">volunteering@mydomain.com</a>
							</p>
						</div>

					</div>
				</div>
				

			</form>
		</div>
	</div>

	<div class="section sec-instagram pb-0">
		<div class="container mb-5">
			<div class="row align-items-center">
				<div class="col-lg-3" data-aos="fade-up">
					<span class="subheading mb-3">Social Media</span>
					<h2 class="heading">We Are In Social Media</h2>
				</div>
				<div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
					<p>
						Social media is one of the main ways to interact with our amazing audience. We are proud to be part of this diverse and engaged digital community. Here is an overview of our social media presence:</p>
				</div>
			</div>
			<div class="col-6 col-lg-6 mb-4">
				<h3 class="h6 fw-bold text-secondary">Follow</h3>
				<ul class="list-unstyled social-custom">
					<li><a href="#"><span class="icon-instagram"></span></a></li>
					<li><a href="#"><span class="icon-twitter"></span></a></li>
					<li><a href="#"><span class="icon-facebook"></span></a></li>
					<li><a href="#"><span class="icon-linkedin"></span></a></li>
					<li><a href="#"><span class="icon-pinterest"></span></a></li>
					<li><a href="#"><span class="icon-dribbble"></span></a></li>
				</ul>
			</div>
		</div>
		
		{{-- <div class="instagram-slider-wrap" data-aos="fade-up" data-aos-delay="200">
			<div class="instagram-slider" id="instagram-slider">

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src="" alt="Image" class="img-fluid">		
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src="" alt="Image" class="img-fluid">		
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src="" alt="Image" class="img-fluid">		
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src="" alt="Image" class="img-fluid">		
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src="" alt="Image" class="img-fluid">		
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src="" alt="Image" class="img-fluid">		
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src="" alt="Image" class="img-fluid">		
					</a>
				</div>


			</div>
		</div> --}}

	</div>

@endsection
