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
    ?>
    <section class="home-restaurants section-padding bg-txt-dark lazyloaded">
    <div class="container-fluid">
        <div class="row nav-row">
            <div class="nav-bg">&nbsp;</div>
            <div class="col-10 col-lg-5 p-0 nav-col offset-1 offset-lg-0">
                <div class="heading-wrapper">
                    <h3 class="section-heading">
                      Dining <span>at Maya Ubud</span>
                    </h3>
                </div>
            </div>
            <div class="col-6 col-xl-5 p-0 nav-col d-none d-lg-block">
                <div class="restaurants-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0">Mayasari</span><span class="swiper-pagination-bullet" tabindex="0">Tree Bar</span><span class="swiper-pagination-bullet" tabindex="0">River Cafe</span><span class="swiper-pagination-bullet" tabindex="0">Rasa Bulan</span><span class="swiper-pagination-bullet" tabindex="0">Romantic Dinner</span><span class="swiper-pagination-bullet" tabindex="0">Cooking Class</span><span class="swiper-pagination-bullet" tabindex="0">Floating Journey</span><span class="swiper-pagination-bullet" tabindex="0">In-Villa Grill</span></div>
            </div>
        </div>
        <div class="row slider-row">
            <div class="col-1 d-none d-lg-block p-0 order-lg-1">
                <div class="restaurants-swiper-button-prev swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-a60010875eb94f78e"></div>
            </div>
            <div class="col-12 order-2 col-lg-3 order-lg-3 pl-lg-5 col-xl-2 offset-xl-1 pl-xl-0 p-0 restaurants-caption">
                <div class="restaurants-swiper-button-next swiper-button-next mobile-button" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-a60010875eb94f78e"></div>
                <div class="restaurants-swiper-button-prev swiper-button-prev mobile-button" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-a60010875eb94f78e"></div>
                <div class="caption-wrapper">
                    <p class="type">All-Day Deliciousness</p>
                    <a class="title" href="/ubud/restaurant/maya-sari">Mayasari</a>
                    <p>The morning sun heralds an extensive breakfast buffet and a la carte specialties while during dinner, the venue becomes a stage for themed cultural dinners.</p>

<p>Opening Hours :<br>
Daily, 7.00 AM&nbsp;- 11.00 AM</p>
                    <a class="cta-link" href="/ubud/restaurant/maya-sari">Read more</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 p-0 order-1 order-lg-2 restaurants-slider-col">
                <div class="swiper-container restaurants-slider-container swiper-container-initialized swiper-container-horizontal">
                    <div class="swiper-wrapper restaurants-slider-wrapper" id="swiper-wrapper-a60010875eb94f78e" aria-live="polite" style="transition: all 0ms ease 0s; transform: translate3d(-760px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-title="In-Villa Grill" data-index="7" data-highlights="<p class='type'>Dining Program</p><a class='title' href='/ubud/experience/in-villa-grill' >In-Villa Grill</a><p>Why leave the luxurious seclusion of your villa? Ask for one of our dedicated Chefs to prepare a grilled dinner for you in the privacy of your garden.</p><a class='cta-link' href='/ubud/experience/in-villa-grill'>Read more</a>" data-swiper-slide-index="7" role="group" aria-label="1 / 10" style="width: 760px;">
                            <img data-src="https://mayaresorts.com/assets/images/ubud/experiences/villa-grill/homepage-slider-thumbnail/20220425-in-villa-grill-hst-1.webp" class="swiper-lazy">
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                                                <div class="swiper-slide swiper-slide-active" data-title="Mayasari" data-index="0" data-highlights="<p class='type'>All-Day Deliciousness</p><a class='title' href='/ubud/restaurant/maya-sari' >Mayasari</a><p>The morning sun heralds an extensive breakfast buffet and a la carte specialties while during dinner, the venue becomes a stage for themed cultural dinners.</p>

