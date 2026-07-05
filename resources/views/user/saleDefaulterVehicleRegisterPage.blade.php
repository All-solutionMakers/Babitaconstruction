@extends('user.layouts.main')
@section('main_content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">sale Your Defaulter Vehicle</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Sale vehicle Form</a></li>
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
        <form action="{{old('default.vehicleregistration.insert')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4 col-12 mb-3">
                    <label for="nameFormControlInput" class="form-label">Owner Name</label>
                    <input type="text" class="form-control" id="nameFormControlInput" placeholder="Owner Name" name="owner_name" value="{{old('owner_name')}}">
                    @error('owner_name')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email Id</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" value="{{old('email')}}">
                    @error('email')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <label for="phoneNumberFormControlInput" class="form-label">Contact Number</label>
                    <input type="tel" class="form-control" id="phoneNumberFormControlInput" placeholder="Contact Number" name="contact_number" value="{{old('contact_number')}}">

                    @error('contact_number')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>

                <div class="col-md-12 col-12 mb-3">
                    <label for="addressFormControlTextarea" class="form-label">Address</label>
                    <textarea class="form-control" id="addressFormControlTextarea" rows="3" placeholder="Address" name="address">{{old('address')}}</textarea>
                    @error('address')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <label for="vinFormControlInput" class="form-label">Vehicle Identification Number (VIN)</label>
                    <input type="text" class="form-control" id="vinFormControlInput" placeholder="Vehicle Identification Number (VIN)" name="vehicle_number" value="{{old('vehicle_number')}}">
                    @error('vehicle_number')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>


                <div class="col-md-4 col-12 mb-3">
                    <label for="modelFormControlInput" class="form-label">Model</label>
                    <input type="text" class="form-control" id="modelFormControlInput" placeholder="Model" name="model" value="{{old('model')}}">

                    @error('model')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <label for="vehicleTypeFormControlInput" class="form-label">Vehicle Type</label>
                    <select class="form-select" aria-label="Default select example" name="vehicle_type">
                        <option selected value="">Vehicle Type</option>

                        @foreach ($vehicle_typelists as $vehicle_typelist)
                        <option value="{{$vehicle_typelist->id}}" {{old('vehicle_type') == $vehicle_typelist->id ? 'selected':''}}>{{$vehicle_typelist->type}}</option>
                        @endforeach
                    </select>

                    @error('vehicle_type')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-3" id="transaction_methord">
                    <label for="vehicleTypeFormControlInput" class="form-label">Transaction Methods</label>
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

                <div class="col-md-4 col-12 mb-3">
                    <label for="vehicleTypeFormControlInput" class="form-label">Listed By</label>
                    <select class="form-select" aria-label="Default select example" name="listed_by">
                        <option selected value="">Listed By</option>
                        <option value="owner" {{old('listed_by') == 'owner' ? 'selected':''}}>Owner</option>
                        <option value="third-party" {{old('listed_by') == 'third-party' ? 'selected':''}}>Third-Party</option>

                    </select>
                    @error('listed_by')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <label for="phoneNumberFormControlInput" class="form-label">Expected Price</label>
                    <input type="number" class="form-control" min="0" id="" placeholder="Expected Price" name="expected_price" value="{{old('expected_price')}}">
                    @error('expected_price')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <label for="" class="form-label">Vehicle Front Image</label>
                    <input type="file" class="form-control" id="" name="vehicle_front_image" accept="image/jpeg, image/png,image/jpg">

                    @error('vehicle_front_image')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <label for="" class="form-label">Vehicle Side Image 1</label>
                    <input type="file" class="form-control" id="" name="vehicle_side_image_1" accept="image/jpeg, image/png,image/jpg">
                    @error('vehicle_side_image_1')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <label for="" class="form-label">Vehicle Side Image 2</label>
                    <input type="file" class="form-control" id="" name="vehicle_side_image_2" accept="image/jpeg, image/png,image/jpg">

                    @error('vehicle_side_image_2')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="col-md-4 col-12 mb-3">
                    <label for="" class="form-label">Vehicle Back Image</label>
                    <input type="file" class="form-control" id="" name="vehicle_back_image" accept="image/jpeg, image/png,image/jpg">

                    @error('vehicle_back_image')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <label for="" class="form-label">Permit</label>
                    <input type="file" class="form-control" id="" name="permit" accept="image/jpeg, image/png,image/jpg">
                    @error('permit')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <label for="" class="form-label">Fitness</label>
                    <input type="file" class="form-control" id="" name="fitness" accept="image/jpeg, image/png,image/jpg">
                    @error('fitness')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <label for="" class="form-label">Polution</label>
                    <input type="file" class="form-control" id="" name="polution" accept="image/jpeg, image/png,image/jpg">
                    @error('polution')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <label for="" class="form-label">Particular</label>
                    <input type="file" class="form-control" id="" name="particular" accept="image/jpeg, image/png,image/jpg">
                    @error('particular')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="col-md-4 col-12 mb-3">
                    <label for="" class="form-label">RC</label>
                    <input type="file" class="form-control" id="" name="rc" accept="image/jpeg, image/png,image/jpg">
                    @error('rc')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>



                <div class="col-md-4 col-12 mb-3">
                    <label for="" class="form-label">Insurance</label>
                    <input type="file" class="form-control" id="" name="insurance" accept="image/jpeg, image/png,image/jpg">
                    @error('insurance')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-4 col-12 mb-3">
                    <label for="" class="form-label">Tax</label>
                    <input type="file" class="form-control" id="" name="tax" accept="image/jpeg, image/png,image/jpg">
                    @error('tax')
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
