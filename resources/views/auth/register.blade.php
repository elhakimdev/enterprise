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
                            <div class="col-md-8 col-lg-6 col-xl-6 py-4 bg-white">
                                <!-- Header -->
                                <div class="text-center">
                                    <p class="mb-2">
                                        <i class="fa fa-2x fa-circle-notch text-primary"></i>
                                    </p>
                                    <h1 class="h4 mb-1">
                                        Create New Account !!
                                    </h1>
                                </div>
                                <!-- Header -->
                                <!-- Sign In Form -->
                                <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <div class="py-3">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
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
