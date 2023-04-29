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
                    <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label>Sub title</label>
                            <input type="text" name="subtitle" class="form-control" placeholder="SubTitle">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control"  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            <img width="100" src="" id="blah" alt="">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

