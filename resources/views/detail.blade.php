@extends('master')
@section('header_content')
<section>		
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="/user/home">Home</a></li>
				  <li class="active">Product Details</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
					<img  class="detail-img" src="{{asset('admin_images/' .$product['sub_galary'])}}" style="height: 500px;"   alt="Image">
           <!--<img class="detail-img" src="{{$product['sub_galary']}}" alt="Image" style="height: 500px;"> -->
          </div>

          <div class="col-sm-6">
           <a href="/user/home">Go To Home</a>
           <h2>{{$product['name']}}</h2>
           <h3>Price: {{$product['price']}}</h3>
           <h4>Details: {{$product['description']}}</h4>
           <h5>Category: {{$product['category']}}</h5>
           <br><br>
            <form action="/user/add_to_cart" method="POST">
             @csrf
             <input type="hidden" name="product_id" value={{$product['id']}} >
             <button class="btn btn-primary">Add to cart</button>
            </form>
            <br>
						 <h3>For Order! Add it into your cart.</h3> 
            
            <br><br>
          </div>
        </div>
      </div> 
		 </div>
		</div>
</section> <!--/#cart_items-->
@endsection	
@section('footer_content')	
  	
@endsection
