@foreach ($branches as $branche)
<div class="card p-2 my-2">
    <div class="row">

        <div class="col-6">
            <div class="custom-control custom-switch">
                <form class="activeInactiveEmpForm" id="acIcBox{{$branche->id}}">
                    <input type="hidden" name="id" id="" value="{{$branche->id}}">
                    <input type="hidden" name="status" id="" value="2">
                    <input type="checkbox" class="custom-control-input f_right activeInactiveEmp" id="customSwitches{{$branche->id}}" >
                    <label class="custom-control-label" for="customSwitches{{$branche->id}}"></label>
                </form>
            </div>
        </div>
        <div class="col-6 text-right">
            <a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#branchEditBox{{$branche->id}}">
                <i class="fa-solid fa-pen-to-square"></i>
            </a>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-4 col-md-6 col-12 mt-3">
            <b>Branch Name :</b>
            <span>{{$branche->branch_name}}</span>
        </div>
        <div class="col-lg-3 col-md-6 col-12 mt-3">
            <b>Branch Code:</b>
            <span>{{$branche->branch_code}}</span>
        </div>
        <div class="col-lg-5 col-md-6 col-12 mt-3">
            <b>Address :</b>
            <span>{{$branche->address}}</span>
        </div>
    </div>

</div>

<!-- Modal -->
<div id="branchEditBox{{$branche->id}}" class="modal fade" role="dialog" data-backdrop="static" data-bs-keybord="false">
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
                        <label for="">Branch Name :</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 form-group">
                        <label for="">Mobile No :</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 form-group">
                        <label for="">Location :</label>
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
@endforeach
