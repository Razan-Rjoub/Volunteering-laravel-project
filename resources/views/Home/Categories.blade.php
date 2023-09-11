
<div class="section flip-section" style="background-image: url('style/images/img_v_2-min.jpg')">
    <div class="blob-1">
        <img src="style/images/blob.png" alt="Image" class="img-fluid">
    </div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center" data-aos="fade-up">
                <span class="subheading-white mb-3 text-white">Help Now</span>
                <h2 class="heading text-white">Help Today</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($category as $item)
                <div class="col-lg-4 position-relative" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-flip">
                        <div class="flip">
                            <div class="front">
                                <!-- front content -->
                                <div class="flip-content-wrap">
                                    <span class=""><img src="style/images/{{ $item->image }}" alt="" style="width: 50px"></span>
                                    <h3>{{ $item->name }}</h3>
                                </div>
                            </div>
                            <div class="back">
                                <a href="{{route($item->name)}}"><div class="flip-content-wrap">
                                    <h3>{{ $item->name }}</h3>
                                    <p>{{ $item->description }}</p>
                                </div></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            
    </div>		
</div>