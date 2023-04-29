@extends('admin.dashboard.master')
@section('title','Category')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <div class="card card-outline">
                <div class="card-header bg-blue">
                    <h5 class="text-white m-b-0">Add Category</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('category.update',$category->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" name="category_name" value="{{$category->category_name}}" class="form-control" placeholder="Category Name">
                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
