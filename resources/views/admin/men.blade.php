@extends('admin/master_admin')
@section('content_header') 
    
        <!-- Header-->
        
         
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add</h1>
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
  <strong>Add Product</strong> 
 </div>
 
 <div class="card-body card-block">       

        <form action="/add/men" method="POST" enctype="multipart/form-data">
@csrf
 <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Product Name</label>
  <input type="text" name="name" class="form-control" >
 </div>

 <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Price</label>
  <input type="text" name="price" class="form-control">
 </div>

 <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Product Description</label>
  <textarea name="description" class="form-control" rows="2" ></textarea>
 </div>   

 <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Select category</label>
  <select  name="category" class="form-control">
   <option selected>Open this select menu</option>
   <option value="Men">Home|Men</option>
   <option value="Women">Home|Women</option>
   <option value="Kid">Home|Kid</option>
   <option value="Home">Home|Home</option>
   <option value="Electronics|Electronics">Electronics|Electronics</option>
   <option value="Men|Men">Men|Men</option>
   <option value="Women|Women">Women|Women</option>
   <option value="Kid|Kid">Kid|Kid</option>
   
   
 </select>
</div>


 <div class="mb-3">
  <label for="formFile" class="form-label">Select Image</labe l>
  <input  name="img_src" class="form-control" type="file" id="formFile">
 </div>
 
 <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div><!-- .animated -->
</div><!-- .content -->


        

       

    <!-- Right Panel -->
    @endsection
    @section('content_footer')  
    @endsection
    



