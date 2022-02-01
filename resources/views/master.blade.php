<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm Project</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    {{ View::make('header') }}
    @yield('content')
    <br>
    {{ View::make('footer') }}
</body>

<style>
    .custom-login {
        height: 300px;
        padding-top: 20px;
    }

    .login {
        padding: 20px;
    }

    img.slider-img {
        height: 400px !important;
    }

    .slider-text {
        background-color: #97c9aa;
    }

    .trending-img {
        height: 100px;
    }

    .trending-item {
        
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 400px !important;
    }
    .products{
        padding-left:50px;
    }

</style>


<script>

</script>

</html>
