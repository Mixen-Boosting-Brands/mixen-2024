<div class="row cards">
<?php
    $args = array(
        'post_type'      => 'problematicas', // Specify the custom post type
        'posts_per_page' => 4,
        'orderby' => 'rand',
    );

    $problematicasQuery = new WP_Query($args);
    if ($problematicasQuery->have_posts()): $i = 1; while ($problematicasQuery->have_posts()) : $problematicasQuery->the_post();
?>
    <div class="col-lg-6">
        <hr>
        <div class="row">
            <div class="col-4 <?php if( $i == 3 ): ?>col-lg-12 mb-1 mb-lg-3<?php endif; ?>">
            <?php if( $i == 3 ): ?>
                <?php the_post_thumbnail('home-problematica-big', array('class' => 'img-fluid')); ?>
            <?php else: ?>
                <?php the_post_thumbnail('home-problematica-small', array('class' => 'img-fluid')); ?>
            <?php endif; ?>
            </div>
            <div class="col-8 <?php if( $i == 3 ): ?>col-lg-12<?php endif; ?>">
                <h4><?php the_title(); ?></h4>
                <p><?php the_content(); ?></p>
            </div>
        </div>
    </div>
<?php 
    $i++ endwhile; endif;
    wp_reset_postdata();
?>
</div>