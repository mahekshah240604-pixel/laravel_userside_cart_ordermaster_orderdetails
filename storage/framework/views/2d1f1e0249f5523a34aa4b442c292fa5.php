<h1>Product Page</h1>
<form action="<?php echo e(route('product.update',$edit->Product_id)); ?>" method="post" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<?php echo method_field('PATCH'); ?>
Product Name: <input type="text" name="Product_name" value="<?php echo e($edit->Product_name); ?>" placeholder="Enter the name">
<?php $__errorArgs = ['Product_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <strong style="color: red"><?php echo e($message); ?></strong>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<br>

Product Price: <input type="text" name="Product_price" value="<?php echo e($edit->Product_price); ?>" placeholder="Enter the price">
<?php $__errorArgs = ['Product_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <strong style="color: red"><?php echo e($message); ?></strong>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<br>

Product Image: <input type="file" name="Product_image" value="<?php echo e($edit->Product_image); ?>" placeholder="Enter the image">
<?php $__errorArgs = ['Product_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <strong style="color: red"><?php echo e($message); ?></strong>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<br>

Product Details: <input type="text" name="Product_details" value="<?php echo e($edit->Product_details); ?>" placeholder="Enter the details">
<?php $__errorArgs = ['Product_details'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <strong style="color: red"><?php echo e($message); ?></strong>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<br>

Product Qty: <input type="text" name="Product_qty" value="<?php echo e(old('Product_qty')); ?>" placeholder="Enter the qty">
<?php $__errorArgs = ['Product_qty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <strong style="color: red"><?php echo e($message); ?></strong>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<br>
<input type="submit">
</form><?php /**PATH C:\xampp\htdocs\laravel\userside-cart\resources\views\product\edit.blade.php ENDPATH**/ ?>