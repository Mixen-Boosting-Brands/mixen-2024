<?php
    /*
        * Template Name: Home
    */

    get_header();
?>

    <section id="jumbotron">
        <div class="container">
            <div class="row py-30">
                <div class="col text-center">
                    <h1 id="smart-is-the-new-sexy">
                        Smart <img class="ico-arrow" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ico-arrow.png" alt="" class="img-fluid" loading="lazy"> <span class="fs-4">is the new sexy</span>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col p-0 overflow-hidden">
                    <!-- Slider main container -->
                    <div class="swiper-jumbotron">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Inicio Slide -->
                            <div class="swiper-slide">
                                <div class="row g-1">
                                <?php if( have_rows('proyecto_1') ): while( have_rows('proyecto_1') ): the_row(); ?>
                                    <div class="col-lg-8">
                                        <div class="thumb thumb-1" style="background: url('<?php the_sub_field('imagen'); ?>') no-repeat;">
                                            <a href="<?php the_sub_field('link_del_proyecto'); ?>"></a>
                                        </div>
                                    </div>
                                <?php endwhile; endif; ?>
                                    <div class="col-lg-4">
                                        <div class="row gy-1">
                                        <?php if( have_rows('proyecto_2') ): while( have_rows('proyecto_2') ): the_row(); ?>
                                            <div class="col-12">
                                                <div class="thumb thumb-2" style="background: url('<?php the_sub_field('imagen'); ?>') no-repeat;">
                                                    <a href="<?php the_sub_field('link_del_proyecto'); ?>"></a>
                                                </div>
                                            </div>
                                        <?php endwhile; endif; ?>
                                        <?php if( have_rows('proyecto_3') ): while( have_rows('proyecto_3') ): the_row(); ?>
                                            <div class="col-12">
                                                <div class="thumb thumb-3" style="background: url('<?php the_sub_field('imagen'); ?>') no-repeat;">
                                                    <a href="<?php the_sub_field('link_del_proyecto'); ?>"></a>
                                                </div>
                                            </div>
                                        <?php endwhile; endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Fin Slide -->
                        </div>

                        <!-- If we need navigation buttons -->
                        <!-- div class="swiper-button-prev"></div -->
                        <!-- div class="swiper-button-next"></div -->
                    </div>
                </div>
            </div>
        </div> 
    </section>

    <section id="problematicas">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>
                        <span class="fs-4">Hemos detectado</span><br>
                        4 problemáticas<br>
                        <span class="fs-4">Que posiblemente esté enfrentando tu negocio</span>
                    </h1>
                </div>
            </div>
            <div class="row cards">
                <div class="col-lg-6">
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/problematicas/thumb-1.png" alt="" class="img-fluid" loading="lazy">
                        </div>
                        <div class="col-8">
                            <h4>Falta de diferenciación</h4>
                            <p>Tu empresa compite en un mercado saturado con productos y servicios similares. La falta de diferenciación puede llevar a una guerra de precios y a la disminución de márgenes de ganancia. Además, es difícil destacar y atraer a los clientes en medio de la competencia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/problematicas/thumb-2.png" alt="" class="img-fluid" loading="lazy">
                        </div>
                        <div class="col-8">
                            <h4>Falta de acceso a mercados digitales</h4>
                            <p>La digitalización y la presencia en línea son cruciales en la actualidad, seguramente tu compañía enfrenta desafíos para adaptarse a la transformación digital. Queremos ayudarte.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <hr>
                    <div class="row">
                        <div class="col-4 col-lg-12 mb-1 mb-lg-3">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/problematicas/thumb-3.png" alt="" class="img-fluid" loading="lazy">
                        </div>
                        <div class="col-8 col-lg-12">
                            <h4>Falta de estrategias de marketing efectivas</h4>
                            <p>Proyectos como el tuyo luchan por desarrollar estrategias de marketing efectivas por limitaciones de presupuesto y experiencia. Esto resulta en dificultades para llegar al prúblico objetivo y lograr resultados positivos, afectando alcances, conciencia y crecimiento.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/problematicas/thumb-4.png" alt="" class="img-fluid" loading="lazy">
                        </div>
                        <div class="col-8">
                            <h4>Dificultad para la innovación y adaptación</h4>
                            <p>Tu marca podría tener problemas para innovar y adaptarse debido a la falta de recursos y conocimientos. Esto puede llevar a la obsolencia y limitar el crecimiento. Identificar tendencias emergentes es crucial para mantener la competitividad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="soluciones" class="common-dark py-60">
        <div class="container mb-5">
            <div class="row mb-1 mb-lg-3">
                <div class="col-lg-7">
                    <h1>
                        Nuestras<br>
                        soluciones
                    </h1>
                    <p>En Mixen: Boosting Brands te ofrecemos tres soluciones a estas problemáticas tan comunes:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card text-bg-primary mb-3">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <i class="fa-solid fa-earth-americas"></i> Presencia
                                    </h4>
                                    <p class="card-text">En un mundo digital, es escencial para tu empresa tener una sólida presencia en línea a través de sitios web, redes sociales y aplicaciones móviles.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card text-bg-primary mb-3">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <i class="fa-solid fa-square-up-right"></i> Relevancia
                                    </h4>
                                    <p class="card-text">Adaptarse a las tendencias del mercado y las necesidades de los clientes para mantener su fidelidad.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card text-bg-primary mb-3">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <i class="fa-solid fa-lightbulb"></i> Inteligencia
                                    </h4>
                                    <p class="card-text">La inteligencia implica tomar decisiones basadas en datos, analizarlos y y utilizar tecnologías avanzadas para una mejor toma de decisiones.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card text-bg-primary mb-3">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <i class="fa-solid fa-location-dot"></i> Posicionamiento
                                    </h4>
                                    <p class="card-text">La inteligencia implica tomar decisiones basadas en datos, analizarlos y y utilizar tecnologías avanzadas para una mejor toma de decisiones.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid container-fluid-bottom">
            <div class="row">
                <div class="col-12 mb-1 mb-lg-3">
                    <!-- Slider main container -->
                    <div class="swiper-soluciones-top">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper no-swiping">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                Branding
                            </div>
                            <div class="swiper-slide">
                                Web
                            </div>
                            <div class="swiper-slide">
                                e-Commerce
                            </div>
                            <div class="swiper-slide">
                                Social Media
                            </div>
                            <div class="swiper-slide">
                                Development
                            </div>
                            <div class="swiper-slide">
                                CX
                            </div>
                            <div class="swiper-slide">
                                Contenido
                            </div>
                            <div class="swiper-slide">
                                SEO/SEM
                            </div>
                            <div class="swiper-slide">
                                Automatización
                            </div>
                            <div class="swiper-slide">
                                Branding
                            </div>
                            <div class="swiper-slide">
                                Web
                            </div>
                            <div class="swiper-slide">
                                e-Commerce
                            </div>
                            <div class="swiper-slide">
                                Social Media
                            </div>
                            <div class="swiper-slide">
                                Development
                            </div>
                            <div class="swiper-slide">
                                CX
                            </div>
                            <div class="swiper-slide">
                                Contenido
                            </div>
                            <div class="swiper-slide">
                                SEO/SEM
                            </div>
                            <div class="swiper-slide">
                                Automatización
                            </div>
                            <div class="swiper-slide">
                                Branding
                            </div>
                            <div class="swiper-slide">
                                Web
                            </div>
                            <div class="swiper-slide">
                                e-Commerce
                            </div>
                            <div class="swiper-slide">
                                Social Media
                            </div>
                            <div class="swiper-slide">
                                Development
                            </div>
                            <div class="swiper-slide">
                                CX
                            </div>
                            <div class="swiper-slide">
                                Contenido
                            </div>
                            <div class="swiper-slide">
                                SEO/SEM
                            </div>
                            <div class="swiper-slide">
                                Automatización
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="como-lo-logramos" class="py-60">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1 class="mb-1 mb-lg-3">
                        <span class="fs-4">¿Cómo</span> <img class="ico-arrow" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ico-arrow.png" alt="" class="img-fluid" loading="lazy"> lo logramos?
                    </h1>
                    <p>Para poder ofrecerte presencia, relevancia e inteligencia, hemos diseñado los siguientes servicios:</p>
                    <div class="separador"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 offset-lg-2">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <h1 class="fs-4">Branding</h1>
                                    </th>
                                    <td>Crea una identidad única y memorable mediante diseño y mensajes impactantes.</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <h1 class="fs-4">Web</h1>
                                    </th>
                                    <td>Transforma tu visión en una experiencia en línea excepcional. Creamos soluciones.</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <h1 class="fs-4">e-Commerce</h1>
                                    </th>
                                    <td>Impulsa tus ventas en línea con nuestras soluciones de comercio electrónico, ofreemos una experiencia de compra segura y eficiente.</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <h1 class="fs-4">Social media</h1>
                                    </th>
                                    <td>Mejora tu presencia en redes sociales con nuestra gestión estratégica. Creamos contenido atractivo, aumentando la conexión y compromiso con tu audiencia.</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <h1 class="fs-4">Development</h1>
                                    </th>
                                    <td>Transforma tus ideas en aplicaciones móviles atractivas y funcionales, trabajamos contiho para crear soluciones valiosas y fluidas para tus usuarios.</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <h1 class="fs-4">CX</h1>
                                    </th>
                                    <td>Pon a tus clientes en el centro de nuestro enfoque en la Experiencia del Cliente (CX). Optimizamos cada interacción desde el inicio hasta la posventa.</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <h1 class="fs-4">Contenido</h1>
                                    </th>
                                    <td>Cuenta tu historia de manera convincente con contenido multimedia relevante y valioso, estableciendo autoridad y manteniendo el compromiso de tu audiencia.</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <h1 class="fs-4">SEO/SEM</h1>
                                    </th>
                                    <td>Mejora tu visibilidad en línea con SEO y SEM. Aumentamos la clasificación y generamos tráfico de calidad para maximizar tu alcance y conversiones.</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <h1 class="fs-4">Automatización</h1>
                                    </th>
                                    <td>Optimizamos operaciones con automatización para aumentar eficienca, reducir trabajo manual y enfocarte en el crecimiento.</td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mixen-cloud" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/mixen-cloud/bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-1 mb-lg-3 my-lg-auto">
                    <h1>
                        <span>Almacenamiento inteligente</span>
                        <br>
                        Mixen Cloud
                    </h1>
                </div>
                <div class="col-lg-4 my-auto">
                    <a href="https://mixen.cloud/" class="btn btn-outline-secondary rounded-pill mb-3">
                        ¿Qué es?
                    </a>
                    <p>Plataforma segura, versátil y escalable para tus aplicaciones, web, aplicaciones y datos en la nube. Tenemos la infraestructura tecnológica que necesitas.</p>
                    <i class="fa-solid fa-cloud"></i>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( 'includes/portafolio' ); ?>

    <section id="clientes" class="common-light py-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        Nuestros clientes
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Slider main container -->
                    <div class="swiper swiper-clientes">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Abitat.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Alsuper.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/American-Industries.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Bafar.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Brunswick.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Burger.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Canadevi.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Cedehm.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Century.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Coparmex.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Ctu.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Farmacias-Guadalajara.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Fibras-y-Semillas.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Grupo-Harinas.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/ISAD.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/KIA.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/LaSalle.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Pemex.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Queretaro.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Real.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Seguros-MTY.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Sulawe.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Tec-de-MTY.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Tec-Milenio.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/UACH.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Unilever.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/clientes/Walmart.webp" alt="" class="img-fluid" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_template_part( 'includes/podcast' ); ?>

<?php get_template_part( 'includes/blog' ); ?>

<?php get_footer(); ?>