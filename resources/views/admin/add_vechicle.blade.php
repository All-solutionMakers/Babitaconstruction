@extends('admin.layouts.main')
@section('main_content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <a href="vehicle_registration.html" class="btn btn-inverse-primary btn-rounded btn-sm">
                    <i class="typcn typcn-arrow-left"></i>
                </a>
                <h3 class="mt-2 font-weight-bold ml-3">Vehicle Details</h3>
            </div>

            <div class="row my-5">
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Vechicle Rc :</label>
                    <input type="file" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Vechicle Particulars :</label>
                    <input type="file" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Vechicle Permit :</label>
                    <input type="file" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Vechicle Fitnes :</label>
                    <input type="file" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Vechicle Insurance :</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Date Of join Vechicle:</label>
                    <input type="date" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Agreement Year:</label>
                    <select name="" id="" class="form-control">
                        <option value="">select</option>
                        <option value="">1yr</option>
                        <option value="">2yr</option>
                        <option value="">3yr</option>
                        <option value="">4yr</option>
                    </select>
                </div>

                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Type Of Vechicle:</label>
                    <select name="" id="" class="form-control">
                        <option value="">select</option>
                        <option value="">Truck</option>
                        <option value="">Bus</option>
                        <option value="">Car</option>
                        <option value="">Bike</option>
                        <option value="">Mechine</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Insurance Date :</label>
                    <input type="date" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Insurance Exp. Date :</label>
                    <input type="date" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Front Side Photo :</label>
                    <input type="file" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Left Side Photo :</label>
                    <input type="file" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Right Side Photo:</label>
                    <input type="file" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Back Side Photo :</label>
                    <input type="file" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Listed Type:</label>
                    <select name="" id="" class="form-control">
                        <option value="">select</option>
                        <option value="">Owner</option>
                        <option value="">Broker</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Listed By:</label>
                    <select name="" id="" class="form-control">
                        <option value="">select</option>
                        <option value="">Srinibash nayak</option>
                        <option value="">Niranjan Shoo</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Vechicle Number :</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">CTC Annualy:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-12 text-right">
                    <a href="vehicle_registration.html" class="btn btn-success">
                        Submit
                    </a>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    @endsection
