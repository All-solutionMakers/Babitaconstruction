@extends('admin.layouts.main')
@section('main_content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0 font-weight-bold">Driver Allocation</h3>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="allocation.html" class="btn btn-primary btn-icon-text">
                        <i class="typcn typcn-plus btn-icon-prepend"></i>
                        Allocation
                    </a>
                </div>
            </div>


            <div class="card my-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <div class="col-6 text-right">
                            <a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal2">
                                <i class="typcn typcn-edit"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>Driver Name :</b>
                            <span>Niranjan Sahoo</span>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>Vehicle No :</b>
                            <span>OD34N6868</span>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>Shift :</b>
                            <span>Night</span>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>Helper :</b>
                            <span>Srinibash Nayak</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div id="myModal2" class="modal fade" role="dialog" data-backdrop="static" data-bs-keybord="false">
                <div class="modal-dialog modal-dialog-centered modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Branch Details</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
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
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Update</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- content-wrapper ends -->
    @endsection
