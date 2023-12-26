<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" />
<style>
    .bootstrap-tagsinput .tag {
        background: #428bca;
        border: 1px solid white;
        padding: 1.6px;
        padding-left: 2px;
        margin-right: 2px;
        color: white;
        border-radius: 4px
    }

    .img {
        font-size: 16px !important;
    }
</style>

<div class="card">
    <div class="card-body">
        <!-- form start -->
        <form action="{{ route('update.product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $data->id }}">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- general form elements -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Name</label>
                                        <input type="text" name="product_name" class="form-control"
                                            value="{{ $data->product_name }}" id="" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product code</label>
                                        <input type="text" name="product_code" value="{{ $data->product_code }}"
                                            class="form-control" id="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Category</label>
                                        <select name="category_id" id="category" class="form-control" required>
                                            <option value="" selected disabled>Select Once</option>
                                            @foreach ($cats as $cat)
                                                <option value="{{ $cat->id }}"
                                                    @if ($cat->id == $data->category_id) selected @endif>
                                                    {{ $cat->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Subcategory</label>
                                        <select name="subcategory_id" id="subcategory" class="form-control" required>
                                            <option value="" selected disabled>Select Once</option>
                                            @foreach ($subcats as $subcat)
                                                <option value="{{ $subcat->id }}"
                                                    @if ($subcat->id == $data->subcategory_id) selected @endif>
                                                    {{ $subcat->sub_category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"> Brand </label>
                                <select name="brand_id" id="" class="form-control">
                                    <option value="" selected disabled>Selecte once</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}"
                                            @if ($brand->id == $data->brand_id) selected @endif>
                                            {{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Pickup Point</label>
                                        <select name="pickup_point_id" id="" class="form-control">
                                            <option value="" selected disabled>Selecte once</option>
                                            @foreach ($pick_points as $pick_point)
                                                <option value="{{ $pick_point->id }}"
                                                    @if ($pick_point->id == $data->pickup_point_id) selected @endif>
                                                    {{ $pick_point->pickup_point_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Unit</label>
                                        <input type="text" class="form-control" name="product_unit" value="{{ $data->product_unit }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Purchase Price</label>
                                        <input type="text" class="form-control" value="{{ $data->purchase_price }}" name="purchase_price"
                                            id="exampleInputEmail1">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Seling Price</label>
                                        <input type="text" class="form-control" value="{{ $data->selling_price }}" name="selling_price"
                                            id="">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Discount Price</label>
                                        <input type="text" class="form-control" value="{{ $data->descount_price }}" name="descount_price"
                                            id="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Warehouse</label>
                                        <select name="warehouse" id="" class="form-control">
                                            <option value="" selected disabled>Selecte once</option>
                                            @foreach ($warehouses as $warehouse)
                                                <option value="{{ $warehouse->id }}"
                                                    @if ($warehouse->id == $data->warehouse) selected @endif>
                                                    {{ $warehouse->warehouse_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Stock</label>
                                        <input type="text" class="form-control" id="" value="{{ $data->stock_quantity }}"
                                            name="stock_quantity">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tags</label>
                                        <input type="text" name="product_tags" value="{{ $data->product_tags }}"
                                            data-role="tagsinput" class="form-control" id="">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> color</label>
                                        <input type="text" name="product_color" value="{{ $data->product_color }}"
                                            data-role="tagsinput" class="form-control" id="">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product size</label>
                                        <input type="text" class="form-control" id=""
                                            data-role="tagsinput" value="{{ $data->product_size }}" name="product_size">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="product_details" class="form-label">Product short_description:</label>
                                <textarea name="short_description" class="form-control">{{ $data->short_description }}</textarea>
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="product_details" class="form-label">Product details:</label>
                                <textarea name="product_description" id="summernote" class="form-control">{{ $data->product_description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="thumbnail">Main Thumbnail <span class="text-danger">*</span></label><br>
                                <input type="file" class="dropify img" name="product_thumbnail" value="{{ $data->product_thumbnail }}" accept="image/*">
                                    <td>
                                        <img src="{{ asset($data->product_thumbnail) }}" style="width: 80px"
                                        alt="{{ $data->product_thumbnail}}">
                                    </td>
                            </div> <br>

                            <div class="">
                                <table class="table table-bordered" id="dynamic_field">
                                    <div class="card-header">
                                        <h3 class="card-title">More Images (Click Add For More Image)</h3>
                                    </div>
                                    <tr>
                                        <td><input type="file" name="images[]" class="form-control name_list" value="{{ $data->images }}">
                                        <td><button type="button" name="add" id="add"
                                                class="btn btn-success">Add</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @foreach (json_decode($data->images, TRUE) as $item )
                                            <img src="{{ asset('files/product/'.$item) }}" style="width: 80px" alt="{{ $item }}">
                                            @endforeach
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/form left ends here-->

                <!-- right column -->
                <div class="col-md-4">
                    <!-- Form Element sizes -->
                    <div class="card card-success">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Video embade code</label>
                                <input type="link" name="product_video" class="form-control" value="{{ $data->product_video }}">
                            </div>

                            <div class="card p-4">
                                <h6>Featured Product</h6>
                                <input type="checkbox" name="featured" value="1"  @if ( $data->featured ==1) checked @endif data-bootstrap-switch
                                    data-off-color="danger" data-on-color="success">
                            </div>

                            <div class="card p-4">
                                <h6> Today Deal</h6>
                                <input type="checkbox" name="today_deal" value="1" @if ( $data->today_deal ==1) checked @endif data-bootstrap-switch
                                    data-off-color="danger" data-on-color="success">
                            </div>

                            <div class="card p-4">
                                <h6> Slider Product </h6>
                                <input type="checkbox" name="product_slider" value="1"  @if ( $data->product_slider ==1) checked @endif  data-bootstrap-switch
                                    data-off-color="danger" data-on-color="success">
                            </div>

                            <div class="card p-4">
                                <h6> Status</h6>
                                <input type="checkbox" name="status" value="1"  @if ( $data->status ==1) checked @endif data-bootstrap-switch
                                    data-off-color="danger" data-on-color="success">
                            </div>
                            <div class="card p-4">
                                <h6> product trendy</h6>
                                <input type="checkbox" name="trendy" value="1"  @if ( $data->trendy ==1) checked @endif data-bootstrap-switch
                                    data-off-color="danger" data-on-color="success">
                            </div>
                            <div class="card p-4">
                                <h6> Cash on delivery </h6>
                                <input type="checkbox" name="cash_on_delivery" value="1"  @if ( $data->cash_on_delivery ==1) checked @endif
                                    data-bootstrap-switch data-off-color="danger" data-on-color="success">
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!--/.col (right) -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"></script>
<script src="{{ asset('backend/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.min.js"></script>

{{-- CHECKBOX  --}}
<script>
    $('.dropify').dropify(); //dropify image 
    $("input[data-bootstrap-switch]").each(function() {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });
</script>

{{-- Add more inmage upoad  --}}
<script>
    $(document).ready(function() {
        var postURL = "<?php echo url('addmore'); ?>";
        var i = 1;
        $('#add').click(function() {
            i++;
            $('#dynamic_field').append('<tr id="row' + i +
                '" class="dynamic-added"> <td><input type="file" name="images[]" class="form-control name_list" accept="image/*"></td> <td><button type="button" name="remove" id="' +
                i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr('id');
            $("#row" + button_id + '').remove();
        });
    });
</script>

<script>
    // from submit loading
    $('#add-form').on('submit', function() {
        $('.loader').removeClass('d-none');
        $('.submit_btn').addClass('d-none');
    })
</script>

{{-- create child category using ajax  --}}
<script>
    $(document).ready(function() {
        // get subcategory 
        $("#category").change(function() {
            let categoryid = $(this).val();
            $("#subcategory").html('<option value="">Select One</option>')
            $.ajax({
                url: '/product/subcategory',
                type: 'post',
                data: 'categoryid=' + categoryid + '&_token={{ csrf_token() }}',
                success: function(result) {
                    $('#subcategory').html(result);
                }
            })
        })
    });
</script>

{{-- summernote  --}}
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
