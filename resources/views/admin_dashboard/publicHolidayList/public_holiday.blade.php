
@extends('admin_dashboard.layout.main')
@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Holi Day List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Holi Day</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="content-header">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12 mb-2">
                    <a class="btn add_btn f_right" href="{{ route('public.holiday.create') }}">Add Public Holi day <i
                            class="fa-solid fa-plus"></i></a>
                </div>
            </div>
            <form id="holidayListSearchFilterform">
                @csrf
                <div class="row">

                    <div class="col-lg-5  text-center">

                        <div class="input-group  mb-3">
                            <input type="text" class="form-control searchHoliday" placeholder="Search here" name="search">
                            <div class="input-group-append">
                                <button class="btn btn-primary rounded-0" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="form-group">
                            <select class="form-control holidayFilterSearch" id="" name="sorting">
                                <option value="1">Ascending</option>
                                <option value="2">Descending</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7 ">
                        <div class="d-flex">
                            <input type="date" class="form-control holidayFilterSearch" name="from_date">
                            <span class="p-2">To</span>
                            <input type="date" class="form-control holidayFilterSearch" name="to_date">
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-2  ">

                        <button class="btn btn-primary " style="float:left;">Search</button>
                    </div>
                </div>
            </form>

            <section id="mainBox">

                @include('admin_dashboard.publicHolidayList.ajaxholiday')

            </section>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>
@endsection

