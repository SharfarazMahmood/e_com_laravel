@extends('master')

@section('content')

<div class="container custom-login">
  <div class="row">
    <div class="col-sm-6" style="padding:10px;">
        <div class="">
            <h2 class="display-4">Hey, custommer!</h2>
            <p class="lead">You must login to order/buy or edit you cart.</p>
        </div>
    </div>
    <div class="col-sm-6  jumbotron" style="padding:10px;">
        <form action='login' method='POST'>
            @csrf
            <div class="form-group ">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <!-- An element to toggle between password visibility -->
                <input type="checkbox" onclick="myFunction()">Show Password
                <script>
                    function myFunction() {
                        var x = document.getElementById("password");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                </script>
            </div>
            <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="btn btn-primary">Enter</button>
        </form>
    </div>
  </div>
</div>




<div class='container'>
    <div class="row">

        <!-- <div class="col-sm-6"> -->

        <!-- </div> -->
        <div class="col-sm-6 " >
            
        </div>
    </div>

</div>
@endsection                    