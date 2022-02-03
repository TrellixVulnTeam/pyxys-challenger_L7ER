<article <?php post_class('post-content') ?>>

    <div class="container">
        <header>

            
            <div class="back-conteudos mb-3">
                <a title="Voltar para os Posts" rel="dofollow" href="<?php echo e(home_url('/conteudos')); ?>">
                    <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.646445 3.64645C0.451183 3.84171 0.451183 4.15829 0.646445 4.35355L3.82843 7.53553C4.02369 7.7308 4.34027 7.7308 4.53553 7.53553C4.73079 7.34027 4.73079 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17157C4.7308 0.97631 4.7308 0.659727 4.53553 0.464465C4.34027 0.269203 4.02369 0.269203 3.82843 0.464465L0.646445 3.64645ZM16 3.5L0.999999 3.5L0.999999 4.5L16 4.5L16 3.5Z" fill="#3583F0"/>
                    </svg>
                    <span>Voltar para os Posts</span>
                </a>
            </div>

            
          <h1 class="entry-title"><?php echo get_the_title(); ?></h1>

            
          <p class="entry-subtitle"><?php echo e(ConteudosController::getSubTitle(get_the_ID())); ?></p>

            
            <div class="entry-meta">
          <?php echo $__env->make('partials/entry-meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>

        </header>

        
        <div class="entry-content">
            <?php echo e(the_post_thumbnail('large', array('class'=>'img-fluid mb-5', 'attr' => get_the_title(), 'title' => get_the_title() ))); ?>

          <?php the_content() ?>
        </div>

        
        <footer>
          <?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

        </footer>
    </div>

</article>
