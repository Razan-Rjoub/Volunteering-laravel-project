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




<div class="section cause-section bg-light">



        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <span class="subheading mb-3">Causes</span>
                    <h2 class="heading">Service</h2>


                    <div id="features-slider-nav" class="mt-5 d-flex justify-content-center">
                        <button class="btn btn-primary prev d-flex align-items-center me-2" data-controls="prev"> <span
                                class="icon-chevron-left"></span> <span class="ms-3">Prev</span></button>
                        <button class="btn btn-primary next d-flex align-items-center" data-controls="next"><span
                                class="me-3">Next</span> <span class="icon-chevron-right"></span></button>
                    </div>
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




<br><br><br><br><br><br><br><br><br>
@endsection
