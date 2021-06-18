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

                    @if(Session::has('user'))
                    <li class="menu-item-has-children dropdown">
                     
                    
                     <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" 
                      aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Pawan Lulla
                     </a>
                     <ul class="sub-menu children dropdown-menu">
                     
                      <li><a href="/admin/logout"><i class="fa fa-unlock"></i>Logout</a></li>    
                     </ul>
                    </li>

                    @else
                
                    <li>
                     <a href="/admin/login"><i class="menu-icon fa fa-laptop"></i>Login</a>
                     </li> 
                    
                    @endif


                    

                    
                    <h3 class="menu-title">Add Items</h3><!-- /.menu-title -->
                    <li ><a href="/add/men" > <i class="menu-icon fa fa-plus-square"></i>Add Products</a></li>
                    
                    <h3 class="menu-title">View Items</h3><!-- /.menu-title -->
                    <li ><a href="/products" > <i class="menu-icon fa fa-eye"></i>View All Products</a></li>
                    
                    <h3 class="menu-title">View Order</h3><!-- /.menu-title -->
                    <li ><a href="/all/order" > <i class="menu-icon fa fa-shopping-cart"></i>View Orders</a></li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
</aside>

<header id="header" class="header">

            <div class="header-menu">
                <div class="col-sm-7">
                                      
                </div>

                <div class="col-sm-5">
                
                <div class="user-area dropdown float-right">
                    
                </div> 
            </div>

</header><!-- /header -->