
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop In | Add Product</title>

    <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/jqvmap/dist/jqvmap.min.css')}}">


    <link rel="stylesheet" href="{{asset('Admin_Theme/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>

    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/admin/home">Shop In Admin Panel</a>
               
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/admin/home"> <i class="menu-icon fa fa-dashboard"></i>Home</a>
                    </li>
                    
                    <h3 class="menu-title">Add Items</h3><!-- /.menu-title -->
                    <li ><a href="/add/men" > <i class="menu-icon fa fa-plus-square"></i>Add Products</a></li>
                    
                    <h3 class="menu-title">View Items</h3><!-- /.menu-title -->
                    <li ><a href="/products" > <i class="menu-icon fa fa-eye"></i>View All Products</a></li>
                    
                    <h3 class="menu-title">View Order</h3><!-- /.menu-title -->
                    <li ><a href="/all/order" > <i class="menu-icon fa fa-shopping-cart"></i>View Orders</a></li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">
                <div class="col-sm-7">
                                      
                </div>

                <div class="col-sm-5">
                
                <div class="user-area dropdown float-right">
                @if(Session::has('user'))
                    <li class="nav-item dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" 
                        aria-expanded="false">{{Session::get('user')['name']}} >
                        <span class="caret"></span>
                     </a>

                     <ul class="dropdown-menu">  
					  <li><a href="/admin/logout"><i class="fa fa-unlock"></i>Logout</a></li>
                     </ul>
                    </li>
                
                @else
                <li><a href="/admin/login">Login</a></li> 
                    
                @endif    
                </div> 
            </div>

        </header><!-- /header -->
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


        

       
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{asset('Admin_Theme/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('Admin_Theme/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('Admin_Theme/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Admin_Theme/assets/js/main.js')}}"></script>


    <script src="{{asset('Admin_Theme/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('Admin_Theme/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('Admin_Theme/assets/js/widgets.js')}}"></script>
    <script src="{{asset('Admin_Theme/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('Admin_Theme/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('Admin_Theme/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
