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
                <div class="card text-bg-primary mb-4">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php 
                            $fa_icon = get_field('fa_icon');
                            if ($fa_icon) {
                                // Extract the Font Awesome icon from the field output
                                preg_match('/<i class="([^"]+)"><\/i>/', $fa_icon, $matches);
                                if (!empty($matches[1])) {
                                    echo '<i class="' . esc_attr($matches[1]) . '"></i> '; // Output the Font Awesome icon
                                }
                            }
                            the_title(); 
                            ?>
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