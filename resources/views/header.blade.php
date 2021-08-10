<?php
use App\Http\Controllers\ProductController;
$totalItem = 0;
if (Session::has('user') ){
  $totalItem = ProductController::cartItems();
}
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">E-shop</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active" ><a href="/">Home </a></li>
        <li >
          @if(Session::has('user'))
          <li ><a href="/orderList">Orders </a>
            
          </li>
        @else
          <li ><a href="/login">Orders </a></li>
        @endif 
        </li>
      </ul>

      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="searchQuery" class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>

      <ul class="nav navbar-nav navbar-right">
        @if(Session::has('user'))
          <li ><a href="/cart">Cart({{$totalItem}}) </a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                {{Session::get('user')['first_name']}} {{Session::get('user')['last_name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
              {{-- <li><a href="#">Page 1-2</a></li>
              <li><a href="#">Page 1-3</a></li> --}}
            </ul>
          </li>
        @else
          <li ><a href="/login">Login </a></li>
          <li ><a href="/register">Register </a></li>
        @endif 
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>