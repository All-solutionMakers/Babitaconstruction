@extends('admin_dashboard.layout.main')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12">
                    <div class="card p-3 mt-5">
                        <form id="employe_frm" action="{{ route('user_management.insert') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class=" col-lg-4 mt-3 col-md-6 col-12">
                                    <h6 class="font-weight-bold">Employee Name:</h6>
                                    <input type="text" class="form-control" name="name" placeholder="First Name" value="{{ old('name') }}">
                                    <span class="text-danger">
                                        @error('name')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>


                                <div class=" col-lg-4 mt-3 col-md-6 col-12">
                                    <h6 class="font-weight-bold">Mobile no:</h6>
                                    <input type="number" class="form-control" name="mobile_no" placeholder="Mobile No." value="{{ old('mobile_no') }}">
                                    <span class="text-danger">
                                        @error('mobile_no')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class=" col-lg-4 mt-3 col-md-6 col-12">
                                    <h6 class="font-weight-bold">Email:</h6>
                                    <input type="email" class="form-control" name="email" placeholder="Email Id" value="{{ old('email') }}">
                                    <span class="text-danger">
                                        @error('email')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class=" col-lg-4 mt-3 col-md-6 col-12">
                                    <h6 class="font-weight-bold">Password:</h6>
                                    <div class="input-group mb-3">

                                        <input type="password" class="form-control " name="password" placeholder="Password" value="{{ old('password') }}">

                                        <div class="input-group-prepend">
                                            <div class="input-group-text show_hidePassword">
                                                {{-- <input type="checkbox" aria-label="Checkbox for following text input" class=""> --}}
                                                <i class="fa-solid fa-eye-slash"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <span class="text-danger">
                                        @error('password')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class=" col-lg-4 mt-3 col-md-6 col-12">
                                    <h6 class="font-weight-bold">Select Designation:</h6>
                                    <select name="designation" id="designation" class="form-control">
                                        <option selected disabled>Select Designation</option>

                                        @foreach ($usertype as $usertypes)
                                        <option value="{{$usertypes->id}}">{{$usertypes->role}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">
                                        @error('designation')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class=" col-lg-4 mt-3 col-md-6 col-12">
                                    <h6 class="font-weight-bold">Select Status:</h6>
                                    <select name="status" id="status" class="form-control">
                                        <option selected disabled>Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('status')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>


                                <div class=" col-lg-4 mt-3 col-md-6 col-12">
                                    <h6 class="font-weight-bold">Select Branch:</h6>

                                    <select name="branch" id="branch" class="form-control">
                                        <option selected disabled>Select Branch</option>
                                        @foreach ($branchLists as $branchList)
                                        <option value="{{$branchList->id}}" {{old('branch' == $branchList->id ? 'selected':'')}}>{{$branchList->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">
                                        @error('branch')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>



                                <div class="col-md-12 mt-4">
                                    <button type="submit" id="employee_submit" class="btn btn-primary f_right">Submit</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('user_management.view') }}">Back To Empolyee Page</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
</div>
<!-- /.content-wrapper -->
@endsection
