<nav id="sidebar" aria-label="Main Navigation">
     <!-- Side Header -->
     <div class="content-header bg-white-5">
     <!-- Logo -->
     <a class="font-w600 text-dual" href="index.html">
          <span class="smini-visible">
               <i class="fa fa-circle-notch text-primary"></i>
          </span>
          <span class="smini-hide font-size-h5 tracking-wider">
               Laravel<span class="font-w400">UI</span>
          </span>
     </a>
     <!-- END Logo -->

     <!-- Extra -->
     <div>
          <!-- Options -->
          <div class="dropdown d-inline-block ml-2">
               <a class="btn btn-sm btn-dual" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="si si-drop"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                    <!-- Color Themes -->
                    <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                    <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="default" href="#">
                         <span>Default</span>
                         <i class="fa fa-circle text-default"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="{{asset('src/assets/css/themes/amethyst.min.css')}}" href="#">
                         <span>Amethyst</span>
                         <i class="fa fa-circle text-amethyst"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="{{asset('src/assets/css/themes/city.min.css')}}" href="#">
                         <span>City</span>
                         <i class="fa fa-circle text-city"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="{{asset('src/assets/css/themes/flat.min.css')}}" href="#">
                         <span>Flat</span>
                         <i class="fa fa-circle text-flat"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="{{asset('src/assets/css/themes/modern.min.c')}}ss" href="#">
                         <span>Modern</span>
                         <i class="fa fa-circle text-modern"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="{{asset('src/assets/css/themes/smooth.min.css')}}" href="#">
                         <span>Smooth</span>
                         <i class="fa fa-circle text-smooth"></i>
                    </a>
                    <!-- END Color Themes -->

                    <div class="dropdown-divider"></div>

                    <!-- Sidebar Styles -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="dropdown-item font-w500" data-toggle="layout" data-action="sidebar_style_light" href="#">
                         <span>Sidebar Light</span>
                    </a>
                    <a class="dropdown-item font-w500" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                         <span>Sidebar Dark</span>
                    </a>
                    <!-- Sidebar Styles -->

                    <div class="dropdown-divider"></div>

                    <!-- Header Styles -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="dropdown-item font-w500" data-toggle="layout" data-action="header_style_light" href="#">
                         <span>Header Light</span>
                    </a>
                    <a class="dropdown-item font-w500" data-toggle="layout" data-action="header_style_dark" href="#">
                         <span>Header Dark</span>
                    </a>
                    <!-- Header Styles -->
               </div>
          </div>
          <!-- END Options -->

          <!-- Close Sidebar, Visible only on mobile screens -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <a class="d-lg-none btn btn-sm btn-dual ml-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
               <i class="fa fa-fw fa-times"></i>
          </a>
          <!-- END Close Sidebar -->
     </div>
     <!-- END Extra -->
     </div>
     <!-- END Side Header -->

     <!-- Sidebar Scrolling -->
     <div class="js-sidebar-scroll">
     <!-- Side Navigation -->
     <div class="content-side">
          <ul class="nav-main">
               <li class="nav-main-item">
                    <a class="nav-main-link {{{ (Request::is('home') ? 'active':'')}}} " href="{{url('/home')}}">
                         <i class="nav-main-link-icon si si-speedometer"></i>
                         <span class="nav-main-link-name">Dashboard</span>
                    </a>
               </li>
               <li class="nav-main-heading">Master Data</li>
                              <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu {{{ (Request::is('users') ? 'active':'')}}}" data-toggle="submenu" aria-haspopup="true" aria-expanded="{{{ (Request::is('address') ? 'true':'false')}}}" href="#">
                         <i class="nav-main-link-icon si si-energy"></i>
                         <span class="nav-main-link-name">Roles & Permission</span>
                    </a>
                    <ul class="nav-main-submenu">
                         <li class="nav-main-item">
                         <a class="nav-main-link {{{ (Request::is('address') ? 'active':'')}}}" href="{{url('/users')}}">
                              <span class="nav-main-link-name">Users</span>
                         </a>
                         </li>
                         <li class="nav-main-item">
                         <a class="nav-main-link" href="{{url('/regencies')}}">
                              <span class="nav-main-link-name">Roles</span>
                         </a>
                         </li>
                         <li class="nav-main-item">
                         <a class="nav-main-link" href="{{url('/district')}}">
                              <span class="nav-main-link-name">Permission Pollicy</span>
                         </a>
                         </li>
                    </ul>
               </li>
               <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu {{{ (Request::is('address') ? 'active':'')}}}" data-toggle="submenu" aria-haspopup="true" aria-expanded="{{{ (Request::is('address') ? 'true':'false')}}}" href="#">
                         <i class="nav-main-link-icon si si-energy"></i>
                         <span class="nav-main-link-name">Administrative Area</span>
                    </a>
                    <ul class="nav-main-submenu">
                         <li class="nav-main-item">
                         <a class="nav-main-link {{{ (Request::is('address') ? 'active':'')}}}" href="{{url('/address')}}">
                              <span class="nav-main-link-name">Provinces</span>
                         </a>
                         </li>
                         <li class="nav-main-item">
                         <a class="nav-main-link" href="{{url('/regencies')}}">
                              <span class="nav-main-link-name">Regencies</span>
                         </a>
                         </li>
                         <li class="nav-main-item">
                         <a class="nav-main-link" href="{{url('/district')}}">
                              <span class="nav-main-link-name">District</span>
                         </a>
                         </li>
                         <li class="nav-main-item">
                         <a class="nav-main-link" href="{{url('/villages')}}">
                              <span class="nav-main-link-name">Villages</span>
                         </a>
                         </li>
                         <li class="nav-main-item">
                         <a class="nav-main-link" href="{{url('/api')}}">
                              <span class="nav-main-link-name">API</span>
                         </a>
                         </li>
                    </ul>
               </li>
          </ul>
     </div>
     <!-- END Side Navigation -->
     </div>
     <!-- END Sidebar Scrolling -->
</nav>