<table class="table table-hover mt-2">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Vehicle Type Name</th>
            <th scope="col">Created By</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody id="main">
        @foreach ($vehicle_typelists as $index => $vehicle_typelist)
        <tr>
            <th scope="row">{{ $index + 1 }}</th>
            <td>{{ $vehicle_typelist->type }}</td>
            <td>{{ $vehicle_typelist->created_by}}</td>
            <td>
                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#vehicleEdit{{ $index + 1 }}">
                    <i class="fa-solid fa-pen-to-square"></i>
                </button>
                &nbsp;

            </td>

        </tr>
        @endforeach


    </tbody>
</table>

<div id="categoryModalBox">
    @foreach ($vehicle_typelists as $index => $vehicle_typelist)
    <div class="modal fade" id="vehicleEdit{{ $index + 1 }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Vehicle Type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="vehicleEditBox" id="form{{ $index + 1 }}">

                        <input type="hidden" name="id" id="" value="{{ $vehicle_typelist->id }}">
                        <div class="row">
                            <div class="col-md-12 col-12">

                                <label for="">Vehicle Type Name</label>
                                <input type="text" class="form-control" id="vehicle_type_name" name="vehicle_type_name" placeholder="Vehicle Type Name" value="{{ $vehicle_typelist->type }}">
                                <span class="text-danger vehicle_type_name_update_error" id=""></span>

                            </div>

                            <div class="col-md-2 col-12">

                                <button type="submit" class="btn btn-primary  categoryBtn">Update</button>

                            </div>

                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    @endforeach
</div>
