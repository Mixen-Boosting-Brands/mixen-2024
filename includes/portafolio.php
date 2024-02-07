    <section id="portafolio" class="common-light py-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        Proyectos<br>
                        destacados
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col overflow-hidden">
                    <!-- Slider main container -->
                    <div class="swiper-resultados">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                        <?php
                            $args = array(
                                'post_type'      => 'proyectos', // Specify the custom post type
                                'posts_per_page' => -1,
                                'category__in'   => array(48),   // Specify the category ID
                            );

                            $proyectosFooterQuery = new WP_Query($args);
                            if ($proyectosFooterQuery->have_posts()): while ($proyectosFooterQuery->have_posts()) : $proyectosFooterQuery->the_post();
                                if( get_field('thumbnail_del_carrusel_proyectos_destacados') ):
                        ?>
                            <!-- Inicio Slide -->
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-12">
                                        <h2><?php the_title(); ?></h2>
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php the_field('thumbnail_del_carrusel_proyectos_destacados'); ?>" alt="" class="img-fluid mb-3" loading="lazy">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Fin Slide -->
                        <?php 
                            endif; endwhile; endif;
                            wp_reset_postdata();
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