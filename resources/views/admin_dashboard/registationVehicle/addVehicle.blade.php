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
                        <form action="" method="">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 col-12 mb-3">
                                    <label for="nameFormControlInput" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="nameFormControlInput" placeholder="Full Name">
                                </div>

                                <div class="col-md-4 col-12 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>

                                <div class="col-md-4 col-12 mb-3">
                                    <label for="phoneNumberFormControlInput" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phoneNumberFormControlInput" placeholder="Phone Number">
                                </div>

                                <div class="col-md-12 col-12 mb-3">
                                    <label for="addressFormControlTextarea" class="form-label">Address</label>
                                    <textarea class="form-control" id="addressFormControlTextarea" rows="3" placeholder="Address"></textarea>
                                </div>

                                <div class="col-md-4 col-12 mb-3">
                                    <label for="vinFormControlInput" class="form-label">Vehicle Identification Number (VIN)</label>
                                    <input type="text" class="form-control" id="vinFormControlInput" placeholder="Vehicle Identification Number (VIN)">
                                </div>


                                <div class="col-md-4 col-12 mb-3">
                                    <label for="modelFormControlInput" class="form-label">Model</label>
                                    <input type="text" class="form-control" id="modelFormControlInput" placeholder="Model">
                                </div>

                                <div class="col-md-4 col-12 mb-3">
                                    <label for="vehicleTypeFormControlInput" class="form-label">Vehicle Type</label>
                                    <select class="form-control" aria-label="Default select example">
                                        <option selected>Vehicle Type</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="col-md-12 col-12 mb-3 text-end">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('user_management.view') }}">Back To Empolyee Page</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
</div>
<!-- /.content-wrapper -->
@endsection
