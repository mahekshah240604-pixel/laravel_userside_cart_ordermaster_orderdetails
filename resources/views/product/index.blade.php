<h1>Display Product</h1>

<table border="1">
    <tr>
        <td>#</td>
        <td>Product Name</td>
        <td>Product Price</td>
        <td>Product Image</td>
        <td>Product Details</td>
        <td>Product Qty</td>
    </tr>
    @foreach ($mydata as $userdata)
        <tr>
            <td>{{$userdata->Product_id}}</td>
            <td>{{$userdata->Product_name}}</td>
            <td>{{$userdata->Product_price}}</td>
            <td><img src="/upload/{{$userdata->Product_image}}" width="100" alt=""></td>
            <td>{{$userdata->Product_details}}</td>
            <td>{{$userdata->Product_qty}}</td>
            <td>
                <form action="{{route('product.destroy',$userdata->Product_id)}}" method="post" >
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>
                <td><a href="{{route('product.edit',$userdata->Product_id)}}">Edit</a></td>
            </td>
        </tr>
    @endforeach
</table>