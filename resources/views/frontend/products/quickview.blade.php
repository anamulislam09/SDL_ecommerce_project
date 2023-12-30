@php
    $rating5 = App\Models\Review::where('product_id', $data->id)
        ->where('rating', 5)
        ->count();
    $rating4 = App\Models\Review::where('product_id', $data->id)
        ->where('rating', 4)
        ->count();
    $rating3 = App\Models\Review::where('product_id', $data->id)
        ->where('rating', 3)
        ->count();
    $rating2 = App\Models\Review::where('product_id', $data->id)
        ->where('rating', 2)
        ->count();
    $rating1 = App\Models\Review::where('product_id', $data->id)
        ->where('rating', 1)
        ->count();

    // average rating
    $sum_rating = App\Models\Review::where('product_id', $data->id)->sum('rating');
    $count_rating = App\Models\Review::where('product_id', $data->id)->count('rating');

@endphp
<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="product__modal-box">
            <div class="tab-content" id="modalTabContent">
                @php
                    $images = json_decode($data->images, true);
                    $color = explode(',', $data->product_color);
                    $size = explode(',', $data->product_size);
                @endphp
                <div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
                    <div class="product__modal-img w-img">
                        {{-- <img src="{{ asset('files/product/' . $image) }}" id="thumbImage"> --}}
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs" id="modalTab" role="tablist">
                @foreach ($images as $image)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav2-tab" data-bs-toggle="tab" data-bs-target="#nav2"
                            type="button" role="tab" aria-controls="nav2" aria-selected="false">
                            <img src="{{ asset('files/product/' . $image) }}" style="width: 130px"
                                alt="{{ $image }}">
                        </button>
                    </li>
                @endforeach
                </li>
            </ul>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="product__modal-content">
            <h4><a href="product-details.html"></a></h4>
            <div class="product__modal-des mb-40">
                <p>{{ $data->product_name }}</p>
            </div>
            <div class="product__stock">
                <span>Availability :</span>
                @if ($data->stock_quantity < 1)
                    <a href="" class="text-danger" disabled>Stock
                        out</a>
                @else
                    <span>In Stock</span>
                @endif
            </div>
            <div class="product__stock sku mb-30">
                <span>SKU:</span>
                <span>Samsung C49J89: £875, Debenhams Plus</span>
            </div>
            <div class="product__review d-sm-flex">
                <div class="rating rating__shop mb-15 mr-35">
                    <ul>
                        @if ($sum_rating == null)
                            <li><span class="fas fa-star "></span></li>
                            <li><span class="fas fa-star "></span></li>
                            <li><span class="fas fa-star "></span></li>
                            <li><span class="fas fa-star "></span></li>
                            <li><span class="fas fa-star "></span></li>
                        @elseif($sum_rating != null)
                            <li><span
                                    class="fas fa-star {{ round($sum_rating / $count_rating) >= 1 ? 'checked' : null }}"></span>
                            </li>
                            <li><span
                                    class="fas fa-star {{ round($sum_rating / $count_rating) >= 2 ? 'checked' : null }}"></span>
                            </li>
                            <li><span
                                    class="fas fa-star {{ round($sum_rating / $count_rating) >= 3 ? 'checked' : null }}"></span>
                            </li>
                            <li><span
                                    class="fas fa-star {{ round($sum_rating / $count_rating) >= 4 ? 'checked' : null }}"></span>
                            </li>
                            <li><span
                                    class="fas fa-star {{ round($sum_rating / $count_rating) >= 5 ? 'checked' : null }}"></span>
                            </li>
                        @endif
                    </ul>
                </div>

            </div>
            <div class="product__price">
                @if ($data->descount_price == null)
                    <span class="new mb-5">${{ $data->selling_price }}</span>
                @else
                    <div>
                        <span class="price-old mb-5">${{ $data->descount_price }}</span>
                        <del>${{ $data->selling_price }}</del>
                    </div>
                @endif
            </div>
            <div class="product__modal-form mb-30">
                <form action="{{route('addToCart')}}" method="POST" id="add_cart_form_Qv">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data->id }}">

                    @if ($data->descount_price == null)
                        <input type="hidden" name="price" value="{{ $data->selling_price }}">
                    @else
                        <input type="hidden" name="price" value="{{ $data->descount_price }}">
                    @endif

                    <div class="clearfix" style="z-index: 1000">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label for="">Color:</label>
                                    <select name="color" class="form-control form-control-sm" style="min-width:120px;"
                                        id="">
                                        <option value="" selected disabled>Select Color</option>
                                        @foreach ($color as $row)
                                            <option value="{{ $row }}">{{ $row }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="">Size:</label>
                                    <select name="size" class="form-control form-control-sm" style="min-width:120px;"
                                        id="">
                                        <option value="" selected disabled>Select Size</option>
                                        @foreach ($size as $row)
                                            <option value="{{ $row }}">{{ $row }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pro-quan-area d-lg-flex align-items-center pt-3">
                        <div class="product-quantity mr-20 mb-25">
                            <div class="cart-plus-minus p-relative"><input type="text" name="qty"
                                    value="1" /></div>
                        </div>
                        <div class="pro-cart-btn mb-25">
                            @if ($data->stock_quantity < 1)
                                <a href="" class="btn btn-danger" disabled>Stock
                                    out</a>
                            @else
                                <button class="t-y-btn" type="submit">Add to cart</button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
            <div class="product__modal-links">
                <ul>
                    <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                    <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a>
                    </li>
                    <li><a href="#" title="Print"><i class="fal fa-print"></i></a></li>
                    <li><a href="#" title="Print"><i class="fal fa-share-alt"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#nav2-tab').click(function() {
            var images = $('#nav2-tab img').attr('src');
            $("#thumbImage").attr('src', images)
        });
    })

    //         $(document).ready(function(){
    //   $("button").click(function(){
    //     $("#div1").load("demo_test.txt");
    //   });
    // });
</script>

<script>
    // add to cart 
    $('#add_cart_form_Qv').submit(function(e) {
      e.preventDefault();
      $('.loading').removeClass('d-none');
      var url = $(this).attr('action');
      var request = $(this).serialize();
      $.ajax({
        url: url,
        type:'post',
        async: false,
        data: request,
        success:function(data){
          toastr.success(data);
          $('#add_cart_form')[0].reset();
        //   $('.loading').addClass('d-none');
        //   Cart();
          
        }
      })
    })
  </script>

