@extends('master')

@section('content')

<div class="container custom-login">
  <div class="row">
    <div class="col-sm-6" style="padding:10px;">
        <div class="">
            <h2 class="display-4">Hey, custommer!</h2>
            <p class="lead">Please register to buy from E-shop.</p>
        </div>
    </div>
    <div class="col-sm-6  jumbotron" style="padding:10px;">
        <form action='/register' method='POST'>
            @csrf
            <div class="form-group ">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" class="form-control" id="first_name" aria-describedby="first_nameHelp" placeholder="first name">
                {{-- <small id="first_nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div>
            <div class="form-group ">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="last_name" aria-describedby="last_nameHelp" placeholder="last name">
                {{-- <small id="last_nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div>
            <div class="form-group ">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="example@anything.com">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <!-- An element to toggle between password visibility -->
                <input type="checkbox" onclick="myFunction()" id="passwordId">
                <label class="form-check-label" for="passwordId"> Show password</label>
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
            <button type="submit" class="btn btn-primary">Register</button>
            <br><br>
            <p>Have an account? <a href="/login">Login here</a></p>
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