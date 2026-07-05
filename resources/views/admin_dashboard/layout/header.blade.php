<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin | Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />

    <!--  Bootstrap 4.6 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />

    <!-- main css link style -->
    <link rel="stylesheet" href="{{ url('admin_dashboard/assets/css/adminlte.min.css') }}" />
    <link rel="stylesheet" href="{{ url('admin_dashboard/assets/css/adminlte.css') }}" />
    <link rel="stylesheet" href="{{ url('admin_dashboard/assets/css/style.css') }}" />


    {{-- int-tel- plugin --}}
    <link rel="stylesheet" href="{{ url('build/css/intlTelInput.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    {{-- <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script> --}}

    {{-- SWEET ALERT CDN LINK  --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light sticky-top">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <div class="btn-group">
                    <div class="user-panel" data-toggle="dropdown" data-offset="-52">
                        <div class="image">
                            <img src="{{ url('user.jpg') }}" class="img-circle elevation-2" alt="User Image" />
                        </div>
                    </div>
                    <div class="dropdown-menu" role="menu">
                        <a href="{{route('profile.view')}}" class="dropdown-item">
                            <i class="fa-solid fa-user mr-2"></i> Profile</a>
                        <a href="#" class="dropdown-item"><i class="fa-sharp fa-solid fa-gears mr-2"></i>
                            Setting</a>
                        <a href="{{ route('logout') }}" class="dropdown-item"><i class="fa-solid fa-right-from-bracket mr-2"></i> Log
                            Out</a>
                    </div>
                </div>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{route('dashboard.view')}}" class="brand-link">
                <img src="" class="brand-image img-circle elevation-3 mt-1" alt="logo" style="opacity: 0.8" />
                <h2 class="brand-text text-light" href="#">
                    Ba<span class="text-warning">bita</span>
                </h2>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ url('user.jpg') }}" class="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div class="info">
                        <a href="#!" class="d-block">{{$adminData->name}}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                {{-- <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                    </ul>
                </nav> --}}
                <!-- /.sidebar-menu -->


                <nav class="mt-2 mb-3">

                    @if (Session::get('role_id') == 1)
                    {{-- ADMIN/SUPPER ADMIN ************   --}}
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{route('dashboard.view')}}" class="nav-link  {{ request()->is('dashboard')  ? 'active' : ' ' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('branch.view')}}" class="nav-link  {{ request()->is('branch','branch-create')  ? 'active' : ' ' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Branch </p>
                            </a>
                        </li>
                        {{-- {{route('user.request.activation')}} --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Lease Vehicle
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('vehicle_registration.view')}}" class="nav-link {{ request()->is('cancle_order')  ? 'active' : ' ' }}">
                                        <p>Pending Request</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="" class="nav-link {{ request()->is('project.request.accepted')  ? 'active' : ' ' }}">
                                        <p>Accepted Request</p>
                                    </a>
                                </li>

                                <li class="nav-item ">
                                    <a href="" class="nav-link {{ request()->is('project.request.accepted')  ? 'active' : ' ' }}">
                                        <p>Rejected Vehicle</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Defaulter Vehicle
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('defaulter.vehicle.view')}}" class="nav-link {{ request()->is('cancle_order')  ? 'active' : ' ' }}">
                                        <p>Pending Request</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="" class="nav-link {{ request()->is('project.request.accepted')  ? 'active' : ' ' }}">
                                        <p>Accepted Request</p>
                                    </a>
                                </li>

                                <li class="nav-item ">
                                    <a href="" class="nav-link {{ request()->is('project.request.accepted')  ? 'active' : ' ' }}">
                                        <p>Rejected Vehicle</p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                   Purchase Vehicle List
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('sale.inquery.vehicle.view')}}" class="nav-link {{ request()->is('sale-inquery-vehicle-list')  ? 'active' : ' ' }}">
                                        <p>Customer List</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="" class="nav-link {{ request()->is('project.request.accepted')  ? 'active' : ' ' }}">
                                        <p>Sold Vehicles List</p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="" class="nav-link {{ request()->is('user-details')  ? 'active' : ' ' }}">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Driver Allocation
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="" class="nav-link {{ request()->is('user-details')  ? 'active' : ' ' }}">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Attendance Report
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Load Report
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item ">
                                    <a href="" class="nav-link {{ request()->is('active_order')  ? 'active' : ' ' }}">
                                        <p>Add Daily Load</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link {{ request()->is('cancle_order')  ? 'active' : ' ' }}">
                                        <p>View Daily Load Report</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    User Management
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link {{ request()->is('customer')  ? 'active' : ' ' }}">
                                        <p>Owner</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('user_management.view')}}" class="nav-link {{ request()->is('employee/view')  ? 'active' : ' ' }}">
                                        <p>Internal User</p>
                                    </a>
                                </li>

                            </ul>
                        </li>



                        <li class="nav-item">
                            <a href="" class="nav-link {{ request()->is('promocode')  ? 'active' : ' ' }}">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Vehicle Maintenance
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">

                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Master Edit
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('add.vehicle.type.view')}}" class="nav-link {{ request()->is('customer')  ? 'active' : ' ' }}">
                                        <p>Add Vehicle Type</p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        {{-- <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Calendar
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="" class="nav-link {{ request()->is('public_holidays')  ? 'active' : ' ' }}">
                        <p>Public Holidays</p>
                        </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link {{ request()->is('employee_holidays')  ? 'active' : ' ' }}">
                                <p>Employee Leave</p>
                            </a>
                        </li>
                    </ul>
                    </li> --}}
                    {{-- <li class="nav-item">
                            <a href="#" class="nav-link {{ request()->is('create-group')  ? 'active' : ' ' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Product Group
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link {{ request()->is('create-group')  ? 'active' : ' ' }}">
                                <p>Create Group</p>
                            </a>
                        </li>
                    </ul>
                    </li> --}}
                    {{-- <li class="nav-item mb-3">
                            <a href="" class="nav-link {{ request()->is('refer_and_earn')  ? 'active' : ' ' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Refer and Earn
                    </p>
                    </a>
                    </li> --}}
                    </ul>
                    @elseif (Session::get('role_id') == 2)
                    {{-- DEVELOPMENT ROLE ************   --}}
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Activation Request
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link {{ request()->is('cancle_order')  ? 'active' : ' ' }}">
                                        <p>Pending Request</p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="" class="nav-link {{ request()->is('project.request.accepted')  ? 'active' : ' ' }}">
                                        <p>Accepted Request</p>
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Order Management
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item ">
                                    <a href="" class="nav-link {{ request()->is('active_order')  ? 'active' : ' ' }}">
                                        <p>Active Order</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link {{ request()->is('cancle_order')  ? 'active' : ' ' }}">
                                        <p>Cancelled Order</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link {{ request()->is('faild_order')  ? 'active' : ' ' }}">
                                        <p>Failed Order</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Product Management
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link {{ request()->is('product-List')  ? 'active' : ' ' }}">
                                        <p>product listing</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    User Management
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link {{ request()->is('customer')  ? 'active' : ' ' }}">
                                        <p>Customer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('user_management.view')}}" class="nav-link {{ request()->is('employee/view')  ? 'active' : ' ' }}">
                                        <p>Internal User</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/support-pannel" class="nav-link {{ request()->is('support-pannel')  ? 'active' : ' ' }}">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Support Ticket
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link {{ request()->is('promocode')  ? 'active' : ' ' }}">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Promo code
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Calendar
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link {{ request()->is('public_holidays')  ? 'active' : ' ' }}">
                                        <p>Public Holidays</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link {{ request()->is('employee_holidays')  ? 'active' : ' ' }}">
                                        <p>Employee Leave</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ request()->is('create-group')  ? 'active' : ' ' }}">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Product Group
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link {{ request()->is('create-group')  ? 'active' : ' ' }}">
                                        <p>Create Group</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item mb-3">
                            <a href="" class="nav-link {{ request()->is('refer_and_earn')  ? 'active' : ' ' }}">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Refer and Earn
                                </p>
                            </a>
                        </li>
                    </ul>

                    @elseif (Session::get('role_id') == 4)

                    {{-- OPERATION MODEL ********   --}}
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    User Management
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link {{ request()->is('customer')  ? 'active' : ' ' }}">
                                        <p>Customer</p>
                                    </a>
                                </li>
                            </ul>

                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Calendar
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link {{ request()->is('public_holidays')  ? 'active' : ' ' }}">
                                        <p>Public Holidays</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link {{ request()->is('employee_holidays')  ? 'active' : ' ' }}">
                                        <p>Employee Leave</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    @elseif (Session::get('role_id') == 5)
                    {{-- SUPPORT MODEL *************   --}}

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Order Management
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item ">
                                    <a href="" class="nav-link {{ request()->is('active_order')  ? 'active' : ' ' }}">
                                        <p>Active Order</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link {{ request()->is('cancle_order')  ? 'active' : ' ' }}">
                                        <p>Cancelled Order</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link {{ request()->is('faild_order')  ? 'active' : ' ' }}">
                                        <p>Failed Order</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    User Management
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link {{ request()->is('customer')  ? 'active' : ' ' }}">
                                        <p>Customer</p>
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Calendar
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link {{ request()->is('public_holidays')  ? 'active' : ' ' }}">
                                        <p>Public Holidays</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link {{ request()->is('employee_holidays')  ? 'active' : ' ' }}">
                                        <p>Employee Leave</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    @endif

                </nav>

            </div>
            <!-- /.sidebar -->
        </aside>
