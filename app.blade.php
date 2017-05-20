<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css"/>
    <!-- Google fonts - Roboto -->
    <link href="{!! asset('http://fonts.googleapis.com/css?family=Roboto:300,400,500,700') !!}" rel="stylesheet" type="text/css"/>
    <!-- theme stylesheet-->
    <link href="{!! asset('css/style.blue.css') !!}" rel="stylesheet" type="text/css"/>
    <!-- jQuery Circle-->
    <link href="{!! asset('css/grasp_mobile_progress_circle-1.0.0.min.css') !!}" rel="stylesheet" type="text/css"/>
    <!-- Custom stylesheet - for your changes-->
    <link href="{!! asset('css/custom.css') !!}" rel="stylesheet" type="text/css"/>
    <!-- Favicon-->
    <link href="{!! asset('img/favicon.ico') !!}" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome CDN-->    
    <!-- you can replace it by local Font Awesome-->
    <script type="text/javascript" src="{{ asset('js/99347ac47f.js') }}"></script>
    <!-- Font Icons CSS-->
    <link href="{!! asset('css/icons.css') !!}" rel="stylesheet" type="text/css"/>  
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
            <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
        @yield('header')
  </head>
  <body>
    <!-- Side Navbar -->    
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center"><img src="img/avatar-1.png" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5 text-uppercase">
                @if(Auth::user()->name == 'Admin')
                    {{ Auth::user()->name }}
                @else
                    {{ Auth::user()->fname }}
                @endif
            </h2><!-- <span class="text-uppercase">Web Developer</span> -->
          </div>
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>K</strong><strong class="text-primary">F</strong></a></div>
        </div>
        <div class="main-menu">
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li class="active"><a href="index.html"> <i class="icon-home"></i><span>Home</span></a></li>
            <li> <a href="forms.html"><i class="icon-form"></i><span>Forms</span></a></li>
            <li> <a href="charts.html"><i class="icon-presentation"></i><span>Charts</span></a></li>
            <li> <a href="tables.html"> <i class="icon-grid"> </i><span>Tables                        </span></a></li>
            <li> <a href="login.html"> <i class="icon-interface-windows"></i><span>Login page                        </span></a></li>
            <li> <a href="#"> <i class="icon-mail"></i><span>Demo</span>
                <div class="badge badge-warning">6 New</div></a></li>
          </ul>
        </div>
        <div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#pages-nav-list" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Customers</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list" class="collapse list-unstyled">
                <li> <a href="#">Add Customer</a></li>
                <li> <a href="#">View All</a></li>
                <li> <a href="#">Inactive Customer</a></li>
                <!-- <li> <a href="#">Page 4</a></li> -->
              </ul>
            </li>
          </ul>
        </div>

        <div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#pages-nav-list1" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Partners</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list1" class="collapse list-unstyled">
                <li> <a href="#">Add Customer</a></li>
                <li> <a href="#">View All</a></li>
                <li> <a href="#">Inactive Customer</a></li>
                <!-- <li> <a href="#">Page 4</a></li> -->
              </ul>
            </li>
          </ul>
        </div>

        <div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#pages-nav-list2" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Users</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list2" class="collapse list-unstyled">
                <li> <a href="#">Add Customer</a></li>
                <li> <a href="#">View All</a></li>
                <li> <a href="#">Inactive Customer</a></li>
                <!-- <li> <a href="#">Page 4</a></li> -->
              </ul>
            </li>
          </ul>
        </div>

        <div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#pages-nav-list3" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Accounts</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list3" class="collapse list-unstyled">
                <li> <a href="#">Add Customer</a></li>
                <li> <a href="#">View All</a></li>
                <li> <a href="#">Inactive Customer</a></li>
                <!-- <li> <a href="#">Page 4</a></li> -->
              </ul>
            </li>
          </ul>
        </div>

        <div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#pages-nav-list4" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Areas</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list4" class="collapse list-unstyled">
                <li> <a href="#">Add Customer</a></li>
                <li> <a href="#">View All</a></li>
                <li> <a href="#">Inactive Customer</a></li>
                <!-- <li> <a href="#">Page 4</a></li> -->
              </ul>
            </li>
          </ul>
        </div>

        <div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#pages-nav-list5" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Collections</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list5" class="collapse list-unstyled">
                <li> <a href="#">Add Customer</a></li>
                <li> <a href="#">View All</a></li>
                <li> <a href="#">Inactive Customer</a></li>
                <!-- <li> <a href="#">Page 4</a></li> -->
              </ul>
            </li>
          </ul>
        </div>

        <div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#pages-nav-list6" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Expenses</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list6" class="collapse list-unstyled">
                <li> <a href="#">Add Customer</a></li>
                <li> <a href="#">View All</a></li>
                <li> <a href="#">Inactive Customer</a></li>
                <!-- <li> <a href="#">Page 4</a></li> -->
              </ul>
            </li>
          </ul>
        </div>

        <div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#pages-nav-list7" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Loans</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list7" class="collapse list-unstyled">
                <li> <a href="#">Add Customer</a></li>
                <li> <a href="#">View All</a></li>
                <li> <a href="#">Inactive Customer</a></li>
                <!-- <li> <a href="#">Page 4</a></li> -->
              </ul>
            </li>
          </ul>
        </div>

        <div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#pages-nav-list8" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Internals</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list8" class="collapse list-unstyled">
                <li> <a href="#">Add Customer</a></li>
                <li> <a href="#">View All</a></li>
                <li> <a href="#">Inactive Customer</a></li>
                <!-- <li> <a href="#">Page 4</a></li> -->
              </ul>
            </li>
          </ul>
        </div>

        <div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#pages-nav-list9" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Ledgers</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list9" class="collapse list-unstyled">
                <li> <a href="#">Add Customer</a></li>
                <li> <a href="#">View All</a></li>
                <li> <a href="#">Inactive Customer</a></li>
                <!-- <li> <a href="#">Page 4</a></li> -->
              </ul>
            </li>
          </ul>
        </div>

        <div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#pages-nav-list10" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Returns</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list10" class="collapse list-unstyled">
                <li> <a href="#">Add Customer</a></li>
                <li> <a href="#">View All</a></li>
                <li> <a href="#">Inactive Customer</a></li>
                <!-- <li> <a href="#">Page 4</a></li> -->
              </ul>
            </li>
          </ul>
        </div>

        <div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#pages-nav-list11" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Types</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list11" class="collapse list-unstyled">
                <li> <a href="#">Add Customer</a></li>
                <li> <a href="#">View All</a></li>
                <li> <a href="#">Inactive Customer</a></li>
                <!-- <li> <a href="#">Page 4</a></li> -->
              </ul>
            </li>
          </ul>
        </div>

      </div>
    </nav>
    <div class="page home-page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text hidden-sm-down"><strong class="text-primary">{{ config('app.name') }}</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
<!--                   <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                  </ul> -->
                </li>
                <!-- <li class="nav-item"><a href="login.html" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li> -->
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link logout"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout<i class="fa fa-sign-out"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      
      @yield('content')

      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>{{ config('app.name') }} &copy; {{ date('Y') }}</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Developed by <a href="http://techkanda.com" class="external">Tech Kanda</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Javascript files-->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/front.js') }}"></script> 
    @yield('footer')
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

  </body>
</html>