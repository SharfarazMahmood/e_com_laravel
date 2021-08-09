@extends('master')

@section('content')

<div class=" custom-product">
    <!-- Wrapper for searched products -->
    <div class="col-sm-3">
        <br>
        <div style="float: right">
            <h1 >Your Cart:</h1>
            <?php
                use App\Http\Controllers\ProductController;
                $totalCost = 0;
                if (Session::has('user') ){
                    $totalCost = ProductController::totalCost();
                }
            ?>
            <h3  >Total cost: {{$totalCost}}USD</h3>
            <a class="btn btn-success" href="orderNow">Order now</a>
        </div>
        
    </div>
    <div class="col-sm-9">
        <div class="trending-wraper" >
            @foreach($cartItems as $item)
                <div class="row ">
                    <div class="col-sm-4">
                        <a href="productDetails/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <h3>{{$item->name}}</h3>
                        <h4>Price: {{$item->price}}</h4>
                        <a href="/remove_Item_From_Cart/{{$item->item_id}}" class="btn btn-warning">remove</a>
                    </div>
                </div>
                <hr class="style3">
                <br>
            @endforeach
        </div>
    </div>
</div>

@endsection                    