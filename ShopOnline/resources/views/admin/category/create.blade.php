@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Category
                    <a href="{{ url('admin/category') }}" class="btn btn-primary btn-sm float-end">Quay lại</a>
                </h3>                
            </div>
            <div class="card-body">
                <form action="{{ url('admin/category') }}" enctype="multipart/form-data" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" />
                            {{-- require  --}}
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Slug</label>
                            <input type="text" name="slug" class="form-control" />
                            @error('slug')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Description</label><br>
                            <textarea name="description" rows="3"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Status</label><br>
                            <input type="checkbox" name="status"/>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Meta Title</label><br>
                            <textarea type="text" name="meta_title"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Meta Keyword</label><br>
                            <textarea type="text" name="meta_keyword"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Meta Description</label><br>
                            <textarea type="text" name="meta_description"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <button type="submit" class="btn btn-primary float-end">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection