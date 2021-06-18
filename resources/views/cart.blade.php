@extends('master')
@section('header_content')	
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="/user/home">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<a class="btn btn-primary" href="/user/ordernow">Order Now</a> <br><br>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="total">Remove</td>

							<td></td>
						</tr>
					</thead>
					<tbody>
						
					@foreach($products as $item)
						<tr>
							<td class="cart_product">
							<a href="/user/detail/{{$item->id}}">
							
								 <img src="{{asset('admin_images/' .$item->sub_galary)}} " style="height: 300px; width: 250px;"  alt="img">
							</a>
							</td>
							<td class="cart_description">
							 <p class="cart_total_price">Item Name:<br>
							 {{$item->name}}</p>
							 <p class="cart_total_price">Item Description:<br>
							 {{$item->description}}</p>
							</td>
							<td class="cart_price">
							<p class="cart_total_price">{{$item->price}}</p>
							</td>
						
							</td>
						
							<td>
								<a class="btn btn-primary" href="/removeitemfromcart/{{$item->cart_id}}" >Remove</a>
							</td>
						</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
@endsection

@section('footer_content')	

@endsection
