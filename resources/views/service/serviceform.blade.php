@extends('layout.master')
@section('title','services')
	@section('content')

    <div class="hero overlay" style="background-image: url({{asset('style/images/vo5.jpg')}})">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 text-center">
					<h1 class="heading text-white mb-2" data-aos="fade-up">Service Form</h1>
					<p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">Volunteering is a wonderful way to make a positive impact on our community. If you're ready to make a difference and give back, all you need to do is fill out our volunteer form. Your time and effort can truly make a meaningful change in the lives of those in need. Join us in spreading kindness and compassion through volunteering today!
					</p>		
					
				</div>
			</div>
		</div>
	</div>
    <br><br><br><br>

<div class="container" id="join-form" >
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h1>Join Us</h1>
            <form method="POST" action="{{ route('service.store') }}">
            @csrf             
            <input type="hidden" name="service_id" value="{{ $service->id }}">
            
            <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control px-4 " id="name" placeholder="Enter your name"
                    value="{{ $user->name }}" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control px-4" id="email" placeholder="Enter your email"
                        value="{{ $user->email }}" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control px-4" id="phone" placeholder="Enter your phone"
                        value="{{ $user->phone }}" name="phone" required>
                </div>
          
                <div class="form-group">
                    <label for="Description">Description</label>
                    <input type="text" name="description" class="form-control" id="Description" placeholder="Description">
                </div>
            
                
                <div class="form-group">
                    <label for="time">Date Available</label>
                    <input type="date" name="date" class="form-control" id="time" placeholder="Your Available date">
                </div>
                <div class="form-group">
              <label for="time">Time Available</label>
               <input type="text" name="time" class="form-control" id="time" placeholder="Your Available time">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<br><br><br><br>
@endsection
