@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>   
    </div>
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h2>Result Products</h2>
            <div class="">
                @foreach($products as $index => $item)
                    <div class="searched-item">
                        <a href="detail/{{$item['id']}}">
                        <img class="tranding-img" src="{{ $item['gallery'] }}">
                        <div class="" >
                            <h2>{{ $item['name'] }}</h2>
                            <h4>{{ $item['description'] }}</h4>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection 