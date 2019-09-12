@extends('layouts.app')

@section('content')
    <div class="row">
            <div class="" style="text-align: center;padding-left:100px;">
                <br>
                <br>
                <div class="" style="padding-bottom:15px;">
                    <div class="card-header">
                        {{$sell->title}}

                    </div>

                    <div class="card-body">
                       <span style="font-size:20px">Phone Contact:</span> {{$sell->contact}}<br>
                        <span style="font-size: 20px">Location:</span>{{$sell->location}}<br>
                        <span style="font-size: 20px">Seller:</span>{{$sell->seller}}<br>
                        <div class="col">

                            <img src="{{asset($sell->image)}}"  class="rounded-circle" alt="" >

                            <a href="{{route('sells_path')}}" class="btn btn-outline-secondary">Buy</a>
                        <p class="lead">
                            Posted
                            {{$sell->created_at->diffForHumans()}}

                        </p>
                            <a href="{{route('sells_path')}}" class="btn btn-outline-secondary">Back</a>
                        </div>
                        <br>
                </div>
            </div>

    </div>
    </div>

@endsection


