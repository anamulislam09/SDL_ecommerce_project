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
                            <div class="row">
                                <div class="col-3 form-group">
                                    <label for="">Date</label>
                                    <input type="date" name="date" id="date"
                                        class="form-control submitable_input">
                                </div>
                                <div class="col-3 form-group">
                                    <label for="">Status</label>
                                    <select name="status" class="form-control submitable" id="status">
                                        <option value="">All</option>
                                        <option value="0">Pending</option>
                                        <option value="1">Received</option>
                                        <option value="2">Shipped</option>
                                        <option value="3">Complete</option>
                                        <option value="4">Return</option>
                                        <option value="5">Cancel</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="dataTable" class="table table-bordered table-striped">
                                    {{-- <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>subtotal</th>
                                            <th>total</th>
                                            <th>payment_type</th>
                                            <th>date</th>
                                            <th>status</th>
                                        </tr>
                                    </thead> --}}

                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

       {{-- brand edit model --}}
  <!-- Modal -->
  <div class="modal fade" id="editOrderModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Oeder </h5>
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
    {{-- Datatable start here --}}
    <script>
        $(document).ready(function() {
            let table = $('#dataTable').DataTable({
                stateSave: true,
                responsive: true,
                serverSide: true,
                processing: true,
                searching: true,
                ajax: {
                    url: "{{ route('order.index') }}",
                    data: function(e) {
                        e.status = $('#status').val();
                        e.date = $('#date').val();
                    }
                },
                columns: [{
                        data: "DT_RowIndex",
                        title: "SL",
                        name: "DT_RowIndex",
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: "name",
                        title: "Name ",
                        searchable: true
                    },

                    {
                        data: "order_id",
                        title: "Order_id",
                        searchable: true
                    },
                    // {
                    //     data: "apportment",
                    //     title: "apportment",
                    //     searchable: true
                    // },
                    // {
                    //     data: "country",
                    //     title: "country",
                    //     searchable: true
                    // },
                    // {
                    //     data: "district",
                    //     title: "district",
                    //     searchable: true
                    // },
                    // {
                    //     data: "upozilla",
                    //     title: "upozilla",
                    //     searchable: true
                    // },
                    // {
                    //     data: "post_code",
                    //     title: "post_code",
                    //     searchable: true
                    // },
                    // {
                    //     data: "email",
                    //     title: "email",
                    //     searchable: true
                    // },
                    {
                        data: "phone1",
                        title: "phone1",
                        searchable: true
                    },
                    // {
                    //     data: "phone2",
                    //     title: "phone2",
                    //     searchable: true
                    // },
                    // {
                    //     data: "subtotal",
                    //     title: "subtotal",
                    //     searchable: true
                    // },
                    {
                        data: "total",
                        title: "total",
                        searchable: true
                    },
                    // {
                    //     data: "payment_type",
                    //     title: "payment_type",
                    //     searchable: true
                    // },
                    {
                        data: "date",
                        title: "date",
                        searchable: true
                    },
                    {
                        data: "status",
                        title: "status",
                        
                        orderable: false,
                        searchable: true
                    },
                    {
                        data: "action",
                        title: "action",
                        orderable: false,
                        searchable: false
                    },
                ],
            });
        })
        // {{-- submit ALL call for any changes--}}
        $(document).on('change', '.submitable', function(){
            $('.dataTable').DataTable().ajax.reload();
        })
        $(document).on('blur', '.submitable_input', function(){
            $('.dataTable').DataTable().ajax.reload();
        })

        //   {{-- active_status --}}
        $('body').on('click', '.edit', function() {
            let id = $(this).data('id');
            var url = "{{ url('orders/edit') }}/" + id;
            $.ajax({
                url: url,
                type: 'get',
                success: function(data) {
                $('#modal_body').html(data);
                    // toastr.success(data);
                    // window.location.reload()
                }
            })
        })
    </script>
@endsection
