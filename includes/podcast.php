<?php
    $args = array(
        'category_name' => 'podcast', // Specify the category slug here
        'posts_per_page' => 1,    // Use -1 to fetch all posts from the category
    );

    $podcastQuery = new WP_Query($args);
    if ($podcastQuery->have_posts()): while ($podcastQuery->have_posts()) : $podcastQuery->the_post();
?>
    <section id="podcast" class="common-light py-60">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-8 my-auto">
                    <h1 class="mb-0">
                        Podcast:
                    </h1>
                    <h2>Aprobado Sin Cambios</h2>
                </div>
                <div class="col-6 col-lg-4 my-auto text-end">
                    <a href="<?php echo get_category_link(45); ?>" class="btn btn-outline-primary rounded-pill">
                        <i class="fa-solid fa-headphones-simple"></i> <span class="d-lg-none">Más episodios</span><span class="d-none d-lg-inline-block">Escuchar más episodios</span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col overflow-hidden">
                    <!-- Slider main container -->
                    <div class="swiper-podcast">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                        <?php
                            $args = array(
                                'category_name' => 'podcast', // Specify the category slug here
                                'posts_per_page' => 1,    // Use -1 to fetch all posts from the category
                                'orderby' => 'rand',
                            );

                            $query = new WP_Query($args);

                            if ($query->have_posts()): $counter = 1; while ($query->have_posts()) : $query->the_post();
                                $formatted_counter = sprintf("%03d", $counter);

                                $excerpt = get_the_excerpt();
                                $words = explode(' ', $excerpt);
                                
                                if (count($words) > 30) {
                                    $words = array_slice($words, 0, 30);
                                    $excerpt = implode(' ', $words) . '...';
                                }
                        ?>
                            <!-- Inicio Slide -->
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-lg-6 mb-1 mb-lg-3 my-lg-auto">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('home-blog', array('class' => 'img-fluid')); ?>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 my-auto">
                                        <a href="<?php the_permalink(); ?>">
                                            <h2 class="mt-3"><?php the_title(); ?></h2>
                                        </a>
                                        <h3>
                                            <!-- Capítulo #<?php echo $formatted_counter; ?> -->
                                            <span class="date badge bg-primary rounded-pill">
                                                <time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
                                                    <?php echo get_the_date('M j, Y'); ?>
                                                </time>
                                            </span>
                                        </h3>
                                        <?php echo $excerpt; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- /Fin Slide -->
                        <?php 
                            $counter++; endwhile; endif;
                            wp_reset_postdata();
                        ?>
                        </div>

                        <!-- If we need navigation buttons -->
                        <!-- div class="swiper-button-prev"></div -->
                        <!-- div class="swiper-button-next"></div -->
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php 
    endwhile; endif;
    wp_reset_postdata();
?>