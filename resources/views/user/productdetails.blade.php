<h2>Product Details</h2>
<hr/>
<h3>{{$productarray->Product_name}}</h3>
Rs. {{$productarray->Product_price}} <br>
<img src="{{url('upload/'.$productarray->Product_image)}}" width="50" alt=""> <br>
{{$productarray->Product_details}}

<form action="{{url('add-cart-process',$productarray->Product_id)}}" method="post">
    @csrf
    <input type="hidden" name="pid"  value="{{$productarray->Product_id}}" min="1" max="10">
    <input type="number" name="Product_qty" value="1" min="1" max="10">
    <input type="submit">
</form>