<p>Opening Hours :<br />
Daily, 7.00 AM&nbsp;- 11.00 AM</p>
<a class='cta-link' href='/ubud/restaurant/maya-sari'>Read more</a>" data-swiper-slide-index="0" role="group" aria-label="2 / 10" style="width: 760px;">
                            <img class="swiper-lazy swiper-lazy-loaded" src="https://mayaresorts.com/assets/images/ubud/restaurant/maya-sari/homepage-slider-thumbnail/maya-sari-hst.webp">
                            
                        </div>
                                                <div class="swiper-slide swiper-slide-next" data-title="Tree Bar" data-index="1" data-highlights="<p class='type'>Feel the breeze</p><a class='title' href='/ubud/restaurant/tree-bar' >Tree Bar</a><p>Visible from the main lobby, enter Tree Bar: an elegant, open-plan pavilion perched above the lush valley.</p>

<p>Opening Hours :<br />
Daily, 12.00 PM&nbsp;- 10.00 PM</p>
<a class='cta-link' href='/ubud/restaurant/tree-bar'>Read more</a>" data-swiper-slide-index="1" role="group" aria-label="3 / 10" style="width: 760px;">
                            <img data-src="https://mayaresorts.com/assets/images/ubud/restaurant/tree-bar/homepage-slider-thumbnail/tree-bar-hst.webp" class="swiper-lazy">
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                                                <div class="swiper-slide" data-title="River Cafe" data-index="2" data-highlights="<p class='type'>Fuel Your Wellness</p><a class='title' href='/ubud/restaurant/river-cafe' >River Cafe</a><p>A firm focus on healthy and organic choices inspired by Spa at Maya. Think blended fresh juices, hearty salads and sizzling hot stone specialties made with sustainably sourced ingredients.</p>

<p>Opening Hours :<br />
Temporarily unavailable</p>
<a class='cta-link' href='/ubud/restaurant/river-cafe'>Read more</a>" data-swiper-slide-index="2" role="group" aria-label="4 / 10" style="width: 760px;">
                            <img data-src="https://mayaresorts.com/assets/images/ubud/restaurant/river-cafe/homepage-slider-thumbnail/river-cafe-hst.webp" class="swiper-lazy">
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                                                <div class="swiper-slide" data-title="Rasa Bulan" data-index="3" data-highlights="<p class='type'>Modern Indonesian</p><a class='title' href='/ubud/restaurant/rasa-bulan' >Rasa Bulan</a><p>Literally meaning &quot;flavors of the moon&quot;, is an invitation to discover authentic Indonesian flavors cooked and presented in new ways.
</p>
<p>
  Coming soon
