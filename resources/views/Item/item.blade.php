
@extends('layout.master')
@section('title','Items')
	@section('content')
    @include('Home.hero')
<div class="section cause-section bg-light">



    <div class="container mb-5">
        <div class="features-slider-wrap position-relative" data-aos="fade-up" data-aos-delay="200">
            <div class="features-slider" id="features-slider">
                @foreach ($item as $key)
                    <div class="item">
                        <div class="causes-item bg-white">
                            <a href="#"><img src="style/images/{{ $key->image }}" alt="Image"
                                    class="img-fluid mb-4 rounded"></a>
                            <div class="px-4 pb-5 pt-3">

                                <h3><a href="#">{{$key->name}}</a></h3>
                                <p>{{$key->description}}</p>


                                <div class="d-flex mb-4 justify-content-between amount">
                                    <div>$509.00</div>
                                    <div>{{$key->amount_needed}}</div>
                                </div>
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
