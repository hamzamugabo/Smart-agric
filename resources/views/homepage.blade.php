@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row" style="display: flex;padding-top: 20px; ">

        <div class="col-md-7 container-banner__left" style="background-color: transparent;">
          Welcome to "SMART-AGRIC"
Buy and sell your Agric produce online (Buyers meet Farmers) – Sell your produce directly to buyers without middlemen and
make more money from your farm produce.
It’s evident that Uganda has one of the largest agricultural markets around the East Africa, which is why it
becomes important to have a service, which can connect the farmers all over the country. This would help
 them in maximizing their profits by selling their farm produce
 at a better price by selling locally or where farmer get maximum price.<br>

        </div>
        <div class="col-md-1"></div>

        <div class="col-md-4 container-banner__right hidden-sm-down">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1" style="font-size: 20px;">What are you looking for</label>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="What are you looking for..">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Category</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Cereals/Grains</option>
                        <option>Fruits</option>
                        <option>Vegetables</option>
                        <option>Animals</option>
                        <option>Poultry</option>
                        <option>Fish</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Location</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Location..">
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info">Search</button>
                    </div>
                </div>



            </form>




    </div>
    <div class="row" style="padding-top: 10px;">
        <div class="col-md-12 container-banner__right hidden-sm-down" style="background-color:;">
          <P style="text-align:center;font-size:24px;">SELECT A PRODUCT TO BUY/SELL<P>
          <div class="row">
            <div class="col">

              <!-- <a href=""><img src="https://krishi-market.com/wp-content/uploads/2018/06/vege.png" class="rounded-circle"></a><br> -->
              <a href=""><img src="{{ asset('images/vege.png') }}" class="rounded-circle"></a><br>

              <a href="" class="pl-5">VEGETABLES</a>
            </div>
            <div class="col">
            <!-- <a href="">  <img src="https://krishi-market.com/wp-content/uploads/2018/06/fruits.png"></a><br> -->
            <a href="">  <img src="{{ asset('images/fruits.png') }}" class="rounded-circle"></a><br>
            <a href="" class="pl-5">FRUITS</a>

            </div>
            <div class="col">
              <!-- <img src="https://krishi-market.com/wp-content/uploads/2018/06/poultry.png"></a><br> -->
              <a href="">  <img src="{{ asset('images/poultry.png') }}" class="rounded-circle"></a><br>
              <a href="" class="pl-5">POULTRY</a>
            </div>
            <div class="col">
              <!-- <img src="https://krishi-market.com/wp-content/uploads/2018/06/seeds.png"></a><br> -->
              <a href="">  <img src="{{ asset('images/seeds.png') }}" class="rounded-circle"></a><br>
              <a href="" class="pl-5">SEEDS</a>
            </div>
            <div class="col">
              <!-- <img src="https://krishi-market.com/wp-content/uploads/2018/06/cattle.png"></a><br> -->
              <a href="">  <img src="{{ asset('images/cattle.png') }}" class="rounded-circle"></a><br>
              <a href="" class="pl-5">CATTLE</a>
            </div>
            <div class="col">
              <!-- <img src="https://krishi-market.com/wp-content/uploads/2018/06/ceral.png"></a><br> -->
              <a href="">  <img src="{{ asset('images/ceral.png') }}" class="rounded-circle"></a><br>
              <a href="" class="pl-5">OTHERS</a>

            </div>
          </div>
        </div>

        </div>

    </div>
</div>
@endsection
