@extends('admin.dashboard.master')
@section('title','Create |Slider')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <div class="card card-outline">
                <div class="card-header bg-blue">
                    <h5 class="text-white m-b-0">Add Slider</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('item.update',$item->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <select name="category_id" class="form-control" id="">
                                <option>--select category--</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"{{$category->id==$item->category_id?'selected':''}}>{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Item Name</label>
                            <input type="text" name="item_name" value="{{$item->item_name}}" class="form-control" placeholder="Item Name">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" placeholder="Description">{{$item->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" value="{{$item->price}}" class="form-control" placeholder="price">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control"  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            <img width="100" src="{{asset($item->image)}}" id="blah" alt="">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

