@extends('layout.master')

@section('title','Form')
	@section('content')
    <div class="hero overlay" style="background-image: url('style/images/hero_2.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 text-left">
                    <span class="subheading-white text-white mb-3" data-aos="fade-up">Volunteer</span>
                    <h1 class="heading text-white mb-2" data-aos="fade-up">Give a helping hand to those who need it!</h1>
                    <p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum minima dignissimos hic mollitia eius et quam ducimus maiores eos magni.</p>
                    <p data-aos="fade-up"  data-aos-delay="100">
                        <a href="#" class="btn btn-primary me-4 d-inline-flex align-items-center"> <span class="icon-attach_money me-2"></span><span>Donate Now</span></a>
                        <a href="https://www.youtube.com/watch?v=mwtbEGNABWU" class="text-white glightbox d-inline-flex align-items-center"><span class="icon-play me-2"></span><span>Watch the video</span></a>
                    </p>

                </div>
            </div>   </div>
        </div>
                <div class="col-lg-12 container">

                    <form action="#" class="bg-white p-5 rounded donation-form" data-aos="fade-up">
                        @csrf

                        <h2>Item Donation Form</h2>

                        <div class="form-field mb-3">

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control px-4 " id="name"
                                 placeholder="Enter name" value="username" name="name">
                            </div>

                            <div class="form-group">
                                <label for="Description">Description:</label>
                                <textarea type="text" class="form-control px-4" id="description"
                                 name="description"></textarea>

                            </div>
                            <div class="form-group">
                                <label for="status">Item Stuats:</label>
                                <input type="text" class="form-control px-4" id="status"
                                 value='good' name="status">
                            </div>

                            <div class="form-group">
                                <label for="Image">Image:</label>
                                <input type="file" class="form-control px-4" id="Image" name="image">
                            </div>

                        </div>

                        <input type="submit" value="Donate now" class="btn btn-secondary w-100">
                    </form>
                </div>


@endsection
