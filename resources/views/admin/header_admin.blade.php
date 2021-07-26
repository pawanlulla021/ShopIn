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
                
                        @guest
                            @if (Route::has('login'))
                                
                                <li class="nav-item">
                                    <a href="{{ route('login') }}"> <i class="menu-icon fa fa-key"></i>{{ __('Login') }}</a>  
                                    <!--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>-->
                                </li>
                            @endif

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest



                    //
                    
                
                    <h3 class="menu-title">Add Items</h3><!-- /.menu-title -->
                    <li ><a href="/add/men" > <i class="menu-icon fa fa-plus-square"></i>Add Products</a></li>
                    
                    <h3 class="menu-title">View Items</h3><!-- /.menu-title -->
                    <li ><a href="/products" > <i class="menu-icon fa fa-eye"></i>View All Products</a></li>
                    
                    <h3 class="menu-title">View Order</h3><!-- /.menu-title -->
                    <li ><a href="/all/order" > <i class="menu-icon fa fa-shopping-cart"></i>View Orders</a></li>
                    <div>
                    <h4 style="color:white;">Copyright © 2021 pawan lulla</h4>    
                    </div>
                    
                    
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