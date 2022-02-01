@extends('master')

@section('content')

<base href="/public">
    <div class="container">
        <h3>Order Lists</h3>
       
        <hr>
       <table class="table table-dark table-responsive table-hover">
           <thead>
               <tr>
                   <th>Id</th>
                   <th>Price</th>
                   <th>Name</th>
                   <th>Description</th>
                   <th>Gallery</th>
                   <th>Address</th>
                   <th>Phone</th>
                   <th>status</th>
                   <th>Payment Method</th>
                  
               
               </tr>
            </thead>
               @foreach ($orders as $item)
               <tbody>
                   <td>{{$item->id}}</td>
                   <td>{{$item->price}}</td>
                   <td>{{$item->name}}</td>
                   <td>{{$item->description}}</td>
                   <td> <img class="trending-img" src="{{ $item->gallery }}" alt="products"></td>
                   <td>{{$item->address}}</td>
                   <td>{{$item->phone}}</td>
                   <td>{{$item->payment_status}}</td>
                   <td>{{$item->payment_method}}</td>
                   
                  
               </tbody>
               @endforeach
              
            </table>
            
           
       </div>








@endsection
