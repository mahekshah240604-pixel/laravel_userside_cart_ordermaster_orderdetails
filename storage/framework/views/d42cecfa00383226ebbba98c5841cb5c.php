<!DOCTYPE html>
<html>
<head>
    <title>Checkout Page</title>
</head>
<body>
    <h1>Checkout Page</h1>

    <p>Welcome!</p>

    <?php if(session('cart') && count(session('cart')) > 0): ?>
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
                <?php $total = 0; ?>
                <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $subtotal = $item['Product_price'] * $item['Product_qty']; ?>
                    <tr>
                        <td><?php echo e($item['Product_name']); ?></td>
                        <td><?php echo e($item['Product_price']); ?></td>
                        <td><?php echo e($item['Product_qty']); ?></td>
                        <td><?php echo e($subtotal); ?></td>
                    </tr>
                    <?php $total += $subtotal; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Total</td>
                    <td><?php echo e($total); ?></td>
                </tr>
            </tfoot>
        </table>

        <form action="<?php echo e(url('/chackout/confirm')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit">Place Order</button>
        </form>
    <?php else: ?>
        <p>Your cart is empty!</p>
    <?php endif; ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\userside-cart\resources\views\user\chackout.blade.php ENDPATH**/ ?>