<h2>Product Listing</h2>
<hr/>
<?php $__currentLoopData = $productarray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h3><?php echo e($product->Product_name); ?></h3>
<img src="<?php echo e(url('upload/'.$product->Product_image)); ?>" width="50" alt=""><br>
Rs. <?php echo e($product->Product_price); ?> <br>
<a href="<?php echo e(url('productdetails',$product->Product_id)); ?>">Details</a><br>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\laravel\userside-cart\resources\views\user\shop.blade.php ENDPATH**/ ?>