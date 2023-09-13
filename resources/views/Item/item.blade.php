@extends('layout.master')
@section('title', 'Items')
@section('content')
    {{-- @include('Home.hero') --}}


    <div class="hero overlay" style="background-image: url('style/images/donation.jpeg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1 class="heading text-white mb-2" data-aos="fade-up">Item </h1>
                    <p data-aos="fade-up" class=" mb-5 text-white lead " style="color: #fff ;  ">
                        Furniture donations provide a meaningful way to give back to the community
                        while helping those in need create comfortable and welcoming living spaces.
                        Your unwanted furniture can bring comfort and a sense of home to families
                        and individuals facing challenging circumstances.</p>


                </div>


            </div>
        </div>
    </div>








    <div class="section cause-section bg-light">


        {{-- <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <span class="subheading mb-3">Causes</span>
                    <h2 class="heading">Item</h2>

                    <div id="features-slider-nav" class="mt-5 d-flex justify-content-center">
                        <button class="btn btn-primary prev d-flex align-items-center me-2" data-controls="prev"> <span
                                class="icon-chevron-left"></span> <span class="ms-3">Prev</span></button>
                        <button class="btn btn-primary next d-flex align-items-center" data-controls="next"><span
                                class="me-3">Next</span> <span class="icon-chevron-right"></span></button>
                    </div>
                </div>
            </div>
        </div> --}}



        <div class="container mb-5" style="margin-top: 80px">
            <div class="features-slider-wrap position-relative" data-aos="fade-up" data-aos-delay="200">
                <div class="row" id="features-slider">
                    @foreach ($item as $key)
                        <div class="col-lg-4 ">
                            <div class="causes-item bg-white">
                                <a href="{{ route('itemform', ['id' => $key->id]) }}"><img src="{{ $key->image }}"
                                        alt="Image" class="img-fluid mb-4 rounded"></a>
                                <div class="px-4 pb-5 pt-3">

                                    <h3><a href="{{ route('itemform', ['id' => $key->id]) }}">{{ $key->ItemName }}</a></h3>
                                    <p>
                                        @php
                                            $description = $key->description;
                                            $words = explode(' ', $description, 11); // Split into words (up to 11 words)
                                            $limitedDescription = implode(' ', array_slice($words, 0, 10)); // Join the first 10 words
                                            $remainingWords = implode(' ', array_slice($words, 10)); // Join the remaining words
                                        @endphp

                                        {{ $limitedDescription }}
                                        @if (count($words) > 10)
                                            <span id="more{{ $key->id }}" style="display: none;">{{ $remainingWords }}</span>
                                            <a href="#" id="link{{ $key->id }}" onclick="toggleDescription(event, {{ $key->id }}); return false;">Read More...</a>
                                        @endif
                                    </p>

                                    <div>
                                        <a href="{{ route('itemform', ['id' => $key->id]) }}" class="btn btn-primary">Donate
                                            Now</a>
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
