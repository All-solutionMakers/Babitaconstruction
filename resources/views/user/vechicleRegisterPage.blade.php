@extends('user.layouts.main')
@section('main_content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Vechicle Registation</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Vechicle Register</a></li>
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
        <form action="{{route('vehicleregistration.insert')}}" method="post" enctype="multipart/form-data">
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

                <div class="col-md-4 col-12 mb-3">
                    <label for="" class="form-label">Alternate Contact Number</label>
                    <input type="tel" class="form-control" id="" placeholder="Alternate Contact Number" name="alternate_contact_number" value="{{old('alternate_contact_number')}}">

                    @error('alternate_contact_number')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-8 col-12 mb-3">
                    <label for="addressFormControlTextarea" class="form-label">Address</label>
                    <textarea class="form-control" id="addressFormControlTextarea" rows="1" placeholder="Address" name="address">{{old('address')}}</textarea>
                    @error('address')
                    <span class="text-danger">{{$message}}</span>
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
                    <label for="vehicleTypeFormControlInput" class="form-label">Agreement Period</label>
                    <select class="form-select" aria-label="Default select example" name="agreement_period">
                        <option selected value="">Agreement Period</option>
                        @foreach ($agreement_period as $agreement_periods)
                        <option value="{{$agreement_periods->id}}" {{old('agreement_period') == $agreement_periods->id ? 'selected':''}}>{{$agreement_periods->aggrement_period}}</option>
                        @endforeach
                    </select>
                    @error('agreement_period')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>



                <div class="col-md-4 col-12 mb-3" id="transaction_methord">
                    <label for="vehicleTypeFormControlInput" class="form-label">Transaction Methods</label>
                    <select class="form-select" aria-label="Default select example" name="transaction_methord">
                        <option selected value="">Transaction Methods</option>

                        @foreach ($transaction_methord as $transaction_methords)
                        <option value="{{$transaction_methords->id}}">{{$transaction_methords->methord}}</option>
                        @endforeach

                    </select>

                    @error('transaction_methord')
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


                <div class="col-md-8 col-12 mb-3 ">
                    <p>
                        <input type="checkbox" name="agree_by" id="" class="" {{old('agree_by') == ''?'':'checked'}} >
                        <small>By creating an account, you agree to Babita Constuction
                            <a href="#term_condition" data-bs-toggle="modal">Terms & Conditions</a> and
                            <a href="#privacy_modal" data-bs-toggle="modal">Privacy Policy </a>
                        </small>
                    </p>
                    @error('agree_by')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="col-md-4 col-12 mb-3 text-end">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>


                {{-- PRIVACY MODAL  --}}
                <div class="modal fade" id="privacy_modal" tabindex="-1">
                    <div class="modal-dialog  modal-dialog-scrollable modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Privacy Policy</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <section class="privacy_policy" id="privacy_policy">
                                    <div class="container container-xl mt-2 mb-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="heading text-center">
                                                    <h2>privacy policy</h2>
                                                </div>
                                                <p>babitaconstruction (<a href="" target="_blank">
                                                        babitaconstruction.com</a>) is the property of Addzet
                                                    Advertising &
                                                    Media Private Limited. The purpose of
                                                    babitaconstruction is to provide you technology solutions
                                                    through the E-Commerce Portal/Application. </p>

                                                <p> babitaconstruction cares about your privacy. At babitaconstruction,
                                                    one of our main priorities is the privacy of our
                                                    visitors. Our Privacy Policy document contains
                                                    types of information that describe how, and why
                                                    we
                                                    might collect, store, use and share the
                                                    information when you use our services. </p>

                                                <p>This Privacy Policy applies only to our online
                                                    activities and is valid for visitors to our
                                                    website or
                                                    app with regards to the information that they
                                                    shared and/or collect in babitaconstruction. This policy is
                                                    not
                                                    applicable to any information collected offline
                                                    or via channels other than this website. </p>
                                                <p>
                                                    Our Privacy Policy not only explains how and why
                                                    we use the personal information that we collect
                                                    but
                                                    also helps you understand your privacy rights
                                                    and choices and take control of your personal
                                                    information. </p>
                                                <p>
                                                    By using our website, you hereby consent to our
                                                    Privacy Policy and agree to its terms. </p>

                                                <p> If you have additional questions or require more
                                                    information about our Privacy Policy, do not
                                                    hesitate to contact us.
                                                </p>

                                                <div class="heading">
                                                    <strong>Personal information is collected
                                                        directly from you when you:</strong>
                                                </div>

                                                <ul style="list-style-type: decimal">
                                                    <li>When contacting us directly, we may receive
                                                        additional information about you such as
                                                        your name,
                                                        email address, phone number, the contents of
                                                        the message and/or attachments you may send
                                                        us, and
                                                        any other information you may choose to
                                                        provide.</li>
                                                    <li> When you register for an Account, we may
                                                        ask for your contact information, including
                                                        items such
                                                        as name, company name, address, email
                                                        address, and mobile/telephone number.</li>
                                                    <li>However, we also collect additional
                                                        information that you voluntarily provide to
                                                        us when you
                                                        express an interest in obtaining information
                                                        about us or our products and services, when
                                                        you
                                                        participate in activities on the services,
                                                        or otherwise when you contact us.</li>
                                                </ul>



                                                <div class="heading">
                                                    <strong>We use the collection in various
                                                        ways:</strong>
                                                </div>
                                                <ul style="list-style-type: upper-roman">
                                                    <li>Provide, operate, and maintain our
                                                        website/app.</li>
                                                    <li>Improve, personalize, and expand services on
                                                        our website/app.</li>
                                                    <li>Understand and analyze how you use our
                                                        website/app.</li>
                                                    <li>Develop new products, services, features,
                                                        and functionality.</li>
                                                    <li>Communicate with you, either directly or
                                                        through one of our partners, including for
                                                        customer
                                                        service.</li>
                                                    <li>To provide you with updates and other
                                                        information related to the website, app,
                                                        services,
                                                        upgradation and for marketing and
                                                        promotional purposes.</li>
                                                    <li>Send you service and offer-related emails.
                                                    </li>
                                                    <li>Find and prevent fraud in your account with
                                                        us.</li>
                                                </ul>

                                                <b><i>We sometimes share your personal information
                                                        with affiliated companies within our
                                                        corporate
                                                        family, with third parties with which we
                                                        have partnered to allow you to integrate
                                                        their services
                                                        into our own Services, and with trusted
                                                        third-party service providers as necessary
                                                        for them to
                                                        perform services on our behalf, such
                                                        as:</i></b>

                                                <ul>
                                                    <li>Processing credit card payments.</li>
                                                    <li>Serving relevant advertisements.</li>
                                                    <li>Conducting contests or surveys.</li>
                                                    <li>Performing analysis of our services,
                                                        customer demographics etc.</li>
                                                    <li>Communicating with you, such as by way of
                                                        email or survey.</li>
                                                    <li>Customer relationship management.</li>
                                                    <li>Security, risk management, and compliance
                                                    </li>
                                                    <li>Recruiting support and related services.
                                                    </li>
                                                </ul>

                                                <i>These third parties (and any subcontractors they
                                                    may be permitted to use) do not to share, use or
                                                    retain your personal information for any reasons
                                                    other than as necessary for the provision of
                                                    Services.</i>

                                                <div class="heading">
                                                    <b>The information that we may disclose to third
                                                        parties:</b>
                                                </div>

                                                <ul>
                                                    <li>In the event that we sell or buy any
                                                        business or assets in that case we disclose
                                                        your data to
                                                        the prospective seller or buyer of such
                                                        business or assets; or</li>
                                                    <li>If we sell, buy, merge, are acquired by, or
                                                        partner with other companies or businesses,
                                                        or sell
                                                        some or all of our assets. In such
                                                        transactions, your information may be among
                                                        the transferred
                                                        assets.</li>
                                                </ul>

                                                <p><strong>Advertisements :</strong> We may offer
                                                    you ads that are most useful to you, so we may
                                                    use the
                                                    personal information you provided us in Account
                                                    Settings or those collected through cookie
                                                    technologies to personalize ads and improve your
                                                    overall experience with us on our site and other
                                                    sites.</p>
                                                <p>This is also called ad personalization because
                                                    the ads you see are based on previously
                                                    collected or
                                                    historical data. It determines which ad will be
                                                    most relevant to you, including data such as
                                                    previous search queries, activity, visits to
                                                    sites or apps, demographic information, or
                                                    location.
                                                </p>

                                                <div class="heading">
                                                    <b>How do we communicate with you: </b>
                                                </div>
                                                <p>We can communicate with you directly or through a
                                                    third-party service provider regarding products
                                                    or
                                                    services you have purchased from us, we may also
                                                    contact you with offers for additional services
                                                    we
                                                    think you’ll find valuable. In some cases, we
                                                    may contact you, and you don’t need to provide
                                                    consent
                                                    as a condition to purchase our goods or
                                                    services. These contacts may include:</p>

                                                <ul>
                                                    <li>Email</li>
                                                    <li>Text (SMS) messages</li>
                                                    <li>Telephone calls</li>
                                                    <li>Messenger applications (e.g. WhatsApp,
                                                        Facebook Messenger, Via Social Media Handles
                                                        etc.)</li>
                                                    <li>Automated phone calls or text messages.</li>
                                                </ul>
                                                <b>You may also update your subscription preferences
                                                    with respect to receiving communications from us
                                                    and/or our partners by signing into your account
                                                    and visiting your “Account Settings” page</b>
                                                <p>In addition, it will describe any options you
                                                    have regarding the use and/or sharing of your
                                                    personal
                                                    information with a co-branded partner, as well
                                                    as how to exercise those options. We are not
                                                    responsible for the privacy practices or the
                                                    content of third-party sites. Please read the
                                                    privacy
                                                    policy of any website you visit.</p>

                                                <div class="heading"><b>ACCES, Update and Delete
                                                        your Data:-</b></div>
                                                <p><b>To easily access, view, update, delete or port
                                                        your personal information, or to update your
                                                        subscription preferences, please sign into
                                                        your Account and visit “Account
                                                        Settings.”</b></p>

                                                <p class="text-secondary">
                                                    <b>We generally retain your personal information
                                                        for as long as is necessary to provide our
                                                        services
                                                        and to comply with our legal obligations.
                                                        Where your personal information is no longer
                                                        required,
                                                        we will ensure it is securely deleted.</b>
                                                    <br>
                                                    <b>If you would like to stop us from using your
                                                        personal information, you shall request that
                                                        we
                                                        erase your personal information and close
                                                        your Account.</b>
                                                </p>

                                                <div class="heading">
                                                    <b>If you are unable for any reason to access or
                                                        delete your Account Settings, you may also
                                                        contact
                                                        us by one of the methods described in the
                                                        “Contact Us” section below</b>
                                                </div>
                                                <p class="text-secondary">Please keep note We may
                                                    retain some of your personal information in such
                                                    cases
                                                    (i.e., after closure of your Account):</p>

                                                <ul>
                                                    <li>
                                                        as long as it is necessary for our
                                                        legitimate business interests, such as fraud
                                                        detection and
                                                        prevention and enhancing safety.
                                                    </li>
                                                    <li>
                                                        the extent necessary to comply with our
                                                        legal obligations. babitaconstruction may keep some of
                                                        your
                                                        information for tax, legal reporting and
                                                        auditing obligations;
                                                    </li>
                                                    <li>
                                                        Forum posts or other publicly visible
                                                        information may continue to be publicly
                                                        available on the
                                                        babitaconstruction Platform, even after your Account is
                                                        deactivated. However, attribution of such
                                                        information to you will be removed.
                                                        Additionally, some copies of your
                                                        information (e.g.,
                                                        logrecords) may remain in our database, but
                                                        are disassociated from personal identifiers;
                                                    </li>
                                                    <li>
                                                        To resolve disputes;
                                                    </li>

                                                    <li>
                                                        To enforce our agreements and/or pursue or
                                                        protect our legitimate interests;
                                                    </li>

                                                    <li>
                                                        As we protect babitaconstruction Platform from
                                                        accidental or malicious loss and
                                                        destruction, residual
                                                        copies of your personal information may not
                                                        be removed from our backup systems for a
                                                        limited
                                                        period of time;

                                                    </li>
                                                </ul>

                                                <div class="heading"><b>Cookies Policy:-</b></div>
                                                <p><strong>Like any other website, babitaconstruction uses
                                                        'cookies'. These cookies are used to store
                                                        information
                                                        including visitors' preferences, and the
                                                        pages on the website that the visitor
                                                        accessed or
                                                        visited. The information is used to optimize
                                                        the users' experience by customizing our web
                                                        page
                                                        content based on visitors' browser type
                                                        and/or other information</strong></p>


                                                <div class="heading"><b>SECURITY :-</b></div>
                                                <p>babitaconstruction has implemented security measures
                                                    designed to protect the Personal Information you
                                                    share with
                                                    us, including physical, electronic and
                                                    procedural measures. Among other things, we
                                                    offer HTTPS
                                                    secure access to most areas on our Services. We
                                                    also regularly monitor our systems for possible
                                                    vulnerabilities and attacks, and regularly seek
                                                    new ways and Third-Party Services for further
                                                    enhancing the security of our Services and
                                                    protection of our Visitors' and Users' privacy.
                                                </p>
                                                <p>The transmission of information via the internet,
                                                    email or text message is not completely secure.
                                                    Although we do our best to protect your personal
                                                    information,Yet we can not guarantee the
                                                    absolute
                                                    protection and security of your, or any other
                                                    User Content you upload, publish or otherwise
                                                    share
                                                    with babitaconstruction or anyone else</p>
                                                <p>We, therefore, encourage you to set strong
                                                    passwords for your User Account and avoid
                                                    providing us or
                                                    anyone with any sensitive information of which
                                                    you believe disclosure could cause you
                                                    substantial or
                                                    irreparable harm.</p>
                                                <p>If you have any questions regarding the security
                                                    of our Services, you are welcome to reach us on
                                                    +91-9777181234, support@babitaconstruction.com or at Addzet
                                                    Advertising & Media Private Limited, 1693/2497,
                                                    Nilakantheswar Marg, Baramunda, Bhubaneswar,
                                                    Odisha, India – 751003.</p>




                                                <div class="heading"><b>YOUR RIGHTS :-</b></div>
                                                <p><b>We would like to make sure you are fully aware
                                                        of all of your data protection rights. Every
                                                        user
                                                        is entitled to the following rights:-</b>
                                                </p>
                                                <ul>
                                                    <li>
                                                        The right to access the information we
                                                        process about you;
                                                    </li>
                                                    <li>
                                                        The right to rectify incorrect/inaccurate
                                                        information about you;
                                                    </li>

                                                    <li>
                                                        The right to transfer all or part of the
                                                        information collected about you to you or
                                                        another data
                                                        controller, where technically feasible (the
                                                        right to data portability; with limitations
                                                        and
                                                        restrictions as specified in the Indian/
                                                        International Laws as applicable);
                                                    </li>

                                                    <li>
                                                        The right to erase any data concerning you.
                                                        Users may demand the erasure of data without
                                                        undue
                                                        delay for legitimate reasons, e.g. where
                                                        data is no longer necessary for the purposes
                                                        it was
                                                        collected, or where the data has been
                                                        unlawfully processed;
                                                    </li>

                                                    <li>
                                                        The right to the restriction of data
                                                        processing. Users, for legitimate purposes,
                                                        may obtain
                                                        restrictions of data processing from the
                                                        controller;
                                                    </li>
                                                    <li>
                                                        The right to object to the processing of
                                                        Personal Data when processing is carried out
                                                        on the
                                                        basis of legitimate interest, as well as in
                                                        cases of use of your personal data for
                                                        direct
                                                        marketing purposes, as specified above in
                                                        this Policy.
                                                    </li>
                                                    <li>
                                                        If you make a request, we have one month to
                                                        respond to you. If you would like to
                                                        exercise any of
                                                        these rights, please contact us.
                                                    </li>
                                                </ul>



                                                <div class="heading"><b>CHILDREN :-</b></div>

                                                <p>babitaconstruction does not knowingly collect any Personal
                                                    Identifiable Information from children under the
                                                    age
                                                    of 18. If you think that your child provided
                                                    this kind of information on our website, we
                                                    strongly
                                                    encourage you to contact us immediately and we
                                                    will do our best efforts to promptly remove such
                                                    information from our records.</p>

                                                <div class="heading"><b>NOTIFICATION OF CHANGES
                                                        :-</b></div>

                                                <p>Our Policy may change from time to time. We will
                                                    give you notification regarding any Policy
                                                    changes on our website and, if the changes are
                                                    significant, we may consider providing a more
                                                    explicit notice (including, for certain
                                                    services, email notification of Policy changes).
                                                </p>

                                                <div class="heading"><b>Contact us:-</b></div>

                                                <p>If you have any questions, concerns, or
                                                    complaints about our Privacy Policy, or you wish
                                                    to make a complaint, you may contact our Data
                                                    Protection Officer at +91-9777181234 or by
                                                    regular mail at support@babitaconstruction.com</p>

                                                <p><b>Babita Construction,
                                                        1693/2497, Nilakantheswar Marg, Baramunda,
                                                        Bhubaneswar, Odisha, India – 751003.</b></p>

                                                <div class="heading text-center">
                                                    <h5><b>*We will respond to all requests,
                                                            inquiries or concerns within thirty (30)
                                                            days.</b></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                        </div>
                    </div>
                </div>



                {{-- TERM AND CONDITION  --}}

                <div class="modal fade" id="term_condition" tabindex="1">
                    <div class="modal-dialog  modal-dialog-scrollable modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Terms and Conditions</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <section class="privacy_policy" id="privacy_policy">
                                    <div class="container container-xl mt-2 mb-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="heading text-center">
                                                    <h2>Terms and Conditions</h2>
                                                    <p class="text-secondary">Welcome to babitaconstruction
                                                        (babitaconstruction.com)</p>
                                                    <p class="text-secondary">babitaconstruction is the
                                                        property of Babita Construction</p>
                                                </div>
                                                <div class="heading">

                                                    <b>PLEASE READ THIS UNIVERSAL TERMS OF SERVICE
                                                        AGREEMENT CAREFULLY, AS IT CONTAINS
                                                        IMPORTANT
                                                        INFORMATION REGARDING YOUR LEGAL RIGHTS AND
                                                        REMEDIES.</b>
                                                    <div class="text-center">
                                                        <strong><i> Welcome to babitaconstruction!
                                                            </i></strong>
                                                    </div>
                                                </div>
                                                <p><b>These terms and conditions outline the rules
                                                        and regulations for the use of
                                                        Website/ App
                                                        Property located at <a href="https://babitaconstruction.com/" target="_blank">https://babitaconstruction.com</a>.</b>
                                                </p>


                                                <p><i>By accessing this website, you are agreeing to
                                                        be bound by these web site Terms and
                                                        Conditions of
                                                        Use, all applicable laws and regulations,
                                                        and agree that you are responsible for
                                                        compliance with
                                                        any applicable local laws. If you do not
                                                        agree with any of these terms, you are
                                                        prohibited from
                                                        using or accessing this site. The materials
                                                        contained in this website are protected by
                                                        applicable copyright and trade mark law.</i>
                                                </p>

                                                <div class="heading">
                                                    <b>Content Policies:-</b>
                                                </div>
                                                <p>The content that is presented on the website is
                                                    the exclusive property of . Hence, you cannot copy or
                                                    imitate, reproduce or republish or even transmit
                                                    or
                                                    upload material without gaining the prior
                                                    consent of the company. Unauthorized usage of
                                                    materials
                                                    that appear in this website will lead to
                                                    copyright, legal or trademark violations.</p>

                                                <div class="heading">
                                                    <b>License:-</b>
                                                </div>

                                                <p>Unless otherwise stated, Addzet and/or its
                                                    licensors own the intellectual property rights
                                                    for all
                                                    material on babitaconstruction.com. All intellectual
                                                    property rights are reserved. You may access
                                                    this from
                                                    babitaconstruction for your own personal use subject to
                                                    restrictions set in these terms and conditions.
                                                </p>


                                                <div class="heading">
                                                    <strong>You must not:</strong>
                                                </div>
                                                <ul>
                                                    <li>Republish material from babitaconstruction</li>
                                                    <li>Sell, rent or sub-license material from
                                                        babitaconstruction</li>
                                                    <li>Reproduce, duplicate or copy material from
                                                        babitaconstruction</li>
                                                    <li>Redistribute content from babitaconstruction</li>
                                                    <li>This license shall automatically terminate
                                                        if you violate any of these restrictions and
                                                        may be
                                                        terminated by babitaconstruction at any time. Upon
                                                        terminating your viewing of these materials
                                                        or upon the
                                                        termination of this license, you must
                                                        destroy any downloaded materials in your
                                                        possession
                                                        whether in electronic or printed form.</li>
                                                </ul>

                                                <div class="heading"><b>Disclaimer:-</b></div>
                                                <p>To the maximum extent permitted by applicable
                                                    law, Addzet exclude all representations,
                                                    warranties and
                                                    conditions relating to our website and the use
                                                    of this website. Nothing in this disclaimer
                                                    will:</p>
                                                <ul>
                                                    <li>limit or exclude our or your liability for
                                                        death or personal injury;</li>
                                                    <li>limit or exclude our or your liability for
                                                        fraud or fraudulent misrepresentation;</li>
                                                    <li>limit any of our or your liabilities in any
                                                        way that is not permitted under applicable
                                                        law; or
                                                    </li>
                                                    <li>exclude any of our or your liabilities that
                                                        may not be excluded under applicable law.
                                                    </li>
                                                    <li>Further, Addzet does not warrant or make any
                                                        representations concerning the accuracy,
                                                        likely
                                                        results, or reliability of the use of the
                                                        materials on its Internet web site/ app or
                                                        otherwise
                                                        relating to such materials or on any sites
                                                        linked to this site.</li>
                                                    <li><strong>Limitation:-</strong> In no event
                                                        babitaconstruction shall not be hold responsible for
                                                        any content
                                                        that appears on your Website. You agree to
                                                        protect and defend us against all claims
                                                        that is
                                                        rising on your Website. No link(s) should
                                                        appear on any Website that may be
                                                        interpreted as
                                                        libellous, obscene or criminal, or which
                                                        infringes, otherwise violates, or advocates
                                                        the
                                                        infringement or other violation of, any
                                                        third-party rights.</li>
                                                </ul>

                                                <div class="heading">
                                                    <h4><b><i>Site Terms of Use Modifications:
                                                                -</i></b></h4>
                                                </div>
                                                <p>
                                                    Babita Construction may
                                                    revise these terms of use for its website/ App
                                                    at any
                                                    time without prior notice. By using this
                                                    website, you are agreeing to be bound by the
                                                    then-current
                                                    version of these Terms and Conditions of Use.
                                                    Links
                                                    Addzet has not reviewed all of the sites linked
                                                    to its Internet website and is not responsible
                                                    for
                                                    the contents of any such linked site. The
                                                    inclusion of any link does not imply endorsement
                                                    by
                                                    Addzet/ babitaconstruction of the site. Use of any such
                                                    linked website is at the user’s own risk.

                                                </p>
                                                <div class="heading">
                                                    <b><i> Legal Matters</i></b>
                                                </div>
                                                <ul>
                                                    <li><i> This agreement is governed in accordance
                                                            with the laws of the Government of India
                                                            and by
                                                            reading it, you have irrevocably
                                                            consented to the private jurisprudence
                                                            of the law court in
                                                            case there is any dispute arising from
                                                            or pertaining to using this website.</i>
                                                    </li>
                                                </ul>



                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- About End -->



@endsection
