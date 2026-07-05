<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

        <div class="container-fluid admin-profile py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3"></div>
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="box-content">
                                            <div class="image-box">
                                                @if ($adminData->profile_img !== null)
                                                <img src="{{$adminData->profile_path ."/".$adminData->profile_img}}" class="img-fluid" alt="">
                                                @else
                                                <img src="{{url('user.jpg')}}" class="img-fluid" alt="">
                                                @endif

                                            </div>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="p-image btn btn-sm btn-primary edit-icon-cl" {{--data-toggle="modal" data-target="#staticBackdrop" --}}>
                                                <i class="fa fa-camera upload-button"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                                                Edit
                                                                Profile Image</h1>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="file">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <form action="{{route('admin.profile.update')}}" method="POST" enctype="multipart/form-data" class="d-none" id="profile_form">
                                                @csrf
                                                <input type="hidden" name="user_id" id="" value="{{ $adminData->id }}">
                                                <input type="file" name="profile_image" id="profile_img_file" class="profile_image" accept="image/*">

                                            </form>
                                            <div class="info">
                                                <h6>User Id: </h6>
                                                <span>
                                                    {{ $adminData->user_id }}
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-7">
                                        <div class="info">
                                            <h6>Name: </h6>
                                            <span>
                                                {{ $adminData->first_name . ' ' . $adminData->last_name }}
                                            </span>
                                        </div>
                                        <div class="info">
                                            <h6>Emp. Id: </h6>
                                            <span>
                                                {{ $adminData->employee_id }}
                                            </span>
                                        </div>
                                        <div class="info">
                                            <h6>Mob No: </h6>
                                            <span>
                                                {{ $adminData->mobile_no }}
                                            </span>
                                        </div>
                                        <div class="info">
                                            <h6>E-mail Id: </h6>
                                            <span>
                                                {{ $adminData->email }}
                                            </span>
                                        </div>
                                        <div class="info">
                                            <h6>Department: </h6>
                                            <span>
                                                {{ $adminData->department }}
                                            </span>
                                        </div>
                                        <div class="info">
                                            <h6>Password: </h6>
                                            <span>
                                                @php
                                                $modified = str_repeat('*', strlen($adminData->password));
                                                @endphp

                                                {{ $modified }}
                                            </span>
                                        </div>
                                        <div class="info">
                                            <h6>Status: </h6>
                                            <span class="text-success">
                                                {{ $adminData->status == 1 ? 'Active' : 'In-Active' }}
                                            </span>
                                        </div>

                                        <div class="info mt-4 text-right">
                                            <button type="button" class="btn btn-sm btn-primary me-3" data-toggle="modal" data-target="#staticBackdrop2">
                                                Change Password
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                                                Change Password
                                                            </h1>
                                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="">
                                                                <div class="form-group">
                                                                    <label for="">Old Password:</label>
                                                                    <input class="form-control" type="text" name="" id="">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="">New Password:</label>
                                                                    <input class="form-control" type="text" name="" id="">
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#staticBackdrop3">
                                                Edit Profile
                                            </button>
                                            <!-- Modal -->



                                            <div class="modal fade" id="staticBackdrop3" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <form id="EditProfile">
                                                            <input type="hidden" name="id" id="" value="{{ $adminData->id }}">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                                                    Edit Profile
                                                                </h1>
                                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="row">
                                                                    <div class="col-md-6 col-12">
                                                                        <div class="form-group">
                                                                            <label for="">
                                                                                First Name:
                                                                            </label>
                                                                            <input class="form-control" type="text" name="first_name" placeholder="First Name" id="" value="{{ $adminData->first_name }}">

                                                                            <span class="text-danger">
                                                                                @error('frist_name')
                                                                                {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-12">
                                                                        <div class="form-group">
                                                                            <label for="">Last
                                                                                Name:</label>
                                                                            <input class="form-control" type="text" name="last_name" placeholder="Lirst Name" id="" value="{{ $adminData->last_name }}">
                                                                            <span class="text-danger">
                                                                                @error('last_name')
                                                                                {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-12">
                                                                        <div class="form-group">
                                                                            <label for="">Mobile
                                                                                No:</label>
                                                                            <input class="form-control" type="text" name="mobile_no" placeholder="Mobile No." id="" value="{{ $adminData->mobile_no }}">
                                                                            <span class="text-danger">
                                                                                @error('mobile_no')
                                                                                {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-12">
                                                                        <div class="form-group">
                                                                            <label for="">Email Id:</label>
                                                                            <input class="form-control" type="text" name="email" id=" " value="{{ $adminData->email }}">
                                                                            <span class="text-danger">
                                                                                @error('email')
                                                                                {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>

                                                                    {{-- <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="">Department:</label>
                                                                        <select name="" id="" class="form-control">
                                                                            <option value="">Department</option>
                                                                            @foreach ($departments as $department)
                                                                            <option value="{{$department->id}}" {{$adminData->department_id == $department->id ? 'selected':''}}>{{$department->department}}</option>
                                                                    @endforeach
                                                                    </select>
                                                                    <span class="text-danger">
                                                                        @error('department')
                                                                        {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div> --}}
                                                            {{-- <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="">Status:</label>

                                                                        <select name="" id="" class="form-control">
                                                                            <option value="" selected>Status</option>
                                                                            <option value="1" {{$adminData->status == 1 ? 'selected':''}}>Active</option>
                                                            <option value="2" {{$adminData->status == 2 ? 'selected':''}}>Inactive</option>
                                                            </select>
                                                            <span class="text-danger">
                                                                @error('status')
                                                                {{ $message }}
                                                                @enderror
                                                            </span>

                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2"></div>
</div>
</div>
</div>

</div>
</div>
