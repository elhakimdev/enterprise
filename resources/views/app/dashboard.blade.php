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

          <!-- Page Content -->
          <div class="content">
          <!-- Overview -->
          <div class="row row-deck">
               <div class="col-sm-6 col-xl-3">
                    <!-- Pending Orders -->
                    <div class="block block-rounded d-flex flex-column">
                         <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                              <dl class="mb-0">
                              <dt class="font-size-h2 font-w700">{{ $province }}</dt>
                              <dd class="text-muted mb-0">Provinces</dd>
                              </dl>
                              <div class="item item-rounded bg-body">
                              <i class="fa fa-chart-line font-size-h3 text-primary"></i>
                              </div>
                         </div>
                         <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                              <a class="font-w500 d-flex align-items-center" href="javascript:void(0)">
                              View all Provinces
                              <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                              </a>
                         </div>
                    </div>
                    <!-- END Pending Orders -->
               </div>
               <div class="col-sm-6 col-xl-3">
                    <!-- New Customers -->
                    <div class="block block-rounded d-flex flex-column">
                         <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                              <dl class="mb-0">
                              <dt class="font-size-h2 font-w700">{{ $regencie }}</dt>
                              <dd class="text-muted mb-0">Regencies</dd>
                              </dl>
                              <div class="item item-rounded bg-body">
                              <i class="fa fa-chart-line font-size-h3 text-primary"></i>
                              </div>
                         </div>
                         <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                              <a class="font-w500 d-flex align-items-center" href="javascript:void(0)">
                              View all Regencies
                              <i class="fa fa-chart-line ml-1 opacity-25 font-size-base"></i>
                              </a>
                         </div>
                    </div>
                    <!-- END New Customers -->
               </div>
               <div class="col-sm-6 col-xl-3">
                    <!-- Messages -->
                    <div class="block block-rounded d-flex flex-column">
                         <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                              <dl class="mb-0">
                              <dt class="font-size-h2 font-w700">{{ $district }}</dt>
                              <dd class="text-muted mb-0">Districts</dd>
                              </dl>
                              <div class="item item-rounded bg-body">
                              <i class="fa fa-chart-line font-size-h3 text-primary"></i>
                              </div>
                         </div>
                         <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                              <a class="font-w500 d-flex align-items-center" href="javascript:void(0)">
                              View all Districts
                              <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                              </a>
                         </div>
                    </div>
                    <!-- END Messages -->
               </div>
               <div class="col-sm-6 col-xl-3">
                    <!-- Conversion Rate -->
                    <div class="block block-rounded d-flex flex-column">
                         <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                              <dl class="mb-0">
                              <dt class="font-size-h2 font-w700">{{ $village }}</dt>
                              <dd class="text-muted mb-0">Villages</dd>
                              </dl>
                              <div class="item item-rounded bg-body">
                              <i class="fa fa-chart-line font-size-h3 text-primary"></i>
                              </div>
                         </div>
                         <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                              <a class="font-w500 d-flex align-items-center" href="javascript:void(0)">
                              View All Villages
                              <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                              </a>
                         </div>
                    </div>
                    <!-- END Conversion Rate-->
               </div>
          </div>
          <!-- END Overview -->

          <!-- Statistics -->
          <div class="row">
               <div class="col-xl-8 d-flex flex-column">
                    <!-- Earnings Summary -->
                    <div class="block block-rounded flex-grow-1 d-flex flex-column">
                         <div class="block-header block-header-default">
                              <h3 class="block-title">Earnings Summary</h3>
                              <div class="block-options">
                              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                   <i class="si si-refresh"></i>
                              </button>
                              <button type="button" class="btn-block-option">
                                   <i class="si si-settings"></i>
                              </button>
                              </div>
                         </div>
                         <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
                              <!-- Earnings Chart Container -->
                              <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
                              <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                              <canvas class="js-chartjs-earnings"></canvas>
                         </div>
                         <div class="block-content bg-body-light">
                              <div class="row items-push text-center w-100">
                              <div class="col-sm-4">
                                   <dl class="mb-0">
                                        <dt class="font-size-h3 font-w700">
                                             <i class="fa fa-arrow-up font-size-lg text-success"></i> 2.5%
                                        </dt>
                                        <dd class="text-muted mb-0">Customer Growth</dd>
                                   </dl>
                              </div>
                              <div class="col-sm-4">
                                   <dl class="mb-0">
                                        <dt class="font-size-h3 font-w700">
                                             <i class="fa fa-arrow-up font-size-lg text-success"></i> 3.8%
                                        </dt>
                                        <dd class="text-muted mb-0">Page Views</dd>
                                   </dl>
                              </div>
                              <div class="col-sm-4">
                                   <dl class="mb-0">
                                        <dt class="font-size-h3 font-w700">
                                             <i class="fa fa-arrow-up font-size-lg text-success"></i> 1.7%
                                        </dt>
                                        <dd class="text-muted mb-0">New Products</dd>
                                   </dl>
                              </div>
                              </div>
                         </div>
                    </div>
                    <!-- END Earnings Summary -->
               </div>
               <div class="col-xl-4 d-flex flex-column">
                    <!-- Last 2 Weeks -->
                    <!-- Sparkline Charts (.js-sparkline class is initialized in Helpers.sparkline() -->
                    <!-- For more info and examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
                    <div class="row row-deck flex-grow-1">
                         <div class="col-md-6 col-xl-12">
                              <div class="block block-rounded d-flex flex-column">
                              <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between">
                                   <dl class="mb-0">
                                        <dt class="font-size-h2 font-w700">570</dt>
                                        <dd class="text-muted mb-0">Total Orders</dd>
                                   </dl>
                                   <div>
                                        <div class="d-inline-block px-2 py-1 rounded-lg font-size-sm font-w600 text-danger bg-danger-light">
                                             <i class="fa fa-caret-down mr-1"></i>
                                             2.2%
                                        </div>
                                   </div>
                              </div>
                              <div class="block-content p-1 text-center overflow-hidden">
                                   <!-- Sparkline Line: Orders -->
                                   <span class="js-sparkline" data-type="line"
                                        data-points="[33,29,32,37,38,30,34,28,43,45,26,45,49,39]"
                                        data-width="100%"
                                        data-height="70px"
                                        data-chart-range-min="20"
                                        data-line-color="rgba(210, 108, 122, .4)"
                                        data-fill-color="rgba(210, 108, 122, .15)"
                                        data-spot-color="transparent"
                                        data-min-spot-color="transparent"
                                        data-max-spot-color="transparent"
                                        data-highlight-spot-color="#D26C7A"
                                        data-highlight-line-color="#D26C7A"
                                        data-tooltip-suffix="Orders"></span>
                              </div>
                              </div>
                         </div>
                         <div class="col-md-6 col-xl-12">
                              <div class="block block-rounded d-flex flex-column">
                              <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between">
                                   <dl class="mb-0">
                                        <dt class="font-size-h2 font-w700">$5,234.21</dt>
                                        <dd class="text-muted mb-0">Total Earnings</dd>
                                   </dl>
                                   <div>
                                        <div class="d-inline-block px-2 py-1 rounded-lg font-size-sm font-w600 text-success bg-success-light">
                                             <i class="fa fa-caret-up mr-1"></i>
                                             4.2%
                                        </div>
                                   </div>
                              </div>
                              <div class="block-content p-1 text-center oveflow-hidden">
                                   <!-- Sparkline Line: Earnings -->
                                   <span class="js-sparkline" data-type="line"
                                        data-points="[716,1185,750,1365,956,890,1200,968,1158,1025,920,1190,720,1352]"
                                        data-width="100%"
                                        data-height="70px"
                                        data-chart-range-min="300"
                                        data-line-color="rgba(70,195,123, .4)"
                                        data-fill-color="rgba(70,195,123, .15)"
                                        data-spot-color="transparent"
                                        data-min-spot-color="transparent"
                                        data-max-spot-color="transparent"
                                        data-highlight-spot-color="#46C37B"
                                        data-highlight-line-color="#46C37B"
                                        data-tooltip-prefix="$"></span>
                              </div>
                              </div>
                         </div>
                         <div class="col-xl-12">
                              <div class="block block-rounded d-flex flex-column">
                              <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between">
                                   <dl class="mb-0">
                                        <dt class="font-size-h2 font-w700">264</dt>
                                        <dd class="text-muted mb-0">New Customers</dd>
                                   </dl>
                                   <div>
                                        <div class="d-inline-block px-2 py-1 rounded-lg font-size-sm font-w600 text-success bg-success-light">
                                             <i class="fa fa-caret-up mr-1"></i>
                                             9.3%
                                        </div>
                                   </div>
                              </div>
                              <div class="block-content p-1 text-center oveflow-hidden">
                                   <!-- Sparkline Line: New Customers -->
                                   <span class="js-sparkline" data-type="line"
                                        data-points="[25,15,36,14,29,19,36,41,28,26,29,33,23,41]"
                                        data-width="100%"
                                        data-height="70px"
                                        data-chart-range-min="0"
                                        data-line-color="rgba(70,195,123, .4)"
                                        data-fill-color="rgba(70,195,123, .15)"
                                        data-spot-color="transparent"
                                        data-min-spot-color="transparent"
                                        data-max-spot-color="transparent"
                                        data-highlight-spot-color="#46C37B"
                                        data-highlight-line-color="#46C37B"
                                        data-tooltip-prefix="$"></span>
                              </div>
                              </div>
                         </div>
                    </div>
                    <!-- END Last 2 Weeks -->
               </div>
          </div>
          <!-- END Statistics -->

          <!-- Recent Orders -->
          <div class="block block-rounded">
               <div class="block-header block-header-default">
                    <h3 class="block-title">Recent Orders</h3>
                    <div class="block-options">
                         <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="class-toggle" data-target="#one-dashboard-search-orders" data-class="d-none">
                              <i class="fa fa-search"></i>
                         </button>
                         <div class="dropdown d-inline-block">
                              <button type="button" class="btn btn-sm btn-alt-primary" id="dropdown-recent-orders-filters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-fw fa-flask"></i>
                              Filters
                              <i class="fa fa-angle-down ml-1"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-md dropdown-menu-right font-size-sm" aria-labelledby="dropdown-recent-orders-filters">
                              <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                   Pending..
                                   <span class="badge badge-primary badge-pill">35</span>
                              </a>
                              <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                   Processing
                                   <span class="badge badge-primary badge-pill">15</span>
                              </a>
                              <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                   For Delivery
                                   <span class="badge badge-primary badge-pill">20</span>
                              </a>
                              <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                   Canceled
                                   <span class="badge badge-primary badge-pill">72</span>
                              </a>
                              <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                   Delivered
                                   <span class="badge badge-primary badge-pill">890</span>
                              </a>
                              <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                   All
                                   <span class="badge badge-primary badge-pill">997</span>
                              </a>
                              </div>
                         </div>
                    </div>
               </div>
               <div id="one-dashboard-search-orders" class="block-content border-bottom d-none">
                    <!-- Search Form -->
                    <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                         <div class="form-group push">
                              <div class="input-group">
                              <input type="text" class="form-control" id="one-ecom-orders-search" name="one-ecom-orders-search" placeholder="Search recent orders..">
                              <div class="input-group-append">
                                   <span class="input-group-text">
                                        <i class="fa fa-search"></i>
                                   </span>
                              </div>
                              </div>
                         </div>
                    </form>
                    <!-- END Search Form -->
               </div>
               <div class="block-content">
                    <!-- Recent Orders Table -->
                    <div class="table-responsive">
                         <table class="table table-borderless table-striped table-vcenter">
                              <thead>
                              <tr>
                                   <th class="text-center" style="width: 120px;">Order ID</th>
                                   <th class="d-none d-sm-table-cell">Created</th>
                                   <th class="d-none d-xl-table-cell">Customer</th>
                                   <th>Status</th>
                                   <th class="d-none d-xl-table-cell text-center">Products</th>
                                   <th class="d-none d-sm-table-cell text-center">Profit</th>
                                   <th class="d-none d-sm-table-cell text-right">Value</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                   <td class="text-center font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">
                                             <strong>ORD.00965</strong>
                                        </a>
                                   </td>
                                   <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">27 min ago</td>
                                   <td class="d-none d-xl-table-cell font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">Albert Ray</a>
                                   </td>
                                   <td>
                                        <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-danger-light text-danger">Canceled</span>
                                   </td>
                                   <td class="d-none d-xl-table-cell text-center font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">7</a>
                                   </td>
                                   <td class="d-none d-sm-table-cell text-center">
                                        <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">3%</span>
                                   </td>
                                   <td class="d-none d-sm-table-cell text-right font-size-sm">
                                        <strong>$26,52</strong>
                                   </td>
                              </tr>
                              <tr>
                                   <td class="text-center font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">
                                             <strong>ORD.00964</strong>
                                        </a>
                                   </td>
                                   <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">8 min ago</td>
                                   <td class="d-none d-xl-table-cell font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">Helen Jacobs</a>
                                   </td>
                                   <td>
                                        <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-success-light text-success">Delivered</span>
                                   </td>
                                   <td class="d-none d-xl-table-cell text-center font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">4</a>
                                   </td>
                                   <td class="d-none d-sm-table-cell text-center">
                                        <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">17%</span>
                                   </td>
                                   <td class="d-none d-sm-table-cell text-right font-size-sm">
                                        <strong>$1190,65</strong>
                                   </td>
                              </tr>
                              <tr>
                                   <td class="text-center font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">
                                             <strong>ORD.00963</strong>
                                        </a>
                                   </td>
                                   <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">6 min ago</td>
                                   <td class="d-none d-xl-table-cell font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">Carl Wells</a>
                                   </td>
                                   <td>
                                        <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-warning-light text-warning">Processing</span>
                                   </td>
                                   <td class="d-none d-xl-table-cell text-center font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">3</a>
                                   </td>
                                   <td class="d-none d-sm-table-cell text-center">
                                        <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">25%</span>
                                   </td>
                                   <td class="d-none d-sm-table-cell text-right font-size-sm">
                                        <strong>$717,24</strong>
                                   </td>
                              </tr>
                              <tr>
                                   <td class="text-center font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">
                                             <strong>ORD.00962</strong>
                                        </a>
                                   </td>
                                   <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">19 min ago</td>
                                   <td class="d-none d-xl-table-cell font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">Betty Kelley</a>
                                   </td>
                                   <td>
                                        <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-success-light text-success">Delivered</span>
                                   </td>
                                   <td class="d-none d-xl-table-cell text-center font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">1</a>
                                   </td>
                                   <td class="d-none d-sm-table-cell text-center">
                                        <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">12%</span>
                                   </td>
                                   <td class="d-none d-sm-table-cell text-right font-size-sm">
                                        <strong>$868,63</strong>
                                   </td>
                              </tr>
                              <tr>
                                   <td class="text-center font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">
                                             <strong>ORD.00961</strong>
                                        </a>
                                   </td>
                                   <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">11 min ago</td>
                                   <td class="d-none d-xl-table-cell font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">Amanda Powell</a>
                                   </td>
                                   <td>
                                        <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-warning-light text-warning">Processing</span>
                                   </td>
                                   <td class="d-none d-xl-table-cell text-center font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">5</a>
                                   </td>
                                   <td class="d-none d-sm-table-cell text-center">
                                        <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">14%</span>
                                   </td>
                                   <td class="d-none d-sm-table-cell text-right font-size-sm">
                                        <strong>$242,66</strong>
                                   </td>
                              </tr>
                              <tr>
                                   <td class="text-center font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">
                                             <strong>ORD.00960</strong>
                                        </a>
                                   </td>
                                   <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">2 min ago</td>
                                   <td class="d-none d-xl-table-cell font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">Amber Harvey</a>
                                   </td>
                                   <td>
                                        <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-success-light text-success">Delivered</span>
                                   </td>
                                   <td class="d-none d-xl-table-cell text-center font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">7</a>
                                   </td>
                                   <td class="d-none d-sm-table-cell text-center">
                                        <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">7%</span>
                                   </td>
                                   <td class="d-none d-sm-table-cell text-right font-size-sm">
                                        <strong>$1322,63</strong>
                                   </td>
                              </tr>
                              <tr>
                                   <td class="text-center font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">
                                             <strong>ORD.00959</strong>
                                        </a>
                                   </td>
                                   <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">3 min ago</td>
                                   <td class="d-none d-xl-table-cell font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">Barbara Scott</a>
                                   </td>
                                   <td>
                                        <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-danger-light text-danger">Canceled</span>
                                   </td>
                                   <td class="d-none d-xl-table-cell text-center font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">4</a>
                                   </td>
                                   <td class="d-none d-sm-table-cell text-center">
                                        <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">23%</span>
                                   </td>
                                   <td class="d-none d-sm-table-cell text-right font-size-sm">
                                        <strong>$96,40</strong>
                                   </td>
                              </tr>
                              <tr>
                                   <td class="text-center font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">
                                             <strong>ORD.00958</strong>
                                        </a>
                                   </td>
                                   <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">13 min ago</td>
                                   <td class="d-none d-xl-table-cell font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">Lori Grant</a>
                                   </td>
                                   <td>
                                        <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-success-light text-success">Delivered</span>
                                   </td>
                                   <td class="d-none d-xl-table-cell text-center font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">3</a>
                                   </td>
                                   <td class="d-none d-sm-table-cell text-center">
                                        <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">14%</span>
                                   </td>
                                   <td class="d-none d-sm-table-cell text-right font-size-sm">
                                        <strong>$1006,30</strong>
                                   </td>
                              </tr>
                              <tr>
                                   <td class="text-center font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">
                                             <strong>ORD.00957</strong>
                                        </a>
                                   </td>
                                   <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">9 min ago</td>
                                   <td class="d-none d-xl-table-cell font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">Amanda Powell</a>
                                   </td>
                                   <td>
                                        <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-danger-light text-danger">Canceled</span>
                                   </td>
                                   <td class="d-none d-xl-table-cell text-center font-size-sm">
                                        <a class="font-w600" href="javascript:void(0)">4</a>
                                   </td>
                                   <td class="d-none d-sm-table-cell text-center">
                                        <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">17%</span>
                                   </td>
                                   <td class="d-none d-sm-table-cell text-right font-size-sm">
                                        <strong>$100,20</strong>
                                   </td>
                              </tr>
                              </tbody>
                         </table>
                    </div>
                    <!-- END Recent Orders Table -->

                    <!-- Pagination -->
                    <nav aria-label="Photos Search Navigation">
                         <ul class="pagination pagination-sm justify-content-end mt-2">
                              <li class="page-item">
                              <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                                   Prev
                              </a>
                              </li>
                              <li class="page-item active">
                              <a class="page-link" href="javascript:void(0)">1</a>
                              </li>
                              <li class="page-item">
                              <a class="page-link" href="javascript:void(0)">2</a>
                              </li>
                              <li class="page-item">
                              <a class="page-link" href="javascript:void(0)">3</a>
                              </li>
                              <li class="page-item">
                              <a class="page-link" href="javascript:void(0)">4</a>
                              </li>
                              <li class="page-item">
                              <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                   Next
                              </a>
                              </li>
                         </ul>
                    </nav>
                    <!-- END Pagination -->
               </div>
          </div>
          <!-- END Recent Orders -->
          </div>
          <!-- END Page Content -->
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