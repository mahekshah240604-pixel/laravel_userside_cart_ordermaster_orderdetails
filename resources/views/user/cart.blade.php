<h1>Cart Table</h1>
<table border="1">
    <thead>
        <tr>
            {{-- <td>#</td> --}}
            <td>Product Name</td>
            <td>Product Price</td>
            <td>Product Qty</td>
            <td>Subtotle</td>
        </tr>
    </thead>

    <tbody>
       <?php $totle=0 ?>
       @if (session('cart'))
          @foreach (session('cart') as $id => $details)
              <?php $totle += $details['Product_price'] * $details['Product_qty'] ?>
              <tr>
                <td><h4>{{$details['Product_name']}}</h4></td>
                <td>{{$details['Product_price']}}</td>
                <td>
                    <form action="{{url('update-cart',$id)}}" method="post">
                        @csrf
                        <input type="number" value="{{$details['Product_qty']}}" name="Product_qty" min="1" max="10"/>
                        <input type="submit" value="update">
                    </form>
                </td>
                {{-- <td>
                    <input type="number" value="{{$details['Product_qty']}}" min="1" max="10"/>
                </td> --}}
                <td>{{$details['Product_price']*$details['Product_qty']}}</td>
                <td><a href="{{url('/remove-cart')}}/{{$id}}">Delete</a></td>
              </tr>
          @endforeach
    @endif
    </tbody>
    <tfoot>
        <tr>
            <td><a href="{{url('/shop')}}">Continue Shopping</a></td>
            <td colspan="2">Total</td>
            <td><strong>{{$totle}}</strong></td>
        </tr>
    </tfoot>
</table>
<a href="chackout">Chackout</a>