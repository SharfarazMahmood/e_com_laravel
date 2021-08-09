@extends('master')

@section('content')

<div class="container">
        
    <div class="row">
        <div class="col-sm-6">
            <img class="productDetails-img" src="{{$item['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>{{$item['name']}}</h2>
            <h3>Price: {{$item['price']}} USD</h3>
            <h4>Category: {{$item['category']}}</h4>
            <h4>{{$item['description']}}</h4>
            <br><br>
            <button class="btn btn-primary">Add to CART</button>
            <br><br>
            <button class="btn btn-success">BUY now</button>
        </div>
    </div>

</div>

@endsection                    