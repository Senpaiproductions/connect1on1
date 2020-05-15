<html lang="zxx"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Cupid Love - Dating HTML5 Template">
    <meta name="author" content="potenzaglobalsolutions.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cupid Love Dating HTML5 Template</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/favicon.ico">
    
    <!-- bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap-slider.min.css') }}" rel="stylesheet" type="text/css">
    
    <!-- mega menu -->
    <link href="{{ asset('css/mega-menu/mega_menu.css') }}" rel="stylesheet" type="text/css">
    
    <!-- font awesome -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    
    <!-- Flaticon -->
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet" type="text/css">
    
    <!-- owl-carousel -->
    <link href="{{ asset('css/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    
    
    <!-- General style -->
    <link href="{{ asset('css/general.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/connect.css') }}" rel="stylesheet" type="text/css">
    
    <!-- main style -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    
    <!-- Style customizer -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/skins/skin-ruby.css') }}" data-style="styles">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-customizer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/skin-default.css') }}" data-style="styles">

    <style>
      /*Template: Cupid Love Dating HTML5 Template
      Author: potenzaglobalsolutions.com
      Version: 1.0  
      Design and Developed by: potenzaglobalsolutions.com

      NOTE: This is color stylesheet of Color Scheme.

      */

      /*************************
          General
      *************************/

      /** selection **/
      *::-moz-selection {
        background: #ff3483;
        color: #fff;
        text-shadow: none;
      }

      ::-moz-selection {
        background: #ff3483;
        color: #fff;
        text-shadow: none;
      }

      ::selection {
        background: #ff3483;
        color: #fff;
        text-shadow: none;
      }

      /*Button BG*/
      .button.default,
      .button.orange,
      .button.yellow {
        background-color: #ff3483;
      }

      /*Button Border*/
      .button.default {
        border-color: #ff3483;
      }

      /*************************
        background color
      *************************/
      #preloader,
      .yellow-bg,
      .orange-bg,
      .banner-form h4,
      .btn-circle,
      .btn-circle.completed,
      .stepwizard-step::before,
      .contact-3 .address-block i,
      .radio input[type="radio"] + label::after,
      .checkbox input[type="checkbox"]:checked + label::after,
      .tab.tab-icon .nav-tabs li.active a, .tab.tab-icon .nav-tabs li a:hover,
      .tab.tab-bg li.active a, .tab.tab-bg .nav-tabs li a:hover,
      .play-btn,
      #ex1Slider1 .slider-track-low, #ex1Slider1 .slider-track-high,
      #ex1Slider2 .slider-selection,
      .tooltip-inner,
      .button.white-bg:hover,
      #main-slider .left.carousel-control .glyph-icon.flaticon-hearts:hover,
      #main-slider .right.carousel-control .glyph-icon.flaticon-hearts:hover,
      .dark-bg .owl-carousel .owl-nav i,
      .text-white .owl-carousel .owl-nav i,
      .section-title h1.title:before,
      .post.top-pos .post-date:before,
      .button.btn-outline:hover,
      .tab.tab-border li.active a,
      .tab.tab-border .nav-tabs li a:hover,
      .skill-bar.skill-box .progress-bar .progress-number,
      .skill-bar.skill-box .progress-bar .progress-type,
      .section-title h2.title:before,
      .section-title h3.title:before,
      .section-title h4.title:before,
      .section-title h5.title:before,
      .section-title h6.title:before,
      .timeline .timeline-year span,
      .timeline .timeline-body .title:before,
      .top-info.fill,
      .team-block .member-info > .trigger:before,
      .member-info .team-description,
      .testimonial.orange,
      .owl-carousel.owl-theme .owl-dots .owl-dot.active span,
      .owl-carousel.owl-theme .owl-dots .owl-dot:hover span,
      .footer .input-group-btn button,
      .footer .input-group-btn button:hover,
      .accordion.boxed .acd-group.acd-active .acd-heading:before,
      .accordion.border .acd-active .acd-heading,
      .owl-carousel .owl-nav i:hover,
      .text-white .counter.left_pos:after,
      .text-white .counter.left_pos:before,
      .data-table .table thead,
      .post .post-date,
      .progress-bar,
      .tab .nav-tabs li.active a,
      .tab .nav-tabs li a:hover,
      .top_dark .nav-tabs li.active a:hover > a:focus,
      .team .team-social-icon,
      .team.shadow .team-description,
      .team.boxed:hover .team-description,
      mark,
      .tab.tab-bor .nav-tabs li a:before,
      .tab .nav-tabs li a:hover,
      .tab.tab-light .nav-tabs li a:before,
      .tab.tab-vertical .nav-tabs li a::before,
      .hermes.tparrows,
      .dark-bg .owl-carousel.owl-theme .owl-dots .owl-dot.active span,
      .text-white .owl-carousel.owl-theme .owl-dots .owl-dot.active span,
      #header.dark-fancy .mega-menu > section.menu-list-items,
      .author-info:before,
      .service .service-block h4:before,
      .address-block.fill .glyph-icon,
      .sidebar-widget .widget-title:before,
      .sidebar-widget .widget-ul li .number,
      .sidebar-widget .tags li a,
      .pagination > li.active > a:hover,
      .pagination > li.active > a,
      .pagination > li > a:focus,
      .pagination > li > a:hover,
      .pagination > li > span:focus,
      .pagination > li > span:hover,
      .comments-1,
      blockquote::before,
      #header.fancy .topbar,
      #header.dark .topbar,
      .hermes .tp-arr-titleholder,
      .testimonial.yellow,
      #ajaxloader,
      .story-link > a,
      .owl-carousel .owl-nav i,
      .post-artical .post-details .button,
      .tab.tab-border .nav-tabs li.active a,
      .tab.tab-border .nav-tabs .nav-tabs li a:hover,
      .skill-box span,
      .button.btn-colored,
      .button.btn-dark:hover,
      .accordion.boxed .acd-des,
      .accordion.boxed .acd-active .acd-heading,
      .accordion .acd-active .acd-heading,
      .accordion.icon .acd-heading::before,
      .tab.tab-bg li.active a,
      .tab.tab-bg .nav-tabs li a:hover,
      .tab.tab-icon li.active a,
      .tab.tab-icon .nav-tabs li a:hover,
      .testimonial.left_pos .testimonial-avatar,
      .testimonial.left_pos .testimonial-info,
      .testimonial.bottom_pos .testimonial-info, 
      .banner-form .bootstrap-select.btn-group .dropdown-menu li.selected a {
        background: #ff3483;
      }

      .tab.tab-bor .nav-tabs li.active a,
      .tab.tab-bor .nav-tabs li a:hover,
      .tab.tab-light .nav-tabs li.active a,
      .tab.tab-light .nav-tabs li a:hover {
        background: none;
      }

      /*************************
        color
      *************************/
      .feature-box i:before,
      #header.defualt .topbar a:hover, #header.defualt .topbar li a:hover, #header.defualt .topbar-right li i:hover,
      .title2 > label,
      .banner h1 span,
      .dropdown a i,
      .owl-carousel.owl-theme .owl-dots .owl-dot:hover span:before,
      #header.fancy .mega-menu .menu-links > li > a:hover,
      .tab.border .nav-tabs li.active a, .tab.border .nav-tabs li a:hover,
      .dark-bg .testimonial.bottom_pos .author-info,
      .dark-bg .testimonial.bottom_pos .author-info span,
      #main-slider .slider-content span,
      #main-slider .carousel-indicators li.active::before,
      .team.team-1:hover .team-description .team-tilte h5 a,
      .text-white .timeline .timeline-body .title,
      .profile-table li:first-child ul > li,
      .post.top-pos .post-date,
      #header.clean .mega-menu .menu-links > li.active > a,
      #header.clean .topbar-left li i,
      #header.clean .topbar-right li i,
      ul li:after,
      a:focus,
      a:hover,
      a,
      button,
      input,
      .footer .footer-usefull ul li a:hover,
      .footer-widget ul li a:hover,
      .mega-menu .menu-links > li.active .drop-down-multilevel li.active a,
      .mega-menu .menu-links > li.active .drop-down-multilevel a:hover,
      .mega-menu .menu-links > li:hover,
      .mega-menu .drop-down a:hover,
      .mega-menu .drop-down-tab-bar a:hover,
      .mega-menu .drop-down-multilevel li:hover > a,
      .mega-menu .drop-down a:hover i,
      .mega-menu .drop-down-tab-bar a:hover i,
      .mega-menu .drop-down-multilevel li:hover > a i.fa,
      .mega-menu .menu-links > li > a:before,
      .mega-menu .menu-links > li.active > a:before,
      .feature-box.text label,
      .topbar-left li i,
      .topbar-right li i,
      .mega-menu .menu-links > li.active a,
      .mega-menu .menu-links > li > a:hover,
      .text-orange,
      .footer-address li i,
      .footer .recent-post .media-body span .fa,
      .footer-link ul li a:hover,
      ul.page-breadcrumb li span,
      .mega-menu .menu-links > li.active .drop-down li.active a,
      .mega-menu .menu-links > li.active .drop-down li.active a i,
      .mega-menu .menu-links > li.active .drop-down a:hover,
      .action-box.action-icon i,
      ul.page-breadcrumb li a:hover,
      .owl-carousel .owl-nav i,
      .button.link i,
      .text-white .about .about-details .title,
      .text-white .button.link,
      .button.link:hover,
      .counter.left_pos i,
      .text-white .counter.left_pos:after,
      .text-white .counter.left_pos:before,
      .counter.border i,
      .counter.left_icn i,
      .data-table .table-2 .table thead,
      ul.list li a:hover,
      .list li i,
      .post .post-meta a .fa,
      .post .post-meta a:hover,
      .team .team-description span,
      .team .team-description span,
      .team.left_pos .contact-info i:before,
      .team.shadow .team-social-icon a,
      .team.boxed .social-icons.border li a,
      .team.boxed .team-description span,
      .tab .nav-tabs li.active a:before,
      .tab.tab-bor .nav-tabs li.active a,
      .tab.tab-bor .nav-tabs li a:hover,
      .tab.tab-light .nav-tabs li.active a,
      .tab.tab-vertical .nav-tabs li.active a,
      .tab.tab-vertical .nav-tabs li a:hover,
      .tab.tab-vertical .nav-tabs li.active a:hover > a:focus,
      .tab .tab-content .title,
      #header.fancy .mega-menu .menu-links > li.active > a,
      #header.dark-fancy .topbar-right li i,
      .isotope-filters button.active,
      .isotope-filters button:hover,
      .text-white .testimonial.clean .author-info,
      .address-block .glyph-icon,
      .testimonial-info:before,
      .author-info span,
      .service .sidebar ul li a:hover,
      .service .sidebar ul li a.active,
      .section-title .pos,
      .title .pos,
      .sidebar-widget .widget-search i,
      .sidebar-widget .recent-post .media-body span .fa,
      .sidebar-widget .widget-ul li a:hover,
      .sidebar-widget .recent-post .media-body > a:hover,
      .mega-menu .menu-links > li.active .drop-down-multilevel li.active i,
      .mega-menu .menu-links > li.active .drop-down-multilevel li.active .drop-down-multilevel li.active a,
      .mega-menu .menu-links > li.active .drop-down-multilevel li.active .drop-down-multilevel li a:hover,
      .comment-box .section-title label,
      .comment-list .comment-metadata .fa,
      .text-yellow,
      footer .address-block i,
      .profile-details h5,
      .counter.fancy::before,
      .post-details .button,
      .owl-carousel.owl-theme .owl-dots .owl-dot.active span::before,
      .tab .nav-tabs li.active a,
      .tab .nav-tabs li a:hover,
      .top_dark .nav-tabs li.active a:hover > a:focus,
      .accordion .acd-heading::before,
      .accordion.icon .acd-des::before,
      .post-artical .post-details .button,
      .pagination > li.previous > a:hover,
      .pagination > li.next > a:hover,
      .button.btn-colored:hover,
      .button.btn-dark,
      .button.btn-outline:hover, 
      .story-link > a:hover {
        color: #ff3483;
      }

      .sidebar-widget .tags li a:hover{color: #ff3483 !important;}

      .comment-list .reply{color: #ffffff;}
      .testimonial.left_pos .testimonial-info::after {border-right-color: #ff3483;}
      .testimonial.bottom_pos .testimonial-info::after {border-top-color: #ff3483;}
      .team.left-pos .team-description {border-left: 2px solid #ff3483;}


      /*************************
        border color
      *************************/
      .feature-box.left_bor.small,
      .button.btn-colored,
      .button.btn-colored:hover,
      .button.btn-outline,
      .button.btn-outline:hover,
      .tab.border .nav-tabs li.active a, .tab.border .nav-tabs li a:hover,
      .accordion .acd-active .acd-heading,
      .feature-box.left_bor.ex-small,
      .timeline .timeline-year:before,
      .main-form .form-group .form-control:focus,
      .mega-menu .menu-links > li > a:hover,
      .mega-menu .menu-links > li.active > a,
      .banner-form .form-inner,
      #main-slider .left.carousel-control .glyph-icon.flaticon-hearts:hover,
      #main-slider .right.carousel-control .glyph-icon.flaticon-hearts:hover,
      .team-block .member-info > .trigger,
      .member-info .team-social-icon li a,
      .mega-menu .drop-down-multilevel,
      .mega-menu .drop-down,
      .mega-menu .drop-down-tab-bar,
      .button.orange,
      .footer .input-group.divcenter.input-group .form-control:focus,
      .footer .input-group-btn button,
      .footer .input-group-btn button:hover,
      .accordion.border .acd-active .acd-heading,
      .owl-carousel .owl-nav i,
      .counter.border i,
      .data-table .table-2 .table thead tr th,
      .team,
      .team.shadow .social-icons.border li a,
      .team.shadow .team-social-icon a,
      .team.boxed .social-icons.border li a,
      .tab .nav-tabs li.active a,
      .tab .nav-tabs li a:hover,
      .top_dark .nav-tabs li.active a:hover > a:focus,
      .testimonial-avatar img,
      .address-block .glyph-icon,
      form .form-group .form-control:focus,
      .custom-info,
      .sidebar-widget .widget-search input:focus,
      .sidebar-widget .tags li a:hover,
      .pagination > li.active > a:hover,
      .pagination > li.active > a,
      .pagination > li > a:focus,
      .pagination > li > a:hover,
      .pagination > li > span:focus,
      .pagination > li > span:hover,
      blockquote,
      blockquote::before,
      .comment-list .comments-photo img,
      .button.yellow,
      .service .sidebar ul li a:hover,
      .service .sidebar ul li a.active {
        border-color: #ff3483;
      }

      /*************************
        Text-Color White
      *************************/
      .action-box h1,
      .action-box h2,
      .action-box h3,
      .action-box h4,
      .action-box h5,
      .action-box h6,
      .timeline .timeline-year span,
      .orange-bg .counter.left_pos i,
      .yellow-bg .counter.left_pos i,
      .yellow-bg .counter.left_pos,
      .yellow-bg .counter.left_pos label,
      .top-info.fill .address-block .glyph-icon,
      .footer .top-info.fill .address-block .title,
      .top-info.fill .address-block span,
      .top-info.fill .address-block a,
      .action-box .button.border,
      .member-info .team-description h4,
      .member-info .team-description span,
      #header.fancy .topbar-left li,
      #header.fancy .topbar-left li a,
      #header.fancy .topbar-left li i,
      #header.fancy .topbar-right li,
      #header.fancy .topbar-right li a,
      #header.fancy .topbar-right li i,
      #header.dark .topbar-left li,
      #header.dark .topbar-left li a,
      #header.dark .topbar-left li i,
      #header.dark .topbar-right li,
      #header.dark .topbar-right li a,
      #header.dark .topbar-right li i,
      .button.yellow,
      .post .post-date,
      .team.shadow .team-description h4,
      .team.shadow .team-description span,
      .footer .input-group-btn button,
      .address-block.fill .glyph-icon,
      .notify-form .form-control {
        color: #ffffff;
      }


      .top-info.fill .address-block .glyph-icon,
      .action-box .button.border,
      .notify-form .form-control {border-color: #ffffff;}

      .owl-carousel .owl-nav i {
        -webkit-box-shadow: 0px 0px 10px 0px rgba(254, 112, 67, 0.5);
        -moz-box-shadow: 0px 0px 10px 0px rgba(254, 112, 67, 0.5);
        box-shadow: 0px 0px 10px 0px rgba(254, 112, 67, 0.5);
      }

      .button.btn-theme, .step-social, #back-to-top .top {
        background: rgb(254, 112, 67);
        background: -moz-linear-gradient(30deg, rgb(254, 112, 67) 30%, rgb(223, 63, 83) 70%);
        background: -webkit-linear-gradient(30deg, rgb(254, 112, 67) 30%, rgb(223, 63, 83) 70%);
        background: -o-linear-gradient(30deg, rgb(254, 112, 67) 30%, rgb(223, 63, 83) 70%);
        background: -ms-linear-gradient(30deg, rgb(254, 112, 67) 30%, rgb(223, 63, 83) 70%);
        background: linear-gradient(120deg, rgb(254, 112, 67) 30%, rgb(223, 63, 83) 70%);
      }

      .tooltip.top .tooltip-arrow{border-top-color: #ff3483;}

      .big-title {
        background: -webkit-linear-gradient(top, #fe7043, #ffbc05);
        background: linear-gradient(top, #fe7043, #fe7043);
        -webkit-background-clip: text; -webkit-text-fill-color: transparent;
      }

      .divider:before {
        background: url(../../images/divider-customizer/divider-skin-tomato.png) no-repeat 0 0;
      }

      .divider-2:before {
        background: url(../../images/divider-customizer-2/divider-skin-tomato.png) no-repeat 0 0;
      }

      .divider-3:before {
        background: url(../../images/divider-customizer-3/divider-skin-tomato.png) no-repeat 0 0;
      }

      .banner-form form .form-group select.form-control {background-image: url("../../images/form-icon/skin-tomato.png");}
    </style>
  </head>
    
  <body data-gr-c-s-loaded="true">

        <!--=================================
         preloader -->
        <div id="preloader" style="display: block;">
          <div class="clear-loading loading-effect"><img src="/images/loading.gif" alt=""></div>
        </div>
        <!--=================================
        header -->
        <header id="header" class="dark">
            <div class="topbar">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="topbar-left text-left">
                      <ul class="list-inline">
                        <li><a href="mailto:support@website.com"><i class="fa fa-envelope-o"> </i> support@website.com </a></li>
                        <li><a href="tel:(007)1234567890"><i class="fa fa-phone"></i> (007) 123 456 7890 </a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="topbar-right text-right">
                      <ul class="list-inline social-icons color-hover">
                        <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                      </ul>
                      <ul class="list-inline text-uppercase top-menu">
                        @guest
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>  
                            
                            @else
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                >{{ __('Logout') }}</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--=================================
           mega menu -->
            
            <div class="menu"> 
              <!-- menu start -->
              <nav id="menu" class="mega-menu" style="display: block;"> 
                <!-- menu list items container -->
                <section class="menu-list-items">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12"> 
                        <!-- menu logo -->
                        <ul class="menu-logo">
                          <li> <a href="index-default.html"><img src="/images/logo.png" alt="logo"> </a> <div class="menu-mobile-collapse-trigger"><span></span></div></li>
                        </ul>
                        <!-- menu links -->
                        <ul class="menu-links" style="display: none; max-height: 400px; overflow: auto;">
                          <!-- active class -->
                          <li class="hoverTrigger"><a href="{{ route('home') }}"> Home </a> 
                            
                          </li>
                          <li class="hoverTrigger"><a href="{{ route('frontend.members.index') }}">Discover</a></li>
                          <li class="hoverTrigger"><a href="{{ route('about') }}">About Us</a></li>
                          <li class="hoverTrigger"><a href="{{ route('contact') }}"> Contact </a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </section>
              </nav>
              <!-- menu end --> 
            </div>
          </header>
        
          <div id="app">
            @yield('content')

            @auth
            <chat-popup :user="{{ json_encode(Auth::user()) }}"></chat-popup>
            @endauth
          </div>
          
        <!--footer -->
        <footer class="page-section-pt text-white text-center" style="background: url(/images/pattern/04.png) no-repeat 0 0; background-size: cover;">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-10">
                <div class="row mb-5">
                  <div class="col-md-12">
                    <h2 class="title divider mb-3">Contact Us</h2>
                    <p class="lead mb-0">Eum cu tantas legere complectitur, hinc utamur ea eam. Eum patrioque mnesarchum eu, diam erant convenire et vis. Et essent evertitur sea, vis cu ubique referrentur, sed eu dicant expetendis. Eum cu</p>
                  </div>
                </div>
                <div class="row mb-5 sm-mb-2">
                  <div class="col-md-4">
                    <div class="address-block"> <i class="fa fa-desktop" aria-hidden="true"></i> <a href="mailto:somemail@mail.com">somemail@mail.com</a> </div>
                  </div>
                  <div class="col-md-4">
                    <div class="address-block"> <i class="fa fa-home" aria-hidden="true"></i>
                      <address>
                      T317 Timber Oak Drive<br>
                      Sundown, TX 79372
                      </address>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="address-block"> <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+000123456789">+000 - 123 - 456 - 789</a> </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <h4 class="title divider-3">We Love Talking</h4>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12">
                    <div id="formmessage" style="display:none">Success/Error Message Goes Here</div>
                    <form id="contactform" class="main-form" method="post" action="php/contact-form.php">
                      <div class="form-group half-group">
                        <div class="input-group">
                          <input id="name" placeholder="Your name here" class="form-control" name="name" type="text">
                        </div>
                      </div>
                      <div class="form-group half-group">
                        <div class="input-group">
                          <input placeholder="Your mail here" class="form-control" name="email" type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <textarea class="form-control input-message" placeholder="Your message here*" rows="7" name="message"></textarea>
                        </div>
                      </div>
                      <div class="form-group sm-mb-0">
                        <input type="hidden" name="action" value="sendEmail">
                        <button id="submit" name="submit" type="submit" value="Send" class="button btn-lg btn-theme full-rounded animated right-icn"><span>Submit Now<i class="glyph-icon flaticon-hearts" aria-hidden="true"></i></span></button>
                      </div>
                    </form>
                    <div id="ajaxloader" style="display:none"><img class="center-block" src="/images/loading.gif" alt=""></div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          
          <div class="footer-widget mt-5 sm-mt-3">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-8">
                  <div class="footer-logo mb-2"> <img class="img-center" src="/images/logo.png" alt=""> </div>
                  <div class="social-icons color-hover">
                    <ul>
                      <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                      <li class="social-gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                  </div>
                  <p class="text-white">© 2018  - Cupid Love All Right Reserved </p>
                </div>
              </div>
            </div>
          </div>
        </footer>
        
        <!--=================================
        footer --> 
        
        
        <div id="back-to-top" style="display: block;"><a class="top arrow" href="#top"><i class="fa fa-level-up"></i></a></div>
        
        <script src="{{ asset('js/app.js') }}"></script>

        @auth
        <!-- ChatPopup js -->
        <script type="text/javascript" src="{{ asset('js/chatPopup.js') }}"></script> 
        @endauth


        <!--=================================
         jquery --> 
        
        <!-- jquery  --> 
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script> 
        <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
        

        @yield('scripts')

        @auth
        <!-- ChatPopup js -->
        <script type="text/javascript" src="{{ asset('js/chatPopup.js') }}"></script> 
        @endauth

        <!-- bootstrap --> 
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script> 
        <script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap-slider.min.js') }}"></script>
        
        <script>
          $(document).ready(function(){
            $('.selectpicker').selectpicker();
            $('[data-toggle="tooltip"]').tooltip();
          });
        </script>
        
        <!-- appear --> 
        <script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script>

        <!-- validate --> 
        <script type="text/javascript" src="{{ asset('js/validate/jquery.validate.min.js') }}"></script>
        
        <!-- Menu --> 
        <script type="text/javascript" src="{{ asset('js/mega-menu/mega_menu.js') }}"></script>
        
        <!-- owl-carousel --> 
        <script type="text/javascript" src="{{ asset('js/owl-carousel/owl.carousel.min.js') }}"></script>
        <script>
            $(document).ready(function(){
                $(".owl-carousel").owlCarousel({
                    items:5,
                    loop:true,
                    margin:10,
                    autoplay:true,
                    autoplayTimeout:5000,
                    autoplayHoverPause:true
                });

                $(".owl-carousel-testimonial").owlCarousel({
                    items:1,
                    loop:true,
                    margin:10,
                    autoplay:true,
                    autoplayTimeout:5000,
                    autoplayHoverPause:true
                });
            });
        </script>
        
        <!-- counter --> 
        <script type="text/javascript" src="{{ asset('js/counter/jquery.countTo.js') }}"></script>
        
        <!-- style customizer  --> 
        <script type="text/javascript" src="{{ asset('js/style-customizer.js') }}"></script>

        <!-- custom --> 
        <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
        
        </body>
</html>

