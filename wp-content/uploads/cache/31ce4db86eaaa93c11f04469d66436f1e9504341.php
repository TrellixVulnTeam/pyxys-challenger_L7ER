<?php
    $term_id = ConteudosController::getCategory( get_the_ID(), 'term_id' );
    $term_name = ConteudosController::getCategory( get_the_ID(), 'name' );
?>

<div class="container">
    <div class="breadcumbs">
        <a href="<?php echo e(home_url()); ?>">Home</a> - <a href="<?php echo e(!intval($term_id) ? '#' : get_term_link($term_id)); ?>"> <?php echo e($term_name); ?> </a> - <span>Selo LGPD Report: o que é e qual sua importância?</span>
    </div>
</div>
