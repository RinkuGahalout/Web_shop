@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>order list</h2>
            <div class="">
                @foreach($orders as $index => $item)
                    <div class="row searched-item cart-list-driver">
                        <div class="col-sm-4 cart-list-image">
                            <a href="detail/{{$item->id}}">
                                <img class="tranding-img" src="{{ $item->gallery }}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <div class="" >
                                <h2>{{ $item->name}}</h2>
                                <h4>Price            :{{ $item->price}}</h4>
                                <h4>Delivery address :{{ $item->address}}</h4>
                                <h4>Delivery status  :{{ $item->status}}</h4>
                                <h4>payment status   :{{ $item->payment_status}}</h4>
                                <h4>payment method   :{{ $item->payment_method}}</h4>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            {{-- <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove from cart </a> --}}
                            {{-- <a class="btn btn-success" href="/ordernow">Order Now</a> --}}
                        </div>
                    </div>     
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection 