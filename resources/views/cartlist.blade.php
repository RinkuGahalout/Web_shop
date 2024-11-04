@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>Cartlist Products</h2>
            <div class="">
                @foreach($products as $index => $item)
                    <div class="row searched-item cart-list-driver">
                        <div class="col-sm-4 cart-list-image">
                            <a href="detail/{{$item->id}}">
                                <img class="tranding-img" src="{{ $item->gallery }}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <div class="" >
                                <h2>{{ $item->name}}</h2>
                                <h4>{{ $item->description}}</h4>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove from cart </a>
                            <a class="btn btn-success" href="/ordernow">Order Now</a>
                        </div>
                    </div>     
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection 