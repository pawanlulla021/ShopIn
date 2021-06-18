<?php
 use App\Http\Controllers\ProductController;
 $totla=0;
 if(Session::has('user'))
 {
  $totla = ProductController::Cartitem();
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop in | kid</title>
    <link href="{{asset('User_Theme/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('User_Theme/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('User_Theme/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('User_Theme/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('User_Theme/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('User_Theme/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('User_Theme/css/responsive.css')}}" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +91 91********</a></li>
								<li><a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcRzDfllcbMmnbbTxTFgKpxvQbDTxXmSlKBnpRKMNNQSmCpXXJCmLbrQzrSjDmwvdLmJmjBSF"><i class="fa fa-envelope"></i>pawanlulla0**@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
					
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">

						<!--	logo image  -->
						</div>
						<div class="btn-group pull-right">
				
							
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="/user/order"><i class="fa fa-user"></i> Order History</a></li>
								<li><a href="/user/ordernow"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="/user/cart"><i class="fa fa-shopping-cart"></i> Cart |{{$totla}}|</a></li>
								@if(Session::has('user'))
        <li class="nav-item dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
         <span class="caret"></span></a>
          <ul class="dropdown-menu">  
					 <li><a href="/user/logout"><i class="fa fa-unlock"></i>Logout</a></li>
          </ul>
        </div>
      </li>
      @else
			<li><a href="/user/login"><i class="fa fa-lock"></i> Login/Register</a></li>
			
      @endif
							
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="/user/home" >Home</a></li>
								<li class="dropdown"><a href="#" class="active">Shop By Category<i class="fa fa-angle-down"></i></a>
                  <ul role="menu" class="sub-menu">
                    <li><a href="/user/men">Men</a></li>
										<li><a href="/user/women" >Women</a></li> 
										<li><a href="/user/kid" class="active">Kids</a></li>
										<li><a href="/user/electronic">Electronics</a></li> 
                  </ul>
                </li> 
								 
								<li><a href="/user/about">About</a></li>
								<li><a href="/user/contact">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	
	<section>
		<div class="container">
			<div class="row">
				
				
				<div>
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">In Kids</h2>
            
					@foreach($womens as $witem)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
									<a href="/user/detail/{{$witem['id']}}">
									<img src="{{asset('admin_images/' .$witem->sub_galary)}}" style="width:190px; height:200px" alt="women">
										<!--<img src="{{$witem['sub_galary']}}" alt="img" />-->
										<h4>{{$witem['name']}}</h4>
										<p>RS {{$witem['price']}}</p>
									</a>	
										
									</div>
									
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										
									</ul>
								</div>
							</div>
						</div>
					@endforeach	
          
					</div><!--features_items-->
					
				</div>
			</div>
		</div>
	</section>
	<footer id="footer"><!--Footer-->

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="/user/contact">Contact Us</a></li>
								<li><a href="/user/order">Order Status</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>Quick Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="/user/men">Mens</a></li>
								<li><a href="/user/women">Womens</a></li>
								<li><a href="/user/kid">Kid</a></li>
								<li><a href="/user/electronic">Electronic</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>About</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2021 pawan lulla Inc. All rights reserved.</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
  <script src="{{asset('User_Theme/js/jquery.js')}}"></script>
	<script src="{{asset('User_Theme/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('User_Theme/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('User_Theme/js/price-range.js')}}"></script>
  <script src="{{asset('User_Theme/js/jquery.prettyPhoto.js')}}"></script>
  <script src="{{asset('User_Theme/js/main.js')}}"></script>
</body>
</html>