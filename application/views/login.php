<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bot</title>

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
	
  <style type="text/css">
/*.c1
{
  background-color: #FFFFFF;
}*/
  </style>
 </head>
  
  <body>	
    <!-- <div class="row"> -->
	<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                  <a class="navbar-brand" href=""> BOT</a>
                </div>				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                     
                        <!--<li><a href="#feature">Feature</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#our-team">Our Team</a></li> 
                        <li><a href="#contact">Contact</a></li>  -->
	
    
                    </ul>
                </div>
            </div><!--/.container-->
         </nav><!--/nav		 -->
     </header><!--/header -->
  <!-- </div> -->
  
    <br><br><br>
    <div class="row">
      <div class="col-sm-6 ">
       <?php  $this->load->view('home_image');?>
      </div>
      <div class="col-sm-6">
			<div class="jumbotron c1">		
			<div class="wrapper">
   	
	
<?php echo form_open_multipart('seller_ctrl/view1'); ?>
<form class="form-signin"> 
<div class="form-signin">
      <center><h1 class="form-signin-heading">Login</h1>
      <?php if(isset($message)) echo $message; ?><br></center>
      <label>Username</label><input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" /><br>
      <label>Password</label><input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <label class="checkbox">
        <!--<input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me-->
		<center><a href="#">forgot password?</a></center>
      </label>
      <input  class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value='Login'> 
	  </div>
	  </form>
<?php form_close(); ?>	  
  
  </div>
</div></div>
</div>
		
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