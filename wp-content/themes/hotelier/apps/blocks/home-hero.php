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
    $title = get_field('main_title');
    $link = get_field('link');
    $tagline = get_field('tagline');
    $logo = get_field('logo', 'options'); ?>

<section class="home-property-hero ubud parallax-bg" style="background-position: bottom center;">
    <div class="container-fluid">
        <div class="row">
            <div class="d-none d-lg-block col-lg-1 ribbon-container">
                <div class="left-hero-ribbon">
                    <a class="top-logo" href="<?php echo esc_url($link); ?>">Pertiwi Resorts &amp; Spa</a>
                    <div class="help-container">
                        <a id="home-helper-hotel-info" href="javascript:;" class="help" data-toggle="modal" data-target="#hotelInfo"><img src="https://mayaresorts.com/assets/icons/icon-info-grey.svg" width="33" height="33" title="Hotel information" alt="Info"></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-10 property-hero-center">
                <div class="mobile-home-logo">
                    <a href="<?php echo esc_url($link); ?>">Pertiwi Resort &amp; Spa</a>
                </div>
                <div class="mobile-nav-caret">
                    <button id="mobile-top-perspective-menu-toggle" class="navbar-toggler navbar-toggler-left main-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                    </button>
                </div>
                <div class="introduction">
                    <img src="<?php echo $logo['url']; ?>" class="main-align upper-logo" title="Pertiwi Resorts Bali" alt="Pertiwi Resorts Bali">
                    <h1 class="side-align"><?php echo $title; ?></h1>
                    <p class="main-align"><?php echo $tagline; ?></p>
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-1 ribbon-container">
                <div class="right-hero-ribbon">
                    
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}?>
