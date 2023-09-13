@extends('layout.master')
@section('title', 'Item Form')
@section('content')


<div class="hero overlay" style="background-image: url({{asset('style/images/vo55.png')}})" >
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
                <h1 class="heading text-white mb-2" data-aos="fade-up">Item Form</h1>
                <!-- <p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">
                    Furniture donations provide a meaningful way to give back to the community
                     while helping those in need create comfortable and welcoming living spaces.
                      Your unwanted furniture can bring comfort and a sense of home to families
                      and individuals facing challenging circumstances.</p> -->


            </div>


        </div>
    </div>
</div>


    <div class="col-lg-8 container" >

        <form action="{{route('storeitem')}}" method="POST" class="bg-light p-5 rounded donation-form" data-aos="fade-up" style="margin: 50px" enctype="multipart/form-data">
            @csrf

            

            <div class="form-field mb-3">
                <input type="name" class="form-control px-4" value="{{ $itemid->id }}" name="item_id" hidden>

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control px-4 " id="name" placeholder="Enter your name"
                        value="{{ $user->name }}" name="volunteerName" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control px-4" id="email" placeholder="Enter your email"
                        value="{{ $user->email }}" name="volunteerEmail" required>
                        @error('volunteerEmail')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                       
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control px-4" id="phone" placeholder="Enter your phone"
                        value="{{ $user->phone }}" name="volunteerPhone" required>
                        @error('volunteerPhone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    
                </div>


                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control px-4" id="address" placeholder="Enter your address"
                        value="" name="volunteerAddress" required>
                </div>

                <div class="form-group">
                    <label for="Description">Description:</label>
                    <textarea type="text" class="form-control px-4" id="description" placeholder="Description about item"
                        name="description" required ></textarea>

                </div>
                <div class="form-group">
                    <label for="status">Item Stuats:</label>
                    <select class="custom-select my-1 mr-sm-2" id="status" name="status" required>
                        <option selected>Choose item status...</option>
                        <option value="Tolerable">Tolerable</option>
                        <option value="Good">Good</option>
                        <option value="Very Good" >Very Good</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="Image">Image:</label>
                    <input type="file" class="form-control px-4" id="Image"
                        placeholder="Enter a clear image for the item" name="image" required>
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                       
                </div>

            </div>

            <input type="submit" value="Donate now" class="btn btn-secondary w-100">
        </form>
    </div>


@endsection
