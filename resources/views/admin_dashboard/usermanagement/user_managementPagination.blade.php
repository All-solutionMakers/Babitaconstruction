<div class="row mt-1">
    <div class="col-md-12">
        <strong class="text-primary">Total Employee Count : </strong> <span class="text-dark">{{ $employee->total()
            }}</span>
    </div>
    @foreach ($employee as $employee_item)
    <div class="col-md-12 mt-3 employeeBox">
        <div class="card p-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-control custom-switch f_right">
                        <form class="activeInactiveEmpForm" id="acIcBox{{$employee_item->id}}">
                            @csrf
                            <input type="hidden" name="id" id="" value="{{$employee_item->id}}">
                            <input type="hidden" name="status" id="" value="{{$employee_item->status == 1? 2:1}}">
                            <input type="checkbox" class="custom-control-input f_right activeInactiveEmp" id="customSwitches{{$employee_item->id}}" {{$employee_item->status == 1? 'checked':''}}>
                            <label class="custom-control-label" for="customSwitches{{$employee_item->id}}"></label>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row employeeinfoBox" id="empBox{{$employee_item->id}}">
                <div class="col-lg-4 col-md-6 mt-lg-1 mt-2">
                    <strong>
                        <form action="" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$employee_item->id}}">
                            <button class="border-0">Employee Id : {{$employee_item->reg_no}}</button>
                        </form>
                    </strong>
                </div>

                <div class="col-lg-4 col-md-6 mt-lg-1 mt-2">
                    <strong class="text-dark">Mobile no :</strong>{{$employee_item->mobile_no}}
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-1 mt-2">
                    <strong class="text-dark">Email :</strong>{{$employee_item->email}}
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-1 mt-2">
                    <strong class="text-dark">Designation :</strong>{{$employee_item->designation}}
                </div>

                <div class="col-lg-4 col-md-6 mt-lg-1 mt-2">
                    @php
                    $maskedPassword = str_repeat('*', strlen($employee_item->password));
                   @endphp

                    <strong class="text-dark">Password :</strong>   {{$maskedPassword}}

                </div>

                <div class="col-lg-4 col-md-6 mt-lg-1 mt-2">
                    <strong class="text-dark">Branch :</strong>   {{$employee_item->branch_name}}

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        <i class="fa-solid fa-caret-down" data-toggle="collapse" href="#edit{{$employee_item->id}}" style="float:right;"></i>
                    </p>
                </div>
                <div class="collapse" id="edit{{$employee_item->id}}" data-parent="#internal_user">

                    <form class="empupdateForm" id="empupdateFormId{{$employee_item->id}}">
                        {{-- action="{{route('update.employee');}}" --}}
                        @csrf
                        <input type="hidden" name="id" id="" value="{{$employee_item->id}}">
                        <div class="row">
                            <div class="col-lg-4 mt-2 col-md-3 col-12">
                                <h6>Name:</h6>
                                <input type="text" class="form-control" name="name" placeholder="First Name" value="{{$employee_item->name}} ">
                            </div>

                            <div class=" col-lg-4 mt-2 col-md-3 col-12 mobileNumber">
                                <h6>Mobile no:</h6>
                                <input type="number" class="form-control" name="mobile_no" value="{{$employee_item->mobile_no}}">
                            </div>

                            <div class=" col-lg-4 mt-2 col-md-6 col-12">
                                <h6>Email:</h6>
                                <input type="email" class="form-control" name="email" value="{{$employee_item->email}}">
                            </div>
                            <div class=" col-lg-4 mt-2 col-md-6 col-12">
                                <h6>Password:</h6>
                                <input type="text" class="form-control" name="password" value="{{$employee_item->password}}">
                            </div>
                            <div class=" col-lg-4 mt-2 col-md-6 col-12">
                                <h6>Designation:</h6>
                                <select name="department" id="department" class="form-control">
                                    <option selected disabled>Select Department</option>
                                    @foreach ($usertype as $usertypes)
                                    <option value="{{$usertypes->id}}">{{$usertypes->role}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class=" col-lg-4 mt-2 col-md-6 col-12">
                                <h6>Branch:</h6>
                                <select name="branch" id="branch" class="form-control">
                                    <option selected disabled>Select Branch</option>
                                    @foreach ($branchLists as $branchList)
                                        <option value="{{$branchList->id}}" {{old('branch' == $branchList->id ? 'selected':'')}}  {{$employee_item->branch_id == $branchList->id ? 'selected':''}}>{{$branchList->name}}</option>
                                        @endforeach
                                </select>
                            </div>

                            <div class="col-md-12 mt-2">
                                <button type="submit" class="btn btn-primary f_right">Update</button>
                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>


<div class="row mt-5">
    <div class="col-md-12 d-flex justify-content-end">
        {{ $employee->links('pagination::bootstrap-4') }}
    </div>
</div>
