@extends('master')

@section('content')

<base href="/public">
    <div class="container">
        <h3>Cart Items</h3>
        <hr>
       <table class="table table-dark table-responsive table-hover">
           <thead>
               <tr>
                   <th>Id</th>
                   <th>Name</th>
                   <th>Description</th>
                   <th>Gallery</th>
                   <th>Price</th>
                   <th>Action</th>
               </tr>
            </thead>
               @foreach ($cartData as $item)
               <tbody>
                   <td>{{$item->id}}</td>
                   <td>{{$item->name}}</td>
                   <td>{{$item->description}}</td>
                   <td> <img class="trending-img" src="{{ $item->gallery }}" alt="products"></td>
                   <td>{{$item->price}}</td>
                   <td><a href="/removecarts/{{$item->id}}" class="btn btn-danger">Remove From Cart</a></td>
               </tbody>
               @endforeach
              
            </table>
           
       </div>








@endsection
