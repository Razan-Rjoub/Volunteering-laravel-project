
@extends('layout.master')
@section('title','Items')
	@section('content')
    {{-- @include('Home.hero') --}}


    <div class="hero overlay" style="background-image: url('style/images/donation.jpeg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1 class="heading text-white mb-2" data-aos="fade-up">Item </h1>
                    <p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">
                        Furniture donations provide a meaningful way to give back to the community
                         while helping those in need create comfortable and welcoming living spaces.
                          Your unwanted furniture can bring comfort and a sense of home to families
                          and individuals facing challenging circumstances.</p>


                </div>


            </div>
        </div>
    </div>


    <div class="section">
		<div class="container">
			<div class="row mb-5 align-items-center justify-content-between">
				<div class="col-lg-5" data-aos="fade-up" data-aos-delay="0">

					<h2 class="heading">About Us</h2>
					<p>Furniture donations provide a meaningful way to give back to the community while helping those in need create comfortable and welcoming living spaces. Your unwanted furniture can bring comfort and a sense of home to families and individuals facing challenging circumstances.</p>
				</div>

                <div class="col-lg-6">
					<div class="overlap-imgs">
						<img src="style/images/img_v_2-min.jpg" alt="Image" class="img-fluid rounded" data-aos="fade-up" data-aos="100">
						<img src="style/images/img_v_3-min.jpg" alt="Image" class="img-fluid rounded" data-aos="fade-up" data-aos="200">
					</div>
				</div>


			</div>

		</div>
	</div>

<div class="section cause-section bg-light">

    <div class="container mb-5">
        <div class="features-slider-wrap position-relative" data-aos="fade-up" data-aos-delay="200">
            <div class="features-slider" id="features-slider">
                @foreach ($item as $key)
                    <div class="item">
                        <div class="causes-item bg-white">
                            <a href="{{ route('itemform', ['id' => $key->id]) }}"><img src="style/images/{{ $key->image }}" alt="Image"
                                    class="img-fluid mb-4 rounded"></a>
                            <div class="px-4 pb-5 pt-3">

                                <h3><a href="#">{{$key->name}}</a></h3>
                                <p>{{$key->description}}</p>

                                <div>
                                    <a href="#" class="btn btn-primary">Donate Now</a>
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
