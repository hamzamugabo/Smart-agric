@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach($sells as $sell)
            <div class="col">
                <br>
                <br>
                <div class="card">
                    <div class="card-header">
                        <a href=""> {{$sell->title}}</a>

                    </div>

                    <div class="card-body">
                       <span style="font-size:20px">Phone Contact:</span> {{$sell->contact}}<br>
                        <span style="font-size: 20px">Location:</span>{{$sell->location}}<br>
                        <div class="col">
                        <a href="">
                            <img src="{{asset($sell->image)}}"  class="rounded-circle" alt="" ></a>

                        <p class="lead">
                            <br>
                            Posted
                            {{$sell->created_at->diffForHumans()}}
                        </p>
                        </div>
                        <br>
                </div>

                @endforeach

            </div>

    </div>

@endsection
