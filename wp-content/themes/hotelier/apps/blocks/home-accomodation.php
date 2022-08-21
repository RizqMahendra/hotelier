<?php

add_action('acf/init', 'home_accomodation_init');
function home_accomodation_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'home-accomodation',
            'title' => __('Home Accomodation Slider'),
            'description' => __('Home Accomodation Slider Block'),
            'category' => 'hotelier_elements',
            'icon' => 'format-image',
            'keywords' => ['Home Accomodation', 'image'],
            'mode' => 'auto',
            'render_callback' => 'home_accomodation_callback',
        ]);
    }
}

function home_accomodation_callback($block)
{
    $title = get_field('title'); ?>
<section class="home-accommodation section-padding bg-txt-light lazyloaded">
    <div class="container-fluid">
        <div class="row nav-row">
            <div class="nav-bg lazyloaded">&nbsp;</div>
            <div class="col-10 col-lg-5 p-0 nav-col offset-1 offset-lg-0">
                <div class="heading-wrapper">
                    <h3 class="section-heading">
                        <?php echo $title; ?></span>
                    </h3>
                </div>
            </div>
            <?php

            ?>
            <div class="col-6 col-xl-5 p-0 nav-col d-none d-lg-block">
                <div class="accommodation-pagination swiper-pagination-clickable swiper-pagination-bullets">
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
            <div class="col-2 d-none d-lg-block p-0 order-lg-1">
                <div class="accommodation-swiper-button-prev swiper-button-prev" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-96b77abe7e4aa00f"></div>
            </div>
            <div class="col-12 col-lg-3 p-0 accommodation-caption order-2 order-lg-2">
                <div class="accommodation-swiper-button-next swiper-button-next mobile-button" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-96b77abe7e4aa00f">
                </div>
                <div class="accommodation-swiper-button-prev swiper-button-prev mobile-button" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-96b77abe7e4aa00f">
                </div>
                <div class="caption-wrapper">
                    <a class='title' href='' >Superior room</a>This 30-sqm room comes with modern amenities such as air conditioning, a personal safe, a flat-screen TV, and an electric kettle. Bathroom has a bath and a shower with free toiletries. Daily mineral water and daily afternoon tea are provided. No extra beds allowed in this room type. Guests receive 10% discount for lunch and dinner at the restaurant.<div class='cta-container'><a class='hlink' href=''>Read more</a></div>
                </div>
            </div>
            <div class="col-12 col-lg-6 p-0 order-1 order-lg-3 accommodation-slider-col">
            <?php if( have_rows('accomodations') ):?>
                <div class="swiper-container accommodation-slider-container swiper-container-initialized swiper-container-horizontal">
                    <div class="swiper-wrapper accommodation-slider-wrapper" id="swiper-wrapper-96b77abe7e4aa00f" aria-live="polite" style="transition: all 0ms ease 0s; transform: translate3d(-2280px, 0px, 0px);">
                        <?php $i=0;while( have_rows('accomodations') ) : the_row();?>
                            <?php
                                $title = get_sub_field('title');
                                $content = get_sub_field('content');
                                $url = get_sub_field('url');
                                $image = get_sub_field('image');
                            ?>
                            <div class="swiper-slide swiper-slide-duplicate" data-title="<?php echo $title?>" data-index="<?php echo $i;?>" data-highlights="<?php  echo $content;?>" data-swiper-slide-index="<?php  echo $i;?>" role="group" aria-label="1 / 8" style="width: 760px;">
                                <img class="swiper-lazy swiper-lazy-loaded" src="<?php echo $image['url'];?>">
                            </div>
                        <?php $i++;endwhile;?>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            <?php endif;?>
            </div>
            <div class="col-1 d-none d-lg-block p-0 order-lg-4">
                <div class="accommodation-swiper-button-next swiper-button-next" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-96b77abe7e4aa00f"></div>
            </div>
        </div>
        <div class="row mobile-pagination-row">
            <div class="col-12 d-lg-none">
                <div class="accommodation-pagination-mobile">
                    <a class="accommodation-pagination-mobile-bullet" href="javascript:;" data-index="0">&nbsp;</a>
                    <a class="accommodation-pagination-mobile-bullet" href="javascript:;" data-index="1">&nbsp;</a>
                    <a class="accommodation-pagination-mobile-bullet active" href="javascript:;" data-index="2">&nbsp;</a>
                    <a class="accommodation-pagination-mobile-bullet" href="javascript:;" data-index="3">&nbsp;</a>
                    <a class="accommodation-pagination-mobile-bullet" href="javascript:;" data-index="4">&nbsp;</a>
                    <a class="accommodation-pagination-mobile-bullet" href="javascript:;" data-index="5">&nbsp;</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}
