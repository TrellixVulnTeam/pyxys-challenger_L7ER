<?php $__env->startSection('content'); ?>

    <div class="main-single">

        <div class="container">
            <div class="breadcumbs">
                <a href="#">Home - Tendências digitais - Selo LGPD Report: o que é e qual sua importância?</a>
            </div>
        </div>

        <?php while(have_posts()): ?> <?php the_post() ?>
            <?php echo $__env->make('partials.content-single-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endwhile; ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>