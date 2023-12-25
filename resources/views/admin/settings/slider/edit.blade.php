<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" />

<form action="{{ route('update.slider') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $data->id }}">
    <div class="modal-body">
        <div class="mb-3 mt-3">
            <label for="slider_name" class="form-label"> Slider Name:</label>
            <input type="text" class="form-control" value="{{ $data->slider_name }}" name="slider_name">
        </div>

        {{-- image --}}
        <div class="mb-3 mt-3">
            <label for="image" class="form-label">Image:</label>
            <input type="file" class="dropify" data-height="200" name="image">
            <input type="hidden" name="old_image" value="{{ $data->image }}">
            <img src="{{asset($data->image) }}" alt="" style="width: 80px">
        </div>
        <div class="form-group">
            <label for="slider_name">Slider Link</label>
            <input type="url" name="link" value="{{ $data->link }}" id="" class="form-control" placeholder="Enter slider link">
        </div>
        <div class="form-group">
            <label for="slider_name">Status</label>
           <Select name="status" class="form-control">
            <option value="" selected disabled>Select Once</option>
            <option value="1" @if ($data->status==1) selected @endif>Active</option>
            <option value="0" @if ($data->status==0) selected @endif>Inactive</option>
           </Select>
        </div>
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
