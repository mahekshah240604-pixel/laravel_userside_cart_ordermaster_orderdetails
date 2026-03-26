<h1>Product Page</h1>
<form action="{{route('product.update',$edit->Product_id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('PATCH')
Product Name: <input type="text" name="Product_name" value="{{$edit->Product_name}}" placeholder="Enter the name">
@error('Product_name')
    <strong style="color: red">{{$message}}</strong>
@enderror
<br>

Product Price: <input type="text" name="Product_price" value="{{$edit->Product_price}}" placeholder="Enter the price">
@error('Product_price')
    <strong style="color: red">{{$message}}</strong>
@enderror
<br>

Product Image: <input type="file" name="Product_image" value="{{$edit->Product_image}}" placeholder="Enter the image">
@error('Product_image')
    <strong style="color: red">{{$message}}</strong>
@enderror
<br>

Product Details: <input type="text" name="Product_details" value="{{$edit->Product_details}}" placeholder="Enter the details">
@error('Product_details')
    <strong style="color: red">{{$message}}</strong>
@enderror
<br>

Product Qty: <input type="text" name="Product_qty" value="{{old('Product_qty')}}" placeholder="Enter the qty">
@error('Product_qty')
    <strong style="color: red">{{$message}}</strong>
@enderror
<br>
<input type="submit">
</form>