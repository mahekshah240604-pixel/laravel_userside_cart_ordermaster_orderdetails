<h2>Product Details</h2>
<hr/>
<h3><?php echo e($productarray->Product_name); ?></h3>
Rs. <?php echo e($productarray->Product_price); ?> <br>
<img src="<?php echo e(url('upload/'.$productarray->Product_image)); ?>" width="50" alt=""> <br>
<?php echo e($productarray->Product_details); ?>


<form action="<?php echo e(url('add-cart-process',$productarray->Product_id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="pid"  value="<?php echo e($productarray->Product_id); ?>" min="1" max="10">
    <input type="number" name="Product_qty" value="1" min="1" max="10">
    <input type="submit">
</form><?php /**PATH C:\xampp\htdocs\laravel\userside-cart\resources\views\user\productdetails.blade.php ENDPATH**/ ?>