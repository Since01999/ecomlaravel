
@extends('master')
<base href="/public">
@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 login">
                <form action="{{Route('login')}}" method="POST">
                  @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                  </form>
            </div>
        </div>
    </div>


<script>

</script>

@endsection