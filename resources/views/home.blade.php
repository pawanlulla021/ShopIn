@extends('master')
@section('header_content')	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
						@foreach($products as $item)	
							<li data-target="#slider-carousel" data-slide-to="" class= "{{$item['id']==19 ?'active':''}} "></li>	
						@endforeach	
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
@endsection
	

@section('footer_content')	
  	
@endsection

