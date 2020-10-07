@extends('master.app')
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
                                        Verify !!
                                    </h1>
                                </div>
                                <!-- Header -->
                                <!-- Sign In Form -->
                                <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <div class="card-body">
                                    @if (session('resent'))
                                        <div class="alert alert-success" role="alert">
                                            {{ __('A fresh verification link has been sent to your email address.') }}
                                        </div>
                                    @endif

                                    {{ __('Before proceeding, please check your email for a verification link.') }}
                                    {{ __('If you did not receive the email') }},
                                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
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

