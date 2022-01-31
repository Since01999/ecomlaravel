@extends('master')
<base href="/public">
@section('content')
   <div class="container">
<div class="row">
    <div class="col-sm-6">
        <img src="{{$detail->gallery}}" class="detail-img" alt="image">
    </div>
    <div class="col-sm-6">
       
        <h3><b> Name : {{$detail->name}}</b></h3>
        <h4 style="height: 25px; width:100px" class="text-center badge badge-primary">Price {{$detail->price}}</h4>
        <button class="btn btn-success">Add to Cart</button>
        <button class="btn btn-warning">Buy Now</button>
        <h4>Category: {{$detail->category}}</h4>
        <p>{{$detail->description}}</p>
        <br>
        <a href="/home" class="btn btn-info">Go back</a>
       
    </div>
</div>
   </div>

@endsection
