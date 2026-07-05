@extends('admin_dashboard.layout.main')
@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <div class="content-header">
            <div class="container-fluid">

                <div class="row p-3">
                    <div class="col-lg-4  col-md-6 form-group">
                        <div class="bg-white rounded  p-4 dashboard_shadow h-100">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <i class="fa-solid fa-cart-shopping f_size text_color"></i>
                                </div>
                                <div class="col-md-8 text-center">
                                    <h4 class="font-weight-bold">Total Lease Vehicle</h4>
                                    <h5 class="text-muted">
                                      1250
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <div class="bg-white rounded  p-4 dashboard_shadow h-100">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <i class="fa-solid fa-cart-shopping f_size text_color"></i>
                                </div>
                                <div class="col-md-8 text-center">
                                    <h4 class="font-weight-bold">Total Employee</h4>
                                    <h5 class="text-muted">
                                       520
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 form-group">
                        <div class="bg-white rounded  p-4 dashboard_shadow h-100">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <i class="fa-solid fa-cart-shopping f_size text_color"></i>
                                </div>
                                <div class="col-md-8 text-center">
                                    <h4 class="font-weight-bold">Total Sold Vehicle</h4>
                                    <h5 class="text-muted">
                                       520
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="col-lg-3 col-md-6 from-group">
                        <div class="bg-white rounded  p-4 dashboard_shadow h-100">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <i class="fa-solid fa-user f_size text_color"></i>

                                </div>
                                <div class="col-md-8 text-center">
                                    <h4 class="font-weight-bold">Owner</h4>
                                    <h5 class="text-muted">
                                       20
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 from-group ">
                        <div class="bg-white rounded  p-4 dashboard_shadow h-100">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <i class="fa-solid fa-user f_size text_color"></i>

                                </div>
                                <div class="col-md-8 text-center">
                                    <h5 class="font-weight-bold">Registered Defaulter Vehicle</h5>
                                    <h5 class="text-muted">
                                      520
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-lg-3 col-md-6 from-group ">
                        <div class="bg-white rounded  p-4 dashboard_shadow h-100">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <i class="fa-solid fa-ticket f_size text_color"></i>

                                </div>
                                <div class="col-md-8 text-center">
                                    <h5 class="font-weight-bold text-center">Pending Tickets</h5>
                                    <h5 class="text-muted text-center">
                                        45344
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 from-group">
                        <div class="bg-white rounded  p-4 dashboard_shadow h-100">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <i class="fa-solid fa-ticket-simple f_size text_color"></i>

                                </div>
                                <div class="col-md-8 text-center">
                                    <h5 class="font-weight-bold">Resolved Tickets</h5>
                                    <h5 class="text-muted">
                                        45344
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- /.content -->
    </div>
@endsection
