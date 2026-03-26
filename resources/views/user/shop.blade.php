<h2>Product Listing</h2>
<hr/>
@foreach ($productarray as $product)
<h3>{{$product->Product_name}}</h3>
<img src="{{url('upload/'.$product->Product_image)}}" width="50" alt=""><br>
Rs. {{$product->Product_price}} <br>
<a href="{{url('productdetails',$product->Product_id)}}">Details</a><br>
    
@endforeach