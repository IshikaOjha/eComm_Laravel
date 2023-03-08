@extends('master')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="container">
    <div class="TrendingWrapper" >
        <h2>Searched Products</h2>
        <div class="col-sm-5">
         @foreach ($products as $item)
         <div class="searched-item">
           <a href="detail/{{$item['id']}}">
            <img class="trending-img" src="{{$item['gallery']}}" >
            <div class="">
              <h2>{{$item['name']}}</h2>
              <h5>{{$item['description']}}</h5>
            </div>
           </a>
         </div>
         @endforeach
       </div>
      </div>
</div>
@endsection