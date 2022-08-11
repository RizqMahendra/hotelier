<?php

add_action('acf/init', 'explore_slider_init');
function explore_slider_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'explore-slider',
            'title' => __('Explore Slider'),
            'description' => __('Explore Slider Block'),
            'category' => 'hotelier_carousels',
            'icon' => 'format-image',
            'keywords' => ['slider', 'image'],
            'mode' => 'auto',
            'render_callback' => 'explore_slider_callback',
        ]);
    }
}

function explore_slider_callback($block)
{
    $title = get_field('title'); ?>
    <section class="explore-more bg-txt-dark lazyloaded">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 offset-1 col-lg-8 offset-lg-2 p-0 explore-title">
                    <h3><?php echo $title; ?></h3>
                </div>
            </div>
            <div class="row explore-content-row">
                <div class="col-1 col-lg-2 p-0">
                    <div class="explore-more-swiper-button-prev swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-424f98f7acf7bfdd" aria-disabled="true"></div>
                </div>
                <div class="col-10 col-lg-8 p-0 explore-content-col">
                    <div class="swiper-container explore-more-slider-container swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper explore-more-slider-wrapper" id="swiper-wrapper-424f98f7acf7bfdd" aria-live="polite">
                            <?php if (have_rows('slider')):?>
                            <?php while (have_rows('slider')): the_row(); ?>
                            <div class="swiper-slide swiper-slide-visible swiper-slide-active" data-index="0" style="margin-right: 15px;" role="group" aria-label="1 / 5">
                                        <a href="<?php echo get_sub_field('url'); ?>">
                                            <img class="swiper-lazy swiper-lazy-loaded" src="<?php echo get_sub_field('img'); ?>">
                                            <div class="title-container">
                                                <span><?php echo get_sub_field('title'); ?></span>
                                            </div>
                                        </a> 
                            </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                                </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
                <div class="col-1 col-lg-2 p-0">
                    <div class="explore-more-swiper-button-next swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-424f98f7acf7bfdd" aria-disabled="false"></div>
                </div>
            </div>
        </div>
    </section>

<?php
}?>
