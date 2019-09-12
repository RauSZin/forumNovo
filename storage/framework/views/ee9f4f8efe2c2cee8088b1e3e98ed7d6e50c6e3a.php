<?php $__env->startSection('content'); ?>

<div class="container">

   <div class="row justify-content-center">

       <div class="col-md-8">

           <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

               <div class="card mt-4">

                   <img class="card-img-top" src="<?php echo e($post->image_path); ?>" alt="Card image cap">

                   <div class="card-body"><?php echo e($post->description); ?></div>

               </div>   

           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

       </div>

   </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>