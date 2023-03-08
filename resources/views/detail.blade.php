@extends('master')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back </a>
            <h2>Name:{{$product['name']}}</h2> 
            <h4>Price:{{$product['price']}}</h4>
            <h4>Category:{{$product['category']}}</h4>  
            <h4>Description:{{$product['description']}}</h4>  
            <button class="btn btn-success me-auto">Add To Cart</button> 
            <button class="btn btn-primary">Buy Now</button>  
        </div>
    </div>
</div>
@endsection

