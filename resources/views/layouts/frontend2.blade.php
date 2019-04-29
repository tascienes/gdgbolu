

<!DOCTYPE HTML>

<html>

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    @foreach($settings as $setting)

        @if($setting["key"]=="title")



        @endif

    @endforeach



    <title>@yield("title",$setting['value'])</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset("images/logo_2.png")}}" />





    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="prje" />

    <meta name="keywords" content="prje" />

    <meta name="author" content="furkay" />







    <!-- Facebook and Twitter integration -->

    <meta property="og:title" content=""/>

    <meta property="og:image" content=""/>

    <meta property="og:url" content=""/>

    <meta property="og:site_name" content=""/>

    <meta property="og:description" content=""/>

    <meta name="twitter:title" content="" />

    <meta name="twitter:image" content="" />

    <meta name="twitter:url" content="" />

    <meta name="twitter:card" content="" />



    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset("assets/frontend/css/jquery.fancybox.min.css")}}">
	

    <link rel="stylesheet" type="text/css" href="{{asset("assets/frontend/css/all.css")}}">

    <!-- Animate.css -->

    <link rel="stylesheet" href="{{asset("assets/frontend/css/animate.css")}}">

    <!-- Icomoon Icon Fonts-->

    <link rel="stylesheet" href=" {{asset("assets/frontend/css/icomoon.css")}}">

    <!-- Bootstrap  -->

    <link rel="stylesheet" href=" {{asset("assets/frontend/css/bootstrap.css")}}" >



    <!-- Magnific Popup -->

    <link rel="stylesheet" href="{{asset("assets/frontend/css/magnific-popup.css")}}">



    <!-- Owl Carousel  -->

    <link rel="stylesheet" href=" {{asset("assets/frontend/css/owl.carousel.min.css")}}">



    <link rel="stylesheet" href="{{asset("assets/frontend/css/owl.theme.default.min.css")}}">



    <!-- Theme style  -->

    <link rel="stylesheet" href="{{asset("assets/frontend/css/style.css")}}">



@stack("customCss")





<!-- Modernizr JS -->

    <script src="{{asset("assets/frontend/js/modernizr-2.6.2.min.js")}}"></script>



    <!-- FOR IE9 below -->

    <!--[if lt IE 9]>

    <script src="{{asset("assets/frontend/js/respond.min.js")}}"></script>



    <![endif]-->
		 



</head>

<body>



<div class="fh5co-loader"></div>



<div id="page">

    <nav class="fh5co-nav" role="navigation">

        <div class="top">

            <div class="container">

                <div class="row">

                    <div class="col-xs-12 text-right">

                        <!--<p class="num">Call: +01 123 456 7890</p>-->

                        <ul class="fh5co-social">

                            <li><a href="https://www.twitter.com/gdgbolu"><i class="icon-twitter"></i></a></li>

                            <li><a href="https://www.facebook.com/gdgbolu"><i class="icon-facebook"></i></a></li>

                            <li><a href="https://www.instagram.com/gdgbolu"><i class="icon-instagram"></i></a></li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        <div class="top-menu">

            <div class="container">

                <div class="row">

                    <div class="col-xs-1">



                        <div id="fh5co-logo"><a href="/"><img style="height: 35px;" src=" {{asset("images/beyazlogo.png")}}"></a></div>

                    </div>

                    <div class="col-xs-11 text-right menu-1">

                        <ul>

                            <li class="active"><a href="/">Anasayfa</a></li>

                            <li><a href="/gallery">Galeri</a></li>

                            <li><a href="/about-us">Hakkımızda</a></li>

                            <li class="has-dropdown">

                                <a style="cursor: pointer;">Etkinlikler</a>

                                <ul class="dropdown">

                                    <li><a href="/gdg">DevFest</a></li>

                                    <li><a href="/wtm">Wtm</a></li>

                                    <li><a href="/workshop">Workshop</a></li>

                                </ul>

                            </li>

                            <li><a href="/team">Ekibimiz</a></li>

                            <li><a href="/sponsor">Sponsorlar</a></li>

                            <!-- <li class="btn-cta"><a href="#"><span>Login</span></a></li>

                                <li class="btn-cta"><a href="#"><span>Create a Course</span></a></li> -->

                        </ul>

                    </div>

                </div>



            </div>

        </div>

    </nav>







@yield("content")











<div class="gototop js-top">

    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>

</div>



<!-- jQuery -->

<script src="{{asset("assets/frontend/js/jquery.min.js")}}"></script>



<script type="text/javascript" src="{{asset("assets/frontend/js/jquery.fancybox.min.js")}}"></script>



<!-- jQuery Easing -->

<script src="{{asset("assets/frontend/js/jquery.easing.1.3.js")}}"></script>



<!-- Bootstrap -->

<script src="{{asset("assets/frontend/js/bootstrap.min.js")}}"></script>



<!-- Waypoints -->

<script src="{{asset("assets/frontend/js/jquery.waypoints.min.js")}}"></script>



<!-- Stellar Parallax -->

<script src="{{asset("assets/frontend/js/jquery.stellar.min.js")}}"></script>



<!-- Carousel -->

<script src="{{asset("assets/frontend/js/owl.carousel.min.js")}}"></script>



<!-- countTo -->

<script src="{{asset("assets/frontend/js/jquery.countTo.js")}}"></script>


<!-- Magnific Popup -->

<script src="{{asset("assets/frontend/js/jquery.magnific-popup.min.js")}}"></script>



<script src="{{asset("assets/frontend/js/magnific-popup-options.js")}}"></script>



<!-- Main -->

<script src="{{asset("assets/frontend/js/main.js")}}"></script>



<script type="text/javascript" src="{{asset("assets/frontend/js/forms.js")}}"></script>



@stack("customJs")

</body>

</html>









