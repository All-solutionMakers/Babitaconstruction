@extends('admin_dashboard.layout.main')
@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <a class="btn add_btn f_right" href="{{ route('branch.create') }}">
                        Create Branch <i class="fa-solid fa-plus"></i></a>
                </div>
            </div>
            <form id="branchFilterForm">
                <div class="row">
                    <div class="col-lg-5  text-center">
                        <div class="input-group  mb-3 mt-lg-3">
                            <input type="search" class="form-control searchBranch" placeholder="Search here" name="search">
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
                            <input type="date" class="form-control branchFilterSearch" name="from_date" required>
                            <span class="p-2">To</span>
                            <input type="date" class="form-control branchFilterSearch" name="to_date" required>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-2  mt-lg-3 mt-md-0 mt-3">

                        <button class="btn btn-primary " style="float:left;" type="submit">Search</button>
                    </div>
                </div>
            </form>

            @include('admin_dashboard.branch.branchAjax')

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
</div>
@endsection
