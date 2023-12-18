
<form action="{{ route('update.warehouse') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $data->id }}">
    <div class="modal-body">
        <div class="mb-3 mt-3">
            <label for="warehouse_name" class="form-label">Warehouse Name:</label>
            <input type="text" class="form-control" value="{{$data->warehouse_name}}" name="warehouse_name" >
        </div>

        <div class="mb-3 mt-3">
            <label for="warehouse_address" class="form-label">Warehouse Address:</label>
            <textarea name="warehouse_address" id="" class="form-control">{{$data->warehouse_address}}</textarea>
        </div>

    <div class="mb-3 mt-3">
        <label for="warehouse_phone" class="form-label">Warehouse Contact number:</label>
        <input type="text" class="form-control" value="{{$data->warehouse_phone}}" name="warehouse_phone" id="warehouse_phone">
    </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
