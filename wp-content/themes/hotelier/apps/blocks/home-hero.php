<?php

add_action('acf/init', 'home_hero_init');
function home_hero_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'home-hero',
            'title' => __('Home Hero'),
            'description' => __('Home Hero'),
            'category' => 'hotelier_elements',
            'icon' => 'format-image',
            'keywords' => ['2 Cols image Content', 'image'],
            'mode' => 'auto',
            'render_callback' => 'home_hero_callback',
        ]);
    }
}

function home_hero_callback($block)
{
    $title = get_field('title');
    $link = get_field('link'); ?>
<section class="home-property-hero ubud parallax-bg" style="background-position: center 0px;">
    <div class="important-information-bg"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="d-none d-lg-block col-lg-1 ribbon-container">
                <div class="left-hero-ribbon">
                    <a class="top-logo" href="/ubud/site">Maya Ubud Resort &amp; Spa</a>                    <div class="help-container">
                        <a id="home-helper-hotel-info" href="javascript:;" class="help" data-toggle="modal" data-target="#hotelInfo"><img src="https://mayaresorts.com/assets/icons/icon-info-grey.svg" width="33" height="33" title="Hotel information" alt="Info"></a>
                        <a id="home-helper-gallery" href="javascript:;" class="help popup-home-gallery"><img src="https://mayaresorts.com/assets/icons/icon-gallery-grey.svg" width="33" height="33" title="View Gallery" alt="Gallery"></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-10 property-hero-center">
                <a class="important-information" href="/ubud/page/covid-19">Covid-19 Travel Updates</a>                <div class="mobile-home-logo">
                    <a href="/ubud/site">Maya Ubud Resort &amp; Spa</a>                </div>
                <div class="mobile-nav-caret">
                    <button id="mobile-top-perspective-menu-toggle" class="navbar-toggler navbar-toggler-left main-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                    </button>
                </div>
                <div class="introduction">
                    <img src="https://mayaresorts.com/assets/icons/Maya_Resorts_Header_Logo_Icon_White.svg" width="68" height="27" class="main-align upper-logo" title="Maya Resorts Bali" alt="Maya Resorts Bali">
                    <h1 class="side-align">Believe in <span>Magic of Maya</span></h1>
                    <p class="main-align">Tap into the healing energy that flows <br>from Bali's spiritual and cultural heart.</p>
                    <img src="https://mayaresorts.com/assets/icons/Maya_Ubud_Text_White.svg" width="106" height="48" class="main-align lower-logo" title="Discover Maya Ubud, Hotel in Bali, Indonesia" alt="Discover Maya Ubud, Hotel in Bali, Indonesia">
                    <div class="discover-wrapper">
                        <button class="discover-btn main-align">Discover</button>
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-1 ribbon-container">
                <div class="right-hero-ribbon">
                    <div class="top-toggler-wrapper">
                        <button id="top-perspective-menu-toggle" class="navbar-toggler navbar-toggler-left top-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <!--<span class="navbar-toggler-icon"></span>-->
                            <span class="toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}?>
