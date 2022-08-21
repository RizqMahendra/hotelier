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
              <div class="swiper-container accommodation-slider-container swiper-container-initialized swiper-container-horizontal">
                <div class="swiper-wrapper accommodation-slider-wrapper" id="swiper-wrapper-96b77abe7e4aa00f" aria-live="polite" style="transition: all 0ms ease 0s; transform: translate3d(-2280px, 0px, 0px);">
                    <div class="swiper-slide swiper-slide-duplicate" data-title="Maya Presidential Villa" data-index="5" data-highlights="<a class='title' href='/ubud/accommodation/maya-presidential-villa' >Maya Presidential Villa</a><ul class='highlights'><li class='size'>​950 square meters​</li><li class='bed'>1 King (200x200) &amp; 2 Single (120x200)​</li><li class='occupancy'>Up to 8 adults​</li><li class='pool'>30sqm Private Pool, 1.2m deep</li><li class='view'>Balinese Garden &amp; Terrace</li><li class='shower'>Outdoor Rainforest Shower</li><li class='living'>Separate Living Area for Small Events</li><li class='kitchenette'>Full Kitchen Set Up</li></ul><div class='cta-container'><a class='hlink' href='/ubud/accommodation/maya-presidential-villa'>Read more</a></div>" data-swiper-slide-index="5" role="group" aria-label="1 / 8" style="width: 760px;">
                        <img class="swiper-lazy swiper-lazy-loaded" src="https://mayaresorts.com/assets/images/ubud/accommodation/maya-presidential-villa/homepage-slider-thumbnail/mpv-temp-hst-2.webp">
                    </div>
                    <div class="swiper-slide" data-title="Impressive Forest Suite" data-index="0" data-highlights="<a class='title' href='/ubud/accommodation/impressive-forest-suite' >Impressive Forest Suite</a><ul class='highlights'><li class='size'>48 square meters</li><li class='bed'>1 King (200x200) / 2 Single (100x200)</li><li class='occupancy'>Up to 4 adults</li><li class='connecting'>Connecting Suites Available</li><li class='balcony'>Private Balcony</li><li class=''>&nbsp;</li><li class=''>&nbsp;</li><li class=''>&nbsp;</li></ul><div class='cta-container'><a class='hlink' href='/ubud/accommodation/impressive-forest-suite'>Read more</a></div>" data-swiper-slide-index="0" role="group" aria-label="2 / 8" style="width: 760px;">
                        <img class="swiper-lazy swiper-lazy-loaded" src="https://mayaresorts.com/assets/images/ubud/accommodation/impressive-forest-suite/homepage-slider-thumbnail/ifs-hst.webp">  
                    </div>
                    <div class="swiper-slide swiper-slide-prev" data-title="Impressive Forest Corner Suite" data-index="1" data-highlights="<a class='title' href='/ubud/accommodation/impressive-forest-corner-suite' >Impressive Forest Corner Suite</a><ul class='highlights'><li class='size'>56 square meters</li><li class='bed'>1 King (200x200) / 2 Single (100x200)​</li><li class='occupancy'>Up to 4 adults​</li><li class='balcony'>Two Private Balconies</li><li class='view'>View of Rice Paddy Field / Petanu River​</li><li class=''>&nbsp;</li><li class=''>&nbsp;</li><li class=''>&nbsp;</li></ul><div class='cta-container'><a class='hlink' href='/ubud/accommodation/impressive-forest-corner-suite'>Read more</a></div>" data-swiper-slide-index="1" role="group" aria-label="3 / 8" style="width: 760px;">
                        <img data-src="https://mayaresorts.com/assets/images/ubud/accommodation/impressive-forest-corner-suite/homepage-slider-thumbnail/ifcs-hst.webp" class="swiper-lazy">
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                    <div class="swiper-slide swiper-slide-active" data-title="Heavenly Jacuzzi Villa" data-index="2" data-highlights="<a class='title' href='/ubud/accommodation/heavenly-jacuzzi-villa' >Heavenly Jacuzzi Villa</a><ul class='highlights'><li class='size'>Up to 245 square meters​</li><li class='bed'>1 King (200x200) / 2 Single (100x200)​</li><li class='occupancy'>Up to 4 adults​</li><li class='whirlpool'>Outdoor Whirlpool Tub​</li><li class='view'>Balinese Garden &amp; Terrace</li><li class=''>&nbsp;</li><li class=''>&nbsp;</li><li class=''>&nbsp;</li></ul><div class='cta-container'><a class='hlink' href='/ubud/accommodation/heavenly-jacuzzi-villa'>Read more</a></div>" data-swiper-slide-index="2" role="group" aria-label="4 / 8" style="width: 760px;">
                        <img class="swiper-lazy swiper-lazy-loaded" src="https://mayaresorts.com/assets/images/ubud/accommodation/heavenly-jacuzzi-villa/homepage-slider-thumbnail/hjv-hst-2.webp">
                    </div>
                                        <div class="swiper-slide swiper-slide-next" data-title="Heavenly Pool Villa" data-index="3" data-highlights="<a class='title' href='/ubud/accommodation/heavenly-pool-villa' >Heavenly Pool Villa</a><ul class='highlights'><li class='size'>Up to 360 square meters​</li><li class='bed'>1 King (200x200) / 2 Single (100x200)​</li><li class='occupancy'>Up to 4 adults​</li><li class='pool'>14sqm Private Pool, 1.2m deep</li><li class='view'>Balinese Garden &amp; Terrace</li><li class='shower'>Outdoor Rainforest Shower</li><li class='connecting'>Connecting Villas Available</li><li class=''>&nbsp;</li></ul><div class='cta-container'><a class='hlink' href='/ubud/accommodation/heavenly-pool-villa'>Read more</a></div>" data-swiper-slide-index="3" role="group" aria-label="5 / 8" style="width: 760px;">
                        <img class="swiper-lazy swiper-lazy-loaded" src="https://mayaresorts.com/assets/images/ubud/accommodation/heavenly-pool-villa/homepage-slider-thumbnail/hpv-hst-2.webp">
                        
                    </div>
                    <div class="swiper-slide" data-title="Heavenly Two Bedroom Pool Villa" data-index="4" data-highlights="<a class='title' href='/ubud/accommodation/heavenly-two-bedroom-pool-villa' >Heavenly Two Bedroom Pool Villa</a><ul class='highlights'><li class='size'>​385 square meters​</li><li class='bed'>1 King (200x200) &amp; 2 Single (100x200)​</li><li class='occupancy'>Up to 8 adults​</li><li class='pool'>21sqm Private Pool, 1.2m deep</li><li class='view'>Balinese Garden &amp; Terrace</li><li class='living'>Living room</li><li class='whirlpool'>Outdoor Whirlpool tub</li><li class=''>&nbsp;</li></ul><div class='cta-container'><a class='hlink' href='/ubud/accommodation/heavenly-two-bedroom-pool-villa'>Read more</a></div>" data-swiper-slide-index="4" role="group" aria-label="6 / 8" style="width: 760px;">
                        <img class="swiper-lazy swiper-lazy-loaded" src="https://mayaresorts.com/assets/images/ubud/accommodation/heavenly-two-bedroom-pool-villa/homepage-slider-thumbnail/htbpv-hst-2.webp">
                    </div>
                    <div class="swiper-slide" data-title="Maya Presidential Villa" data-index="5" data-highlights="<a class='title' href='/ubud/accommodation/maya-presidential-villa' >Maya Presidential Villa</a><ul class='highlights'><li class='size'>​950 square meters​</li><li class='bed'>1 King (200x200) &amp; 2 Single (120x200)​</li><li class='occupancy'>Up to 8 adults​</li><li class='pool'>30sqm Private Pool, 1.2m deep</li><li class='view'>Balinese Garden &amp; Terrace</li><li class='shower'>Outdoor Rainforest Shower</li><li class='living'>Separate Living Area for Small Events</li><li class='kitchenette'>Full Kitchen Set Up</li></ul><div class='cta-container'><a class='hlink' href='/ubud/accommodation/maya-presidential-villa'>Read more</a></div>" data-swiper-slide-index="5" role="group" aria-label="7 / 8" style="width: 760px;">
                        <img class="swiper-lazy swiper-lazy-loaded" src="https://mayaresorts.com/assets/images/ubud/accommodation/maya-presidential-villa/homepage-slider-thumbnail/mpv-temp-hst-2.webp">
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate" data-title="Impressive Forest Suite" data-index="0" data-highlights="<a class='title' href='/ubud/accommodation/impressive-forest-suite' >Impressive Forest Suite</a><ul class='highlights'><li class='size'>48 square meters</li><li class='bed'>1 King (200x200) / 2 Single (100x200)</li><li class='occupancy'>Up to 4 adults</li><li class='connecting'>Connecting Suites Available</li><li class='balcony'>Private Balcony</li><li class=''>&nbsp;</li><li class=''>&nbsp;</li><li class=''>&nbsp;</li></ul><div class='cta-container'><a class='hlink' href='/ubud/accommodation/impressive-forest-suite'>Read more</a></div>" data-swiper-slide-index="0" role="group" aria-label="8 / 8" style="width: 760px;">
                        <img class="swiper-lazy swiper-lazy-loaded" src="https://mayaresorts.com/assets/images/ubud/accommodation/impressive-forest-suite/homepage-slider-thumbnail/ifs-hst.webp"> 
                    </div>
                </div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
            <div class="col-1 d-none d-lg-block p-0 order-lg-4">
                <div class="accommodation-swiper-button-next swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-96b77abe7e4aa00f"></div>
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
