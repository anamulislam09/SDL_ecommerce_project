<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" />

<form action="{{ route('update.brand') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $data->id }}">
    <div class="modal-body">
        <div class="mb-3 mt-3">
            <label for="brand_name" class="form-label"> Brand Name:</label>
            <input type="text" class="form-control" value="{{ $data->brand_name }}" name="brand_name">
        </div>

        {{-- image --}}
        <div class="mb-3 mt-3">
            <label for="image" class="form-label"> Brand Image:</label>
            <input type="file" class="dropify" data-height="200" name="brand_image">
            <input type="hidden" name="old_image" value="{{ $data->brand_image }}">
            <img src="{{ $data->brand_image }}" alt="" style="width: 80px">
        </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<script>
    $('.dropify').dropify()
</script>
