@extends('layout.master')
@section('title','services')
	@section('content')

    <div class="hero overlay" style="background-image: url('style/images/donation2.jpeg')"> 
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 text-center">
					<h1 class="heading text-white mb-2" data-aos="fade-up">Service</h1>
					<p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">If you have a heart to help people and a passion for making a positive impact, join us as a volunteer and put your skills and knowledge to good use.</p>
					<p data-aos="fade-up"  data-aos-delay="100">
					</p>		
					
				</div>

				
			</div>
		</div>
	</div>
    <br><br><br><br>
    <div class="container">
<div class="row justify-content-between mt-4">
    <div class="col-lg-5 pe-lg-5" data-aos="fade-up" data-aos-delay="200">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-mission" role="tabpanel" aria-labelledby="pills-mission-tab">
                <h2 class="mb-3 text-primary fw-bold">About Services</h2>
                <p>
                    Welcome to our volunteer services platform, where we connect passionate individuals with opportunities to make a positive impact. We're dedicated to helping you find meaningful volunteer roles that align with your interests and skills. Our user-friendly website simplifies the process of discovering, signing up for, and tracking your volunteer hours. Join us in our mission to create a more compassionate world through the power of volunteering. Whether you're looking to lend a hand in your local community, share your expertise, or engage in virtual volunteerism, we're here to support your journey in helping others and making a difference. Together, we can inspire change and build a brighter future for all.
                </p>			
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="overlap-imgs">
            <img src="style/images/service2.jpg" alt="Image" class="img-fluid rounded" data-aos="fade-up" data-aos-delay="100">
            <img src="style/images/maintenance-transformed.jpeg" alt="Image" class="img-fluid rounded" data-aos="fade-up" data-aos-delay="200">
        </div>
    </div>		
</div>
</div>


<br><br><br><br><br>

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
            <h1 class="heading">Services</h1>
        </div>
    </div>	
</div>
<div class="container mb-5">
    <div class="features-slider-wrap position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="row">
        @foreach ($service as $index => $item)
    <div class="col-lg-4 mx-auto">
        <div class="causes-item bg-white">
            <a href="#"><img src="style/images/{{ $item->image }}" alt="Image" class="img-fluid mb-4 rounded" style="height: 350px; width: 500px;"></a>
            <div class="pb-5 pt-3">
                <h3><a href="#" class="join-button">{{ $item->name }}</a></h3>
                <div class="content-wrapper">
                    <p>{{ $item->description }}</p>
                </div>
                <div>
                    <a href="{{ route('serviceform', ['id' => $item->id]) }}" class="btn btn-primary join-button">Join us</a>
                </div>
            </div>
        </div>
    </div>
@endforeach

        </div>
    </div>
</div>


<br><br><br><br><br><br><br><br>
@endsection