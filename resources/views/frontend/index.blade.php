<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User Panel</title>

    <!-- Bootstrap -->
    <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('frontend/css/animate.css')}}">
	<link rel="stylesheet" href="{{url('frontend/css/overwrite.css')}}">
	<link href="{{url('frontend/css/animate.min.css')}}" rel="stylesheet"> 
	<link href="{{url('frontend/css/style.css')}}" rel="stylesheet"/>	  
  </head>

  <body>	
	@include('frontend.partials.header')

	<div class="slider">		
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators visible-xs">
					<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-slider" data-slide-to="1"></li>
					<li data-target="#carousel-slider" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">						
						<img src="{{url('frontend/img/7.jpg')}}" class="img-responsive" alt=""> 
				    </div>
				    <div class="item">
						<img src="{{url('frontend/img/6.jpg')}}" class="img-responsive" alt=""> 
				    </div>  
				</div>
				
				<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i> 
				</a>
				
				<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i> 
				</a>
			</div> <!--/#carousel-slider-->
		</div><!--/#about-slider-->
	</div><!--/#slider-->

	@yield('content')
	@include('frontend.partials.footer')
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{url('frontend/js/jquery-2.1.1.min.js')}}"></script>		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{url('frontend/js/bootstrap.min.js')}}"></script>	
	<script src="{{url('frontend/js/parallax.min.js')}}"></script>
	<script src="{{url('frontend/js/wow.min.js')}}"></script>
	<script src="{{url('frontend/js/jquery.easing.min.js')}}"></script>
	<script type="{{url('text/javascript')}}" src="{{url('frontend/js/fliplightbox.min.js')}}"></script>
	<script src="{{url('frontend/js/functions.js')}}"></script>
    <script src="{{url('frontend/contactform/contactform.js')}}"></script>

</body>
</html>
