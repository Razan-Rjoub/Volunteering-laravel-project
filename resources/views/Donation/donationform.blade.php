@extends('layout.master')
@section('title', 'donation form')
@section('content')

    <div class="col-lg-12 container" style="margin-top: 100px">
        <form action="{{ route('submitdonate') }}" class="bg-white p-5 rounded donation-form" data-aos="fade-up" method="post">
            @csrf
            <div class="form-field mb-4">
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
            <div class="field-icon mb-4">
                <span>$</span>
                <input type="number" placeholder="0.00" class="form-control px-4" name="price" value="1.00">
            </div>
            @error('price')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="form-field mb-4">
                <input type="name" placeholder="Name" class="form-control px-4" value="{{ $user->name }}"
                    name="name">
            </div>
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <input type="name" placeholder="Name" class="form-control px-4" value="{{ $donation->id }}"
                name="donation_id" hidden>
            <div class="form-field mb-4">
                @error('donation_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <input type="email" placeholder="Email" class="form-control px-4" value="{{ $user->email }}"
                    name="email">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="form-field mb-4">

                <input type="text" placeholder="Phone" class="form-control px-4" value="{{ $user->phone }}"
                    name="phone">
                    @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>



            <input type="submit" value="Donate now" class="btn btn-secondary w-100">
        </form>
    </div>

@endsection
