
@extends('layout.master')
@section('title','Donation')
	@section('content')
    @include('Home.hero')
<div class="section cause-section bg-light">



    <div class="container mb-5">
        <div class="features-slider-wrap position-relative" data-aos="fade-up" data-aos-delay="200">
            <div class="features-slider" id="features-slider">
                @foreach ($donation as $item)
                    <div class="item">
                        <div class="causes-item bg-white">
                            <a href="{{ route('donationform', ['id' => $item->id]) }}"><img src="style/images/{{$item->image}}" alt="Image"
                                    class="img-fluid mb-4 rounded"></a>
                            <div class="px-4 pb-5 pt-3">

                                <h3><a href="#">{{$item->name}}</a></h3>
                                <p>{{$item->description}}</p>

                                <div class="progress mb-2">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>
                                <div class="d-flex mb-4 justify-content-between amount">
                                    <div>$509.00</div>
                                    <div>{{$item->amount_needed}}</div>
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