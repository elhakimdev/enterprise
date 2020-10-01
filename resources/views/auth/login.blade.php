@extends('app')
@section('page-tittle','Auth - Bussiness and Enterprise Software for Civil Engg')
@section('page-container')
<div id="page-container" class="page-header-fixed">
    <!-- Side Overlay-->
    @include('components.page-components.side_overlay')
    <!-- END Side Overlay -->
    <!-- Header -->
    @include('components.page-components.header')
    <!-- END Header -->
    <!-- start Main Container -->
    <main class="main-container">
        <!-- start Page Content -->
        <div class="hero-static d-flex align-items-center">
            <div class="w-100">
                <!-- Sign In Section -->
                {{-- <div class="bg-white"> --}}
                    <div class="content content-full">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-6 col-xl-4 py-4 bg-white">
                                <!-- Header -->
                                <div class="text-center">
                                    <p class="mb-2">
                                        <i class="fa fa-2x fa-circle-notch text-primary"></i>
                                    </p>
                                    <h1 class="h4 mb-1">
                                        Please Sign In !!
                                    </h1>
                                    <h2 class="h6 font-w400 text-muted mb-3">
                                        A perfect match for your project
                                    </h2>
                                </div>
                                <!-- Header -->
                                <!-- Sign In Form -->
                                <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->

                                <form class="js-validation-signin" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="py-3">
                                        <div class="form-group">
                                                <input id="email" type="email" class="form-control form-control-lg form-control-alt" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>

                                        <div class="form-group">
                                                <input id="password" type="password" class="form-control form-control-lg form-control-alt" @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="d-md-flex align-items-md-center justify-content-md-between">
                                                <div class="custom-control custom-switch">
                                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="custom-control-label font-w400" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                                </div>
                                                <div class="py-2">
                                                    @if (Route::has('password.request'))
                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>                                         
                                    </div>
                                    <div class="form-group row justify-content-center mb-0">
                                        <div class="col-md-6 col-xl-5">
                                            <button type="submit" class="btn btn-block btn-primary">
                                            <i class="fa fa-fw fa-sign-in-alt mr-1"></i>{{ __('Login') }}
                                            </button>   
                                        </div>
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </div>
                <!-- Sign In Section -->
            </div>
        </div>
        <!-- end Page Content -->
    </main>
    <!-- end Main Container -->
</div>
@endsection
@section('custom-js-page')
<!-- Page JS Plugins -->
<script src="{{asset('src/assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

<!-- Page JS Code -->
<script src="{{asset('src/assets/js/pages/op_auth_signin.min.js')}}"></script>
@endsection