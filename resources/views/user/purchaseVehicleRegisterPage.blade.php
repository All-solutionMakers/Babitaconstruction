@extends('user.layouts.main')
@section('main_content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Apply for Vehicle Purchase</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Vechicle Purchase</a></li>
                {{-- <li class="breadcrumb-item active" aria-current="page">About Us</li> --}}
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
<script>
    var successMessage = "{{ Session()->get('success') }}";
    // console.log(successMessage);

    if (successMessage) {
        // swal("Success!", "Url is Update Successfull !", "success");
        swal("Success !!", successMessage, "success");
    }

</script>

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <form action="{{route('purchase.vehicleregistration.insert')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4 col-12 mb-3">
                    <label for="nameFormControlInput" class="form-label">Full Name :</label>
                    <input type="text" class="form-control" id="nameFormControlInput" placeholder="Full Name" name="name" value="{{old('name')}}">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email Id :</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" value="{{old('email')}}">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <label for="phoneNumberFormControlInput" class="form-label">Contact Number :</label>
                    <input type="tel" class="form-control" id="phoneNumberFormControlInput" placeholder="Contact Number" name="contact_number" value="{{old('contact_number')}}">

                    @error('contact_number')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="col-md-4 col-12 mb-3">
                    <label for="" class="form-label">Alternate Contact Number :</label>
                    <input type="tel" class="form-control" id="" placeholder="Alternate Contact Number" name="alternate_contact_number" value="{{old('alternate_contact_number')}}">

                    @error('alternate_contact_number')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-8 col-12 mb-3">
                    <label for="addressFormControlTextarea" class="form-label">Address :</label>
                    <textarea class="form-control" id="addressFormControlTextarea" rows="1" placeholder="Address" name="address">{{old('address')}}</textarea>
                    @error('address')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>



                <div class="col-md-4 col-12 mb-3">
                    <label for="vehicleTypeFormControlInput" class="form-label">Vehicle Type :</label>
                    <select class="form-select" aria-label="Default select example" name="vehicle_type">
                        <option selected value="">Vehicle Type</option>

                        @foreach ($vehicle_typelists as $vehicle_typelist)
                        <option value="{{$vehicle_typelist->id}}" {{old('vehicle_type') == $vehicle_typelist->id ? 'selected':''}}>{{$vehicle_typelist->type}}</option>
                        @endforeach
                    </select>

                    @error('vehicle_type')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <label for="phoneNumberFormControlInput" class="form-label">Range From :</label>
                    <input type="number" class="form-control" id="" min="0" placeholder="Budget Range" name="min_range" value="{{old('min_range')}}">
                    @error('min_range')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <label for="phoneNumberFormControlInput" class="form-label">Range To :</label>
                    <input type="number" class="form-control" id="" min="0" placeholder="Budget Range" name="max_range" value="{{old('max_range')}}">
                    @error('max_range')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="col-md-4 col-12 mb-3" id="transaction_methord">
                    <label for="vehicleTypeFormControlInput" class="form-label">Transaction Methods :</label>
                    <select class="form-select" aria-label="Default select example" name="transaction_methord">
                        <option selected value="">Transaction Methods</option>

                        @foreach ($transaction_methord as $transaction_methords)
                        <option value="{{$transaction_methords->id}}" {{old('transaction_methord') == $transaction_methords->id ? 'selected':''}}>{{$transaction_methords->methord}}</option>
                        @endforeach

                    </select>

                    @error('transaction_methord')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>




                <div class="col-md-12 col-12 mb-3 text-end">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- About End -->



@endsection
