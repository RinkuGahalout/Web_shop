@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <thead>
             
            </thead>
            <tbody>
              <tr>
                <td>Price</td>
                <td>{{$total}} Rs.</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>2.50 Rs.</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>100 Rs.</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>{{$total+102.50}}</td>
              </tr>
            </tbody>
          </table>
          <form>
            <div class="form-group">
              <textarea class="form-control"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="">Payment Method</label>
                    <p><input type="radio" name="payment"><span>Online Payment</span></p>
                    <p><input type="radio" name="payment"><span>EMI Payment</span></p>
                    <p><input type="radio" name="payment"><span>Case On Delivery</span></p>
            </div>
            <br>
            <button type="submit" class="btn btn-success">order Now</button>
          </form>
    </div>
</div>
@endsection 