@extends('admin_dashboard.layout.main')
@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 {{$adminData->department_id == 1 ? 'd-none':''}}">
                <div class="col-md-12 text-right">
                    <a href="{{route('employee.apply.leave')}}"> <button class="btn btn-primary ">Apply Leave</button></a>
                </div>
            </div>

            @if ($adminData->department_id == 1)
            <form id="employeeSearchForm">
                @csrf
                <div class="row">
                    <div class="col-lg-5  text-center">
                        <div class="input-group  mb-3 mt-lg-3">
                            <input type="text" class="form-control" placeholder="Search here">
                            <div class="input-group-append">
                                <button class="btn btn-primary rounded-0" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-3  mt-lg-3">
                        <div class="form-group">
                            <select class="form-control branchFilterSearch" id="" name="sorting">
                                <option value="2">Descending</option>
                                <option value="1">Ascending</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7  mt-lg-3">
                        <div class="d-flex">
                            <input type="date" class="form-control">
                            <span class="p-2">To</span>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-2  mt-lg-3 mt-md-0 mt-3">

                        <button class="btn btn-primary " style="float:left;">Search</button>
                    </div>
                </div>
            </form>

            <section id="employee_leaveId">
               @include('admin_dashboard.employee_leave_listPegination')
            </section>

            @else
            @foreach ($leavelist as $leavelists)
            <div class="card p-2">
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Leave Type :</label>
                        <span>{{$leavelists->leave_type == 1 ? 'Leave':($leavelists->leave_type == 2 ? ' Medical Leave':($leavelists->leave_type == 3 ? ' Other Type Leave':''))}}</span>
                    </div>
                    <div class="col-md-3">
                        <label for="">From Date :</label>
                        <span>{{$leavelists->from_date}}</span>
                    </div>
                    <div class="col-md-3">
                        <label for="">Days Type :</label>
                        <span>{{$leavelists->from_date_daytype == 1 ? 'Full':($leavelists->from_date_daytype == 2 ? 'First Half':($leavelists->from_date_daytype == 3 ? 'Second Half':''))}}</span>
                    </div>
                    <div class="col-md-3">
                        <label for="">To Date :</label>
                        <span>{{$leavelists->to_date}}</span>
                    </div>
                    <div class="col-md-3">
                        <label for=""> Days Type :</label>
                        <span>{{$leavelists->to_date_daytype == 1 ? 'Full':($leavelists->to_date_daytype == 2 ? 'First Half':($leavelists->to_date_daytype == 3 ? 'Second Half':''))}}</span>
                    </div>


                    {{-- <div class="col-md-3">
                        <label for="">Apply Date</label>
                        <span>01-04-2024</span>
                    </div> --}}
                    <div class="col-md-2">
                        <label for="">Status :</label>
                        <span class="badge  {{$leavelists->approve_status == 'pending' ?'badge-danger':($leavelists->approve_status == 'approve' ?'badge-success':($leavelists->approve_status == 'denided' ? 'badge-warning':''))}}">{{$leavelists->approve_status}}</span>
                    </div>


                    <div class="col-md-2">
                        <label for="">Days :</label>
                        <span class="badge badge-success">{{$leavelists->leave_day}}</span>
                    </div>
                    <div class="col-md-3">
                        <label for="">Approve Date :</label>
                        <span>{{$leavelists->approve_date}}</span>
                    </div>
                    <div class="col-md-3">
                        <label for="">Approve By :</label>
                        <span>{{$leavelists->full_name }}</span>
                    </div>
                    <div class="col-md-9 col-8">
                        <label for="">Reason :</label>
                        <span>
                            {{$leavelists->reason_for_leave}}
                        </span>
                    </div>

                </div>
            </div>
            @endforeach

            @endif





        </div>
    </div>
</div>

@endsection
