
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">Edit Produce</div>
            <div class="car-body">
    <form action="{{route('update_blog_path',['sell'=>$sell->id])}}" method="post" enctype="multipart/form-data">

        @csrf

        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>

            <input type="text" name="title" class="form-control" value="{{$sell->title}}">


        </div>

        <div class="form-group">
            <label for="title">Location</label>
            <input type="text" name="location" class="form-control" value="{{$sell->location}}" >

        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary"> Edit

            </button>
        </div>

    </form>
            </div>
        </div>
    </div>
    </div>
@endsection