@extends('master')

@section('content')

<div class=" custom-product" style="align-items: center">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-3">
        <table class="table table-hover" style="text-align: right">
            <tbody>
              <tr>
                <td>Ammount</td>
                <td>{{$totalCost}} USD</td>
              </tr>
              <tr>
                <td>Delivery Charge</td>
                <td>10 USD</td>
              </tr>
              <tr>
                <td><h3>Total Cost</h3></td>
                <td><h3>{{$totalCost+10}} USD</h3></td>
              </tr>
            </tbody>
          </table>
    </div>

    <div class="col-sm-5">
        <form action="/orderPlaced" method="POST">
            @csrf
            <div class="form-group">
              <textarea name="address" value="not given" placeholder="enter your address" class="form-control" ></textarea>
            </div>
            <div class="form-group">
              <label for="pwd">Payment method:</label> <br>
              <input type="radio" value="cash" name="payment" > <span>online payment</span> <br>
              <input type="radio" value="cash" name="payment" > <span>EMI payment</span> <br>
              <input type="radio" value="cash" name="payment" > <span>Payment on delivery</span> <br>
            </div>
            <button type="submit" class="btn btn-default">Order now</button>
          </form>
    </div>
    <div class="col-sm-2">
    </div>
</div>

@endsection                    