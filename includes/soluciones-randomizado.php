<div class="row">
    <div class="col-lg-10 offset-lg-1">
        <div class="row">
        <?php
            $args = array(
                'post_type'      => 'soluciones', // Specify the custom post type
                'posts_per_page' => 4,
                'orderby' => 'rand',
            );

            $solucionesQuery = new WP_Query($args);
            if ($solucionesQuery->have_posts()): while ($solucionesQuery->have_posts()) : $solucionesQuery->the_post();
        ?>
            <div class="col-lg-6">
                <div class="card text-bg-primary mb-3">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php if( get_field('fa_icon') ): ?><?php echo wp_strip_all_tags(get_field('fa_icon')); ?><?php endif; ?> <?php the_title(); ?>
                        </h4>
                        <p class="card-text"><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
        <?php 
            endwhile; endif;
            wp_reset_postdata();
        ?>
        </div>
    </div>
</div>