<?php
    $args = array(
        'category_name' => 'blog', // Specify the category slug here
        'posts_per_page' => 1,    // Use -1 to fetch all posts from the category
    );

    $blogQuery = new WP_Query($args);
    if ($blogQuery->have_posts()): while ($blogQuery->have_posts()) : $blogQuery->the_post();
?>
    <section id="blog" class="common-dark py-60">
        <div class="container">
            <div class="row">
                <div class="col-6 my-auto">
                    <h1><?php echo get_cat_name(2); ?></h1>
                </div>
                <div class="col-6 my-3 my-lg-auto">
                    <div class="row mb-4">
                        <div class="col-12 text-end">
                            <a href="<?php echo get_category_link(2); ?>" class="btn btn-outline-secondary rounded-pill">
                                <i class="fa-solid fa-blog"></i> <span class="d-lg-none">Más entradas</span><span class="d-none d-lg-inline-block">Ver todos las entradas</span>
                            </a>
                        </div>
                    </div>
                    <!-- div class="row">
                        <div class="col-12">
                            <p class="text-small text-muted mb-0">Buscar por:</p>
                            <nav>
                                <div class="navs d-flex flex-wrap justify-content-start" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-cat-1-tab" data-bs-toggle="tab" data-bs-target="#nav-cat-1" type="button" role="tab" aria-controls="nav-cat-1" aria-selected="true">All</button>
                                <?php
                                    $tags = get_tags();

                                    if ($tags): $counterTags = 2; foreach ($tags as $tag):
                                ?>
                                    <button class="nav-link" id="nav-cat-<?php echo $counterTags; ?>-tab" data-bs-toggle="tab" data-bs-target="#nav-cat-<?php echo $counterTags; ?>" type="button" role="tab" aria-controls="nav-cat-<?php echo $counterTags; ?>" aria-selected="false"><?php echo esc_html($tag->name); ?></button>
                                <?php 
                                    $counterTags++; endforeach; endif;
                                ?>
                                </div>
                            </nav>
                        </div>
                    </div -->
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content" id="nav-blog">
                        <div class="tab-pane fade show active" id="nav-cat-1" role="tabpanel" aria-labelledby="nav-cat-1-tab" tabindex="0">
                            <div class="row">
                            <?php
                                $args = array(
                                    'category_name' => 'blog', // Specify the category slug here
                                    'posts_per_page' => 2,    // Use -1 to fetch all posts from the category
                                    'orderby' => 'rand',
                                );

                                $query = new WP_Query($args);

                                if ($query->have_posts()): while ($query->have_posts()) : $query->the_post();
                                    $excerpt = get_the_excerpt();
                                    $words = explode(' ', $excerpt);
                                    
                                    if (count($words) > 30) {
                                        $words = array_slice($words, 0, 30);
                                        $excerpt = implode(' ', $words) . '...';
                                    }
                            ?>
                                <div class="col-lg-6 mb-3">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('home-blog', array('class' => 'img-fluid')); ?>
                                    </a>
                                    <a href="<?php the_permalink(); ?>">
                                        <h2 class="mt-3">
                                            <?php the_title(); ?>
                                            <span class="date badge bg-secondary rounded-pill">
                                                <time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
                                                    <?php echo get_the_date('M j, Y'); ?>
                                                </time>
                                            </span>
                                        </h2>
                                    </a>
                                    <?php echo $excerpt; ?>
                                </div>
                            <?php 
                                endwhile; endif;
                                wp_reset_postdata();
                            ?>
                            </div>
                        </div>
                    <?php
                        $tags = get_tags();

                        if ($tags): $counterTabs = 2; foreach ($tags as $tag):
                    ?>
                        <div class="tab-pane fade" id="nav-cat-<?php echo $counterTabs; ?>" role="tabpanel" aria-labelledby="nav-cat-<?php echo $counterTabs; ?>-tab" tabindex="0">
                            <div class="row">
                            <?php
                                $args = array(
                                    'category_name' => 'blog', // Specify the category slug here
                                    'posts_per_page' => 2,    // Use -1 to fetch all posts from the category
                                    'tag__in' => array($tag->term_id), // Pass an array of tag IDs
                                );

                                $query = new WP_Query($args);

                                if ($query->have_posts()): while ($query->have_posts()) : $query->the_post();
                                    $excerpt = get_the_excerpt();
                                    $words = explode(' ', $excerpt);
                                    
                                    if (count($words) > 30) {
                                        $words = array_slice($words, 0, 30);
                                        $excerpt = implode(' ', $words) . '...';
                                    }
                            ?>
                                <div class="col-lg-6 mb-1 mb-lg-3 mb-lg-0">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('home-blog', array('class' => 'img-fluid')); ?>
                                    </a>
                                    <a href="<?php the_permalink(); ?>">
                                        <h2 class="mt-3">
                                            <?php the_title(); ?>
                                            <span class="date badge bg-secondary rounded-pill">
                                                <time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
                                                    <?php echo get_the_date('M j, Y'); ?>
                                                </time>
                                            </span>
                                        </h2>
                                    </a>
                                    <?php echo $excerpt; ?>
                                </div>
                            <?php 
                                endwhile; endif;
                                wp_reset_postdata();
                            ?>
                            </div>
                        </div>
                    <?php 
                        $counterTabs++; endforeach; endif;
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php 
    endwhile; endif;
    wp_reset_postdata();
?>