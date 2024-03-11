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
            <div class="col-4 <?php if( $i == 3 ): ?>col-lg-12 mb-lg-3<?php endif; ?> my-auto">
            <?php if( $i == 3 ): ?>
                <?php the_post_thumbnail('home-problematica-small', array('class' => 'img-fluid d-lg-none')); ?>
                <?php the_post_thumbnail('home-problematica-big', array('class' => 'img-fluid d-none d-lg-block')); ?>
            <?php else: ?>
                <?php the_post_thumbnail('home-problematica-small', array('class' => 'img-fluid')); ?>
            <?php endif; ?>
            </div>
            <div class="col-8 <?php if( $i == 3 ): ?>col-lg-12<?php endif; ?> my-auto">
                <!-- Mobile -->
                <div class="accordion accordion-flush d-lg-none" id="accordionFlush-<?php echo $i; ?>">
                    <div class="accordion-item">
                        <h4 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?php echo $i; ?>" aria-expanded="false" aria-controls="flush-collapse-<?php echo $i; ?>">
                                <?php the_title(); ?>
                            </button>
                        </h4>
                        <div id="flush-collapse-<?php echo $i; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlush-<?php echo $i; ?>">
                            <div class="accordion-body">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Mobile -->

                <!-- Desktop -->
                <div class="d-none d-lg-block">
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_content(); ?></p>
                </div>
                <!-- /Desktop -->
            </div>
        </div>
    </div>
<?php 
    $i++; endwhile; endif;
    wp_reset_postdata();
?>
</div>