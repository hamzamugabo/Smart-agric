
@extends('layouts.app')

@section('content')
    <div class="pr-md-5">
        <form action="" method="post" enctype="multipart/form-data">

            @csrf
            <div class="form-group">
                <label for="title">Title</label>

                <input type="text" name="title" required placeholder="eg fruits..">


            </div>

            <div class="form-group">
                <label for="title">Contact Number</label>
                <input type="text" name="contact" required placeholder="phone number">
            </div>
            <div class="form-group">
                    <label for="title">Location</label>
                <input type="text" name="location" required placeholder="location..">
            </div>

            <div class="form-group">
                <label for="image">Upload what u want to sell</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-outline-primary"> Market/Sell

                </button>
            </div>

        </form>
    </div>
@endsection