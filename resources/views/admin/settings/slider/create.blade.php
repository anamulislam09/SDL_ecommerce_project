@extends('layouts.admin')

@section('admin_content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" />
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
                                        <h3 class="card-title">Add Slider</h3>
                                    </div>
                                    <div class="col-lg-3 col-sm-12">
                                        <a href="{{ route('slider.index') }}" class="btn btn-outline-primary">All
                                            Sliders</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <!-- form start -->
                                    <form action="{{ route('store.slider') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="slider_name"> Slider name</label>
                                                <input type="text" class="form-control" id=""
                                                    name="slider_name" placeholder="Enter slider name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile"> Slider image</label>
                                                <div class="input-group">
                                                        <input type="file" class="custom-file-input"
                                                            name="image" id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="slider_name">Slider Link</label>
                                                <input type="url" name="link" id="" class="form-control" placeholder="Enter slider link">
                                            </div>
                                            <div class="form-group">
                                                <label for="slider_name">Status</label>
                                               <Select name="status" class="form-control">
                                                <option value="" selected disabled>Select Once</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                               </Select>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"></script>
@endsection
