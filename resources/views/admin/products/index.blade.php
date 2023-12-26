@extends('layouts.admin')

@section('admin_content')
    <style>
        .product_model {
            max-width: 800px;
            margin: 0.75rem auto;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" />
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-10 col-sm-12">
                                        <h3 class="card-title">All Products</h3>
                                    </div>
                                    <div class="col-lg-2 col-sm-12">
                                        <a href="{{ route('product.create') }}" class="btn btn-outline-primary">Add new</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Product_name</th>
                                            <th>Product_thumbnail</th>
                                            <th>Selling_price</th>
                                            <th> Action </th>
                                            <th>Category_name</th>
                                            <th>SubCategory_name</th>
                                            <th>Short_description</th>
                                            <th>Product_code</th>
                                            <th>Product_unit</th>
                                            <th>Product_tags</th>
                                            <th>Product_color</th>
                                            <th>Product_size</th>
                                            <th>Purchase_price</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td><a
                                                        href="{{ route('product.product_details', $item->product_slug) }}">{{ substr($item->product_name, 0, 30) }}</a>
                                                </td>
                                                <td><img src="{{ asset($item->product_thumbnail) }}" style="width: 80px"
                                                        alt="{{ $item->product_thumbnail }}"></td>
                                                <td>{{ $item->selling_price }}</td>
                                                <td>
                                                    <a href="" class="btn btn-sm btn-info edit p-1"
                                                        data-id="{{ $item->id }}" data-toggle="modal"
                                                        data-target="#editproductModel"><i class="fas fa-edit"></i></a>
                                                    <a href="{{ route('product.delete', $item->id) }}"
                                                        class="btn btn-sm btn-danger p-1"><i class="fas fa-trash"></i></a>
                                                </td>
                                                <td>{{ $item->category_name }}</td>
                                                <td>{{ $item->sub_category_name }}</td>
                                                <td>{{ $item->short_description }}</td>
                                                <td>{{ $item->product_code }}</td>
                                                <td>{{ $item->product_unit }}</td>
                                                <td>{{ $item->product_tags }}</td>
                                                <td>{{ $item->product_color }}</td>
                                                <td>{{ $item->product_size }}</td>
                                                <td>{{ $item->purchase_price }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- category edit model --}}
    <!-- Modal -->
    <div class="modal fade" id="editproductModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog product_model" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Product </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div id="modal_body">

                </div>

            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"></script>
    <script>
        $('body').on('click', '.edit', function() {
            let product_id = $(this).data('id');
            $.get("product/edit/" + product_id, function(data) {
                $('#modal_body').html(data);
            })
        })
    </script>
@endsection
