@extends('admin.dashboard.master')
@section('title','Manage | Slider')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(session('delete'))
                <div class="alert alert-success">{{session('delete')}}</div>
            @endif
                @if(session('update'))
                    <div class="alert alert-success">{{session('update')}}</div>
                @endif
            <div class="card">
                <div class="card-header">Manage Slider</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Si</th>
                            <th>Category Name</th>
                            <th>Item Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $key=>$item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->relCategory->category_name}}</td>
                                <td>{{$item->item_name}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->price}}</td>
                                <td>
                                    <img src="{{asset($item->image)}}" width="50" alt="">
                                </td>
                                <td class="btn-group">
                                    <a href="{{route('item.edit',$item->id)}}" class="btn btn-sm btn-primary mx-1">Edit</a>
                                    <form action="{{route('item.destroy',$item->id)}}" method="POST" id="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure Delete this!!')">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
