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
                <div class="col-lg-4 mx-auto"> <!-- Use pr-lg-2 for right margin on even indexes and pl-lg-2 for left margin on odd indexes -->
                    <div class="causes-item bg-white">
                        <a href="#"><img src="style/images/{{ $item->image }}" alt="Image" class="img-fluid mb-4 rounded" style="height: 350px; width:500px;" ></a>
                        <div class="pb-5 pt-3">
                            <h3><a href="#" class="join-button">{{ $item->name }}</a></h3>
                            <div class="content-wrapper">
                                <p>
                                    {{ $item->description }}
                                </p>
                            </div>
                            <div>
                                <a href="#" class="btn btn-primary join-button">Join us</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>




<br><br><br><br><br><br><br>

<div class="container" id="join-form" style="display: none;">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h3>Join Us</h3>
            <form method="POST" action="{{ route('service-form.store') }}">
             @csrf
                   <div class="form-group">
                    <label for="service">Service Interested In</label>
                    <select class="form-control" id="service" name="service">
                        <option value="">Select Service</option> 
                        <option value="delivery">Delivery Volunteer</option>
                        <option value="maintenance">Maintenance Volunteer</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="phone">Description</label>
                    <input type="text" name="description" class="form-control" id="phone" placeholder="Description">
                </div>
            
                
                <div class="form-group">
                    <label for="time">Date Available</label>
                    <input type="date" name="date" class="form-control" id="time" placeholder="Your Available date">
                </div>
                <div class="form-group">
                    <label for="hour">time Available</label>
                    <input type="time" name="time" class="form-control" id="hour" placeholder="Your Available time">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>



<br><br><br><br><br><br><br><br>
<script>
    document.querySelectorAll('.join-button').forEach(function(button) {
    button.addEventListener('click', function() {
        document.getElementById('join-form').style.display = 'block';
    });
});
</script>;
@endsection