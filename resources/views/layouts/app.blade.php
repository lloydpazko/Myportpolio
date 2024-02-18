<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">

        <!-- title of site -->
        <title>Lloyd Paliuanan | portpolio</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="{{ asset('image/icon') }}" href="{{ asset('/assets/logo/favicon.png') }}"/>

        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css') }}">

		<!--flat icon css-->
		<link rel="stylesheet" href="{{ asset('/assets/css/flaticon.css') }}">

		<!--animate.css-->
        <link rel="stylesheet" href="{{ asset('/assets/css/animate.css') }}">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="{{ asset('/assets/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/assets/css/owl.theme.default.min.css') }}">

        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

		<!-- bootsnav -->
		<link rel="stylesheet" href="{{ asset('/assets/css/bootsnav.css') }}" >

        <!--style.css-->
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

        <!--responsive.css-->
        <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    @include('layouts.navigation')

    @include('index')

    @include('layouts.footer')

	<body>

        <script src="{{ asset('assets/js/jquery.js') }}"></script>

        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

		<!--bootstrap.min.js-->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

		<!-- bootsnav js -->
		<script src="{{ asset('assets/js/bootsnav.js') }}"></script>

		<!-- jquery.sticky.js -->
		<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>

		<!-- for progress bar start-->

		<!-- progressbar js -->
		<script src="{{ asset('assets/js/progressbar.js') }}"></script>

		<!-- appear js -->
		<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>

		<!-- for progress bar end -->

		<!--owl.carousel.js-->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


        <!--Custom JS-->
        <script src="{{ asset('assets/js/custom.js') }}"></script>

    </body>

</html>
