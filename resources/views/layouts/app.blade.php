<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>The Kimera Ministries | @yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="@yield('desc')" />

    <meta name="keywords" content="@yield('keywords')" />

    <!-- Google Fonts -->

    <link href='http://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <!-- Styles -->

    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('css/mediaelementplayer.min.css') }}" />

    <link href="{{ asset('css/revolution.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/settings.css') }}" media="screen" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />

    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/colors/red.css') }}" title="color1" />

    <link rel="alternate stylesheet" type="text/css" href="{{ asset('css/colors/wedgewood.css') }}" title="color2" />

    <link rel="alternate stylesheet" type="text/css" href="{{ asset('css/colors/blue.css') }}" title="color3" />

    <link rel="alternate stylesheet" type="text/css" href="{{ asset('css/colors/green.css') }}" title="color4" />

    <link rel="alternate stylesheet" type="text/css" href="{{ asset('css/colors/darkgreen.css') }}" title="color5" />

    @yield('css')

</head>

<body>

    <div class="theme-layout">
        @include('includes.header')

        @if (request()->is('/'))
          @include('includes.slider')
        @endif

        @yield('content')

        @include('includes.footer')

    </div>

    <!-- SCRIPTS-->

    <script type="text/javascript" src="{{ asset('js/modernizr.custom.17475.js') }}"></script>
    <script src="{{ asset('js/jquery.1.10.2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.poptrox.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/enscroll-0.5.2.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/mediaelement-and-player.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.downCount.js') }}"></script>
    <script class="source" type="text/javascript">
        $('.countdown').downCount({

            date: '09/09/2015 12:00:00',

            offset: +10

        });

    </script>
    <script>
        $(document).ready(function () {
            $(".tweets-slides").owlCarousel({

                autoPlay: 5000,

                slideSpeed: 1000,

                singleItem: true,

                transitionStyle: "fadeUp",

                navigation: false

            }); /*** TWEETS CAROUSEL ***/

            $(".products-carousel").owlCarousel({

                autoPlay: false,

                rewindSpeed: 3000,

                slideSpeed: 2000,

                items: 2,

                itemsDesktop: [1199, 2],

                itemsDesktopSmall: [979, 2],

                itemsTablet: [768, 2],

                itemsMobile: [479, 1],

                navigation: false,

            }); /*** PRODUCTS CAROUSEL ***/



        });

        $('audio,video').mediaelementplayer();

    </script>


    <!-- SLIDER REVOLUTION -->

    <script type="text/javascript" src="{{ asset('js/revolution/jquery.themepunch.tools.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/revolution/jquery.themepunch.revolution.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/revolution/extensions/revolution.extension.slideanims.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/revolution/extensions/revolution.extension.layeranimation.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/revolution/extensions/revolution.extension.navigation.min.js') }}"></script>

    @yield('js')

    <script type="text/javascript">

        jQuery(document).ready(function () {

            jQuery("#slider1").revolution({

                sliderType: "standard",

                sliderLayout: "fullwidth",

                delay: 9000,

                navigation: {

                    arrows: { enable: true }

                },

                gridwidth: 1100,

                gridheight: 500

            });

        });

    </script>

</body>
</html>