</p>
<a class='cta-link' href='/ubud/restaurant/rasa-bulan'>Read more</a>" data-swiper-slide-index="3" role="group" aria-label="5 / 10" style="width: 760px;">
                            <img data-src="https://mayaresorts.com/assets/images/ubud/restaurant/rasa-bulan/homepage-slider-thumbnail/rasa-bulan-homepage.webp" class="swiper-lazy">
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                                                <div class="swiper-slide" data-title="Romantic Dinner" data-index="4" data-highlights="<p class='type'>Dining Program</p><a class='title' href='/ubud/experience/romantic-dinner' >Romantic Dinner</a><p>Magic is served beneath the twinkling stars. You and your loved one, nothing else matters. Clink glasses and rekindle the fire of love while your private butler serves you delicious Balinese or Western cuisine.</p><a class='cta-link' href='/ubud/experience/romantic-dinner'>Read more</a>" data-swiper-slide-index="4" role="group" aria-label="6 / 10" style="width: 760px;">
                            <img data-src="https://mayaresorts.com/assets/images/ubud/experiences/romantic-dinner/homepage-slider-thumbnail/20220425-romantic-dinner-hst-1.webp" class="swiper-lazy">
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                                                <div class="swiper-slide" data-title="Cooking Class" data-index="5" data-highlights="<p class='type'>Dining Program</p><a class='title' href='/ubud/experience/cooking-class' >Cooking Class</a><p>Discover Balinese cooking techniques and blends of secret spices. This experience with our culinary team is complete with a tour of the Spice and Herb Garden. Also available, cooking class for the little ones.</p><a class='cta-link' href='/ubud/experience/cooking-class'>Read more</a>" data-swiper-slide-index="5" role="group" aria-label="7 / 10" style="width: 760px;">
                            <img data-src="https://mayaresorts.com/assets/images/ubud/experiences/cooking-class/homepage-slider-thumbnail/cooking-class-hst.webp" class="swiper-lazy">
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                                                <div class="swiper-slide" data-title="Floating Journey" data-index="6" data-highlights="<p class='type'>Dining Program</p><a class='title' href='/ubud/experience/floating-journey' >Floating Journey</a><p>A magical dining scene is prepared by our Culinary team set afloat at your villa's private pool. Enjoy the sweeping river valley views and have an unforgettable private dining moment.</p><a class='cta-link' href='/ubud/experience/floating-journey'>Read more</a>" data-swiper-slide-index="6" role="group" aria-label="8 / 10" style="width: 760px;">
                            <img data-src="https://mayaresorts.com/assets/images/ubud/experiences/floating-journey/homepage-slider-thumbnail/20220425-floating-journey-hst-1.webp" class="swiper-lazy">
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                                                <div class="swiper-slide swiper-slide-duplicate-prev" data-title="In-Villa Grill" data-index="7" data-highlights="<p class='type'>Dining Program</p><a class='title' href='/ubud/experience/in-villa-grill' >In-Villa Grill</a><p>Why leave the luxurious seclusion of your villa? Ask for one of our dedicated Chefs to prepare a grilled dinner for you in the privacy of your garden.</p><a class='cta-link' href='/ubud/experience/in-villa-grill'>Read more</a>" data-swiper-slide-index="7" role="group" aria-label="9 / 10" style="width: 760px;">
                            <img data-src="https://mayaresorts.com/assets/images/ubud/experiences/villa-grill/homepage-slider-thumbnail/20220425-in-villa-grill-hst-1.webp" class="swiper-lazy">
                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                        </div>
                                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-title="Mayasari" data-index="0" data-highlights="<p class='type'>All-Day Deliciousness</p><a class='title' href='/ubud/restaurant/maya-sari' >Mayasari</a><p>The morning sun heralds an extensive breakfast buffet and a la carte specialties while during dinner, the venue becomes a stage for themed cultural dinners.</p>

<p>Opening Hours :<br />
Daily, 7.00 AM&nbsp;- 11.00 AM</p>
<a class='cta-link' href='/ubud/restaurant/maya-sari'>Read more</a>">
                            <img class="swiper-lazy swiper-lazy-loaded" src="https://mayaresorts.com/assets/images/ubud/restaurant/maya-sari/homepage-slider-thumbnail/maya-sari-hst.webp">
                            
                        </div></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
            <div class="col-2 d-none d-lg-block p-0 order-lg-4">
                <div class="restaurants-swiper-button-next swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-a60010875eb94f78e"></div>
            </div>
        </div>
        <div class="row mobile-pagination-row">
            <div class="col-12 d-lg-none">
                <div class="restaurants-pagination-mobile">
                                            <a class="restaurants-pagination-mobile-bullet active" href="javascript:;" data-index="0">&nbsp;</a>
                                            <a class="restaurants-pagination-mobile-bullet " href="javascript:;" data-index="1">&nbsp;</a>
                                            <a class="restaurants-pagination-mobile-bullet " href="javascript:;" data-index="2">&nbsp;</a>
                                            <a class="restaurants-pagination-mobile-bullet " href="javascript:;" data-index="3">&nbsp;</a>
                                            <a class="restaurants-pagination-mobile-bullet " href="javascript:;" data-index="4">&nbsp;</a>
                                            <a class="restaurants-pagination-mobile-bullet " href="javascript:;" data-index="5">&nbsp;</a>
                                            <a class="restaurants-pagination-mobile-bullet " href="javascript:;" data-index="6">&nbsp;</a>
                                            <a class="restaurants-pagination-mobile-bullet " href="javascript:;" data-index="7">&nbsp;</a>
                                    </div>
            </div>
        </div>
    </div>
</section>
<?php
}
