<?php $__env->startSection('title'); ?>
Register
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<center> 
    <form action="/getregister" method="POST">
            <?php echo e(csrf_field()); ?>

        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
                <td><?php if($errors->has('name')): ?>
                <?php echo e($errors->first('name')); ?>

                <?php endif; ?></td>
            </tr>

            <tr>
                <td>Age</td>
                <td><input type="number" name="age"> </td>
                <td><?php if($errors->has('age')): ?>
                <?php echo e($errors->first('age')); ?>

                <?php endif; ?></td>
            </tr>


            <tr>
                <td>Mobile No.</td>
                <td><input type="number" name="mobile"> </td>
                <td><?php if($errors->has('mobile')): ?>
                <?php echo e($errors->first('mobile')); ?>

                <?php endif; ?></td>
            </tr>

            

            <tr>
                <td>Address</td>
                <td>
                <textarea placeholder='Enter address...' name="address" rows="4" cols="25"></textarea>
                </td>
                <td><?php if($errors->has('address')): ?>
                <?php echo e($errors->first('address')); ?>

                <?php endif; ?></td>
            </tr>

            <tr>
                <td>Image</td>
                <td>
                <input type="file" name="image">
                </td>
                <td><?php if($errors->has('image')): ?>
                <?php echo e($errors->first('image')); ?>

                <?php endif; ?></td>

            </tr>

        </table>
        <button type="submit">Submit</button>
        </form>
</center>        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Lab04\resources\views/register.blade.php ENDPATH**/ ?>