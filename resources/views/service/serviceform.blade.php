@extends('layout.master')
@section('title','services')
	@section('content')

    <div class="hero overlay" style="background-image: url({{asset('style/images/vo55.png')}})">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 text-center">
					<h1 class="heading text-white mb-2" data-aos="fade-up">Service Form</h1>
					<!-- <p data-aos="fade-up" class=" mb-5 text-white ">Volunteering is a wonderful way to make a positive impact on our community. If you're ready to make a difference and give back, all you need to do is fill out our volunteer form. Your time and effort can truly make a meaningful change in the lives of those in need. Join us in spreading kindness and compassion through volunteering today!
					</p>		 -->
					
				</div>
			</div>
		</div>
	</div>
    <br><br><br><br>

<div class="container" id="join-form" >
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <form method="POST" action="{{ route('service.store') }}" class="bg-light p-5 rounded donation-form" data-aos="fade-up" style="margin: 50px" >
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
                        @error('email')
                       <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control px-4" id="phone" placeholder="Enter your phone"
                        value="{{ $user->phone }}" name="phone" required>
                        @error('phone')
                     <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
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
               <input type="time" name="time" class="form-control" id="time" placeholder="Your Available time">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<br><br><br><br>
@endsection
