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
                    <a class="nav-main-link active" href="{{url('/home')}}">
                         <i class="nav-main-link-icon si si-speedometer"></i>
                         <span class="nav-main-link-name">Dashboard</span>
                    </a>
               </li>
               <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                         <i class="nav-main-link-icon si si-layers"></i>
                         <span class="nav-main-link-name">Page Packs</span>
                    </a>
                    <ul class="nav-main-submenu">
                         <li class="nav-main-item">
                         <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                              <i class="nav-main-link-icon si si-bag"></i>
                              <span class="nav-main-link-name">e-Commerce</span>
                         </a>
                         <ul class="nav-main-submenu">
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_ecom_dashboard.html">
                                        <span class="nav-main-link-name">Dashboard</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_ecom_orders.html">
                                        <span class="nav-main-link-name">Orders</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_ecom_order.html">
                                        <span class="nav-main-link-name">Order</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_ecom_products.html">
                                        <span class="nav-main-link-name">Products</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_ecom_product_edit.html">
                                        <span class="nav-main-link-name">Product Edit</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_ecom_customer.html">
                                        <span class="nav-main-link-name">Customer</span>
                                   </a>
                              </li>
                         </ul>
                         </li>
                         <li class="nav-main-item">
                         <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                              <i class="nav-main-link-icon si si-handbag"></i>
                              <span class="nav-main-link-name">e-Commerce Store</span>
                         </a>
                         <ul class="nav-main-submenu">
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_ecom_store_home.html">
                                        <span class="nav-main-link-name">Home</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_ecom_store_search.html">
                                        <span class="nav-main-link-name">Search Results</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_ecom_store_products.html">
                                        <span class="nav-main-link-name">Products List</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_ecom_store_product.html">
                                        <span class="nav-main-link-name">Product Page</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_ecom_store_checkout.html">
                                        <span class="nav-main-link-name">Checkout</span>
                                   </a>
                              </li>
                         </ul>
                         </li>
                         <li class="nav-main-item">
                         <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                              <i class="nav-main-link-icon si si-pencil"></i>
                              <span class="nav-main-link-name">Blog</span>
                         </a>
                         <ul class="nav-main-submenu">
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_blog_classic.html">
                                        <span class="nav-main-link-name">Classic</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_blog_list.html">
                                        <span class="nav-main-link-name">List</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_blog_grid.html">
                                        <span class="nav-main-link-name">Grid</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_blog_story.html">
                                        <span class="nav-main-link-name">Story</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_blog_story_cover.html">
                                        <span class="nav-main-link-name">Story Cover</span>
                                   </a>
                              </li>
                         </ul>
                         </li>
                         <li class="nav-main-item">
                         <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                              <i class="nav-main-link-icon si si-graduation"></i>
                              <span class="nav-main-link-name">e-Learning</span>
                         </a>
                         <ul class="nav-main-submenu">
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_elearning_courses.html">
                                        <span class="nav-main-link-name">Courses</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_elearning_course.html">
                                        <span class="nav-main-link-name">Course</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_elearning_lesson.html">
                                        <span class="nav-main-link-name">Lesson</span>
                                   </a>
                              </li>
                         </ul>
                         </li>
                         <li class="nav-main-item">
                         <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                              <i class="nav-main-link-icon si si-bubbles"></i>
                              <span class="nav-main-link-name">Forum</span>
                         </a>
                         <ul class="nav-main-submenu">
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_forum_categories.html">
                                        <span class="nav-main-link-name">Categories</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_forum_topics.html">
                                        <span class="nav-main-link-name">Topics</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="be_pages_forum_discussion.html">
                                        <span class="nav-main-link-name">Discussion</span>
                                   </a>
                              </li>
                         </ul>
                         </li>
                         <li class="nav-main-item">
                         <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                              <i class="nav-main-link-icon si si-magnet"></i>
                              <span class="nav-main-link-name">Boxed Backend</span>
                         </a>
                         <ul class="nav-main-submenu">
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="bd_dashboard.html">
                                        <span class="nav-main-link-name">Dashboard</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="bd_search.html">
                                        <span class="nav-main-link-name">Search</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="bd_simple_1.html">
                                        <span class="nav-main-link-name">Simple 1</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="bd_simple_2.html">
                                        <span class="nav-main-link-name">Simple 2</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="bd_image_1.html">
                                        <span class="nav-main-link-name">Image 1</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="bd_image_2.html">
                                        <span class="nav-main-link-name">Image 2</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="bd_video_1.html">
                                        <span class="nav-main-link-name">Video 1</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link" href="bd_video_2.html">
                                        <span class="nav-main-link-name">Video 2</span>
                                   </a>
                              </li>
                         </ul>
                         </li>
                    </ul>
               </li>
               <li class="nav-main-heading">Master Data</li>
               <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                         <i class="nav-main-link-icon si si-energy"></i>
                         <span class="nav-main-link-name">Administrative Area</span>
                    </a>
                    <ul class="nav-main-submenu">
                         <li class="nav-main-item">
                         <a class="nav-main-link" href="{{url('/address')}}">
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