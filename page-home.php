<?php
    /*
        * Template Name: Home
    */

    get_header();
?>

    <section id="jumbotron-movil" class="d-lg-none">
        <div class="container">
            <div class="row py-30">
                <div class="col text-center">
                    <h1 id="smart-is-the-new-sexy">
                        Smart <img class="ico-arrow" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ico-arrow.png" alt="" class="img-fluid" loading="lazy"> <span class="fs-4">is the new sexy</span>
                    </h1>
                </div>
            </div>
        </div> 
    </section>

    <section id="jumbotron">
        <div class="container">
            <div class="row py-30 d-none d-lg-block">
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
                        <?php if( get_field('activar_randomizado') ): ?>
                            <?php get_template_part( 'includes/banner-randomizado' ); ?>
                        <?php else: ?>
                            <?php get_template_part( 'includes/banner-manual' ); ?>
                        <?php endif; ?>
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
        <?php if( get_field('activar_randomizado_problematicas') ): ?>
            <?php get_template_part( 'includes/problematicas-randomizado' ); ?>
        <?php else: ?>
            <div class="row cards">
                <div class="col-lg-6">
                    <hr>
                    <div class="row">
                        <div class="col-4 my-auto">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/problematicas/thumb-1.png" alt="" class="img-fluid" loading="lazy">
                        </div>
                        <div class="col-8 my-auto">
                            <!-- Mobile -->
                            <div class="accordion accordion-flush d-lg-none" id="accordionFlush-1">
                                <div class="accordion-item">
                                    <h4 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-1" aria-expanded="false" aria-controls="flush-collapse-1">
                                            Falta de diferenciación
                                        </button>
                                    </h4>
                                    <div id="flush-collapse-1" class="accordion-collapse collapse" data-bs-parent="#accordionFlush-1">
                                        <div class="accordion-body">
                                            Tu empresa compite en un mercado saturado con productos y servicios similares. La falta de diferenciación puede llevar a una guerra de precios y a la disminución de márgenes de ganancia. Además, es difícil destacar y atraer a los clientes en medio de la competencia.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Mobile -->

                            <!-- Desktop -->
                            <div class="d-none d-lg-block">
                                <h4>Falta de diferenciación</h4>
                                <p>Tu empresa compite en un mercado saturado con productos y servicios similares. La falta de diferenciación puede llevar a una guerra de precios y a la disminución de márgenes de ganancia. Además, es difícil destacar y atraer a los clientes en medio de la competencia.</p>
                            </div>
                            <!-- /Desktop -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <hr>
                    <div class="row">
                        <div class="col-4 my-auto">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/problematicas/thumb-2.png" alt="" class="img-fluid" loading="lazy">
                        </div>
                        <div class="col-8 my-auto"">
                            <!-- Mobile -->
                            <div class="accordion accordion-flush d-lg-none" id="accordionFlush-2">
                                <div class="accordion-item">
                                    <h4 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-2" aria-expanded="false" aria-controls="flush-collapse-2">
                                            Falta de acceso a mercados digitales
                                        </button>
                                    </h4>
                                    <div id="flush-collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionFlush-2">
                                        <div class="accordion-body">
                                            La digitalización y la presencia en línea son cruciales en la actualidad, seguramente tu compañía enfrenta desafíos para adaptarse a la transformación digital. Queremos ayudarte.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Mobile -->

                            <!-- Desktop -->
                            <div class="d-none d-lg-block">
                                <h4>Falta de acceso a mercados digitales</h4>
                                <p>La digitalización y la presencia en línea son cruciales en la actualidad, seguramente tu compañía enfrenta desafíos para adaptarse a la transformación digital. Queremos ayudarte.</p>
                            </div>
                            <!-- /Desktop -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <hr>
                    <div class="row">
                        <div class="col-4 col-lg-12 my-auto mb-lg-3">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/problematicas/thumb-3.png" alt="" class="img-fluid" loading="lazy">
                        </div>
                        <div class="col-8 col-lg-12 my-auto">
                             <!-- Mobile -->
                             <div class="accordion accordion-flush d-lg-none" id="accordionFlush-3">
                                <div class="accordion-item">
                                    <h4 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-3" aria-expanded="false" aria-controls="flush-collapse-3">
                                            Falta de estrategias de marketing efectivas
                                        </button>
                                    </h4>
                                    <div id="flush-collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionFlush-3">
                                        <div class="accordion-body">
                                            Proyectos como el tuyo luchan por desarrollar estrategias de marketing efectivas por limitaciones de presupuesto y experiencia. Esto resulta en dificultades para llegar al prúblico objetivo y lograr resultados positivos, afectando alcances, conciencia y crecimiento.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Mobile -->

                            <!-- Desktop -->
                            <div class="d-none d-lg-block">
                                <h4>Falta de estrategias de marketing efectivas</h4>
                                <p>Proyectos como el tuyo luchan por desarrollar estrategias de marketing efectivas por limitaciones de presupuesto y experiencia. Esto resulta en dificultades para llegar al prúblico objetivo y lograr resultados positivos, afectando alcances, conciencia y crecimiento.</p>
                            </div>
                            <!-- /Desktop -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <hr>
                    <div class="row">
                        <div class="col-4 my-auto">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/problematicas/thumb-4.png" alt="" class="img-fluid" loading="lazy">
                        </div>
                        <div class="col-8 my-auto"">
                             <!-- Mobile -->
                             <div class="accordion accordion-flush d-lg-none" id="accordionFlush-4">
                                <div class="accordion-item">
                                    <h4 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-4" aria-expanded="false" aria-controls="flush-collapse-4">
                                            Dificultad para la innovación y adaptación
                                        </button>
                                    </h4>
                                    <div id="flush-collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionFlush-4">
                                        <div class="accordion-body">
                                            Tu marca podría tener problemas para innovar y adaptarse debido a la falta de recursos y conocimientos. Esto puede llevar a la obsolencia y limitar el crecimiento. Identificar tendencias emergentes es crucial para mantener la competitividad.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Mobile -->

                            <!-- Desktop -->
                            <div class="d-none d-lg-block">
                                <h4>Dificultad para la innovación y adaptación</h4>
                                <p>Tu marca podría tener problemas para innovar y adaptarse debido a la falta de recursos y conocimientos. Esto puede llevar a la obsolencia y limitar el crecimiento. Identificar tendencias emergentes es crucial para mantener la competitividad.</p>
                            </div>
                            <!-- /Desktop -->
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
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
                    <p>En Mixen: Boosting Brands te ofrecemos 4 soluciones a estas problemáticas tan comunes:</p>
                </div>
            </div>
            <?php get_template_part( 'includes/soluciones-randomizado' ); ?>
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
                                SEO/SEM
                            </div>
                            <div class="swiper-slide">
                                Social Media
                            </div>
                            <div class="swiper-slide">
                                Contenido
                            </div>
                            <div class="swiper-slide">
                                CX
                            </div>
                            <div class="swiper-slide">
                                IA
                            </div>
                            <div class="swiper-slide">
                                Desarrollo
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
                                SEO/SEM
                            </div>
                            <div class="swiper-slide">
                                Social Media
                            </div>
                            <div class="swiper-slide">
                                Contenido
                            </div>
                            <div class="swiper-slide">
                                CX
                            </div>
                            <div class="swiper-slide">
                                IA
                            </div>
                            <div class="swiper-slide">
                                Desarrollo
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
                                SEO/SEM
                            </div>
                            <div class="swiper-slide">
                                Social Media
                            </div>
                            <div class="swiper-slide">
                                Contenido
                            </div>
                            <div class="swiper-slide">
                                CX
                            </div>
                            <div class="swiper-slide">
                                IA
                            </div>
                            <div class="swiper-slide">
                                Desarrollo
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <!-- Slider main container -->
                    <div class="swiper-soluciones-bottom">
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
                                SEO/SEM
                            </div>
                            <div class="swiper-slide">
                                Social Media
                            </div>
                            <div class="swiper-slide">
                                Contenido
                            </div>
                            <div class="swiper-slide">
                                CX
                            </div>
                            <div class="swiper-slide">
                                IA
                            </div>
                            <div class="swiper-slide">
                                Desarrollo
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
                                SEO/SEM
                            </div>
                            <div class="swiper-slide">
                                Social Media
                            </div>
                            <div class="swiper-slide">
                                Contenido
                            </div>
                            <div class="swiper-slide">
                                CX
                            </div>
                            <div class="swiper-slide">
                                IA
                            </div>
                            <div class="swiper-slide">
                                Desarrollo
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
                                SEO/SEM
                            </div>
                            <div class="swiper-slide">
                                Social Media
                            </div>
                            <div class="swiper-slide">
                                Contenido
                            </div>
                            <div class="swiper-slide">
                                CX
                            </div>
                            <div class="swiper-slide">
                                IA
                            </div>
                            <div class="swiper-slide">
                                Desarrollo
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
                    <p>Para poder ofrecerte presencia, relevancia, inteligencia y posicionamiento hemos diseñado los siguientes servicios:</p>
                    <div class="separador"></div>
                </div>
            </div>
            <div class="row d-lg-none">
                <div class="col-lg-9 offset-lg-2">
                    <div class="accordion accordion-flush" id="acordion-cll">
                        <div class="accordion-item">
                            <h1 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Branding
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#acordion-cll">
                                <div class="accordion-body">
                                    <p>Crea una identidad única y memorable mediante diseño y mensajes impactantes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h1 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Web
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#acordion-cll">
                                <div class="accordion-body">
                                    <p>Transforma tu visión en una experiencia en línea excepcional. Creamos soluciones.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h1 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    e-Commerce
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#acordion-cll">
                                <div class="accordion-body">
                                    <p>Impulsa tus ventas en línea con nuestras soluciones de comercio electrónico, ofrecemos una experiencia de compra segura y eficiente.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h1 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    SEO/SEM
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#acordion-cll">
                                <div class="accordion-body">
                                    <p>Mejora tu visibilidad en línea con SEO y SEM. Aumentamos tu posicionamiento, visibilidad y generamos tráfico de calidad para maximizar tu alcance y conversiones.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h1 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    Social media
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#acordion-cll">
                                <div class="accordion-body">
                                    <p>Mejora tu presencia en redes sociales con nuestra gestión estratégica. Creamos contenido atractivo, aumentando la conexión y convirtiendo todos los esfuerzos en ventas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h1 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    Contenido 
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#acordion-cll">
                                <div class="accordion-body">
                                    <p>Cuenta tu historia de manera convincente con contenido multimedia relevante y valioso, estableciendo autoridad y manteniendo el compromiso de tu audiencia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h1 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                    CX
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#acordion-cll">
                                <div class="accordion-body">
                                    <p>Pon a tus clientes en el centro de nuestro enfoque en la Experiencia del Cliente. Automatizando cada interacción desde el inicio hasta la posventa.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h1 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                    IA
                                </button>
                            </h2>
                            <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#acordion-cll">
                                <div class="accordion-body">
                                    <p>Utiliza inteligencia artificial para personalizar campañas, predecir tendencias y generar contenidos únicos. Potenciamos las ventas de nuestros clientes entendiendo e integrando megatendencias.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h1 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                    Desarrollo
                                </button>
                            </h2>
                            <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#acordion-cll">
                                <div class="accordion-body">
                                    <p>Transforma tus ideas en aplicaciones móviles atractivas y funcionales, trabajamos contigo para crear soluciones valiosas y fluidas para tus usuarios.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-none d-lg-block">
                <div class="col-lg-9 offset-lg-2">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th scope="row" class="w-25">
                                        <h1 class="fs-4">Branding</h1>
                                    </th>
                                    <td>Crea una identidad única y memorable mediante diseño y mensajes impactantes.</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="w-25">
                                        <h1 class="fs-4">Web</h1>
                                    </th>
                                    <td>Transforma tu visión en una experiencia en línea excepcional. Creamos soluciones.</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="w-25">
                                        <h1 class="fs-4">e-Commerce</h1>
                                    </th>
                                    <td>Impulsa tus ventas en línea con nuestras soluciones de comercio electrónico, ofrecemos una experiencia de compra segura y eficiente.</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="w-25">
                                        <h1 class="fs-4">SEO/SEM</h1>
                                    </th>
                                    <td>Mejora tu visibilidad en línea con SEO y SEM. Aumentamos tu posicionamiento, visibilidad y generamos tráfico de calidad para maximizar tu alcance y conversiones.</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="w-25">
                                        <h1 class="fs-4">Social media</h1>
                                    </th>
                                    <td>Mejora tu presencia en redes sociales con nuestra gestión estratégica. Creamos contenido atractivo, aumentando la conexión y convirtiendo todos los esfuerzos en ventas.</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="w-25">
                                        <h1 class="fs-4">Contenido</h1>
                                    </th>
                                    <td>Cuenta tu historia de manera convincente con contenido multimedia relevante y valioso, estableciendo autoridad y manteniendo el compromiso de tu audiencia.</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="w-25">
                                        <h1 class="fs-4">CX</h1>
                                    </th>
                                    <td>Pon a tus clientes en el centro de nuestro enfoque en la Experiencia del Cliente. Automatizando cada interacción desde el inicio hasta la posventa.</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="w-25">
                                        <h1 class="fs-4">IA</h1>
                                    </th>
                                    <td>Utiliza inteligencia artificial para personalizar campañas, predecir tendencias y generar contenidos únicos. Potenciamos las ventas de nuestros clientes entendiendo e integrando megatendencias.</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="w-25">
                                        <h1 class="fs-4">Desarrollo</h1>
                                    </th>
                                    <td>Transforma tus ideas en aplicaciones móviles atractivas y funcionales, trabajamos contigo para crear soluciones valiosas y fluidas para tus usuarios.</td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mixen-cloud">
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
                    <p>Plataforma segura, versátil y escalable para tus correos electrónicos, web, tienda en línea y aplicaciones. Tenemos la infraestructura tecnológica que necesitas potenciada por inteligencia artificial.</p>
                    <a href="https://mixen.cloud/" class="btn btn-outline-secondary btn-lg rounded-pill mb-3">
                        <i class="fa-solid fa-cart-shopping"></i> Adquiere Mixen Cloud
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php get_template_part( 'includes/alianzas' ); ?>

<?php get_template_part( 'includes/portafolio' ); ?>

<?php get_template_part( 'includes/clientes' ); ?>

<?php get_template_part( 'includes/podcast' ); ?>

<?php get_template_part( 'includes/blog' ); ?>

<?php get_footer(); ?>