<div class="row mt-1">
    <div class="col-md-12">
        <strong class="text-primary">Total Holiday Count : </strong> <span class="text-dark">{{ $holidayList->count()
            }}</span>
    </div>
    <div class="card card-body">

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Occasion</th>
                    <th scope="col">Branch</th>
                    <th scope="col" colspan="">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($holidayList as $index => $holidayListItem)
                    <tr>
                        <th scope="row">{{$index+1}}</th>
                        <td>{{$holidayListItem->event_date_formate}}</td>
                        <td>{{$holidayListItem->event_name}}</td>
                        <td>{{$holidayListItem->branch_name}}</td>
                        <td>
                            <button class="btn btn-sm btn-primary" data-toggle="modal"
                            data-target="#edit{{ $index + 1 }}">Edit</button> &nbsp;
                            <a href="{{route('public.holiday.delete',[$holidayListItem->id])}}">
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </a>

                        </td>

                      </tr>
                    @endforeach


                </tbody>
              </table>
          </div>

    </div>


    <div id="holidayModalBox">
        @foreach ($holidayList as $index => $holidayListItem)
            <div class="modal fade" id="edit{{ $index + 1 }}" data-backdrop="static"
                data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Edit Holi day</h5>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{route('public.holiday.update')}}">
                                @csrf
                                <input type="hidden" name="id" id="" value="{{$holidayListItem->id}}">
                                <div class="row">
                                    <div class="col-lg-4 mt-3 col-md-6 col-12">
                                        <h6>Event Date</h6>
                                        <input type="date" class="form-control" name="event_date" value="{{ $holidayListItem->event_date == null ? old('event_date') : $holidayListItem->event_date}}" required >
                                        <span class="text-danger">
                                            @error('event_date')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-lg-4 mt-3 col-md-6 col-12">
                                        <h6>Event Name</h6>
                                        <input type="text" class="form-control" name="event_name" value="{{ $holidayListItem->event_name == null ? old('event_name') : $holidayListItem->event_name}}" required>
                                        <span class="text-danger">
                                            @error('event_name')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-lg-4 mt-3 col-md-6 col-12">
                                        <h6> Branch</h6>
                                        <select name="branch" id="branch" class="form-control" required>
                                            <option selected disabled>Select Branch</option>
                                            @foreach ($branchLists as $branchList)
                                            <option value="{{$branchList->id}}" {{old('branch' == $branchList->id ? 'selected':'')}} {{$branchList->id == $holidayListItem->branch_id ?'selected':''}}>{{$branchList->name}}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">
                                            @error('branch')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <button type="submit" class="btn btn-primary f_right">Update</button>
                                    </div>

                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>


</div>


{{-- <div class="row mt-5">
    <div class="col-md-12 d-flex justify-content-end">
        {{ $employee->links('pagination::bootstrap-4') }}
    </div>
</div> --}}
