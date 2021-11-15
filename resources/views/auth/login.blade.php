@extends('layouts.login')
@section('title')
    Login - Nomads
@endsection
@section('content')

<!-- Konten utama -->
<main class="login-container">
    <div class="container">
        <div class="row page-login d-flex align-items-center">
            <div class="section-left col-12 col-md-6 ml-5">
                <h1 class="mb-4">We explore the new <br> life much better</h1>
                <img src="{{url('frontend/images/login.png')}}" alt="login-images" class="w-75 d-none d-sm-flex">
            </div>
            <div class="section-right col-12 col-md-4 ml-5">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{url('frontend/images/logo_nomads.png')}}" alt="logo-nomads" class="w-50 mb-4">
                        </div>
                        <form method="POST" action="{{route('login')}}">
                        @csrf
                            <div class="form-group">
                                <label for="inputEmail">{{ __('E-Mail Address') }}</label>
                                <input type="email" class="form-control @error('inputEmail') is-invalid @enderror" id="inputEmail" name="inputEmail" value="{{old('inputEmail')}}" required autocomplete="email" autofocus aria-describedby="emailHelp">
                                @error('inputEmail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">{{ __('Password') }}</label>
                                <input type="password" class="form-control  @error('inputPassword') is-invalid @enderror" id="inputPassword" aria-describedby="passwordHelp" name="inputPassword" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="check" name="check" {{ old('check') ? 'checked' : '' }}>
                                <label for="check" class="form-check-label">
                                     {{ __('Remember Me') }}
                                </label>
                            </div>
                            <button type="submit" class="btn btn-login btn-block">
                                {{ __('Sign In') }}
                            </button>
                            @if (Route::has('password.request'))
                               <p class="text-center mt-4">
                                   <a href="{{ route('password.request') }}">Saya lupa password</a>
                               </p>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>


@endsection
