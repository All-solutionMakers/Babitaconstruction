@extends('admin.layouts.main')
@section('main_content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <a href="user_management.html" class="btn btn-inverse-primary btn-rounded btn-sm">
                    <i class="typcn typcn-arrow-left"></i>
                </a>
                <h3 class="mt-2 font-weight-bold ml-3">Create User</h3>
            </div>
            <div class="row my-5">
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Name :</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Designation :</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Mobile No :</label>
                    <input type="number" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">E-mail Id :</label>
                    <input type="number" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Location :</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">DOJ :</label>
                    <input type="number" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">CTC:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Address :</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Photo :</label>
                    <input type="file" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Promo Code :</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Adaahar Card :</label>
                    <input type="file" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Pan Card:</label>
                    <input type="file" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">DL :</label>
                    <input type="file" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Bank Name :</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">IFSC Code :</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Account No :</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-lg-4 col-md-6 col-12 form-group">
                    <label for="">Branch Name :</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-12 text-right">
                    <a href="user_management.html" class="btn btn-success">
                        Submit
                    </a>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    @endsection
