@extends('master')

@section('content')

<div class="container">
        
    <div class="row">
        <div class="col-sm-6">
            <img class="productDetails-img" src="{{$item['gallery']}}" alt="not image found">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>{{$item['name']}}</h2>
            <h3>Price: {{$item['price']}} USD</h3>
            <h4>Category: {{$item['category']}}</h4>
            <h4>{{$item['description']}}</h4>
            <br><br>
            
            <form action="/add_To_Cart" method="POST">
                @csrf
                {{-- Quantity:  --}}
                <input type="hidden" name="ammount" value="1" min="1" class="select-input" type="number">
                <br>
                <input type="hidden" name="product_id" value="{{$item['id']}}">

                <button class="btn btn-primary">Add to CART</button>
            </form>
            <br><br>
            <button class="btn btn-success">BUY now</button>
        </div>
    </div>

</div>

@endsection                    