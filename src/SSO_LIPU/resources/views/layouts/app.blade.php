<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="css/vendors.min.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.min.css" rel="stylesheet">
    <link href="css/themes//style.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">

</head>
<body>
<div id="app">

<header class="page-topbar" id="header">
  <div class="navbar navbar-fixed">
    <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-shadow" style="background-color:black !important;">
      <div class="nav-wrapper">
        </div-->
        <ul class="navbar-list right">
          <li class="hide-on-med-and-down">
            <a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);">
              <i class="material-icons">settings_overscan</i>
            </a>
          </li>
          <li class="hide-on-large-only search-input-wrapper">
            <a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);">
              <i class="material-icons">search</i>
            </a>
          </li>
          <!--li>
            <a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown">
              <i class="material-icons">notifications_none <small class="notification-badge">5</small>
              </i>
            </a>
            <ul class="dropdown-content" id="notifications-dropdown" tabindex="0">
              <li tabindex="0">
                <h6>NOTIFICATIONS <span class="new badge">5</span>
                </h6>
              </li>
              <li class="divider" tabindex="0"></li>
              <li tabindex="0">
                <a class="black-text" href="#!">
                  <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed! </a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
              </li>
              <li tabindex="0">
                <a class="black-text" href="#!">
                  <span class="material-icons icon-bg-circle red small">stars</span> Completed the task </a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
              </li>
              <li tabindex="0">
                <a class="black-text" href="#!">
                  <span class="material-icons icon-bg-circle teal small">settings</span> Settings updated </a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
              </li>
              <li tabindex="0">
                <a class="black-text" href="#!">
                  <span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started </a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
              </li>
              <li tabindex="0">
                <a class="black-text" href="#!">
                  <span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report </a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
              </li>
            </ul>
          </li-->


           @guest
             @if (Route::has('register'))

            <li tabindex="0">
                <a class="text-darken-1" href="{{ route('register') }}">
                  <i class="material-icons">help_outline</i> Regístrate</a>
              </li>

              @endif

        @else
          <li>
            <a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown">
              <span class="avatar-status avatar-online">
                <img src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/avatar/avatar-7.png" alt="avatar">
                <i></i>
              </span>
            </a>
            <ul class="dropdown-content" id="profile-dropdown" tabindex="0">

                

              <li tabindex="0">
                <a class="grey-text text-darken-1" href="user-profile-page.html">
                  <i class="material-icons">person_outline</i>{{ Auth::user()->name }}</a>
              </li>

          
             
              <li tabindex="0">
                <a class="grey-text text-darken-1" href="page-faq.html">
                  <i class="material-icons">help_outline</i> Ayuda</a>
              </li>
              <li class="divider" tabindex="0"></li>
              <li tabindex="0">
                <a class="grey-text text-darken-1" href="user-lock-screen.html">
                  <i class="material-icons">lock_outline</i> Factura</a>
              </li>
              <li tabindex="0">

                <a class="grey-text text-darken-1" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="material-icons">keyboard_tab</i> {{ __('Salir') }}
                                    </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                <!--a class="grey-text text-darken-1" href="user-login.html">
                  <i class="material-icons">keyboard_tab</i> Logout </a-->
              </li>
            </ul>
          </li>
          <li>
            <a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="slide-out-right">
              <i class="material-icons">format_indent_increase</i>
            </a>
          </li>
        </ul>

            @endguest
        <!-- translation-button-->
        <!-- notifications-dropdown-->
        <!-- profile-dropdown-->
      </div>
      <nav class="display-none search-sm">
        <div class="nav-wrapper">
          <form id="navbarForm">
            <div class="input-field search-input-sm">
              <input class="search-box-sm mb-0" type="search" required="" id="search" placeholder="Explore Materialize" data-search="template-list">
              <label class="label-icon active" for="search">
                <i class="material-icons search-sm-icon">search</i>
              </label>
              <i class="material-icons search-sm-close">close</i>
              <ul class="search-list collection search-list-sm display-none ps">
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                  <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                  <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                </div>
              </ul>
            </div>
          </form>
        </div>
      </nav>
    </nav>
  </div>
</header>






 @guest
@if (Route::has('register'))

 @endif

 @else



