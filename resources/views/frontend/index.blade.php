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
    <!-- =======================================================
        Theme Name: RISHABH BUS
        Theme URL: https://bootstrapmade.com/RISHABH BUS-free-simple-landing-page-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
      
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
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								<h2><span>Clean & Fully Modern Design</span></h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
								
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								<form class="form-inline">
									<div class="form-group">
										<button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required">Live Demo</button>
									</div>
									<div class="form-group">
										<button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required">Get Now</button>
									</div>
								</form>
							</div>
						</div>
				    </div>
			
				    <div class="item">
						<img src="{{url('frontend/img/6.jpg')}}" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">								
								<h2>Fully Responsive</h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.3s">								
								<p></p>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">								
								<form class="form-inline">
									<div class="form-group">
										<button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live Demo</button>
									</div>
									<div class="form-group">
										<button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Get Now</button>
									</div>
								</form>
							</div>
						</div>
				    </div> 
				    <div class="item">
						<img src="{{url('frontend/img/1.jpg')}}" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								<h2>Modern Design</h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
								<p></p>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								<form class="form-inline">
									<div class="form-group">
										<button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live Demo</button>
									</div>
									<div class="form-group">
										<button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Get Now</button>
									</div>
								</form>
							</div>
						</div>
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
	
	<div id="feature">
		<div class="container">
			<div class="row">
				<div class="text-center">
					<h3>Features</h3>
					<p>Providing you the possible BUS and Service<br>To our Customer</p>
				</div>
				<div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<div class="hi-icon-wrap hi-icon-effect">
							<i class="fa fa-laptop"></i>						
							<h2>Fully Compatible</h2>
							<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<div class="hi-icon-wrap hi-icon-effect">
							<i class="fa fa-heart-o"></i>
							<h2>Always Ready & Clean</h2>
							<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<div class="hi-icon-wrap hi-icon-effect">
							<i class="fa fa-cloud"></i>
							<h2>Fully A/C</h2>
							<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<div class="hi-icon-wrap hi-icon-effect">
							<i class="fa fa-camera"></i>
							<h2>Less Cost</h2>
							<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="gallery">
		<div class="container">
			<div class="text-center">
				<h3>Gallery</h3>
				<p>BUSES For<br>Our Customer</p>
			</div>
			<div class="row">
				<figure class="effect-chico">						
					<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
						<a href="{{url('frontend/img/work/1.jpg')}}" class="flipLightBox">
						<img src="{{url('frontend/img/work/1.jpg')}}" class="img-responsive" alt="">
						</a>						
					</div>
				</figure>
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
						<a href="{{url('frontend/img/work/2.jpg')}}" class="flipLightBox">
						<img src="{{url('frontend/img/work/2.jpg')}}" class="img-responsive" alt="">
						</a>
					</div>
				</figure>	
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
						<a href="{{url('frontend/img/work/3.jpg')}}" class="flipLightBox">
						<img src="{{url('frontend/img/work/3.jpg')}}" class="img-responsive" alt="">
						</a>
					</div>
				</figure>
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
						<a href="{{url('frontend/img/work/4.jpg')}}" class="flipLightBox">
						<img src="{{url('frontend/img/work/4.jpg')}}" class="img-responsive" alt="">
						</a>
					</div>	
				</figure>
			</div>
		</div>
		<div class="gallery">
			<div class="container">
				<div class="row">
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="{{url('frontend/img/work/5.jpg')}}" class="flipLightBox">
							<img src="{{url('frontend/img/work/5.jpg')}}" class="img-responsive" alt="">
							</a>
						</div>
					</figure>	
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="{{url('frontend/img/work/6.jpg')}}" class="flipLightBox">
							<img src="{{url('frontend/img/work/6.jpg')}}" class="img-responsive" alt="">
							</a>
						</div>
					</figure>	
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="{{url('frontend/img/work/7.jpg')}}" class="flipLightBox">
							<img src="{{url('frontend/img/work/7.jpg')}}" class="img-responsive" alt="">
							</a>
						</div>
					</figure>	
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="{{url('frontend/img/work/8.jpg')}}" class="flipLightBox">
							<img src="{{url('frontend/img/work/8.jpg')}}" class="img-responsive" alt="">
							</a>
						</div>
					</figure>
				</div>
			</div>
		</div>
	</div><!--/#gallery-->
	
	
	
	<div id="pricing">
		<div class="container">
			<div class="text-center">
				<h3>Pricing Table</h3>
				<p>Here you can Select the According to your pocket<br>
				& according to your comfort</p>
			</div>
			
			<div class="pricing-area text-center">
                <div class="row">
                    <div class="col-sm-4 plan price-one wow fadeInDown" data-wow-offset="0" data-wow-delay="0.2s">
                        <ul>
                            <li class="heading-one">
                                <h2>High Class</h2>
                                <span>1200</span>
                            </li>
                            <li>Window seat</li>
                            <li>WI-Fi</li>
                            <li>Mobile Charging Point</li>
                            <li>Sleeping Seat</li>
                            <li>Food</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-two wow fadeInDown" data-wow-offset="0" data-wow-delay="0.6s">
                        <ul>
                            <li class="heading-two">
                                <h2>Standard Class</h2>
                                <span>1100</span>
                            </li>
                            <li>Window seat</li>
                            <li>WI-Fi</li>
                            <li>Mobile Charging Point</li>
                            <li>Sleeping Seat</li>
                            <li>Food</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-three wow fadeInDown" data-wow-offset="0" data-wow-delay="0.9s">
                        <img src="{{url('frontend/img/ri.png')}}">
                        <ul>
                            <li class="heading-three">
                                <h2>Premium Class</h2>
                                <span>1000</span>
                            </li>
                            <li>Window seat</li>
                            <li>WI-Fi</li>
                            <li>Mobile Charging Point</li>
                            <li>Sleeping Seat</li>
                            <li>Food</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-four wow fadeInLeft">
                        <ul>
                            <li class="heading-four">
                                <h2>Basic Class</h2>
                                <span>800</span>
                            </li>
                            <li>Window seat</li>
                            <li>WI-Fi</li>
                            <li>Mobile Charging Point</li>
                            <li>Sleeping Seat</li>
                            <li>Food</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-five wow fadeInLeft">
                        <ul>
                            <li class="heading-five">
                                <h2>Basic Standard class</h2>
                                <span>600</span>
                            </li>
                            <li>Window seat</li>
                            <li>WI-Fi</li>
                            <li>Mobile Charging Point</li>
                            <li>Sleeping Seat</li>
                            <li>Food</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-six wow fadeInRight">
                         <img src="{{url('frontend/img/rib.png')}}">
                        <ul>
                            <li class="heading-six">
                                <h2>Basic Premium Class</h2>
                                <span>500</span>
                            </li>
                            <li>Window seat</li>
                            <li>WI-Fi</li>
                            <li>Mobile Charging Point</li>
                            <li>Sleeping Seat</li>
                            <li>Food</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-seven wow fadeInRight">
                        <ul>
                            <li class="heading-seven">
                                <h2>VIP</h2>
                                <span>2000</span>
                            </li>
                            <li>Window seat</li>
                            <li>WI-Fi</li>
                            <li>Mobile Charging Point</li>
                            <li>Sleeping Seat</li>
                            <li>Food</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Sign up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--/pricing-area-->			
		</div>
	</div><!--/#pricing-->
	
	<div id="our-team">
		<div class="container">
			<div class="text-center">
				<h3>Our Agents</h3>
				<p>They will help you Solve your Problem<br>& Provide best Facility to you</p>
			</div>
			<div class="row">
				<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<img src="{{('frontend/img/team/1.png')}}" alt="">
						<h2>Rohan</h2>
						<h4>Manager</h4>
						<p>Phone No-11111111</p>
					</div>
				</div>
				<div class="col-md-4 wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<img src="{{url('frontend/img/team/2.png')}}" alt="">
						<h2>Mohan</h2>
						<h4>Assitent Manager</h4>
						<p>Phone No-2222222222</p>
					</div>
				</div>
				<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<img src="{{url('frontend/img/team/3.png')}}" alt="">
						<h2>Ankur</h2>
						<h4>Driver</h4>
						<p>Phone No-3333333</p>
					</div>
				</div>	
			</div>
		</div>
		
	
	@include('frontend.partials.footer')
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{url('frontend/js/jquery-2.1.1.min.js')}}"></script>		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{url('frontend/js/bootstrap.min.js')}}"></script>	
	<script src="{{url('frontend/js/parallax.min.js')}}"></script>
	<script src="{{url('frontend/js/wow.min.js')}}"></script>
	<script src="{{url('frontend/js/jquery.easing.min.js')}}"></script>
	<script type="text/javascript" src="{{url('frontend/js/fliplightbox.min.js')}}"></script>
	<script src="{{url('frontend/js/functions.js')}}"></script>
    <script src="{{url('frontend/contactform/contactform.js')}}"></script>
    
</body>
</html>