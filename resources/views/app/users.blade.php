@extends('master.app')
@section('page-tittle','Laravel - Bussiness and Enterprise Software for Civil Engg')
@section('page-container')
<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
     
     <!-- Side Overlay-->
     @include('components.page-components.side_overlay')
     <!-- END Side Overlay -->

     <!-- Sidebar -->
     @include('components.page-components.sidebar')
     <!-- END Sidebar -->

     <!-- Header -->
     @include('components.page-components.header')
     <!-- END Header -->

     <!-- Main Container -->
     <main id="main-container">
          <!-- Hero -->
          <div class="bg-body-light">
               <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2 text-center text-sm-left">
                         <div class="flex-sm-fill">
                              @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                   <h1 class="h3 font-w700 mb-2">
                                        Hello {{ session('status') }}
                                   </h1>
                              </div>
                              @endif
                              <div>
                                   <h1 class="h3 font-w700 mb-2">
                                   {{ __('You are logged in!') }}
                                   </h1>
                              </div>
                              <h2 class="h6 font-w500 text-muted mb-0">
                                   Welcome <a class="font-w600" href="javascript:void(0)">{{ Auth::user()->name }}</a>, everything looks great.
                              </h2>
                         </div>
                         <div class="mt-3 mt-sm-0 ml-sm-3">
                              <button type="button" class="btn btn-sm btn-alt-primary">
                                   <i class="fa fa-cog"></i>
                              </button>
                              <div class="dropdown d-inline-block">
                                   <button type="button" class="btn btn-sm btn-alt-primary" id="dropdown-analytics-overview" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fa fa-fw fa-calendar-alt"></i>
                                   Last 30 days
                                   <i class="fa fa-fw fa-angle-down"></i>
                                   </button>
                                   <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="dropdown-analytics-overview">
                                   <a class="dropdown-item font-w500" href="javascript:void(0)">This Week</a>
                                   <a class="dropdown-item font-w500" href="javascript:void(0)">Previous Week</a>
                                   <div class="dropdown-divider"></div>
                                   <a class="dropdown-item font-w500" href="javascript:void(0)">This Month</a>
                                   <a class="dropdown-item font-w500" href="javascript:void(0)">Previous Month</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <!-- END Hero -->

          <!-- Page Use Livewire Component -->
          @livewire('user-index')
          <!-- test livewire-->
     </main>
     <!-- END Main Container -->

     <!-- Footer -->
     @include('components.page-components.footer')
     <!-- END Footer -->

     <!-- Apps Modal | just on dashboard layout -->
     @include('components.page-components.apps-modal')
     <!-- END Apps Modal -->
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