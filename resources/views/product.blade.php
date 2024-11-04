@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Carousel Slider</title>
</head>
<body>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($products as $index => $item)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" @if($index == 0) class="active" @endif></li>
        @endforeach
    </ol>

    <div class="carousel-inner">
        @foreach($products as $index => $item)
            <div class="carousel-item @if($index == 0) active @endif">
                <a href="detail/{{$item['id']}}">
                    <img class="slider-img" src="{{ $item['gallery'] }}" class="d-block w-100" alt="{{ $item['name'] }}">
                <div class="carousel-caption d-none d-md-block" >
                    <h2>{{ $item['name'] }}</h2>
                    <p>{{ $item['description'] }}</p>
                </div>
                </a>
            </div>
        @endforeach
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="trending-wrapper">
    <h1>Trending Products</h1>
    <div class="">
        @foreach($products as $index => $item)
            <div class="tranding-item">
                <a href="detail/{{$item['id']}}">
                <img class="tranding-img" src="{{ $item['gallery'] }}">
                <div class="" >
                    <h2>{{ $item['name'] }}</h2>
                </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection 