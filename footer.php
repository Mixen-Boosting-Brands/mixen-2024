    <footer>
        <div class="container">
            <div class="row mb-1 mb-lg-3">
                <div class="col-lg-6">
                    <div class="row mb-4">
                        <div class="col-6">
                            <nav>
                                <ul class="list-unstyled">
                                    <li>
                                        Nuestras soluciones
                                    </li>
                                    <li>
                                        <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#soluciones">
                                            Presencia
                                        </a>
                                    </li>
                                    <li>
                                        <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#soluciones">
                                            Relevancia
                                        </a>
                                    </li>
                                    <li>
                                        <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#soluciones">
                                           Inteligencia
                                        </a>
                                    </li>
                                    <li class="mb-5">
                                        <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#soluciones">
                                           Posicionamiento
                                        </a>
                                    </li>
                                    <li>
                                        ¿Cómo lo logramos?
                                    </li>
                                    <li>
                                        <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#como-lo-logramos">
                                            Branding
                                        </a>
                                    </li>
                                    <li>
                                        <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#como-lo-logramos">
                                            Web
                                        </a>
                                    </li>
                                    <li>
                                        <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#como-lo-logramos">
                                            e-Commerce
                                        </a>
                                    </li>
                                    <li>
                                        <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#como-lo-logramos">
                                            SEO/SEM
                                        </a>
                                    </li>
                                    <li>
                                        <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#como-lo-logramos">
                                            Social Media
                                        </a>
                                    </li>
                                    <li>
                                        <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#como-lo-logramos">
                                            Contenido
                                        </a>
                                    </li>
                                    <li>
                                        <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#como-lo-logramos">
                                            CX
                                        </a>
                                    </li>
                                    <li>
                                        <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#como-lo-logramos">
                                            IA
                                        </a>
                                    </li>
                                    <li>
                                        <a <?php if( is_home() ): ?>class="anchor"<?php endif; ?> href="<?php if( !is_home() ): ?><?php echo esc_url( home_url() ); ?><?php endif; ?>#como-lo-logramos">
                                            Desarrollo
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-6">
                            <nav>
                                <ul class="list-unstyled">
                                    <li>
                                        Proyectos destacados
                                    </li>
                                <?php
                                    $args = array(
                                        'post_type'      => 'proyectos', // Specify the custom post type
                                        'posts_per_page' => 10,
                                        'category__in'   => array(48),   // Specify the category ID
                                        'orderby' => 'rand',
                                    );

                                    $proyectosFooterQuery = new WP_Query($args);
                                    if ($proyectosFooterQuery->have_posts()): while ($proyectosFooterQuery->have_posts()) : $proyectosFooterQuery->the_post();
                                ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </li>
                                <?php 
                                    endwhile; endif;
                                    wp_reset_postdata();
                                ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <nav>
                                <ul class="list-unstyled">
                                    <li>
                                        Almacenamiento inteligente
                                    </li>
                                    <li>
                                        <a href="https://mixen.cloud/">
                                            Mixen Cloud
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-6">
                            <nav>
                                <ul class="list-unstyled">
                                    <li>
                                        Nuestra opinión
                                    </li>
                                    <li>
                                        <a href="<?php echo get_category_link(2); ?>">
                                            <?php echo get_cat_name(2); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_category_link(45); ?>">
                                            <?php echo get_cat_name(45); ?>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <nav>
                                <ul class="list-unstyled">
                                    <li class="mb-1 mb-lg-3">
                                        <a href="#">
                                            Unirme al equipo
                                        </a>
                                    </li>
                                    <li class="mb-1 mb-lg-3">
                                        <a href="<?php echo get_permalink(3); ?>">
                                            <?php echo get_the_title(3); ?>
                                        </a>
                                    </li>
                                <?php if( !is_page(28) ): ?>
                                    <li class="mb-1 mb-lg-3">
                                        <a class="bg-primary badge rounded-pill" href="<?php echo get_permalink(28); ?>">
                                            <i class="fa-solid fa-headset"></i> ¿Necesitas soporte?
                                        </a>
                                    </li>
                                <?php endif; ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/footer/thumb.png" alt="" class="img-fluid mb-3" loading="lazy">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. Todos los derechos reservados.</p>
                </div>
                <div class="col text-end">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/mixenmx/" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.tiktok.com/mixenmx/" target="_blank">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/company/mixenmx/" target="_blank">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

    <!-- a href="https://wa.me/52614?text=Hola%20FOO%20BAR,%20necesito%20información." class="whatsapp" target="_blank">
        <i class="fab fa-whatsapp whatsapp-icon"></i>
    </a -->

    <!-- Modales -->
    <div class="modal fade" id="modalFolioINE" tabindex="-1" aria-labelledby="modalFolioINELabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo esc_url( home_url() ); ?>/wp-content/uploads/2024/01/folio-ine.png" alt="" class="img-fluid" loading="lazy">
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/app.bundle.js"></script>

<?php if( is_page(5) ): ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>'; // Define ajaxurl manually

            var page = 1; // Initialize page counter for pagination
            var loadMoreButton = document.getElementById('load-more-button');
            var loadMoreIcon = document.querySelector('#load-more-button .fa-rotate-right');

            loadMoreButton.addEventListener('click', function() {
                // Add 'fa-spin' class to the icon
                loadMoreIcon.classList.add('fa-spin');

                var xhr = new XMLHttpRequest();
                var data = new FormData();
                data.append('action', 'load_more_posts');
                data.append('page', page);

                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            var response = xhr.responseText;
                            document.querySelector('.load-more-container').insertAdjacentHTML('beforeend', response); // Append new posts to container
                            page++; // Increment page counter

                            // Remove 'fa-spin' class from the icon
                            loadMoreIcon.classList.remove('fa-spin');
                        } else {
                            console.error('Error: ' + xhr.status);
                        }
                    }
                };

                xhr.open('POST', ajaxurl, true);
                xhr.send(data);
            });
        });
    </script>
<?php endif; ?>
</body>
</html>