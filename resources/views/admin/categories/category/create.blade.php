@extends('layouts.admin')

@section('admin_content')
    <div class="content-wrapper mt-3">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-9 col-sm-12">
                                        <h3 class="card-title">Add Category form</h3>
                                    </div>
                                    <div class="col-lg-3 col-sm-12">
                                        <a href="{{ route('category.index') }}" class="btn btn-outline-primary">All
                                            categories</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <!-- form start -->
                                    <form action="{{ route('store.category') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Category name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    name="category_name" placeholder="Enter category name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile"> Category image</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            name="category_image" id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                    @if ($errors->has('image'))
                                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
