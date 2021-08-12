@extends('master')

@section('content')

<div class="container custom-login">
  <div class="row">
    <div class="col-sm-6" style="padding:10px;">
        <div class="">
            <h2 class="display-4">Hey, custommer!</h2>
            <p class="lead">You must login to view your orders or edit your cart.</p>
        </div>
    </div>
    <div class="col-sm-6  jumbotron" style="padding:10px;">
        <form action='login' method='POST'>
            <div class="alert alert-danger" role="alert">
                @if($errors)         
                     @foreach ($errors as $item)
                         <li>{{$item}}</li>
                     @endforeach    
                @else
                    {{-- <td>{{ $user->status }}</td>         --}}
                @endif
            </div>
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
            <button type="submit" class="btn btn-primary">Login</button>
            <br><br>
            <p>Don't have an account? <a href="/register">Register here</a></p>
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