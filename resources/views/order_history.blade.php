@extends('master')
@section('header_content')
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="/user/home">Home</a></li>
				  <li class="active">Order History</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Items</td>
							<td class="description">Details</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						
					@foreach($orders as $item)
						<tr>
							<td class="cart_product">
							<a href="/user/detail/{{$item->id}}">
							
								 <img src="{{asset('admin_images/' .$item->sub_galary)}} " style="height: 300px; width: 250px;"  alt="img">
							</a>
							</td>

							<td class="cart_description">
							 <h3>Name: {{$item->name}}</h3>
							 <h3>Price: {{$item->price}}
							 <h3>Description: {{$item->description}}</h3>
							 <h3> Delivery Status:{{$item->status}}</h3>
							 <h3> Address:{{$item->address}}</h3>
							 <h3> Payment Status:{{$item->payment_status}}</h3>
							 <h3> Payment Mode:{{$item->payment_mode}}</h3>
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
