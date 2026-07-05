@extends('admin_dashboard.layout.main')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12">
                    <div class="card p-3 mt-5">

                        <form id="vehicleType_box">

                            <div class="row">
                                <div class="col-md-5 col-12">

                                    <label for="">Vehicle Type Name</label>
                                    <input type="text" class="form-control" id="vehicle_type_name" name="vehicle_type_name" placeholder="Vehicle Type Name" value="{{ old('vehicle_type_name') }}" required>
                                    <span class="text-danger" id="vehicle_type_name_error"></span>

                                </div>



                                <div class="col-md-2 col-12">

                                    <button type="submit" class="btn btn-primary  categoryBtn">Submit</button>
                                    <button type="button" class="btn btn-success  categoryBtn reloadBtn"><i class="fa-solid fa-rotate"></i></button>
                                </div>

                            </div>

                        </form>

                        <div id="vehicleTypeBox" class="table-responsive mt-3">
                            @include('admin_dashboard.masterAddvehicleType.vehicletypeAddAjax')
                        </div>
                    </div>
                </div>


            </div>


        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
</div>
<!-- /.content-wrapper -->
@endsection
