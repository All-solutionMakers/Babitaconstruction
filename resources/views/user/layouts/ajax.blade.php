<script>
    'use stict';
    // console.log('ok check');


    let featchFinanceName = (trasactionMethord) => {
        let financeDiv = $('#financeDiv');
        if (trasactionMethord == 1) {
            // alert('okk');

            let newDiv = `<div class="col-md-4 col-12 mb-3" id="financeDiv"><label for="financeFormControlInput" class="form-label">Finance Name</label><input type="text" class="form-control" name="finance_name"  placeholder="Finance Name" value="{{old('finance_name')}}"> @error('finance_name')<span class="text-danger">{{ $message }}</span>@enderror</div>`;

            // Append the new div to a specific container
            $('#transaction_methord').after(newDiv);
        } else {
            if (financeDiv.length > 0) {
                financeDiv.remove();
            }
        }
    }


    $('body').on('change', 'select[name="transaction_methord"]', function(event) {
        event.preventDefault();
        // alert('ok');
        var trasactionMethord = $(this).val();
        featchFinanceName(trasactionMethord);
    });

    var trasactionMethord = $('select[name="transaction_methord"]').val();

    featchFinanceName(trasactionMethord);

</script>
