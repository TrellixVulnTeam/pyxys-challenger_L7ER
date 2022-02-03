<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <div class="my-5 py-5 container">
      <?php if(!have_posts()): ?>
        <div class="alert alert-warning">
          <?php echo e(__('Desculpe, não foi encontrado nenhum resultado!.', 'sage')); ?>

        </div>
      <?php endif; ?>

      <?php while(have_posts()): ?> <?php the_post() ?>
        <?php echo $__env->make('partials.content-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php endwhile; ?>

      <?php echo get_the_posts_navigation(); ?>

  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>