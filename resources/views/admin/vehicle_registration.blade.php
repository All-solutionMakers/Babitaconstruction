@extends('admin.layouts.main')
@section('main_content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0 font-weight-bold">Vechicle Registration</h3>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="addvechicle.html" class="btn btn-primary btn-icon-text">
                        <i class="typcn typcn-plus btn-icon-prepend"></i> Add Vechicle
                    </a>
                </div>
            </div>

            <div class="card my-4">
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
                            <b>Vechicle Number :</b>
                            <span>OD02D6777</span>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>Type Of Vechicle :</b>
                            <span>Bolero</span>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>Date Of join Vechicle :</b>
                            <span>30/03/2024</span>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>Vechicle Insurance Type:</b>
                            <span>First Party</span>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>Agreement Year :</b>
                            <span>4 Yr</span>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>Insurance Date :</b>
                            <span>12/02/2003</span>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>Insurance Exp. Date :</b>
                            <span>15/10/2029</span>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>Listed Type :</b>
                            <span>Owner</span>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>Listed By :</b>
                            <span>Srinibash Nayak</span>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>CTC Annualy :</b>
                            <span>12 LPA</span>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3 d-md-block d-none"></div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3 d-md-block d-none"></div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>Vechicle Rc :</b>
                            <img class="img-fluid mt-3" src="{{ url('admin/images/samples/300x300/1.jpg') }}" alt="image">
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>Vechicle Particulars :</b>
                            <img class="img-fluid mt-3" src="{{ url('admin/images/samples/300x300/2.jpg') }}" alt="image">
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>Vechicle Permit :</b>
                            <img class="img-fluid mt-3" src="{{ url('admin/images/samples/300x300/3.jpg') }}" alt="image">
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>Vechicle Fitnes :</b>
                            <img class="img-fluid mt-3" src="{{ url('admin/images/samples/300x300/4.jpg') }}" alt="image">
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>Front Side Photo :</b>
                            <img class="img-fluid mt-3" src="{{ url('admin/images/samples/300x300/1.jpg') }}" alt="image">
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>Left Side Photo :</b>
                            <img class="img-fluid mt-3" src="{{ url('admin/images/samples/300x300/2.jpg') }}" alt="image">
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>Right Side Photo :</b>
                            <img class="img-fluid mt-3" src="{{ url('admin/images/samples/300x300/3.jpg') }}" alt="image">
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-3">
                            <b>Back Side Photo :</b>
                            <img class="img-fluid mt-3" src="{{ url('admin/images/samples/300x300/4.jpg') }}" alt="image">
                        </div>
                    </div>
                    <!-- Modal -->
                    <div id="myModal2" class="modal fade" role="dialog" data-backdrop="static" data-bs-keybord="false">
                        <div class="modal-dialog modal-dialog-centered modal-lg">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Vehicle Details</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
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
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Update</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- content-wrapper ends -->
    @endsection
