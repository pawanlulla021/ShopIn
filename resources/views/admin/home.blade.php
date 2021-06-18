
    @extends('admin/master_admin')
    @section('content_header')  

    <!-- Right Panel -->


        <!-- Header-->
        
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Home</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Products</div>
                                <div class="stat-digit">{{$count_products}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">

                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Users</div>
                                <div class="stat-digit">{{$count_users}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                        
                        
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Orders</div>
                                <div class="stat-digit">{{$count_orders}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout text-default border-default"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Suggestion</div>
                                <div class="stat-digit">10</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- .content -->

    <!-- Right Panel -->
    @endsection
@section('content_footer')
@endsection	
    

