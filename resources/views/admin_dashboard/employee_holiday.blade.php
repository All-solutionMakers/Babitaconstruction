@extends('admin_dashboard.layout.main')
@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-md-12 text-center">
                    <h4>Leave Application</h4>
                </div>
                <div class="col-md-12">
                    <div class="card p-2 mt-2">
                        <form id="employeeLeaveapplyForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="radio" name="leave_type" id="" value="1" checked>
                                    <label for="">Leave</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="radio" name="leave_type" id="" value="2">
                                    <label for="">Medical Leave</label>

                                </div>
                                <div class="col-md-3">
                                    <input type="radio" name="leave_type" id="" value="3">
                                    <label for="">Other Type Leave</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-4">
                                    <label for="">Form</label>
                                    <input type="date" name="from_date" id="" class="form-control">
                                </div>
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-6 col-8">
                                    <label for="">Day Type</label>
                                    <div class="card p-1">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="radio" name="form_day_type" id="" value="1" checked>
                                                <label for="">Full</label>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="radio" name="form_day_type" id="" value="2">
                                                <label for="">First Half</label>

                                            </div>
                                            <div class="col-md-3">
                                                <input type="radio" name="form_day_type" id="" value="3">
                                                <label for="">Second Half</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-4">
                                    <label for="">To</label>
                                    <input type="date" name="to_date" id="" class="form-control">
                                </div>
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-6 col-8">
                                    <label for="">Day Type</label>
                                    <div class="card p-1">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="radio" name="to_day_type" id="" value="1" checked>
                                                <label for="">Full</label>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="radio" name="to_day_type" id="" value="2">
                                                <label for="">First Half</label>

                                            </div>
                                            <div class="col-md-3">
                                                <input type="radio" name="to_day_type" id="" value="3">
                                                <label for="">Second Half</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <label for="">
                                        Reason For Leave
                                    </label>
                                    <textarea name="reason" id="" cols="30" rows="5" class="form-control" style="resize: none"></textarea>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-12 col-12 text-right mt-2">
                                    <button class="btn btn-success">Apply Leave</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
</div>
<!-- /.content-wrapper -->

@endsection
