@extends('master')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="custom-product">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    @foreach ($products as $key => $item)
    <li data-target="#myCarousel" data-slide-to="{{$key}}" class="{{$item['id']==1?'active':''}}"></li>
    @endforeach
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    @foreach ($products as $item)
    <div class="item {{$item['id']==1?'active':''}}">
      <a href="detail/{{$item['id']}}">
        <img class="slider-img" src="{{$item['gallery']}}" alt="{{$item['name']}}">
        <div class="carousel-caption textcolor">
         <h2>{{$item['name']}}</h2>
         <p>{{$item['price']}}</p>
         <p>{{$item['description']}}</p>
        </div>
      </a>
    </div>
    @endforeach
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
 </div>
 <div class="TrendingWrapper" >
   <h1>Trending Products</h1>
   <div class="">
    @foreach ($products as $item)
    <div class="trending-item">
      <a href="detail/{{$item['id']}}">
       <img class="trending-img" src="{{$item['gallery']}}" >
       <div class="">
         <h3>{{$item['name']}}</h3>
       </div>
      </a>
    </div>
    @endforeach
  </div>
 </div>
</div>

@endsection

