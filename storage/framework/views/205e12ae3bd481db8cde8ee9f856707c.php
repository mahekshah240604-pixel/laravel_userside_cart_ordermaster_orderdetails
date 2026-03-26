<h1>Cart Table</h1>
<table border="1">
    <thead>
        <tr>
            
            <td>Product Name</td>
            <td>Product Price</td>
            <td>Product Qty</td>
            <td>Subtotle</td>
        </tr>
    </thead>

    <tbody>
       <?php $totle=0 ?>
       <?php if(session('cart')): ?>
          <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php $totle += $details['Product_price'] * $details['Product_qty'] ?>
              <tr>
                <td><h4><?php echo e($details['Product_name']); ?></h4></td>
                <td><?php echo e($details['Product_price']); ?></td>
                <td>
                    <form action="<?php echo e(url('update-cart',$id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <input type="number" value="<?php echo e($details['Product_qty']); ?>" name="Product_qty" min="1" max="10"/>
                        <input type="submit" value="update">
                    </form>
                </td>
                
                <td><?php echo e($details['Product_price']*$details['Product_qty']); ?></td>
                <td><a href="<?php echo e(url('/remove-cart')); ?>/<?php echo e($id); ?>">Delete</a></td>
              </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    </tbody>
    <tfoot>
        <tr>
            <td><a href="<?php echo e(url('/shop')); ?>">Continue Shopping</a></td>
            <td colspan="2">Total</td>
            <td><strong><?php echo e($totle); ?></strong></td>
        </tr>
    </tfoot>
</table>
<a href="chackout">Chackout</a><?php /**PATH C:\xampp\htdocs\laravel\userside-cart\resources\views\user\cart.blade.php ENDPATH**/ ?>