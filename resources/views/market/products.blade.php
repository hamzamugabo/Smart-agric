
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SMART-AGRICULURE') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<style>
    .button {
        display: inline-block;
        border-radius: 4px;
        background-color: #f4511e;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 28px;
        padding: 20px;
        width: 200px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
    }

    .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }

    .button:hover span {
        padding-right: 25px;
    }

    .button:hover span:after {
        opacity: 1;
        right: 0;
    }
</style>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                SMART-AGRIC
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto" style="font-size:20px;">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item" style="border-right:1px solid #333">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>

        </div>
    </nav>


    <nav class="navbar navbar-dark bg-dark" style=" ">
        <a class="navbar-brand" href="/home" style="color:white;font-size:30px;">Sell with us</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style="font-size:25px;color:white;">
            <ul class="navbar-nav ml-auto " style="color: white;">
                <li class="nav-item active">
                    <a class="nav-link" href="{{'/'}}">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('sells_products_path')}}">PRODUCTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PRICING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">BUY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MARKET</a>
                </li>

            </ul>
        </div>
    </nav>


    <main class="py-4">

            {{--<div class="row">--}}
                {{--@foreach($sells as $sell)--}}
                    {{--<div class="" style="text-align: center;padding-left:100px;">--}}
                        {{--<br>--}}
                        {{--<br>--}}

                        {{--<div class="" style="padding-bottom:15px;">--}}
                            {{--<div class="card-header">--}}
                                {{--<a href="{{route('blog_path',['sells'=>$sell->id])}}"> {{$sell->title}}</a>--}}

                            {{--</div>--}}

                            {{--<div class="card-body">--}}
                                {{--<span style="font-size:20px">Phone Contact:</span> {{$sell->contact}}<br>--}}
                                {{--<span style="font-size: 20px">Location:</span>{{$sell->location}}<br>--}}
                                {{--<span style="font-size: 20px">Seller:</span>{{$sell->seller}}<br>--}}
                                {{--<div class="col">--}}

                                    {{--<img src="{{asset($sell->image)}}"  class="rounded-circle" alt="" >--}}

                                    {{--<a href="{{route('sells_path')}}" class="btn btn-outline-secondary">Buy</a>--}}
                                    {{--<p class="lead">--}}
                                        {{--Posted--}}
                                        {{--{{$sell->created_at->diffForHumans()}}--}}

                                    {{--</p>--}}
                                    {{--<a href="" class="btn btn-outline-secondary">Back</a>--}}
                                {{--</div>--}}
                                {{--<br>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--@endforeach--}}
            {{--</div>--}}

            <div class="container">
        @foreach($sells as $sell)
            <div class="card">

                <div class="row">

                    <div class="col-md-4" >

                        <img src="{{asset($sell->image)}}"  class="rounded-circle" alt="" >
                    </div>
                    <div class="col-md-4">
                        <h5>Type:</h5>{{$sell->title}}
                        <h6>Produce name:</h6>
                      <p>  <span style="font-size: 10px">Location:</span>{{$sell->location}}
                          Posted
                          {{$sell->created_at->diffForHumans()}}

                      </p>


                    </div>
                    <div class="col-md-4">
                        Ad Type:<br>
                        Condition :<br>
                        Visits :<br>
                        Seller Name : {{$sell->seller}}<br>
                        Phone Contact: {{$sell->contact}}<br>
                        <a href="" class="btn btn-outline-success">VIEW PRODUCE</a>
                    </div>
                </div>
            </div>
                <br>

                @endforeach
            </div>


    </main>
</div>

</body>
</html>


