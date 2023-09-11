
@extends('layout.master')
@section('title','Donation')
	@section('content')

    <div class="hero overlay" style="background-image: url('style/images/donation3.jpg') " >
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 text-center">
					<h1 class="heading text-white mb-2" data-aos="fade-up">Donation</h1>
					<p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">The joy of giving is greater than the joy of receiving</p>
					<p data-aos="fade-up"  data-aos-delay="100">
						<a href="#donate" class="btn btn-primary me-4">Donate Now</a>
					</p>

				</div>


			</div>
		</div>
	</div>
<div class="section cause-section bg-light" id="donate">


    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                <span class="subheading mb-3">Causes</span>
                <h2 class="heading">Donation</h2>

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
            <div class="features-slider" id="features-slider">
                @foreach ($donation as $item)
                    <div class="item">
                        <div class="causes-item bg-white">
                            <a href="{{ route('donationform', ['id' => $item->id]) }}"><img src="style/images/{{$item->image}}" alt="Image"
                                    class="img-fluid mb-4 rounded"></a>
                            <div class="px-4 pb-5 pt-3">

                                <h3><a href="{{ route('donationform', ['id' => $item->id]) }}">{{$item->name}}</a></h3>
                                <p>{{$item->description}}</p>
                                @php

                                $percentage = ($item->amount_donated / $item->amount_needed) * 100;
                            @endphp

                                <div class="progress mb-2">
                                    <div class="progress-bar" role="progressbar" style="width:{{$percentage}}%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100">{{$percentage}}%</div>
                                </div>
                                <div class="d-flex mb-4 justify-content-between amount">

                                    <div>{{$item->amount_donated}}JD</div>

                                    <div>{{$item->amount_needed}}JD</div>
                                </div>
                                <div>
                                    <a href="{{ route('donationform', ['id' => $item->id]) }}" class="btn btn-primary">Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


</div>
@endsection
