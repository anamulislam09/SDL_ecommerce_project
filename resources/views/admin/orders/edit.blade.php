
<form action="{{ route('update.order') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data->id}}">
    <div class="modal-body">
        <div class="mb-3 mt-3">
            <label for="name" class="form-label"> User Name:</label>
            <input type="text" class="form-control" value="{{ $data->name }}" name="name">
          </div>
          
          <div class="mb-3 mt-3">
              <label for="Address" class="form-label"> User Address:</label>
              <input type="text" class="form-control" value="{{ $data->address }}" name="address">
            </div>
          
            <div class="mb-3 mt-3">
                <label for="phone" class="form-label"> User phone:</label>
                <input type="text" class="form-control" value="{{ $data->phone1 }}" name="phone">
              </div>
            
            
      <div class="mt-3">
        <label for="category_id" class="form-label">Order Status:</label>
        <select name="status" id="status" class="form-control">
            <option value="0" @if ($data->status == 0) selected @endif>Pending</option>
            <option value="1" @if ($data->status == 1) selected @endif>Received</option>
            <option value="2" @if ($data->status == 2) selected @endif>Shipped</option>
            <option value="3" @if ($data->status == 3) selected @endif>Complete</option>
            <option value="4" @if ($data->status == 4) selected @endif>Return</option>
            <option value="5" @if ($data->status == 5) selected @endif>Cancel</option>
        </select>
      </div>
  
  
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
  