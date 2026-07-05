<script>
    'use strict';
    // RELOAD FUNCTION WRITE CODE
    $('body').on('click', '.reloadBtn', function(event) {
        event.preventDefault();
        $(this).closest('form')[0].reset();
    });


    // PARENT FORM SUBMIT FUNCTION *****

    $('body').on('click', '.parentFormSubmit', function() {
        $(this).closest('form').submit();
    });





    // CUSTOMER PEGINATION *****************

    $('body').on('submit', '#customerSearchForm', function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        cutomerajaxFeatch(formData);
    });

    $('body').on('keyup', '#customerSearchForm input', function() {
        $(this).closest('form').submit();
    });

    $('body').on('change', '.customerFilterSearch', function() {
        $(this).closest('form').submit();
    });



    // vehicle Insert Edit

    $('body').on('submit', '#vehicleType_box', function(e) {
        e.preventDefault();

        var formData = $(this).serialize();
        // console.log(formData);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
            , url: "{{ route('vehicle.type.insert') }}"
            , type: "POST"
            , data: formData
            , success: function(response) {
                // alert(message);
                if (response.success == true) {
                    $('#vehicleType_box')[0].reset();
                    // console.log(response);
                    vehicleTypeFeatch();
                    swal("Success!", "Vehicle Type Insert Successfully !", "success");


                }

            }
            , error: function(response) {
                console.log(response);
                $('#vehicle_type_name_error').text(response.responseJSON.errors.vehicle_type_name);

            }
        , });

    });




    $('body').on('submit', '.vehicleEditBox', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        // console.log(formData);
        var form = $(this).attr('id');
        var modalId = $(this).closest('.modal').attr('id');
        // console.log(modalId);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
            , url: "{{ route('vehicle.type.update') }}"
            , type: "POST"
            , data: formData
            , success: function(response) {
                if (response.success == true) {
                    swal("Update!", "Category Update Successfully !", "success");

                    if ($('#' + modalId).hasClass('show')) {
                        // Modal is shown
                        $('#' + modalId).modal('hide');
                    }

                    $('#' + modalId).on('hidden.bs.modal', function(e) {

                        vehicleTypeFeatch();


                    });
                }


            }
            , error: function(response) {

                $('#' + form).find('.vehicle_type_name_update_error').text(response.responseJSON.errors
                    .vehicle_type_name);

            }
        , });

    });


    let vehicleTypeFeatch = () => {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
            , url: "{{ route('add.vehicle.type.view') }}"
            , type: "get"
            , success: function(response) {
                // alert(message);
                $('#vehicleTypeBox').html(response);

            }
            , error: function(response) {
                console.log(response);
                $('#vehicle_type_name_error').text(response.responseJSON.errors.vehicle_type_name);

            }
        , });
    }

</script>
