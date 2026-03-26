<h1>My Orders</h1>

<p style="color: green">Order placed successfully!</p>

@if(count($orders) > 0)
<table border="1">
    <tr>
        <th>Order ID</th>
        <th>Date</th>
        <th>Status</th>
        <th>Total</th>
    </tr>

    @foreach($orders as $order)
    <tr>
        <td>{{ $order->Order_id }}</td>
        <td>{{ $order->Order_date }}</td>
        <td>{{ $order->Order_status }}</td>
        <td>{{ $order->Order_totalammount }}</td>
    </tr>
    @endforeach
</table>
@else
<p>No orders found.</p>
@endif


<h5><a href="shop">Go Back To a Shopping;)</a>||<a href="payment">Go to a payment:)</a></h5>
