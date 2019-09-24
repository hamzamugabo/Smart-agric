
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


    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/home') }}">
                Sell with us
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
                    <li class="nav-item">
                        <a class="navbar-brand" href="{{url('/')}}">{{ __('HOME') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="navbar-brand" href="{{route('sells_products_path')}}">{{ __('Products') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="navbar-brand" href="">{{ __('Pricing') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="navbar-brand" href="{{route('sells_products_path')}}">{{ __('Buy') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="{{ url('/home') }}">{{ __('Market') }}</a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>


    <main class="py-4">



            <div class="container">
                <div class=" ">
                    <form action="" method="" class="form-inline ml-auto">
                        <div class="form-group">
                            <p class="">
                                <input type="text" class="form-control mr-sm-2" id="search" placeholder="Search.." aria-label="Search">
                                <button class="btn btn-secondary  btn-rounded btn-sm my-0" type="submit">Search</button>
                            </p>
                        </div>
                    </form>
                </div>
        @foreach($sells as $sell)
            <div class="card">

                <div class="row ">

                    <div class="col pl-lg-5" >

                        <img src="{{asset($sell->image)}}"  class="rounded-circle" alt="" >
                    </div>
                    <div class="col pl-lg-0" >
                        <p>
                      <strong style="font-size: 15px;"> Type:</strong>
                        {{$sell->title}}
                        </p>
                        <strong>Produce name:</strong>
                      <p>
                          <br>
                          <strong style="font-size: 15px">Location:</strong>{{$sell->location}}
                      </p>
                          <strong>Posted</strong>
                          {{$sell->created_at->diffForHumans()}}


                    </div>
                    <div class="col pl-lg-0">
                        Ad Type:<br>
                        Condition :<br>
                        Visits :<br>
                        Seller Name : {{$sell->seller}}<br>
                        Phone Contact: {{$sell->contact}}<br>
                        <a href="" class="btn btn-success">VIEW PRODUCE</a>
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


