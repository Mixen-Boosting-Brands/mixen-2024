    <section id="portafolio" class="common-light py-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        Contenido<br>
                        relacionado
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col overflow-hidden">
                    <!-- Slider main container -->
                    <div class="swiper-relacionados">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
            <?php
                // Get the current post's tags
                $tags = wp_get_post_tags(get_the_ID());

                if ($tags) {
                    $tag_ids = array();
                    foreach ($tags as $tag) {
                        $tag_ids[] = $tag->term_id;
                    }

                    // Query related posts based on shared tags
                    $args = array(
                        'tag__in' => $tag_ids,
                        'post__not_in' => array(get_the_ID()), // Exclude the current post
                        'posts_per_page' => -1, // Adjust the number of related posts to display
                        'ignore_sticky_posts' => 1,
                        'orderby' => 'rand',
                    );

                    $related_query = new WP_Query($args);

                    if ($related_query->have_posts()) :
                        while ($related_query->have_posts()) : $related_query->the_post();
                            $categories = get_the_category();
                            $excerpt = get_the_excerpt();
                            $words = explode(' ', $excerpt);

                            if (count($words) > 30) {
                                $words = array_slice($words, 0, 30);
                                $excerpt = implode(' ', $words) . '...';
                            }
                            // Your loop content for related posts here
                            ?>
                            <!-- Inicio Slide -->
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-12">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('relacionados', array('class' => 'img-fluid mb-3')); ?>
                                        </a>
                                        <div class="row">
                                            <div class="col-10 my-auto">
                                                <span class="badge bg-primary rounded-pill mb-2">
                                                    <?php foreach ($categories as $category): echo esc_html($category->name); endforeach; ?>
                                                </span>
                                                <a href="<?php the_permalink(); ?>">
                                                    <h2><?php the_title(); ?></h2>
                                                </a>
                                            </div>
                                            <div class="col-2 my-auto text-end">
                                                <a href="<?php the_permalink(); ?>">
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ico-arrow.png" alt="" id="ico-arrow" class="img-fluid" loading="lazy">
                                                </a>
                                            </div>
                                        </div>
                                        <?php echo $excerpt; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- /Fin Slide -->
                            <?php
                        endwhile;
                        wp_reset_postdata(); // Reset post data after the custom query
                    endif;
                }
            ?>
                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>