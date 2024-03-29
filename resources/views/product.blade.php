@extends('master')

@section('content')

<div class=" custom-product">
        
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @foreach($products as $item)
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        @endforeach
        {{-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li> --}}
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
        @foreach($products as $item)
            <div class="item {{$item['id']==1?'active':''}}">
                <a href="productDetails/{{$item['id']}}">
                    <img  class='slider-img' src="{{$item['gallery']}}" style="height: 500px">
                    <div class="carousel-caption slider-text">
                        <h3>{{$item['name']}}</h3>
                        <p> {{$item['discription']}} </p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

    <!-- Wrapper for trending products -->
    <div class="trending-wraper" >
        <h3>Trenidng right now</h3>
        @foreach($products as $item)
            <div class="trending-item ">
                <a href="productDetails/{{$item['id']}}">
                    <img class="trending-image" src="{{$item['gallery']}}">
                    <div class="">
                        <h3>{{$item['name']}}</h3>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

</div>

<script>
    $(document).ready(function() {
        //Set the carousel options
        $('#myCarousel').carousel({
            pause: true,
            interval: 5000,
        });
    });
</script>

@endsection                    