<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light navbar-full sidenav-active-rounded">
  <div class="brand-sidebar" style="background-color:black !important;">
    <h1 class="logo-wrapper">
      <a class="brand-logo darken-1" href="index.html">
        <img src="img/logo.png" alt="materialize logo">
        <span class="logo-text hide-on-med-and-down">Sistema</span>
      </a>
      <a class="navbar-toggler" href="#">
        <i class="material-icons">radio_button_checked</i>
      </a>
    </h1>
  </div>
  <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow ps ps--active-y" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
    



    <li class="bold">
      <a class="collapsible-header waves-effect waves-cyan active" href="JavaScript:void(0)" tabindex="0">
        <i class="material-icons">dvr</i>
        <span class="menu-title" data-i18n="Templates">Administración</span>
      </a>
      <div class="collapsible-body">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
          <li>
            <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)" tabindex="0">
              <i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Vertical">Usuarios</span>
            </a>
            <div class="collapsible-body">
              <ul class="collapsible" data-collapsible="accordion">
                <li>
                  <a href="../vertical-modern-menu-template/">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Modern Menu">Permisos</span>
                  </a>
                </li>
                <li>
                  <a href="../vertical-menu-nav-dark-template/">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Navbar Dark">Roles</span>
                  </a>
                </li>
                <li>
                  <a href="../vertical-gradient-menu-template/">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Gradient Menu">Usuarios</span>
                  </a>
                </li>
              
              </ul>
            </div>
          </li>
          <li>
            <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)" tabindex="0">
              <i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Horizontal">Catálogos</span>
            </a>
            <div class="collapsible-body">
              <ul class="collapsible" data-collapsible="accordion">
                <li>
                  <a href="../horizontal-menu-template/">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Horizontal Menu">Rubros</span>
                  </a>
                </li>
                 <li>
                  <a href="../horizontal-menu-template/">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Horizontal Menu">Marcas</span>
                  </a>
                </li>

                  <li>
                  <a href="../horizontal-menu-template/">
                    <i class="material-icons">radio_button_unchecked</i>
                    <span data-i18n="Horizontal Menu">Unidades de negocio</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </li>
    
    <li class="navigation-header">
      <a class="navigation-header-text">Pages </a>
      <i class="navigation-header-icon material-icons">more_horiz</i>
    </li>
    <li class="bold">
      <a class="waves-effect waves-cyan " href="user-profile-page.html">
        <i class="material-icons">person_outline</i>
        <span class="menu-title" data-i18n="User Profile">Mi perfil</span>
      </a>
    </li>
    <li class="bold">
      <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)" tabindex="0">
        <i class="material-icons">content_paste</i>
        <span class="menu-title" data-i18n="Pages">API´s</span>
      </a>
      <div class="collapsible-body">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
          <li>
            <a href="page-contact.html">
              <i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Contact">Contact</span>
            </a>
          </li>
          <li>
            <a href="page-blog-list.html">
              <i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Blog">Blog</span>
            </a>
          </li>
          <li>
            <a href="page-search.html">
              <i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Search">Search</span>
            </a>
          </li>
          <li>
            <a href="page-knowledge.html">
              <i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Knowledge">Knowledge</span>
            </a>
          </li>
          <li>
            <a href="page-timeline.html">
              <i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Timeline">Timeline</span>
            </a>
          </li>
          <li>
            <a href="page-faq.html">
              <i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="FAQs">FAQs</span>
            </a>
          </li>
          <li>
            <a href="page-account-settings.html">
              <i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Account Settings">Account Settings</span>
            </a>
          </li>
          <li>
            <a href="page-blank.html">
              <i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Page Blank">Page Blank</span>
            </a>
          </li>
          <li>
            <a href="page-collapse.html">
              <i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Page Collapse">Page Collapse</span>
            </a>
          </li>
        </ul>
      </div>
    </li>
    
   
    <li class="bold">
      <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)" tabindex="0">
        <i class="material-icons">lock_open</i>
        <span class="menu-title" data-i18n="Authentication">Authentication</span>
        <span class="badge badge pill purple float-right mr-10">new</span>
      </a>
      <div class="collapsible-body">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
          <li>
            <a href="user-login.html" target="_blank">
              <i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Login">Login</span>
            </a>
          </li>
          <li>
            <a href="user-register.html" target="_blank">
              <i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Register">Register</span>
            </a>
          </li>
          <li>
            <a href="user-forgot-password.html" target="_blank">
              <i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Forgot Password">Forgot Password</span>
            </a>
          </li>
          <li>
            <a href="user-lock-screen.html" target="_blank">
              <i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Lock Screen">Lock Screen</span>
            </a>
          </li>
        </ul>
      </div>
    </li>

   
    <li class="bold">
      <a class="waves-effect waves-cyan " href="https://pixinvent.ticksy.com/" target="_blank">
        <i class="material-icons">help_outline</i>
        <span class="menu-title" data-i18n="Support">Suporte</span>
      </a>
    </li>
    <div class="ps__rail-x" style="left: 0px; bottom: -656px;">
      <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 656px; height: 265px; right: 0px;">
      <div class="ps__thumb-y" tabindex="0" style="top: 82px; height: 33px;"></div>
    </div>
  </ul>
  <div class="navigation-background"></div>
  <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out">
    <i class="material-icons">menu</i>
  </a>
</aside>

 @endguest

   <script src="js/vendors.min.js" ></script>
   <script src="js/plugins.min.js" ></script>
   <script src="js/customizer.min.js" ></script>
   <script src="js/search.min.js" ></script>

        <main class="py-4">
            @yield('content')
        </main>


    </div>
</body>
</html>
