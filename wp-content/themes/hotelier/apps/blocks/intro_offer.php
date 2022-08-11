<?php

add_action('acf/init', 'intro_offer_init');
function intro_offer_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'intro-offer',
            'title' => __('intro offer'),
            'description' => __('intro offer Block'),
            'category' => 'hotelier_elements',
            'icon' => 'format-image',
            'keywords' => ['Intro', 'offer', 'image'],
            'mode' => 'auto',
            'render_callback' => 'intro_offer_callback',
        ]);
    }
}

function intro_offer_callback($block)
{
    $background = get_field('background');
    $title = get_field('title');
    $subtitle = get_field('subtitle'); ?>

<section class="page-intro">
    <div class="container-fluid">
        <div class="row page-intro-bg-row">
            <div class="col-12 p-0 page-intro-bg-col">
                <div class="bg-container parallax-bg" style="background-image: url('<?php echo $background; ?>'); background-position: center 0px;"></div>
            </div>
        </div>
        <div class="row page-breadcrumb-row">
            <div class="  col-10 offset-1 col-lg-8 offset-lg-2 p-0 page-breadcrumb-col">
                <?php the_breadcrumb(); ?>
            </div>
        </div>
        <div class="row page-heading-row">
            <div class="col-10 offset-1 col-lg-4 offset-lg-2 p-0 page-heading-col">
                <h2><?php echo $title; ?></h2>
                <h1><?php echo $subtitle; ?></h1>
            </div>
             <?php if (have_rows('link')): ?>
                <?php while (have_rows('link')): the_row(); ?>

            <div class="col-10 offset-1 col-lg-4 offset-lg-0 page-contacts-col">
                <div class="row">    
                <div class="col-12 d-none col-md-6 d-md-block col-lg-8 p-0 links-col">
                    <a class="email" href="mailto:<?php the_sub_field('email_address'); ?>"><?php echo the_sub_field('email'); ?></a>
                    <br>
                    <a class="phone" href="<?php the_sub_field('phone_url'); ?>"><?php echo the_sub_field('phone_label'); ?></a>
                    <br>
                    <a class="whatsapp" href="<?php the_sub_field('whatsapp_url'); ?>"><?php echo the_sub_field('whatsapp_label'); ?></a>
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
