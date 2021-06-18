<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop In | Order</title>
    <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin_Theme/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
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


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="{{asset('Admin_Theme/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('Admin_Theme/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('Admin_Theme/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Admin_Theme/assets/js/main.js')}}"></script>


    <script src="{{asset('Admin_Theme/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('Admin_Theme/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('Admin_Theme/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('Admin_Theme/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('Admin_Theme/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('Admin_Theme/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('Admin_Theme/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('Admin_Theme/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('Admin_Theme/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('Admin_Theme/vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('Admin_Theme/assets/js/init-scripts/data-table/datatables-init.js')}}"></script>


</body>
</html>
