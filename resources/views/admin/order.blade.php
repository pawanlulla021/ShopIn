@extends('admin/master_admin')
    @section('content_header')  

    <!-- Header-->
    <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Orders</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">View All Orders</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                      
                                    <tr>
                                            <th>Product Detail</th>
                                            <th>Customer Deatil</th>
                                            <th>Update Status</th>
                                            
                                        </tr>

                                        
                                    </thead>
                                    <tbody>

                                     @foreach($todos as $todo)
                                       <tr>
                                        <td>
                                         Product Name: {{$todo->name}} <br>
                                         Price: {{$todo->price}} <br>
                                         Description: {{$todo->description}} 
                                        </td>
                                        
                                        <td>
                                         Name: {{$todo->cus_name}} <br>
                                         Mobile: {{$todo->mobile_no}}<br>
                                         Address: {{$todo->address}}<br>
                                         Pin Code: {{$todo->pin_code}}
                                         
                                        
                                        </td>
                                        

                                        <td>
                                        <form action="{{'/deliveryupdate/'.$todo->order_id }}" method="POST" enctype="multipart/form-data">
                                         @csrf
                                         @method('PATCH')
                                         <label for="exampleFormControlTextarea1" class="form-label">Select category</label>
                                           <select  name="category" class="form-control">
                                            <option selected>{{$todo->status}}</option>
                                            <option value="Pick">Pick</option>
                                            <option value="Pack">Pack</option>
                                            <option value="Ship">Ship</option>
                                            <option value="Delivered">Delivered</option>
                                           </select>
                                         <br>
                                          <button type="submit" class="btn btn-primary">Submit</button>
                                         </form>
                                         </td>
                                       </tr>   
                                     @endforeach
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->



    <!-- Right Panel -->
    @endsection
@section('content_footer')
@endsection	
    





