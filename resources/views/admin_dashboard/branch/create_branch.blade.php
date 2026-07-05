@extends('admin_dashboard.layout.main')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-md-12">
                    <div class="card p-3 mt-5">
                        <form action="{{route('branch.insert')}}" method="POST">
                            @csrf
                            <input type="hidden" name="employee_id" id="" value="{{$adminData->id}}">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-primary font-weight-bold"><u>Create Branch</u> </h3>
                                </div>
                                <div class="col-lg-6 mt-3 col-md-6 col-12 ">
                                    <h6 class="font-weight-bold">Branch Name:</h6>
                                    <input type="text" class="form-control" name="branch_name" placeholder="Branch Name" value="{{old('branch_name')}}">
                                    @error('branch_name')
                                    <span class="text-danger">
                                        {{$message}}
                                    </span>
                                    @enderror
                                </div>

                                <div class=" col-lg-6 mt-3 col-md-6 col-12">
                                    <h6 class="font-weight-bold">Branch Code:</h6>
                                    <input type="text" class="form-control" name="branch_code" placeholder="Branch Code" maxlength="10" value="{{old('branch_code')}}">
                                    @error('branch_code')
                                    <span class="text-danger">
                                        {{$message}}
                                    </span>
                                    @enderror
                                </div>


                                <div class=" col-lg-12 mt-3 col-md-12 col-12">
                                    <h6 class="font-weight-bold">Address:</h6>
                                    <textarea name="address" id="" cols="10" rows="5" class="form-control" style="resize: none;" maxlength="300" placeholder="Address">{{old('address')}}</textarea>
                                    @error('address')
                                    <span class="text-danger">
                                        {{$message}}
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button type="submit" class="btn btn-primary f_right">Submit</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('branch.view') }}">Back To branch Page</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
</div>
@endsection
