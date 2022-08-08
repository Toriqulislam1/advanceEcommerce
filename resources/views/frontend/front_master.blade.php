<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8"/>
	<title>Technoval IT</title>
	<meta name="description" content="Software Development, Digital Marketing & Video edit services">
	<meta name="keywords" content="Digital Marketing, Software Development, Video Editing">
	<meta name="author" content="technovalbd">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="theme-color" content="#fff">
	<!--website-favicon-->
	<link href="frontend/assets/images/favicon.png" rel="icon">
	<!--plugin-css-->
	<link href="{{ asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('frontend/assets/css/plugin.min.css')}}" rel="stylesheet">
	<link href="{{ asset('frontend/assets/css/swiper.min.css')}}" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<!-- template-style-->
	<link href="{{ asset('frontend/assets/css/style.css')}}" rel="stylesheet">
	<link href="{{ asset('frontend/assets/css/responsive.css')}}" rel="stylesheet">
	<link href="{{ asset('frontend/assets/css/darkmode.css')}}" rel="stylesheet">
	    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        /* we use dot (.) to target class and
        hash (#) to target id... */
        #particles-js {
            width: 100%;
            height: 100vh;
            background-image:
                linear-gradient(rgba(0, 0, 0, 0.7),
                    rgba(0, 0, 0, 0.7)),
                url("frontend/assets/img/img.jpg");
            background-position: center;
            background-size: cover;
        }

        .center-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        h1 {
            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 100px;
        }
    </style>
	
 </head>
 <body>      

@include('frontend.body.header')

	  <!--Start Hero Slider-->
	  
@yield('content') 


		
@include('frontend.body.footer')
<!--End Footer-->

<!-- particles js files -->

    <script src="{{ asset('frontend/assets/js/particles.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/app.js')}}"></script>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script> 
<script src="{{ asset('frontend/assets/js/plugin.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/swiper.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/preloader.js')}}"></script>
<!--common script file-->
<script src="{{ asset('frontend/assets/js/main.js')}}"></script>

 
</body>
</html>