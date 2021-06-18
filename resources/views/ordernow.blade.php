@extends('master')
@section('header_content')

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="/user/home">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Address Details</h2>
			</div>

			

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
            <p>Bill To</p>
            <form action="/user/orderplace" method="POST">
            @csrf
									<input type="text" name="name" placeholder="Name *">
									<input type="text" name="address" placeholder="Address 1 *">
									<input type="text"  placeholder="Address 2">
                  <input type="text" name="pin" placeholder="Pin Code *">
                  <input type="text" name="phone" placeholder="Mobile Phone">
									<input type="hidden" name="status" value="Pending">
                  <select>
										<option>-- Country --</option>
										<option>India</option>
									</select>
                  <br><br>
									<select>
										<option>-- State --</option>
										<option>Maharashtra</option>
									</select>
                  <br><br>
									<select>
										<option>-- City --</option>
										<option>Mumbai</option>
									</select>
								
						</div>
					</div>
					

				
				</div>
			</div>
      <div class="step-one">
				<h2 class="heading">Review & Payment</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
        <tbody>
    <tr>
     <th scope="row">Amount</th>
     <td>{{$total}}</td>
    </tr>
    
    <tr>
      <th scope="row">Tax</th>
      <td>0 RS</td>
    </tr>

    <tr>
      <th scope="row">Delivery</th>
      <td>20 RS</td>
    </tr>

    <tr>
      <th scope="row">Total Amount</th>
      <td>{{$total+20}} RS</td>
    </tr>
  </tbody>
 </table>
 </div>
	<div class="payment-options">
   <div class="step-one">
		<h2 class="heading">Payment Mode :-</h2>
	 </div>
   <input type="radio" name="payment" value="Cash"><span>Online Payment</span><br>
   <input type="radio" name="payment" value="Cash"><span>Cash On Devilery</span><br>
   <button type="submit" class="btn btn-primary">Order</button>
   </form>
	</div>
 </div>
</section> <!--/#cart_items-->  

@endsection	
@section('footer_content')
