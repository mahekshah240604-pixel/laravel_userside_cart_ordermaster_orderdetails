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
    <?php $__currentLoopData = $mydata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($userdata->Product_id); ?></td>
            <td><?php echo e($userdata->Product_name); ?></td>
            <td><?php echo e($userdata->Product_price); ?></td>
            <td><img src="/upload/<?php echo e($userdata->Product_image); ?>" width="100" alt=""></td>
            <td><?php echo e($userdata->Product_details); ?></td>
            <td><?php echo e($userdata->Product_qty); ?></td>
            <td>
                <form action="<?php echo e(route('product.destroy',$userdata->Product_id)); ?>" method="post" >
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <input type="submit" value="Delete">
                </form>
                <td><a href="<?php echo e(route('product.edit',$userdata->Product_id)); ?>">Edit</a></td>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table><?php /**PATH C:\xampp\htdocs\laravel\userside-cart\resources\views\product\index.blade.php ENDPATH**/ ?>