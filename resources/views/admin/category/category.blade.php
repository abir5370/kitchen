@extends('admin.dashboard.master')
@section('title','Category')
@section('content')
    <div class="row">
        <div class="col-md-8">
            @if(session('delete'))
                <div class="alert alert-success">{{session('delete')}}</div>
            @endif
                @if(session('update'))
                    <div class="alert alert-success">{{session('update')}}</div>
                @endif
            <div class="card">
                <div class="card-header">Manage Category</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Si</th>
                            <th>Category Name</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $key=>$category)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->slug}}</td>
                                <td>
                                    <a href="{{route('category.status',$category->id)}}" class="btn btn-sm btn-{{$category->status==1?'success':'secondary'}}">{{$category->status==1?'Active':'Deactive'}}</a>
                                </td>
                                <td class="btn-group">
                                    <a href="{{route('category.edit',$category->id)}}" class="btn btn-sm btn-primary mx-1">Edit</a>
                                    <form action="{{route('category.destroy',$category->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn btn-sm btn-danger" onclick="return confirm('Are sure delete this!')">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <div class="card card-outline">
                <div class="card-header bg-blue">
                    <h5 class="text-white m-b-0">Add Category</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('category.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" name="category_name" class="form-control" placeholder="Title">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
