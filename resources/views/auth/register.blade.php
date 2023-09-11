<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="assets/img/Charity-cuate.png" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <x-guest-layout>
                        <x-authentication-card>
                            <x-slot name="logo">
                                <x-authentication-card-logo />
                            </x-slot>

                            <x-validation-errors class="mb-4" />
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div
                                    class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                                    <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                                    <button type="button" class="btn btn-warning btn-floating mx-1">
                                        <i class="bi bi-facebook" style="color: white"></i>
                                    </button>

                                    <button type="button" class="btn btn-warning btn-floating mx-1">
                                        <i class="bi bi-google" style="color: white"></i>
                                    </button>

                                    <button type="button" class="btn btn-warning btn-floating mx-1">
                                        <i class="bi bi-linkedin" style="color: white"></i>
                                    </button>
                                </div>

                                <div class="divider d-flex align-items-center my-4">
                                    <p class="text-center fw-bold mx-3 mb-0">Or</p>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="text" name="name" :value="old('name')" required autofocus
                                        autocomplete="username" id="name" class="form-control form-control-lg"
                                        placeholder="Enter a your name" />
                                    <label class="form-label"for="name" value="{{ __('name') }}">Name</label>
                                </div>
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" name="email" :value="old('email')" required autofocus
                                        autocomplete="username" id="email" class="form-control form-control-lg"
                                        placeholder="Enter a valid email address" />
                                    <label class="form-label"for="email" value="{{ __('Email') }}">Email
                                        address</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="text" name="phone" :value="old('phone')" required autofocus
                                        autocomplete="username" id="phone" class="form-control form-control-lg"
                                        placeholder="Enter your phone number" />
                                    <label class="form-label"for="phone" value="{{ __('phone') }}">Phone
                                        Number</label>
                                </div>
                                <!-- Password input -->
                                <div class="form-outline mb-3">
                                    <input type="password" name="password" required autocomplete="current-password"
                                        id="password" class="form-control form-control-lg"
                                        placeholder="Enter password" />
                                    <label class="form-label" for="password"
                                        value="{{ __('Password') }}">Password</label>
                                </div>
                                <div class="form-outline mb-3">
                                    <input type="password" name="password_confirmation" required
                                        autocomplete="new-password" id="password_confirmation"
                                        class="form-control form-control-lg"
                                        placeholder="Enter confirmation password" />
                                    <label class="form-label" for="password_confirmation"
                                        value="{{ __('Confirm Password') }}">Password</label>
                                </div>

                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="mt-4">
                                        <x-label for="terms">
                                            <div class="flex items-center">
                                                <x-checkbox name="terms" id="terms" required />

                                                <div class="ml-2">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' =>
                                                            '<a target="_blank" href="' .
                                                            route('terms.show') .
                                                            '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                            __('Terms of Service') .
                                                            '</a>',
                                                        'privacy_policy' =>
                                                            '<a target="_blank" href="' .
                                                            route('policy.show') .
                                                            '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                            __('Privacy Policy') .
                                                            '</a>',
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </x-label>
                                    </div>
                                @endif
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="form1Example3" checked />
                                        <label class="form-check-label" for="form1Example3"> Remember me </label>
                                    </div>
                                    {{-- <a href="#!" class="">Forgot password?</a> --}}
                                    @if (Route::has('password.request'))
                                        <a class="text-body" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                </div>

                                <div class="text-center text-lg-start mt-4 pt-2">
                                    <button type="submit" class="btn btn-warning btn-lg btn-block"
                                        style="color:white">

                                        {{ __('Register') }}
                                    </button>

                                    <div class="flex items-center justify-end mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>


                                    </div>
                                </div>
                        </x-authentication-card>
                    </x-guest-layout>
                    </form>
                </div>
            </div>
        </div>

        <a href="#!" class="text-white me-4">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#!" class="text-white me-4">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="#!" class="text-white me-4">
            <i class="fab fa-google"></i>
        </a>
        <a href="#!" class="text-white">
            <i class="fab fa-linkedin-in"></i>
        </a>
        </div>
        <!-- Right -->
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
