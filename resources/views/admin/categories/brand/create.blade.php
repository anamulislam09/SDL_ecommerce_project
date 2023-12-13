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
                                        <a href="{{ route('brand.index') }}" class="btn btn-outline-primary">All
                                            Brands</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <!-- form start -->
                                    <form action="{{ route('store.brand') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Brand name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    name="brand_name" placeholder="Enter brand name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile"> Brand image</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            name="brand_image" id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                    @if ($errors->has('brand_image'))
                                                        <span class="text-danger">{{ $errors->first('brand_image') }}</span>
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
