<?php $__env->startSection('content'); ?>

    <div class="main-single">

        <?php echo $__env->make('partials.breadcumbs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="container">
            <div class="row">
                <div class="col-md-9 px-0">
                    <?php while(have_posts()): ?> <?php the_post() ?>
                        <?php echo $__env->make('partials.content-single-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>

        <section class="related-posts">
            <div class="container">
                <h3 class="section-title">Matérias Relacionadas</h3>

                <div class="row">
                    <?php
                        $terms = ConteudosController::getCategories(get_the_ID());
                        $posts = ConteudosController::getRelatedPosts($terms);
                    ?>

                    <?php if($posts->have_posts()): ?>
                        <?php while($posts->have_posts()): ?> <?php $posts->the_post() ?>
                            <?php echo $__env->make('partials.related-post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>