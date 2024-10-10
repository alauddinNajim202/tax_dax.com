{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('front_end.app')

@section('content')
<!-- sign in-up section start -->
<section class="sign-in-up-common-section sign-up-form-area">
    <div class="container">
        <div class="sign-in-up-content-wrapper">
            <div class="sign-in-up-image-area">
                <img src="{{asset('front_end/assets/images/sign-in-banner.png')}}" alt="" srcset="">
            </div>
            <div class="sign-in-up-form-area">
                <div class="form-header-para">
                    <h1>Sign Up</h1>
                    <p>Old user? <a href="sign-in.html">Log Into Your account</a></p>
                </div>
                <form class="tm-sign-in-up-form" action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                      </div>

                      <input type="hidden" name="user_type" value="{{request('user-type')}}">

                      <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Create Password">
                        <label for="password">Create Password</label>
                      </div>

                      <div class="form-floating">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Retype Password">
                        <label for="password_confirmation">Retype Password</label>
                      </div>

                      <button type="submit">Sign Up</button>
                      <p class="tm-create-btn-link">Already have an account?? <a href="sign-in.html">Sign In</a></p>
                      <div class="or-wrapper">
                        <div class="or-line"></div>
                        <p class="or-text">or</p>
                        <div class="or-line"></div>
                    </div>
                    <a class="google-link" href="#">
                        <img src="{{asset('front_end/assets/images/google.png')}} " alt="" srcset="">
                        Continue with Google</a>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- sign in-up section End -->
@endsection
