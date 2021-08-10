@extends('master')

@section('content')

<div class=" custom-product">
    <!-- Wrapper for searched products -->
    <div class="col-sm-3">
        <br>
        <div style="float: right">
            <h1 >Your Orders:</h1>
            <?php
                use App\Http\Controllers\ProductController;
                $totalCost = 0;
                if (Session::has('user') ){
                    $totalCost = ProductController::totalCost();
                }
            ?>
            <h3  >Total cost: {{$totalCost}}USD</h3>
        </div>
        
    </div>
    <div class="col-sm-9">
        <div class="trending-wraper" >
            @foreach($orders as $item)
                <div class="row ">
                    <div class="col-sm-4">
                        <a href="productDetails/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <h3>{{$item->name}}</h3>
                        <h4>Price : {{$item->price}}</h4>
                        <h4>Address : {{$item->address}}</h4>
                        <h4>Status : {{$item->status}}</h4>
                        <h4>Payment method : {{$item->payment_method}}</h4>
                        <h4>Payment Status : {{$item->payment_status}}</h4>
                        
                    </div>
                </div>
                <hr class="style3">
                <br>
            @endforeach
        </div>
    </div>
</div>

@endsection                    