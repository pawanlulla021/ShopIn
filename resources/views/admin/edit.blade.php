
    @extends('admin/master_admin')
    @section('content_header')	  


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Update</h1>
                    </div>
                </div>
            </div>  
        </div>

        

<div class="content mt-3">
<div class="animated fadeIn">
<!--form-->
<div class="col-lg-6">
 <div class="card">
 <div class="card-header">
  <strong>Update Product</strong>
 </div>
 
 <div class="card-body card-block">       
   <form action="{{'/update/'.$todo->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    
    <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">Product Name</label>
     <input type="text" name="name" value="{{$todo->name}}"  class="form-control" >
    </div>

    <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">Price</label>
     <input type="text" name="price" value="{{$todo->price}}" class="form-control">
    </div>

    <div class="mb-3">
     <label for="exampleFormControlTextarea1" class="form-label">Product Description</label>
     <textarea name="description"  value="" class="form-control" rows="2" >{{$todo->description}}</textarea>
    </div>   

    <div class="mb-3">
     <label for="exampleFormControlTextarea1" class="form-label">Select category</label>
      <select  name="category" class="form-control">
       <option selected>{{$todo->category}}</option>
       <option value="Men">Men</option>
       <option value="Women">Women</option>
       <option value="Kid">Kid</option>
       <option value="Home">Home</option>
      </select>
    </div>
   <button type="submit" class="btn btn-primary">Submit</button>
  </form>
 </div>


 
</div>

</div>
</div><!-- .animated -->
</div><!-- .content -->
@endsection
@section('content_footer')
@endsection	

    
