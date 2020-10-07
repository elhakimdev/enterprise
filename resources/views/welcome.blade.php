@extends('master.app')
@section('page-tittle','Laravel - Bussiness and Enterprise Software for Civil Engg')
@section('page-container')
        <div id="page-container" class="page-header-fixed">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <!-- Side Overlay-->
                        @include('components.page-components.side_overlay')
                        <!-- END Side Overlay -->

                        <!-- Header -->
                        @include('components.page-components.header')
                        <!-- END Header -->
                    
                    @endauth
                </div>
            @endif
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="hero-static d-flex align-items-center">
                    <div class="w-100">
                        <!-- Maintenance Section -->
                        <div class="content content-full bg-grey">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-lg-12 col-xl-6 py-3">
                                    <!-- Header -->
                                    <div class="text-center">
                                        <p>
                                            <i class="fa fa-5x fa-cog fa-spin text-primary"></i>
                                        </p>
                                        <h1 class="h2 mb-1 font-size-xl">
                                            Enterprise Resource App
                                        </h1>
                                        <h2 class="h6 font-w400 text-muted mb-1 font-size-l">
                                            Start build somethings amazing !!
                                        </h2>
                                    </div>
                                    <!-- END Header -->
                                </div>
                            </div>
                        </div>
                        <!-- END Maintenance Section -->

                        <!-- Footer -->
                        <div class="font-size-sm text-center text-muted">
                            <strong> ElhakimDev</strong><strong> v0.1</strong> &copy; <span data-toggle="year-copy"></span>
                        </div>
                        <!-- END Footer -->
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
@endsection
@section('custom-js-page')
<!-- Page JS Plugins | push -->
<script src="{{asset('src/assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('src/assets/js/plugins/chart.js/Chart.bundle.min.js')}}"></script>

<!-- Page JS Code | push -->
<script src="{{asset('src/assets/js/pages/be_pages_dashboard.min.js')}}"></script>

<!-- Page JS Helpers (jQuery Sparkline Plugins) | push -->
<script>jQuery(function () { One.helpers(['sparkline']); });</script>
@endsection
