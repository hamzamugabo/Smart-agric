
@extends('layouts.app')

@section('content')
    <form action="{{route('update_blog_path',['sell'=>$sell->id])}}" method="post" enctype="multipart/form-data">

        @csrf

        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>

            <input type="text" name="title" class="form-control" value="{{$sell->title}}">


        </div>

        <div class="form-group">
            <label for="title">Content</label>
            <textarea name="contents" rows="10" class="form-control" >{{$sell->location}}</textarea>

        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary"> Edit

            </button>
        </div>

    </form>
@endsection