
<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('student')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Legacy</label></br>
        <input type="text" name="legacy" id="legacy" class="form-control"></br>
        <label>Class</label></br>
        <input type="text" name="class" id="class" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mbd\mbdapp\resources\views/students/create.blade.php ENDPATH**/ ?>