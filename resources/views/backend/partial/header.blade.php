
   <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
            
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav float-xs-right">
             
              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="{{URL::asset('public/app-assets/images/portrait/small/avatar-s-1.png')}}" alt="avatar"><i></i></span><span class="user-name"></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="dropdown-divider"></div><a href="change_password.php" class="dropdown-item"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i> Change Password</a>
                                 <div class="dropdown-divider"></div><a href="log_out.php" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div id="fullscreen-search" class="fullscreen-search">
      <form class="fullscreen-search-form" action="product_detail.php" method="post">
        <input type="search" id="search" name="proname"  placeholder="Search..." class="fullscreen-search-input" >
        <input type="submit" class="fullscreen-search-submit" value="Search">
      </form> 
      <div class="fullscreen-search-content">
       
        <div class="fullscreen-search-result mt-2">
          <div class="row">
            <div class="col-lg-12">
              <h3  id="display"></h3>
           
            </div>
          </div>
        </div>
      </div><span class="fullscreen-search-close"></span>
    </div>
    <div class="fullscreen-search-overlay"></div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
 <li class=" nav-item"><a href="dashboard.php"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Dashboard</span></a>
          </li>
     

          <li class=" nav-item"><a href="#"><i class="icon-circle"></i><span data-i18n="nav.dash.main" class="menu-title">Testimonials</span></a>
            <ul class="menu-content">
              <li class=""><a href="{{route('Admin.Create_categories')}}" data-i18n="nav.dash.ecommerce" class="menu-item">Testimonial  Categories</a>
              </li>
              <li><a href="{{route('Admin.All_categories')}}" data-i18n="nav.dash.project" class="menu-item">
              View Categories</a>
              </li>
               <li class=""><a href="{{route('Admin.Add_testimonials')}}" data-i18n="nav.dash.ecommerce" class="menu-item">Add Testimonial </a>
              </li>
              <li><a href="{{route('Admin.All_testimonials')}}" data-i18n="nav.dash.project" class="menu-item">
              View Testimonial </a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-circle"></i><span data-i18n="nav.dash.main" class="menu-title">Courses</span></a>
            <ul class="menu-content">
              <li class=""><a href="{{route('Admin.Add_courses')}}" data-i18n="nav.dash.ecommerce" class="menu-item">Add Course</a>
              </li>
              <li><a href="{{route('Admin.All_courses')}}" data-i18n="nav.dash.project" class="menu-item">
              View Course</a>
              </li>
               <li class=""><a href="{{route('Admin.Add_testimonials')}}" data-i18n="nav.dash.ecommerce" class="menu-item">Add Testimonial </a>
              </li>
              <li><a href="{{route('Admin.All_testimonials')}}" data-i18n="nav.dash.project" class="menu-item">
              View Testimonial </a>
              </li>
            </ul>
          </li>
           
          

     
        </ul>
      </div>
      <!-- /main menu content-->
      <!-- main menu footer-->
   
      <!-- main menu footer-->
    </div>
    <!-- / main menu-->