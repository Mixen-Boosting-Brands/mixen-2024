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