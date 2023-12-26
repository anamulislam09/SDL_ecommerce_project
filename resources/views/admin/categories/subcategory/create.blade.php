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
                                        <h3 class="card-title">Add Subcategory form</h3>
                                    </div>
                                    <div class="col-lg-3 col-sm-12">
                                        <a href="{{ route('subcategory.index') }}" class="btn btn-outline-primary">All
                                            Subcategories</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <!-- form start -->
                                    <form action="{{ route('store.subcategory') }}" method="POST">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Select category:</label>
                                                <select name="category_id" id="category_id"
                                                    class="form-control">
                                                    <option value="" selected disabled> Select one</option>
                                                    @foreach ($data as $item)
                                                        <option value="{{ $item->id }}"> {{ $item->category_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Subcategory name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    name="sub_category_name" placeholder="Enter category name">
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
