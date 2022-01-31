@extends('master')
<base href="/public">
@section('content')
    <div class="custom-product">
   
    <div class="col-sm-offset-4">
        <h2>Products Available related to {{$searched}}</h2>
        @foreach ($data as $product)
            <div class="row">
                <div class="col-lg-4 searched-item">
                    <a href="detail/{{ $product->id }}">
                        <img class="trending-img" src="{{ $product->gallery }}" alt="products">
                        <div class="">
                            <h3>{{ $product->name }}</h3>
                            <p>{{ $product->description }}
                                <br>

                                <b class="badge badge-danger">
                                    {{ $product->price }}
                                </b>
                            </p>
                        </div>
                    </a>
                </div>

        @endforeach
    </div>
    </div>
    </div>


@endsection
