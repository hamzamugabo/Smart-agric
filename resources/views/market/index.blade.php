@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach($blogs as $blog)
            <div class="col-md-12">
                <br>
                <br>
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('blog_path', ['blog'=>$blog->id])}}"> {{$blog->title}}</a>

                    </div>

                    <div class="card-body">
                        {{$blog->content}}
                        <a href="{{route('blog_path',['blog'=>$blog->id])}} ">
                            <img src="{{asset($blog->image)}}"  class="card-img-top" alt=""></a>
                        <p class="lead">
                            <br>
                            Posted
                            {{$blog->created_at->diffForHumans()}}
                        </p>
                        <br>

                        @foreach($blog->comments as $comment)
                            {{--{{$comment->comment}}<br>--}}
                        @endforeach

                        <form action="{{route('store_comment')}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <div class="form-group">
                                <label for="title">Comment</label>
                                <textarea name="comment" rows="3" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-primary"> Add Comment
                                </button>
                            </div>

                        </form>

                        <a href="{{route('blog_path',['blog'=>$blog->id])}}" class="btn btn-outline-primary">View Post</a>
                        <a href="{{route('blog_path',['blog'=>$blog->id])}}" class="btn btn-outline-primary">View Comments</a>
                    </div>

                </div>

                @endforeach

            </div>

    </div>

@endsection
