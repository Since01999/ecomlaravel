@extends('master')
<base href="/public">
@section('content')
 <div class="container">
<div class="col-lg-offset-4 col-lg-4">
    <h2 class="display-1">Order Confirmation</h2>
    <form action="/confirms" method="POST">
        @csrf 
<h4>Customer Details</h4>
            <div class="form-group">
                
                    <label for="">Total Product Price</label>
                <input type="text" value="{{$total}} .US Dollars" name="price" class="form-control" readonly>
                
            </div>
            
            <div class="form-group">
                <label for="">Enter Your Address</label>
                <textarea type="text" name="address" class="form-control" cols="4" rows="4">

                </textarea>
            </div>
            
            <div class="form-group">
                <label for="">Enter Your Phone</label>
                <input type="text" name="phone" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Enter Your Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Payment Methods</label>
                <select  name="payment_method" class="form-control">
                    <option value="" disabled selected>Choose Your Payment Method</option>
                    <option value="jazzcash">Jazzcash</option>
                    <option value="easypaisa">EasyPaisa</option>
                    <option value="UBl">UBL</option>
                    
                </select>
            </div>
            <div class="form-group">
                <label for="">Shipment Tax</label>
                <input type="text" name="tax" value="200" class="form-control" readonly>
            </div>
            <div class="form-group">
                
             <Button type="submit" class="btn btn-success">Order Now</Button>
            </div>
        </form>
        <span>Tax and Charges will be taken on shipment</span>
        
</div>
 </div>


@endsection
