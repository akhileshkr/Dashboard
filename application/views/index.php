<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mob Shop</title>

    <!-- Bootstrap -->
	
	
	<link href ="<?php echo base_url().'bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/css/font-awesome.min.csss';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/css/animate.css';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/css/overwrite.cs';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/css/animate.min.css';?>" rel="stylesheet">	
	<link href ="<?php echo base_url().'bootstrap/css/style.css';?>" rel="stylesheet">	
	<link href ="<?php echo base_url().'bootstrap/js/jquery-2.1.1.min.js';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/js/bootstrap.min.js';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/js/parallax.min.js';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/js/wow.min.js';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/js/jquery.easing.min.js';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/js/functions.js';?>" rel="stylesheet">
	
	
	

  </head>
  <body>	
  
 <!--  <script type="text/javascript" src="""></script>
<script type="text/javascript" src=""></script> -->

	<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Mob Shop</a>
                </div>				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url("index.php/seller_ctrl");?>">Home</a></li>
                        <li><a href="<?php echo base_url("index.php/seller_ctrl/view1");?>">Bill</a></li>
						<li><a href="<?php echo base_url("index.php/seller_ctrl/search");?>">Search</a></li>
						<li><a href="<?php echo base_url("index.php/id/login");?>">Login</a></li>  
    
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
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
					<div class="item">						
						<img src="<?php echo base_url("assets/img/7.jpg")?>" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								<h2><span>One And Only Online Shopping Way Of Life</span></h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
								<p>One Day One Purchase Keeps The Shopping Time Away</p>
								
								</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								<form class="form-inline">
									<!-- <div class="form-group">
										<!-- <button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required">Live Demo</button> -->
									<!-- </div> -->
									<!-- <div class="form-group"> -->
										<!-- <button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required">Get Now</button> -->
									<!-- </div> -->
								</form>
							</div>
						</div>
				    </div>
			
				    <div class="item">
						<img src="<?php echo base_url("assets/img/6.jpg")?>" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">								
								<h2>Fully Automative</h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.3s">								
								<p>One Day One Purchase Keeps The Shopping Time Away</p>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">								
								<form class="form-inline">
									<!-- <div class="form-group">
										<button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live Demo</button>
									</div>
									<div class="form-group">
										<button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Get Now</button>
									</div> -->
								</form>
							</div>
						</div>
				    </div> 
				    <div class="item active">
						<img src="<?php echo base_url("assets/img/1.jpg")?>" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								<h2>New Tremondous Spec</h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
								<p>One Day One Purchase Keeps The Shopping Time Away</p>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								<form class="form-inline">
									<!-- <div class="form-group">
										<button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live Demo</button>
									</div>
									<div class="form-group">
										<button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Get Now</button>
									</div> -->
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
	
						<!-- Features -->
	
	<div id="feature">
		<div class="container">
			<div class="row">
				<div class="text-center">
					<h3>Features</h3>
					<p> If you work irregular hours or are very busy, then you probably don’t have the time to visit the store.<br> Shopping online allows you to buy things without hurting your schedule.</p>
				</div>
				<div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<div class="hi-icon-wrap hi-icon-effect">
							<i class="fa fa-laptop"></i>						
							<h2>Incredible convenience </h2>
							<p> In comparison to a brick and mortar store with fixed hours, online shoppers can choose any time of the day or night to get on the Web and shop</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<div class="hi-icon-wrap hi-icon-effect">
							<i class="fa fa-heart-o"></i>
							<h2>Variety</h2>
							<p>Shopping online allows you to find many products that you wouldn’t be able to find in a physical store.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<div class="hi-icon-wrap hi-icon-effect">
							<i class="fa fa-cloud"></i>
							<h2>No pressure sales</h2>
							<p> We've all been awkwardly propositioned by eager salespeople. You don't have to put up with that online.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<div class="hi-icon-wrap hi-icon-effect">
							<i class="fa fa-camera"></i>
							<h2>Better Prices</h2>
							<p>Another reason is because you can easily browse through dozens of different websites to find the best price.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
								<!-- Gallery -->
								
	<div id="gallery">
		<div class="container">
			<div class="text-center">
				<h3>Gallery</h3>
				<p>Shopping online is convenient. You don’t need to get dressed and drive to your favorite store.</p>
			</div>
			<div class="row">
				<figure class="effect-chico">						
					<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
						<a href="<?php echo base_url("assets/img/work/g1.jpg")?>" class="flipLightBox">
						<img src="<?php echo base_url("assets/img/work/g1.jpg")?>" class="img-responsive" alt="">
						</a>						
					</div>
				</figure>
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
						<a href="C:\wamp64\www\adocus\application\assets\img\work\2.jpg" class="flipLightBox">
						<img src="C:\wamp64\www\adocus\application\assets\img\work\2.jpg" class="img-responsive" alt="">
						</a>
					</div>
				</figure>	
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
						<a href="C:\wamp64\www\adocus\application\assets\img\work\g2.jpg" class="flipLightBox">
						<img src="C:\wamp64\www\adocus\application\assets\img\work\g2.jpg" class="img-responsive" alt="">
						</a>
					</div>
				</figure>
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
						<a href="C:\wamp64\www\adocus\application\assets\img\work\g3.jpg" class="flipLightBox">
						<img src="C:\wamp64\www\adocus\application\assets\img\work\g3.jpg" class="img-responsive" alt="">
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
							<a href="C:\wamp64\www\adocus\application\assets\img\work\5.jpg" class="flipLightBox">
							<img src="C:\wamp64\www\adocus\application\assets\img\work\5.jpg" class="img-responsive" alt="">
							</a>
						</div>
					</figure>	
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="C:\wamp64\www\adocus\application\assets\img\work\g4.jpg" class="flipLightBox">
							<img src="C:\wamp64\www\adocus\application\assets\img\work\g4.jpg" class="img-responsive" alt="">
							</a>
						</div>
					</figure>	
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="C:\wamp64\www\adocus\application\assets\img\work\7.jpg" class="flipLightBox">
							<img src="C:\wamp64\www\adocus\application\assets\img\work\7.jpg" class="img-responsive" alt="">
							</a>
						</div>
					</figure>	
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="C:\wamp64\www\adocus\application\assets\img\work\g5.jpg" class="flipLightBox">
							<img src="C:\wamp64\www\adocus\application\assets\img\work\g5.jpg" class="img-responsive" alt="">
							</a>
						</div>
					</figure>
				</div>
			</div>
		</div>
	</div><!--/#gallery-->
	
							
	
									<!-- Our Team -->
	
	<div id="our-team">
		 <div class="container">
			<div class="text-center">
				<h3>Our Team</h3>
				<p>Team spirit spurs me on. I've always found it easier to be strong for other people than for myself.</p>
			</div>			
		</div> 
		<div class="team">
			<div class="container">
				<div class="row">
					<div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
						<div class="text-center">
							<img src="C:\wamp64\www\adocus\application\assets\img\team\t5.jpg" class="img-responsive" alt="">
							<h2> Apple </h2>
							<!-- <h4>Founder & CEO</h4> -->
							<p>Sensors on the phone include Compass Magnetometer, Proximity sensor, Accelerometer, Ambient light sensor, Gyroscope and Barometer. </p>
						</div>
					</div>
					<div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
						<div class="text-center">
							<img src="C:\wamp64\www\adocus\application\assets\img\team\t7.jpg" class="img-responsive" alt="">
							<h2>Sony</h2>
							<!-- <h4>Creative Director</h4> -->
							<p>Accelerometer, gyro, proximity, compass,12 MP, autofocus, LED flash,Geo-tagging, touch focus, face/smile detection, panorama,White, Black, Silver</p>
						</div>
					</div>
					<div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
						<div class="text-center">
							<img src="C:\wamp64\www\adocus\application\assets\img\team\t6.jpg" class="img-responsive" alt="">
							<h2>Samsung</h2>
							<!-- <h4>Creative Director</h4> -->
							<p>Super AMOLED capacitive touchscreen, 16M colors,Corning Gorilla Glass 4 back panel16 MP, f/1.9, 28mm, OIS, autofocus, LED flash,Fingerprint,gyro,heart rate</p>
						</div>
					</div>
					<div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
						<div class="text-center">
							<img src="C:\wamp64\www\adocus\application\assets\img\team\t4.jpg" class="img-responsive" alt="">
							<h2>Xiaomi</h2>
							<!-- <h4>Creative Director</h4> -->
							<p>Android 4.3 (Jelly Bean), upgradable to 4.4.2 (KitKat), planned upgrade to 6.0,13 MP, f/2.2,autofocus, dual-LED flash,Non-removable Li-Ion 3050 mAh battery</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!--/#our-team-->
	
									<!-- Contact Us -->
	<footer>
		<div id="contact">
			<div class="container">
				<div class="text-center">
					<h3>Contact Us</h3>
					<p>One Day One Purchase Keeps The Shopping Time Away</p>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
						<h2>Contact us any time</h2>
						<p>The meeting of two personalities is like the contact of two chemical substances: if there is any reaction, both are transformed.</p>				
					</div>				
					
					<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
						<h2>Contact Info</h2>
						<ul>
							<li><i class="fa fa-home fa-2x"></i> Office # 38, Suite 54 Elizebth Street, Victoria State Newyork, USA 33026</li><hr>
							<li><i class="fa fa-phone fa-2x"></i> +38 000 129900</li><hr>
							<li><i class="fa fa-envelope fa-2x"></i> info@mobsite.net</li>
						</ul>
					</div>
					
					<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">  	
					    <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                                <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                        <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                        <div class="validation"></div>
                                </div>
                            
                            <button type="submit" class="btn btn-theme pull-left">SEND MESSAGE</button>
                        </form>
					</div>	
				</div>
			</div>
		</div><!--/#contact-->					
		<div class="container">
			<div class="sub-footer">
				<div class="text-center">
					<div class="col-md-12">
						<form class="form-inline">
							<div class="form-group">
								<button type="purchase" name="purchase" class="btn btn-primary btn-lg" required="required">Enter Your Email</button>
							</div>
							<div class="form-group">
								<button type="subscribe" name="subscribe" class="btn btn-primary btn-lg" required="required">Subscribe Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>			
		<div class="social-icon">
			<div class="container">
				<div class="col-md-6 col-md-offset-3">						
					<ul class="social-network">
						<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						<li><a href="#" class="dribbble tool-tip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#" class="pinterest tool-tip" title="Pinterest"><i class="fa fa-pinterest-square"></i></a></li>
					</ul>						
				</div>
			</div>
		</div>						
		 <div class="text-center">
			<div class="copyright">
				&copy; Mob Shop
                <!--<div class="credits">
                   
                    <a href="https://bootstrapmade.com/">Happy Shopping</a> by <a href="https://bootstrapmade.com/">Tremondous Shopping</a>
                </div>-->
			</div>
		</div>								
	</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   	
	 <script src="<?php echo base_url().'bootstrap/js/jquery-2.1.1.min.js';?>"></script>		
    <!-- Include all compiled plugins (below), or include individual files as needed-->
    
	<script src="<?php echo base_url().'bootstrap/js/bootstrap.min.js';?>"></script>
	<script src="<?php echo base_url().'bootstrap/js/wow.min.js';?>"></script>
	<script src="<?php echo base_url().'bootstrap/js/jquery.easing.min.js';?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'bootstrap/js/fliplightbox.min.js';?>"></script>
	<script src="<?php echo base_url().'bootstrap/js/functions.js';?>"></script>
    <script src="contactform/contactform.js"></script>
	
</body>
</html>