@extends('admin_dashboard.layout.main')
@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Defaulter Vehicle List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Defaulter Vehicle</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row ">
                    @foreach ($defaulterVehicleLists as $defaulterVehicleList)
                        <div class="col-md-12">
                            <div class="card p-3 mt-2">
                                <div class="row">
                                    <div class="col-4 col-md-4">
                                        <button class="btn btn-sm btn-success" type="button">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                    </div>

                                    <div class="col-8 col-md-8 text-right ">
                                        <label for="">
                                            Created Date :
                                        </label>
                                        <span>
                                            {{ $defaulterVehicleList->created_at }}
                                        </span>
                                    </div>


                                    <div class="col-md-4 col-12">
                                        <label for="">
                                            Name :
                                        </label>
                                        <span>
                                            {{ $defaulterVehicleList->owner_name }}
                                        </span>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <label for="">
                                            Email :
                                        </label>
                                        <span>
                                            {{ $defaulterVehicleList->email }}
                                        </span>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <label for="">
                                            Contact No :
                                        </label>
                                        <span>
                                            {{ $defaulterVehicleList->phone_no }}
                                        </span>
                                    </div>
                                    {{-- <div class="col-md-4 col-12">
                                        <label for="">
                                            Alternate Contact No :
                                        </label>
                                        <span>
                                            {{ $defaulterVehicleList->alternate_contact_number }}
                                        </span>
                                    </div> --}}


                                    <div class="col-md-4 col-12">
                                        <label for="">
                                            Transaction Methord :
                                        </label>
                                        <span>
                                            {{ $defaulterVehicleList->transaction_methord }}
                                        </span>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <label for="">
                                            Finance Name :
                                        </label>
                                        <span>
                                            {{ $defaulterVehicleList->finance_name }}
                                        </span>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <label for="">
                                           Vehicle No :
                                        </label>
                                        <span>
                                            {{ $defaulterVehicleList->vehicle_no }}
                                        </span>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <label for="">
                                            Vehicle model :
                                        </label>
                                        <span>
                                            {{ $defaulterVehicleList->model }}
                                        </span>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <label for="">
                                            Vehicle Type :
                                        </label>
                                        <span>
                                            {{ $defaulterVehicleList->vehicle_type }}
                                        </span>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <label for="">
                                            Listed By :
                                        </label>
                                        <span>
                                            {{ $defaulterVehicleList->listed_by }}
                                        </span>
                                    </div>



                                    <div class="col-md-4 col-12">
                                        <label for="">
                                            Address :
                                        </label>
                                        <span data-toggle="tooltip" title="{{ $defaulterVehicleList->address }}" class="line-clamp">
                                            {{ $defaulterVehicleList->address }}
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>


            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    </div>
    <!-- /.content-wrapper -->
@endsection
