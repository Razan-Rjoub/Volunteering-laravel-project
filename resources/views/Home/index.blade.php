
@extends('layout.master')
@section('title','Home')
	@section('content')
		
	

	@include('Home.hero')


	@include('Home.ourvision')

	@include('Home.Categories')

	@include('Home.aboutus')

	

	@include('Home.Projects')
	<div class="section flip-section secondary-bg" style="background-image: url('style/images/img_v_4-min.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 mx-auto text-center">
					<span class="subheading-white mb-3 text-white" data-aos="fade-up">Help Now</span>
					<h3 class="mb-4 heading text-white" data-aos="fade-up">Let's Help The Unfortunate People </h3>
					<a href="service" class="btn btn-outline-white me-3" data-aos="fade-up" data-aos-delay="100">Become a Volunteer</a> <a href="donation" class="btn btn-outline-white" data-aos="fade-up" data-aos-delay="200">Donate Now</a>
				</div>		
			</div>		
		</div>		
	</div>


	<div class="section bg-light">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5" data-aos="fade-up">
					<span class="subheading mb-3">Impact</span>
					<h2 class="heading mb-4">Explore Volunteer work and Impact in 2025</h2>
					<p>As we look ahead to 2025, the future of our mission is brighter than ever. We envision a year filled with even greater volunteer-driven impact. Our volunteers will continue to be the heart and soul of our organization, driving positive change and transforming lives.</p>
				</div>		
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
					<div class="row section-counter">
						<div class="col-lg-6">
							<div class="counter">
								<i class="flaticon-social-services d-block text-secondary"></i>
								
								<span class="number countup">1000</span>
								<span class="d-block">New Causes</span>
							</div>

							<div class="counter">
								<i class="flaticon-charity-money d-block text-secondary"></i>
								<span class="number">$<span class="countup">1</span>M</span>
								<span class="d-block">Fund Raised</span>
							</div>

						</div>
						<div class="col-lg-6">
							<div class="counter mt-5">
								<i class="flaticon-money-donation d-block text-secondary"></i>
								<span class="number countup">1000</span>
								<span class="d-block">Donors</span>
							</div>

							<div class="counter">
								<i class="flaticon-organs-donation d-block text-secondary"></i>
								<span class="number countup">100</span>
								<span class="d-block">Volunteers</span>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>		
	</div>

	<!-- <div class="section bg-light pt-0">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-lg-5 mb-5" data-aos="fade-up">
					<span class="subheading mb-1">News Update</span>
					<h2 class="heading mb-1">Our News</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta labore eligendi tempora laudantium voluptate, amet ad libero facilis nihil officiis.</p>
				</div>		
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="causes-item bg-white">
						<a href="#"><img src="style/images/img_v_1-min.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
						<div class="px-4 pb-3 pt-3">
							<span class="date">May 11, 2020</span>
							<h3><a href="#">Food for the Hungry</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta labore eligendi tempora laudantium voluptate, amet ad libero facilis nihil officiis.</p>
							<p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span class="icon-chevron-right"></span></a></p>

							
						</div>
					</div>
				</div>		
				<div class="col-lg-4 col-md-6">
					<div class="causes-item bg-white">
						<a href="#"><img src="style/images/img_v_2-min.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
						<div class="px-4 pb-3 pt-3">
							<span class="date">May 11, 2020</span>
							<h3><a href="#">Education for Children</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta labore eligendi tempora laudantium voluptate, amet ad libero facilis nihil officiis.</p>
							<p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span class="icon-chevron-right"></span></a></p>
							
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="causes-item bg-white">
						<a href="#"><img src="style/images/img_v_3-min.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
						<span class="date">May 11, 2020</span>
						<div class="px-4 pb-3 pt-3">
							<h3><a href="#">Support Livelihood</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta labore eligendi tempora laudantium voluptate, amet ad libero facilis nihil officiis.</p>
							<p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span class="icon-chevron-right"></span></a></p>
							
						</div>
					</div>
				</div>

				

			</div>	

			
		</div>		
	</div> -->
	<div class="instagram-slider-wrap" data-aos="fade-up" data-aos-delay="200">
			<div class="instagram-slider" id="instagram-slider">

				<div class="item">
					<a class="instagram-item">
						<img src="style/images/about.png" alt="Image" class="img-fluid">		
					</a>
				</div>

				<div class="item">
					<a class="instagram-item"> 
						<img src="style/images/about22.png"  alt="Image" class="img-fluid">		
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<img src="style/images/about3.png" alt="Image" class="img-fluid">		
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<img src="style/images/about4.png" alt="Image" class="img-fluid">		
					</a>
				</div>

			

				<div class="item">
					<a class="instagram-item">
						<img src="style/images/about6.png" alt="Image" class="img-fluid">		
					</a>
				</div>
				<div class="item">
					<a class="instagram-item">
						<img src="style/images/uni.png" alt="Image" class="img-fluid">		
					</a>
				</div>

				
			</div>
		</div>

	@endsection