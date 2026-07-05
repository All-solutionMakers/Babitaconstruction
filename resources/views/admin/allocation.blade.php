@extends('admin.layouts.main')
@section('main_content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <a href="driver_allocation.html" class="btn btn-inverse-primary btn-rounded btn-sm">
                    <i class="typcn typcn-arrow-left"></i>
                </a>
                <h3 class="mt-2 font-weight-bold ml-3">Allocation Details</h3>
            </div>

            <div class="row my-5">
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Driver List :</label>
                    <select name="" id="" class="form-control">
                        <option value="">select</option>
                        <option value="">Nilesh Giri</option>
                        <option value="">Gobinda Sahu</option>
                        <option value="">Sanjaya Sahoo</option>
                        <option value="">Balaram Nayak</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Vechicle List :</label>
                    <select name="" id="" class="form-control">
                        <option value="">select</option>
                        <option value="">OD02D6777</option>
                        <option value="">OD34N6868</option>
                        <option value="">OD34K6079</option>
                        <option value="">AP210001</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Shift :</label>
                    <select name="" id="" class="form-control">
                        <option value="">select</option>
                        <option value="">Day</option>
                        <option value="">Night</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Helper List :</label>
                    <select name="" id="" class="form-control">
                        <option value="">select</option>
                        <option value="">Nilesh Giri</option>
                        <option value="">Gobinda Sahu</option>
                        <option value="">Sanjaya Sahoo</option>
                        <option value="">Balaram Nayak</option>
                    </select>
                </div>
                <div class="col-12 text-right">
                    <a href="driver_allocation.html" class="btn btn-success">
                        Submit
                    </a>
                </div>
            </div>

        </div>
        <!-- content-wrapper ends -->
    @endsection
