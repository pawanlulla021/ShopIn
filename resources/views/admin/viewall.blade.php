
    @extends('admin/master_admin')
    @section('content_header')
  
 
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Products</h1>
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
                                <strong class="card-title">View All Products</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                      
                                    <tr>
                                            <th>Name & Price</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Product Image</th>
                                        </tr>

                                        
                                    </thead>
                                    <tbody>

                                     @foreach($todos as $todo)
                                       <tr>
                                         <td>{{$todo->name}} |Rs {{$todo->price}}</td>
                                         <td>{{$todo->category}}</td>
                                         <td>{{$todo->description}}</td>
        
                                         <td>
                                         <img src="{{asset('admin_images/' .$todo->sub_galary)}}"  alt="" width="100" height="100">
                                         <a href="/delete/{{$todo->id}}"  class="btn btn-primary" role="button">Delete</a>
                                         <a href="/edit/{{$todo->id}}"  class="btn btn-primary" role="button">Edit</a>
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



    @endsection
@section('content_footer')
@endsection	
    
