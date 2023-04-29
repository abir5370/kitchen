@extends('admin.dashboard.master')
@section('title','Manage | Slider')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(session('delete'))
                <div class="alert alert-success">{{session('delete')}}</div>
            @endif
            <div class="card">
                <div class="card-header">Manage Slider</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Si</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sliders as $key=>$slider)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$slider->title}}</td>
                                    <td>{{$slider->subtitle}}</td>
                                    <td>
                                        <img src="{{asset($slider->image)}}" width="50" alt="">
                                    </td>
                                    <td>
                                        <a href="{{route('slider.status',$slider->id)}}" class="btn btn-sm btn-{{$slider->status==1?'success':'secondary'}}">{{$slider->status==1?'Active':'Deactive'}}</a>
                                    </td>
                                    <td class="btn-group">
                                        <a href="{{route('slider.edit',$slider->id)}}" class="btn btn-sm btn-primary mx-1">Edit</a>
                                        <form action="{{route('slider.destroy',$slider->id)}}" method="POST" id="delete-form">
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
