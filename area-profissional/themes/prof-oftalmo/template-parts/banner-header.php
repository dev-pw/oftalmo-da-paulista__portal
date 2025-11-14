<!-- Swiper -->
<div id="swipperBannerheader" class="swiper">

    <div class="swiper-wrapper">

        <?php
        $args_slide = array(
            'post_type'      => 'banner-header',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        );
        query_posts($args_slide);

        if (have_posts()): while (have_posts()) : the_post();

        // variaveis
        $banner_mobile = get_field('banner_mobile');
        $banner_desktop = get_field('banner_desktop');
        $link_banner = get_field('link_do_banner');
        $label_valor = get_field('destino_do_link');
        ?>

        <div class="swiper-slide">
            <?php if($link_banner != '') : ?>
            <a href="<?php echo $link_banner; ?>"  target="<?php echo ($label_valor == 2) ? '_blank' : '' ?>" title="<?php the_title(); ?>">
            <?php endif; ?>

                <picture>
                    <source srcset="<?php echo $banner_desktop['url']; ?>" media="(min-width: 768px)" >
                    <img src="<?php echo $banner_mobile['url']; ?>" alt="<?php the_title(); ?>" class="img-fluid w-100">
                </picture>

            <?php if($link_banner != '') : ?>
            </a>
            <?php endif; ?>
        </div>

        <?php
        endwhile;endif;
        wp_reset_query();
        ?>

    </div>

    <div class="swiper-button-next js-swiper-button-next-bannerheader text-primary"></div>
    <div class="swiper-button-prev js-swiper-button-prev-bannerheader text-primary"></div>
    <div class="swiper-pagination js-swiper-pagination-bannerheader swipper-pagination__primary"></div>
</div>

<script>
jQuery(document).ready(function ($) {

    var swiper = new Swiper("#swipperBannerheader", {

        autoHeight: true,
        autoplay: true,

        navigation: {
            nextEl: ".js-swiper-button-next-bannerheader",
            prevEl: ".js-swiper-button-prev-bannerheader"
        },

        pagination: {
          el: ".js-swiper-pagination-bannerheader",
          clickable: true
        }

      });

    var body = $('body');
});
</script>
