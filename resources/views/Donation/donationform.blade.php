@extends('layout.master')
@section('title', 'donation form')
@section('content')
    <div class="section cause-section bg-light">
        <div class="col-lg-12 container">
            <form action="{{route('submitdonate')}}" class="bg-white p-5 rounded donation-form" data-aos="fade-up">
                <div class="form-field mb-3">
                    <label for="amount-1" class="amount js-amount" data-value="1.00">
                        <input type="radio" id="amount-1" name="radio-amount" checked="true">
                        <span>$1</span>
                    </label>
                    <label for="amount-2" class="amount js-amount" data-value="5.00">
                        <input type="radio" id="amount-2" name="radio-amount">
                        <span>$5</span>
                    </label>
                    <label for="amount-3" class="amount js-amount" data-value="25.00">
                        <input type="radio" id="amount-3" name="radio-amount">
                        <span>$25</span>
                    </label>
                    <label for="amount-4" class="amount js-amount" data-value="100.00">
                        <input type="radio" id="amount-4" name="radio-amount">
                        <span>$100</span>
                    </label>

                </div>
                <div class="field-icon">
                    <span>$</span>
                    <input type="text" placeholder="0.00" class="form-control px-4" name="price" value="1.00">
                </div>
                <div class="form-field mb-3">
                    <input type="name" placeholder="Name" class="form-control px-4" value="{{ $user->name }}" name="name">
                </div>
                <input type="name" placeholder="Name" class="form-control px-4" value="{{ $donation->id }}" name="donation_id" hidden>
                <div class="form-field mb-3">

                    <input type="email" placeholder="Email" class="form-control px-4" value="{{ $user->email }}" name="email">
                </div>
                <h3 style="text-align: start">Payment Method</h3>


                <div class="form-field mb-3 ">
                    <input type="text" placeholder="Card Number" class="form-control px-4">
                </div>
                <div class="form-field mb-3 row">
                    <div class="col-8">
                        <input type="text" placeholder="Expiration" class="form-control px-4">
                    </div>
                    <div class="col-4">
                        <input type="text" placeholder="CVV" class="form-control px-4">
                    </div>
                </div>

                <input type="submit" value="Donate now" class="btn btn-secondary w-90">
            </form>
        </div>

    @endsection
    <script src="style/js/bootstrap.bundle.min.js"></script>
    <script src="style/js/tiny-slider.js"></script>
    <script src="style/js/flatpickr.min.js"></script>
    <script src="style/js/glightbox.min.js"></script>
    <script src="style/js/aos.js"></script>
    <script src="style/js/navbar.js"></script>
    <script src="style/js/counter.js"></script>
    <script src="style/js/custom.js"></script>