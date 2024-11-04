<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web_shop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    @include('header')
    @yield('content')
    @include('footer')
</body>
<style>
    .custom-login{
        height: 500px;
    }
    img.slider-img
    {
        height: 400px !important;
        width: 100%;
        justify-content: center;
        object-fit: cover;
    }
    .tranding-img{
        height: 200px;
    }
    .tranding-item{
        float: left;
        width: 20%;
    }
    .detail-img
    {
        height: 300px;
    }   
    .search-box{
        width: 400px !important;
    }
    .cart-list-driver{
        border-bottom: 1px solid gray;
        margin-bottom: 20px;
        padding-bottom: 20px; 
    }
    .cart-list-image{
        margin-top: 40px;
        margin-bottom: 40px;
        margin-left: 0px;
    }
</style>
</html>