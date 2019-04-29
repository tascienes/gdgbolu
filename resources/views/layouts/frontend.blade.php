

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

    <meta name="keywords" content="prje prje prje" />

    <meta name="author" content="furkay" />







    <!-- Facebook and Twitter integration -->

    <meta property="og:title" content="prje"/>

    <meta property="og:image" content=""/>

    <meta property="og:url" content="prje"/>

    <meta property="og:site_name" content="prje"/>

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







@include("frontend.include.header")



@yield("content")



@include("frontend.include.footer")







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









