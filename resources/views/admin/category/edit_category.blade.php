@extends('layouts.backapp')
@section('backend_content')
<div class="pcoded-content">
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            
            <!-- Page-header end -->
                
                <div class="page-body">
                    <!-- Config. table start -->
                    <div class="card col-md-10 m-auto">
                        <div class="card-header">
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <h5>All Category</h5>
                            <a class="btn btn-primary float-right" href="{{ url('category/all_category') }}">All Category</a>
                        </div>

                        <div class="card-block">
                            <form action="{{ url('category/update_category/'.$edit_category->id) }}" method="POST">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Category Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="category_name" value="{{ $edit_category->category_name }}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Select Status</label>
                                    <div class="col-sm-8">
                                        <select name="status" class="form-control">
                                            <option {{ $edit_category->status == "1" ? "selected" : " " }} value="1">Active</option>
                                            <option {{ $edit_category->status == "0" ? "selected" : " " }} value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"></label>
                                    <div class="col-sm-8">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Config. table end -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection