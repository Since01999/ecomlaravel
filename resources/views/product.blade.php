@extends('master')
<base href="/public">
@section('content')
    <div class="custom-product"></div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach ($data as $product)

                <div class="item {{ $product->id == 1 ? 'active' : '' }}">
                    <a href="detail/{{ $product->id }}">
                        <img class="slider-img" src="{{ $product->gallery }}" alt="products">
                        <div class="carousel-caption slider-text">
                            <h3>{{ $product->name }}</h3>
                            <p>{{ $product->description }}
                                <br>
                                <br>
                                <b class="badge badge-danger">
                                    {{ $product->price }}
                                </b>
                            </p>
                    </a>
                </div>
        </div>
        @endforeach

        {{-- <div class="item">
        <img src="chicago.jpg" alt="Chicago">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
  
      <div class="item">
        <img src="ny.jpg" alt="New York">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div> --}}
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
    <div class="container trending-wrapper">
        <h1>Trending Products</h1>
        @foreach ($data as $product)
            <div class="row">
                <div class="col-lg-4">
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

@endsection
