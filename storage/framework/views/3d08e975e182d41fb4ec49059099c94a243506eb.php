

<?php $__env->startSection('main'); ?> 
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h4 class="text-center"><br><b>SEND US A MESSAGE</b></h4>
  <div>
    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div><br />
    <?php endif; ?>
    <br>
      <div class="col-sm-5">

          <form method="post" action="<?php echo e(route('contacts.store')); ?>" class="formulario">
              <?php echo csrf_field(); ?>
              <div class="form-group">    
                  <input type="text" class="form-control form-control-lg form-rounded " name="first_name" placeholder="Full Name"/>
              </div>

              <div class="form-group">
                  <input type="text" class="form-control form-control-lg form-rounded" name="email" placeholder="Email"/>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control form-control-lg form-rounded" name="telephone" placeholder="Telephone"/>
              </div>
              <div class="form-group">
                  <textarea type="text" class="form-control form-control-lg form-rounded" name="message" placeholder="Your Message"></textarea>
              </div>                       
              <button type="submit" class="btn btn-info btn-lg boton"><span class="fa fa-paper-plane"> Send </span></button>
          </form>
            <div class="lastest-new">
            </div>
      </div>    
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\amobasoftware\resources\views/contacts/create.blade.php ENDPATH**/ ?>