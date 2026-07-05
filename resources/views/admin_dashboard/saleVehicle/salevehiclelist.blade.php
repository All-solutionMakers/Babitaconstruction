@extends('admin_dashboard.layout.main')
@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Purchase Vehicle List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Purchase Vehicle</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row ">
                    @foreach ($customerLists as $customerList)
                        <div class="col-md-12">
                            <div class="card p-3 mt-2">
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <label for="">
                                            Name :
                                        </label>
                                        <span>
                                            {{ $customerList->name }}
                                        </span>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <label for="">
                                            Email :
                                        </label>
                                        <span>
                                            {{ $customerList->email }}
                                        </span>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <label for="">
                                            Contact No :
                                        </label>
                                        <span>
                                            {{ $customerList->phone_no }}
                                        </span>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <label for="">
                                            Alternate Contact No :
                                        </label>
                                        <span>
                                            {{ $customerList->alternate_contact_number }}
                                        </span>
                                    </div>


                                    <div class="col-md-4 col-12">
                                        <label for="">
                                            Transaction Methord :
                                        </label>
                                        <span>
                                            {{ $customerList->transaction_methord }}
                                        </span>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <label for="">
                                            Finance Name :
                                        </label>
                                        <span>
                                            {{ $customerList->finance_name }}
                                        </span>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <label for="">
                                            Budget From :
                                        </label>
                                        <span>
                                            {{ $customerList->budget_from }}
                                        </span>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <label for="">
                                            Budget To :
                                        </label>
                                        <span>
                                            {{ $customerList->budget_to }}
                                        </span>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <label for="">
                                            Vehicle Type :
                                        </label>
                                        <span>
                                            {{ $customerList->vehicle_type }}
                                        </span>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <label for="">
                                            Address :
                                        </label>
                                        <span data-toggle="tooltip" title="{{ $customerList->address }}" class="line-clamp">
                                            {{ $customerList->address }}
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>


            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    </div>
    <!-- /.content-wrapper -->
@endsection
