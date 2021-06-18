@extends('master')
@section('header_content')	
	<section>
		<div class="container">
			<div class="row">
				
				
				<div>
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">In Women</h2>
          
					@foreach($womens as $witem)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
									<a href="/user/detail/{{$witem['id']}}">
									<img src="{{asset('admin_images/' .$witem->sub_galary)}}" style="width:180px; height:380px" alt="women">
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
@endsection		

@section('footer_content')	  	
@endsection
