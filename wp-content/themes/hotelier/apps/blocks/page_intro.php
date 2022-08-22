<?php

add_action('acf/init', 'page_intro_init');
function page_intro_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'page-intro',
            'title' => __('Page Intro'),
            'description' => __('Page Intro Block'),
            'category' => 'hotelier_elements',
            'icon' => 'format-image',
            'keywords' => ['Intro', 'image'],
            'mode' => 'auto',
            'render_callback' => 'page_intro_callback',
        ]);
    }
}

function page_intro_callback($block)
{
    $background = get_field('background');
    $title = get_field('title');
    $subtitle = get_field('subtitle'); ?>

<section class="page-intro">
    <div class="container-fluid">
        <div class="row page-intro-bg-row">
            <div class="col-12 p-0 page-intro-bg-col">
                <div class="bg-container parallax-bg" style="background-image: url('<?php echo $background; ?>'); background-position: center center;"></div>
            </div>
        </div>
        <div class="row page-heading-row">
            <div class="col-8 offset-1 offset-lg-2 p-0 mb-2 page-heading-col">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id=”breadcrumbs”>','</p>' );
                }
            ?>
            </div>
            <div class="col-10 offset-1 col-lg-4 offset-lg-2 p-0 page-heading-col">
                <h2><?php echo $title; ?></h2>
                <h1><?php echo $subtitle; ?></h1>
            </div>
             <?php if (have_rows('link')): ?>
                <?php while (have_rows('link')): the_row(); ?>

            <div class="col-10 offset-1 col-lg-4 offset-lg-0 page-contacts-col">
                <div class="row">    
                <div class="col-12 d-none col-md-6 d-md-block col-lg-8 p-0 links-col">
                    <?php if(get_sub_field('not_rooms') == true):?>
                        <a class="email" href="<?php the_sub_field('email_address'); ?>"><?php echo the_sub_field('email'); ?></a>
                    <?php else:?>
                        <a class="email" href="mailto:<?php the_sub_field('email_address'); ?>"><?php echo the_sub_field('email'); ?></a>
                    <?php endif;?>
                    
                    <br>
                    <a class="phone" href="<?php the_sub_field('phone_url'); ?>"><?php echo the_sub_field('phone_label'); ?></a>
                    <br>
                    <a class="whatsapp" href="<?php the_sub_field('whatsapp_url'); ?>"><?php echo the_sub_field('whatsapp_label'); ?></a>
                </div>                    
                <div class="col-12 col-md-6 col-lg-4 buttons-col">
                        <a class="button" href="<?php the_sub_field('check_rates_url'); ?>"><?php echo (get_sub_field('not_rooms') == true) ? 'Services' : 'Check rates';?></a>                        
                        <a class="button" href="<?php the_sub_field('photos_url'); ?>">Photos</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
                <?php endif; ?>
        </div>
    </div>
</section>
    
<?php
}
