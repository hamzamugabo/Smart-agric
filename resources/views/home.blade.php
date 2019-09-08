@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="card">
            <div class="card-header" style="font-size: 20px; background-color: darkgrey;">{{ __('Market/Sell Agriculture Produce') }}</div>

            <div class="card-body">
                <form method="POST" action="{{route('store_sells_path')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autocomplete="title" placeholder="eg Cereals.." autofocus>


                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="contact number" class="col-md-4 col-form-label text-md-right">{{ __('Contact Number') }}</label>

                        <div class="col-md-6">
                            <input id="contact" type="text" class="form-control " name="contact" value="{{ old('contact') }}" required autocomplete="contact" placeholder="Phone Number">


                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                        <div class="col-md-6">
                            <input id="location" type="text" class="form-control " name="location" required autocomplete="location">


                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Upload what u want to sell" class="col-md-4 col-form-label text-md-right">{{ __('Upload picture') }}</label>

                        <div class="col-md-6">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-dark">
                                {{ __('Sell/Market') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>


</div>
@endsection
