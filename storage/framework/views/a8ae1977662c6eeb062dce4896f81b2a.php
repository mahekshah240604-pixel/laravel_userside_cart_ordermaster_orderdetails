<h1>My Orders</h1>

<p style="color: green">Order placed successfully!</p>

<?php if(count($orders) > 0): ?>
<table border="1">
    <tr>
        <th>Order ID</th>
        <th>Date</th>
        <th>Status</th>
        <th>Total</th>
    </tr>

    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($order->Order_id); ?></td>
        <td><?php echo e($order->Order_date); ?></td>
        <td><?php echo e($order->Order_status); ?></td>
        <td><?php echo e($order->Order_totalammount); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php else: ?>
<p>No orders found.</p>
<?php endif; ?>


<h5><a href="shop">Go Back To a Shopping;)</a>||<a href="payment">Go to a payment:)</a></h5>
<?php /**PATH C:\xampp\htdocs\laravel\userside-cart\resources\views\user\order.blade.php ENDPATH**/ ?>