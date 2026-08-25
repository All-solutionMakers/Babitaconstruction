@extends('user.layouts.main')
@section('main_content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Data Deletion Request</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Deletion Request</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<script>
    var successMessage = "{{ Session()->get('success') }}";
    if (successMessage) {
        swal("Success !!", successMessage, "success");
    }

    var errorMessage = "{{ Session()->get('error') }}";
    if (errorMessage) {
        swal("Error !!", errorMessage, "error");
    }
</script>

<!-- Data Deletion Request Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 justify-content-center">
            <div class="col-lg-6">
                <p class="fw-medium text-uppercase text-primary mb-2 text-center">Request Data Deletion</p>
                <h1 class="display-6 mb-4 text-center">Submit Your Request</h1>
                <p class="mb-4">Please enter your registered Email ID and Password below to request deletion of your
                    personal data. Once submitted, your data will be deleted within 30 days.</p>

                <form action="{{ route('data.deletion.request.insert') }}" method="post">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Your Email" value="{{ old('email') }}">
                                <label for="email">Email ID</label>
                            </div>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Your Password">
                                <label for="password">Password</label>
                            </div>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary py-3 px-5" type="submit">Submit Request</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Data Deletion Request End -->
@endsection
