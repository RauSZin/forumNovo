<?php $__env->startSection('content'); ?>

<div class="container">

   <div class="row justify-content-center">

       <div class="col-md-8">

           <h1>Novo POST</h1>

           <form method="POST" enctype="multipart/form-data" action="/posts">

         

               <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

               Comentário: <textarea type="text" name="description"></textarea>

         

               Título: <input type="text" name="filter">

         

               Imagens: <input type="file" name="image_path">

         

               <button type="submit">Postar</button>

           </form>

       </div>

   </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>