<!DOCTYPE html>
<html>
<head>
    <title>Checkout Page</title>
</head>
<body>
    <h1>Checkout Page</h1>

    <p>Welcome!</p>

    @if(session('cart') && count(session('cart')) > 0)
        <table border="1">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach(session('cart') as $id => $item)
                    @php $subtotal = $item['Product_price'] * $item['Product_qty']; @endphp
                    <tr>
                        <td>{{ $item['Product_name'] }}</td>
                        <td>{{ $item['Product_price'] }}</td>
                        <td>{{ $item['Product_qty'] }}</td>
                        <td>{{ $subtotal }}</td>
                    </tr>
                    @php $total += $subtotal; @endphp
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Total</td>
                    <td>{{ $total }}</td>
                </tr>
            </tfoot>
        </table>

        <form action="{{ url('/chackout/confirm') }}" method="POST">
            @csrf
            <button type="submit">Place Order</button>
        </form>
    @else
        <p>Your cart is empty!</p>
    @endif
</body>
</html>