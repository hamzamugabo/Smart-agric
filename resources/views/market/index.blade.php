@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach($sells as $sell)
            <div class="col-md-2">
                <br>
                <br>
                <div class="" style="padding-bottom:15px;">
                    <div class="card-header">
                        <a href=""> {{$sell->title}}</a>

                    </div>

                    <div class="card-body">
                       <span style="font-size:20px">Phone Contact:</span> {{$sell->contact}}<br>
                        <span style="font-size: 20px">Location:</span>{{$sell->location}}<br>
                        <span style="font-size: 20px">Seller:</span>{{$sell->seller}}<br>
                        <div class="col">
                        <a href="">
                            <img src="{{asset($sell->image)}}"  class="rounded-circle" alt="" ></a>

                        <p class="lead">
                            Posted
                            {{$sell->created_at->diffForHumans()}}
                        </p>
                        </div>
                        <br>
                </div>
            </div>

    </div>
        @endforeach
    </div>

@endsection
