@extends('master')

@section('content')

<div class=" custom-product">
    <!-- Wrapper for searched products -->
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-8">
        <div class="trending-wraper" >
            <h3>Search results for: {{$searchedFor}}</h3>
            @foreach($products as $item)
                <div class="searched-item ">
                    <a href="productDetails/{{$item['id']}}">
                        <img class="trending-image" src="{{$item['gallery']}}">
                        <h3>{{$item['name']}}</h3>
                    </a>
                    <div class="">
                        <h5>{{$item['description']}}</h5>
                    </div>
                    
                        <hr class="style3">
                    <br>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection                    