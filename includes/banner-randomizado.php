<!-- Inicio Slide -->
<div class="swiper-slide">
    <div class="row g-1">
    <?php
        $args = array(
            'post_type'      => 'proyectos', // Specify the custom post type
            'posts_per_page' => 1,
            'category__in'   => array(48),   // Specify the category ID
            'orderby' => 'rand',
        );

        $proyectosHeaderBigQuery = new WP_Query($args);
        if ($proyectosHeaderBigQuery->have_posts()): while ($proyectosHeaderBigQuery->have_posts()) : $proyectosHeaderBigQuery->the_post();
    ?>
        <div class="col-lg-8">
            <div class="thumb thumb-1" style="background: url('<?php the_field('thumbnail_banner_principal'); ?>') no-repeat;">
                <a href="<?php the_permalink(); ?>"></a>
            </div>
        </div>
    <?php 
        endwhile; endif;
        wp_reset_postdata();
    ?>
        <div class="col-lg-4">
            <div class="row gy-1">
            <?php
                $args = array(
                    'post_type'      => 'proyectos', // Specify the custom post type
                    'posts_per_page' => 2,
                    'category__in'   => array(48),   // Specify the category ID
                    'orderby' => 'rand',
                );

                $proyectosHeaderSmallQuery = new WP_Query($args);
                if ($proyectosHeaderSmallQuery->have_posts()): $i = 2; while ($proyectosHeaderSmallQuery->have_posts()) : $proyectosHeaderSmallQuery->the_post();
            ?>
                <div class="col-12">
                    <div class="thumb thumb-<?php echo $i; ?>" style="background: url('<?php the_field('thumbnail_banner_principal'); ?>') no-repeat;">
                        <a href="<?php the_permalink(); ?>"></a>
                    </div>
                </div>
            <?php 
                $i++; endwhile; endif;
                wp_reset_postdata();
            ?>
            </div>
        </div>
    </div>
</div>
<!-- /Fin Slide -->