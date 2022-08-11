<?php

add_action('acf/init', 'home_intro_init');
function home_intro_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'home-intro',
            'title' => __('Home Intro Content'),
            'description' => __('Home Intro Content Block'),
            'category' => 'hotelier_elements',
            'icon' => 'format-image',
            'keywords' => ['Home Intro', 'image'],
            'mode' => 'auto',
            'render_callback' => 'home_intro_callback',
        ]);
    }
}

function home_intro_callback($block)
{
    $title = get_field('title');
    $desc = get_field('desc');
    $image = get_field('image'); ?>
<section class="home-intro section-padding lazyloaded">
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 offset-1 col-lg-4 offset-lg-2 p-0">
                <h1 class="section-heading"><?php echo $title; ?></h1>
                <p><?php echo $desc; ?></p>
            </div>
            <div class="col-12 col-lg-5 d-flex align-items-center">
                <picture>
                    <source srcset="<?php echo $image; ?>" type="image/webp">
                    <source srcset="<?php echo $image; ?>" type="image/png"> 
                    <img src="<?php echo $image; ?>" loading="lazy" alt="5 Stars hotel in the heart of Ubud, Bali, Indonesia" width="950" height="403">
                </picture>
            </div>
        </div>
    </div>
</section>
<?php
}
