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
    
    <!-- main style -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    
    <!-- Style customizer -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/skins/skin-ruby.css') }}" data-style="styles">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-customizer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/skin-default.css') }}" data-style="styles">
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
                          <li class="hoverTrigger"><a href="{{ route('frontend.members.index') }}">Discover</a>
                          </li>
                          @auth
                            <li class="hoverTrigger"><a href="{{ route('user.dashboard') }}"> Connect </a></li>
                          @endauth
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

