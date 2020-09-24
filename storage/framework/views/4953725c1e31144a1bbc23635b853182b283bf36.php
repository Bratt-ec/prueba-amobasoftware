 
<?php $__env->startSection('main'); ?>
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update</h1>

        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <br /> 
        <?php endif; ?>
        <form method="post" action="<?php echo e(route('contacts.update', $contact->id)); ?>">
            <?php echo method_field('PATCH'); ?> 
            <?php echo csrf_field(); ?>
            <div class="form-group">

                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" value=<?php echo e($contact->first_name); ?> />
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value=<?php echo e($contact->email); ?> />
            </div>
            <div class="form-group">
                <label for="city">Telephone:</label>
                <input type="text" class="form-control" name="city" value=<?php echo e($contact->telephone); ?> />
            </div>
            <div class="form-group">
                <label for="country">Message:</label>
                <input type="text" class="form-control" name="country" value=<?php echo e($contact->message); ?> />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\amobasoftware\resources\views/contacts/edit.blade.php ENDPATH**/ ?>