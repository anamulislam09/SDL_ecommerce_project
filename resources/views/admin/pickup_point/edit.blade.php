<div class="card">
    <div class="card-body">
        <form action="{{ route('update.pickup_point') }}" method="POST" id="add-form">
            @csrf
            <input type="hidden" name="id" value="{{ $data->id }}">
            <div class="mb-3 mt-3">
                <label for="pickup_point_name" class="form-label">Pickup point name :</label>
                <input type="text" class="form-control" value="{{ $data->pickup_point_name }}" name="pickup_point_name"
                    required>
            </div>
            @error('pickup_point_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3 mt-3">
                <label for="pickup_point_address" class="form-label">pickup_point Address :</label>
                <input type="text" class="form-control" value="{{ $data->pickup_point_address }}"
                    name="pickup_point_address" required>
            </div>

            <div class="mb-3 mt-3">
                <label for="pickup_point_phone" class="form-label"> pickup_point Phone number :</label>
                <input type="text" class="form-control" value="{{ $data->pickup_point_phone }}"
                    name="pickup_point_phone" required>
            </div>
            @error('pickup_point_phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3 mt-3">
                <label for="pickup_point_phone_two" class="form-label">Another phone :</label>
                <input type="text" class="form-control" value="{{ $data->pickup_point_phone_two }}"
                    name="pickup_point_phone_two">
            </div>
            @error('pickup_point_phone_two')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"> <span class="d-none loader"> <i class="fas fa-spinner pr-2"></i>Loading.... </span><span class="submit_btn">Submit</span></button>
            </div>
        </form>
    </div>
</div>
