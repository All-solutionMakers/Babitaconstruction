@foreach ($leavelist as $leavelists)
<div class="card p-2">
    <div class="row">
        <div class="col-md-4 col-6 ">
            <label for="">Status :</label>
            <span class="badge  {{$leavelists->approve_status == 'pending' ?'badge-danger':($leavelists->approve_status == 'approve' ?'badge-success':($leavelists->approve_status == 'denided' ? 'badge-warning':''))}}">{{$leavelists->approve_status}}</span>
        </div>
        <div class="col-md-4 col-6 ">
            <label for="">Emp.Name :</label>
            <span class="badge badge-info">{{$leavelists->Emp_full_name}}</span>
        </div>
        <div class="col-md-4 col-12 text-right {{$leavelists->approve_status == 'pending' ? '':'d-none'}}">

            <div class="row ">
                <div class="col-6 col-md-4 ">
                    <form class="approvalFrom">
                        <input type="hidden" name="approval_type" id="" value="denided">
                        <input type="hidden" name="leave_id" id="" value="{{$leavelists->id}}">
                        <button class="btn btn-sm btn-danger denidedLeaveBtn" type="submit" data-id="">Denided</button>
                    </form>
                </div>

                <div class="col-6 col-md-4 ">
                    <form class="approvalFrom">
                        <input type="hidden" name="approval_type" id="" value="approve">
                        <input type="hidden" name="leave_id" id="" value="{{$leavelists->id}}">
                        <button class="btn btn-sm btn-success approveLeaveBtn" data-id="{{$leavelists->id}}" type="submit">Approve</button>
                    </form>
                </div>
            </div>


        </div>
    </div>
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
        {{-- <div class="col-md-2">

        </div> --}}


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
