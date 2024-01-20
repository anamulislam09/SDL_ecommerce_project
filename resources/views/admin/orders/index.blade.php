@extends('layouts.admin')

@section('admin_content')
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
                                        <h3 class="card-title">All Orders</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Order id</th>
                                            <th>Customer Name</th>
                                            {{-- <th>Date</th> --}}
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th> Action</th>
                                    </thead>
                                    <tbody>

                                        @php
                                            $total_price = 0;
                                        @endphp
                                        @foreach ($data as $key => $item)
                                            @php
                                                $total_price = $total_price + $item->price * $item->quantity;
                                            @endphp
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item->order_id }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $total_price }}</td>
                                                <td>
                                                    @if ($item->status == 0)
                                                        <a href="#"data-id= "{{$item->id }}"class="status"><span
                                                                class="badge badge-info ">pending</span></a>
                                                    @else
                                                        <span class="badge badge-primary">deliverd</span>
                                                    @endif
                                                    <a href="{{ route('subcategory.delete', $item->id) }}"><span
                                                            class="badge badge-danger">cancelled</span></a>
                                                </td>

                                                <td>
                                                    <a href="" class="btn btn-sm btn-info edit"
                                                        data-id="{{ $item->id }}" data-toggle="modal"
                                                        data-target="#editSubCatModel"><i class="fas fa-edit"></i></a>

                                                </td>
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
    {{-- <div class="modal fade" id="editSubCatModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit SubCategory </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div id="modal_body">

                </div>

            </div>
        </div>
    </div> --}}

    <!-- jQuery -->
    <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"></script>
    <script>
          //   {{-- active_status --}}
    $('body').on('click', '.status', function() {
      let id = $(this).data('id');
      alert(id);
      var url = "{{ url('orders/order-status') }}/" + id;
      $.ajax({
        url: url,
        type: 'get',
        success: function(data) {
          // alert(data);
          toastr.success(data);
          window.location.reload()
        }
      })
    })
    </script>
@endsection
