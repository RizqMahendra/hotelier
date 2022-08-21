<?php

function hotelier_script_style()
{
    wp_register_style('style', get_template_directory_uri().'/css/style.css');
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_register_style('stylesheet', get_template_directory_uri().'/fonts/font-awesome/css/font-awesome.css');
    
    wp_enqueue_style('style');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'hotelier_script_style');

function hotelier_register_scripts()
{
    wp_enqueue_script('library', get_template_directory_uri().'/js/00libraryallpages.min.js', true);
    wp_enqueue_script('property', get_template_directory_uri().'/js/040101propertyhomepage.min.js', true);
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', true);
    wp_enqueue_script('loader', get_template_directory_uri().'/js/loader.js', true);
    wp_enqueue_script('style', get_template_directory_uri().'/js/style.js', true);
    wp_enqueue_script('swiper', get_template_directory_uri().'/js/swiper.js', true);
}
add_action('wp_footer', 'hotelier_register_scripts');

add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('category-thumbnails');
add_theme_support('post-thumbnails');

register_nav_menus(
    [
        'top-menu' => 'Top Menu',
    ]
);

add_theme_support('custom-logo', [
    'height' => 36,
    'width' => 141,
    'flex-height' => true,
    'flex-width' => true,
    'header-text' => ['site-title', 'site-description'],
    'unlink-homepage-logo' => true,
]);

function register_navwalker()
{
    require_once get_template_directory().'/inc/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');
if (!file_exists(get_template_directory().'/inc/class-wp-bootstrap-navwalker.php')) {
    // File does not exist... return an error.
    return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
} else {
    // File exists... require it.
    require_once get_template_directory().'/inc/class-wp-bootstrap-navwalker.php';
}

function create_posttype()
{
    register_post_type('Accomodation',
    // CPT Options
    [
      'labels' => [
       'name' => __('accomodation'),
       'singular_name' => __('Accomodation'),
      ],
      'public' => true,
      'has_archive' => false,
      'rewrite' => ['slug' => 'accomodation'],
      'show_in_rest' => true,
            'supports' => ['editor', 'title']
     ]
    );
}
    // Hooking up our function to theme setup
    add_action('init', 'create_posttype');
    /* Custom Post Type End */

    add_filter('acf/settings/load_json', 'my_acf_json_load_point');

    function my_acf_json_load_point($paths)
    {
        // remove original path (optional)
        unset($paths[0]);

        // append path
        $paths[] = get_stylesheet_directory().'/apps/acf';

        // return
        return $paths;
    }
    define('THEME_URI', get_stylesheet_directory());
    define('THEME_APP_URI', THEME_URI.'/apps');
    define('THEME_BLOCKS_URI', THEME_APP_URI.'/blocks');

    require_once THEME_APP_URI.'/blocks.php';

    function the_breadcrumb()
    {
        $sep = ' > ';

        if (!is_front_page()) {
            // Start the breadcrumb with a link to your homepage
            echo '<div class="breadcrumbs">';
            echo '<a href="';
            echo get_option('home');
            echo '">';
            bloginfo('name');
            echo '</a>'.$sep;

            // Check if the current page is a category, an archive or a single page. If so show the category or archive name.
            if (is_category() || is_single()) {
                the_category('title_li=');
            } elseif (is_archive() || is_single()) {
                if (is_day()) {
                    printf(__('%s', 'text_domain'), get_the_date());
                } elseif (is_month()) {
                    printf(__('%s', 'text_domain'), get_the_date(_x('F Y', 'monthly archives date format', 'text_domain')));
                } elseif (is_year()) {
                    printf(__('%s', 'text_domain'), get_the_date(_x('Y', 'yearly archives date format', 'text_domain')));
                } else {
                    _e('Blog Archives', 'text_domain');
                }
            }

            // If the current page is a single post, show its title with the separator
            if (is_single()) {
                echo $sep;
                the_title();
            }

            // If the current page is a static page, show its title.
            if (is_page()) {
                echo the_title();
            }

            // if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
            if (is_home()) {
                global $post;
                $page_for_posts_id = get_option('page_for_posts');
                if ($page_for_posts_id) {
                    $post = get_post($page_for_posts_id);
                    setup_postdata($post);
                    the_title();
                    rewind_posts();
                }
            }

            echo '</div>';
        }
    }
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}
