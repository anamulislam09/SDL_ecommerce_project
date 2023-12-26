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
                                        <h3 class="card-title">All Subcategories</h3>
                                    </div>
                                    <div class="col-lg-2 col-sm-12">
                                        <a href="{{ route('subcategory.create') }}" class="btn btn-outline-primary">Add new</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Sub category</th>
                                            <th> Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $item)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $item->sub_category_name }}</td>
                                                <td>{{ $item->category_name }}</td>
                                                <td>
                                                    <a href="" class="btn btn-sm btn-info edit" data-id="{{$item->id}}" data-toggle="modal" data-target="#editSubCatModel"><i class="fas fa-edit"></i></a>
                                                    <a href="{{ route('subcategory.delete', $item->id) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
  <div class="modal fade" id="editSubCatModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
  </div>

   <!-- jQuery -->
   <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"></script>
  <script>
$('body').on('click', '.edit', function(){
  let Subcat_id = $(this).data('id');
  $.get("subcategory/edit/"+Subcat_id,function(data){
    $('#modal_body').html(data);
    
  })
})

  </script>
@endsection
