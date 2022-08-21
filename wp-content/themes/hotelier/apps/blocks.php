<?php

require_once THEME_APP_URI.'/ACF_Block_Icon.php';
require_once THEME_BLOCKS_URI.'/explore-slider.php';
require_once THEME_BLOCKS_URI.'/floorplan.php';
require_once THEME_BLOCKS_URI.'/highlights.php';
require_once THEME_BLOCKS_URI.'/page_intro.php';
require_once THEME_BLOCKS_URI.'/room-details.php';
require_once THEME_BLOCKS_URI.'/gallery.php';
require_once THEME_BLOCKS_URI.'/intro_offer.php';
require_once THEME_BLOCKS_URI.'/multi-catalogues.php';
require_once THEME_BLOCKS_URI.'/2col-image-content.php';
require_once THEME_BLOCKS_URI.'/home-hero.php';
require_once THEME_BLOCKS_URI.'/home-intro.php';
require_once THEME_BLOCKS_URI.'/home-overview.php';
require_once THEME_BLOCKS_URI.'/wellness_spa.php';
require_once THEME_BLOCKS_URI.'/offer_packages.php';
require_once THEME_BLOCKS_URI.'/quick_book.php';
require_once THEME_BLOCKS_URI.'/home-review.php';
require_once THEME_BLOCKS_URI.'/social-blocks.php';
require_once THEME_BLOCKS_URI.'/home-accomodation.php';
require_once THEME_BLOCKS_URI.'/restaurant-accomodation.php';
require_once THEME_BLOCKS_URI.'/accomodation_intro.php';
require_once THEME_BLOCKS_URI.'/accomodation_list.php';

add_filter('block_categories_all', function ($categories, $post) {
    return array_merge(
        $categories,
        [
            [
                'slug' => 'hotelier_carousels',
                'title' => 'Carousels',
            ],
            [
                'slug' => 'hotelier_elements',
                'title' => 'Elements',
            ],
            [
                'slug' => 'hotelier_form',
                'title' => 'Form',
            ],
            [
                'slug' => 'hotelier_media',
                'title' => 'Media',
            ],
            [
                'slug' => 'hotelier_posts',
                'title' => 'Posts',
            ],
        ]
    );
}, 10, 2);

add_filter('allowed_block_types_all', 'hotelier_allowed_blocks', 10, 2);

function hotelier_allowed_blocks($allowed_blocks, $post)
{
    return [
        'acf/explore-slider',
        'acf/floorplan',
        'acf/highlights',
        'acf/page-intro',
        'acf/room-details',
        'acf/gallery',
        'acf/intro-offer',
        'acf/multi-catalogues',
        'acf/col-image-content',
        'acf/home-hero',
        'acf/home-intro',
        'acf/home-overview',
        'acf/wellness-spa',
        'acf/offer-packages',
        'acf/quickbook',
        'acf/home-review',
        'acf/social-blocks',
        'acf/home-accomodation',
        'acf/restaurant-accomodation',
        'acf/accomodation-intro',
        'acf/accomodation-list',
    ];
}

add_action('enqueue_block_editor_assets', function () {
    wp_enqueue_script('acf-block-icon-js', THEME_JS_URL.'/acf-block-icon.js', ['jquery'], true);
});

add_action('acf/enqueue_scripts', function () {
    if (!isset($blocks)) {
        return;
    }

    foreach ($blocks as $block) {
        acf_remove_block_type($block['name']);
        $block['name'] = substr($block['name'], 4);
        if (is_string($block['icon'])) {
            $block['icon'] = (new ACF_Block_Icon($block['icon']))->get_json();
        } elseif (is_array($block['icon']) && is_string($block['icon']['src'])) {
            $block['icon']['src'] = (new ACF_Block_Icon($block['icon']['src']))->get_json();
        }
    }

    return;
}, 1, 0);

function my_acf_post_id()
{
    if (is_admin() && function_exists('acf_maybe_get_POST')) :
        return intval(acf_maybe_get_POST('post_id')); else :
        global $post;

    return $post->ID;
    endif;
}
