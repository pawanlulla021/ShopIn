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
    <title>Shop in | home</title>
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

						<!--	logo image-->
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
								
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="/user/home" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop By Category<i class="fa fa-angle-down"></i></a>
                  <ul role="menu" class="sub-menu">
                    <li><a href="/user/men">Men</a></li>
										<li><a href="/user/women">Women</a></li> 
										<li><a href="/user/kid">Kids</a></li>
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
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
							<li data-target="#slider-carousel" data-slide-to="3"></li>
						</ol>
						
						<div class="carousel-inner">
						@foreach($products as $item)
							<div class="item {{$item['id']==19 ?'active':''}}">
								
							<div class="col-sm-6">
									<h4></h4>
									<h2>{{$item['name']}}</h2>
									<p>{{$item['description']}}</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>

								<a href="/user/detail/{{$item['id']}}">
								<div class="col-sm-6">
								<img src="{{asset('admin_images/' .$item['sub_galary'])}}"  style="height:200px" class="girl img-responsive" alt="Home">
								<!--<img src="{{$item['sub_galary']}}" style="width:550px; height:400px !important" class="girl img-responsive" alt="" />-->
								</div>
								</a>
							</div>
						@endforeach	
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				
				
				<div>
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">In Home</h2>
            <h3> For Women<h3>
					@foreach($womens as $witem)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
									<a href="/user/detail/{{$witem['id']}}">
									<img src="{{asset('admin_images/' .$witem->sub_galary)}}" style="width:210px; height:260px" alt="women">
										<!--<img src="{{$witem['sub_galary']}}" alt="img" />-->
										<h2>{{$witem['name']}}</h2>
										<p>RS {{$witem['price']}}</p>
									</a>	
										
									</div>
									
								</div>
								
							</div>
						</div>
					@endforeach	
          
					<h3>For Men<h3>
					@foreach($mens as $mitem)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">	
									<div class="productinfo text-center">
									<a href="/user/detail/{{$mitem['id']}}">
									<img src="{{asset('admin_images/' .$mitem->sub_galary)}}" style="width:210px; height:260px" alt="men">
										<!--<img src="{{$mitem['sub_galary']}}" alt="img" />-->
										<h2>{{$mitem['name']}}</h2>
										<p>RS {{$mitem['price']}}</p>
									</a>

									</div>
									
								</div>
								
							</div>
						</div>
					@endforeach

					<h3>Sunglasses<h3>
					@foreach($kids as $kitem)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
									<a href="/user/detail/{{$kitem['id']}}">
									<img src="{{asset('admin_images/' .$kitem->sub_galary)}}" style="width:210px; height:260px" alt="kid">
										
										<h2>{{$kitem['name']}}</h2>
										<p>RS {{$kitem['price']}}</p>
									</a>	
									</div>
									
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