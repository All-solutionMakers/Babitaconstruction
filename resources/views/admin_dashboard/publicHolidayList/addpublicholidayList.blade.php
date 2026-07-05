@extends('admin_dashboard.layout.main')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-12">
                    <div class="card p-3 mt-5">
                        <form method="POST" action="{{route('public.holiday.insert')}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 mt-3 col-md-6 col-12">
                                    <h6>Event Date</h6>
                                    <input type="date" class="form-control" name="event_date" value="{{old('event_date')}}">
                                    <span class="text-danger">
                                        @error('event_date')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-lg-4 mt-3 col-md-6 col-12">
                                    <h6>Event Name</h6>
                                    <input type="text" class="form-control" name="event_name" value="{{old('event_name')}}">
                                    <span class="text-danger">
                                        @error('event_name')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-lg-4 mt-3 col-md-6 col-12">
                                    <h6> Branch</h6>
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
                                    <button type="submit" class="btn btn-primary f_right">Submit</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('public.holiday') }}">Back To Holiday Page</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
</div>
<!-- /.content-wrapper -->
@endsection
