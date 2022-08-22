<?php

add_action('acf/init', 'restaurant_accomodation_init');
function restaurant_accomodation_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'restaurant-accomodation',
            'title' => __('Restaurant Accomodation Slider'),
            'description' => __('Restaurant Accomodation Slider Block'),
            'category' => 'hotelier_elements',
            'icon' => 'format-image',
            'keywords' => ['Restaurant Accomodation', 'image'],
            'mode' => 'auto',
            'render_callback' => 'restaurant_accomodation_callback',
        ]);
    }
}

function restaurant_accomodation_callback($block)
{
    $title = get_field('title'); ?>
    <section id="restaurants" class="home-restaurants section-padding bg-txt-dark lazyloaded">
    <div class="container-fluid">
        <div class="row nav-row">
            <div class="nav-bg">&nbsp;</div>
            <div class="col-10 col-lg-5 p-0 nav-col offset-1 offset-lg-0">
                <div class="heading-wrapper">
                    <h3 class="section-heading">
                     <?php echo $title;?>
                    </h3>
                </div>
            </div>
            <div class="col-6 col-xl-5 p-0 nav-col d-none d-lg-block">
                <div class="restaurants-pagination swiper-pagination-clickable swiper-pagination-bullets">
                    <?php if( have_rows('accomodations') ):?>
                        <?php $i=0;while( have_rows('accomodations') ) : the_row();?>
                            <?php
                                $title = get_sub_field('title');
                            ?>
                            <span class="swiper-pagination-bullet" tabindex="<?php echo $i;?>"><?php echo $title;?></span>
                        <?php $i++;endwhile;?>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <div class="row slider-row">
            <div class="col-1 d-none d-lg-block p-0 order-lg-1">
                <div class="restaurants-swiper-button-prev swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-a60010875eb94f78e"></div>
            </div>
            <div class="col-12 order-2 col-lg-3 order-lg-3 pl-lg-5 col-xl-2 offset-xl-1 pl-xl-0 p-0 restaurants-caption d-lg-none d-flex">
                <div class="restaurants-swiper-button-next swiper-button-next mobile-button" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-a60010875eb94f78e"></div>
                <div class="restaurants-swiper-button-prev swiper-button-prev mobile-button" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-a60010875eb94f78e"></div>
            </div>
            <div class="col-12 col-lg-9 p-0 order-1 order-lg-2 restaurants-slider-col">
                <div class="swiper-container restaurants-slider-container swiper-container-initialized swiper-container-horizontal">
                    <div class="swiper-wrapper restaurants-slider-wrapper" id="swiper-wrapper-a60010875eb94f78e" aria-live="polite" style="transition: all 0ms ease 0s; transform: translate3d(-760px, 0px, 0px);">
                        <?php $i=0;while( have_rows('accomodations') ) : the_row();?>
                            <?php
                                $title = get_sub_field('title');
                                $content = get_sub_field('content');
                                $url = get_sub_field('url');
                                $image = get_sub_field('image');
                            ?>
                            <div class="swiper-slide" data-title="<?php echo $title?>" data-index="<?php echo $i;?>" data-swiper-slide-index="<?php  echo $i;?>"  role="group" aria-label="1 / 10" style="width: 760px;">
                                <div class="row align-items-center justify-content-center slide-wrapper">
                                    <div class="col-12 col-lg-7">
                                        <img class="swiper-lazy " src="<?php echo $image['url'];?>">
                                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                    </div>
                                    <div class="col-12 col-lg-5">
                                        <div class="caption-wrapper">
                                            <?php echo $content;?>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        <?php $i++;endwhile;?>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
            <div class="col-2 d-none d-lg-block p-0 order-lg-4">
                <div class="restaurants-swiper-button-next swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-a60010875eb94f78e"></div>
            </div>
        </div>
        <div class="row mobile-pagination-row">
            <div class="col-12 d-lg-none">
                <div class="restaurants-pagination-mobile">
                    <?php if( have_rows('accomodations') ):?>
                        <?php $i=0;while( have_rows('accomodations') ) : the_row();?>
                            <?php
                                $title = get_sub_field('title');
                            ?>
                            <a class="restaurants-pagination-mobile-bullet" href="javascript:;" data-index="<?php echo $i?>">&nbsp;</a>
                        <?php $i++;endwhile;?>
                    <?php endif;?>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}
