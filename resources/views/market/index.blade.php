@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach($sells as $sell)
            <div class="col-md-2">
                <br>
                <br>
                <div class="" style="padding-bottom:15px;">
                    <div class="card-header">
                        <a href="{{route('blog_path',['sell'=>$sell->id])}}"> {{$sell->title}}</a>

                    </div>

                    <div class="card-body">
                        <span style="font-size: 20px">Location:</span>{{$sell->location}}
                        <div class="col">
                            <a href="{{route('blog_path',['sell'=>$sell->id])}}">
                            <img src="{{asset($sell->image)}}"  class="rounded-circle" alt="" ></a>

                        <p class="lead" style="font-size: 20px;">
                            Posted
                            {{$sell->created_at->diffForHumans()}}
                        </p>
                            <a href="{{route('edit_blog_path', ['sell'=>$sell->id])}}" class="btn btn-outline-info">Edit</a>

                            {{--<a href="{{route('blogs_path')}}" class="btn btn-outline-secondary">Back</a>--}}

                            <form action="{{route('delete_blog_path',['sell'=>$sell->id])}}" method="POST" class="p-3">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>

                            </form>
                        </div>
                        <br>
                </div>
            </div>

    </div>
        @endforeach
    </div>

@endsection
