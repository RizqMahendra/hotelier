<?php

add_action('acf/init', 'home_overview_init');
function home_overview_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'home-overview',
            'title' => __('Home Overview'),
            'description' => __('Home Overview Block'),
            'category' => 'hotelier_media',
            'icon' => 'format-image',
            'keywords' => ['gallery'],
            'mode' => 'auto',
            'render_callback' => 'home_overview_callback',
        ]);
    }
}

function home_overview_callback($block)
{
    $overview = get_field('overview'); ?>
    <section class="home-overview section-padding lazyloaded">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 overview-container-col">
                <div class="d-flex justify-content-between flex-wrap">
                <?php if (have_rows('suites_overview')):?>
                    <?php while (have_rows('suites_overview')): the_row();
    $title = get_sub_field('title');
    $image = get_sub_field('image');
    $url = get_sub_field('url'); ?>
                    <div class="navigation-card">
                      <a href="<?php echo $url; ?>" class="accommodation" title="<?php echo $title; ?>">
                        <picture>
                          <source srcset="<?php echo $image; ?>" type="image/webp">
                          <source srcset="<?php echo $image; ?>" type="image/jpeg"> 
                          <img src="<?php echo $image; ?>" loading="lazy" alt="<?php echo $title; ?>" width="203" height="234">
                        </picture>
                        <span><?php echo $title; ?></span>
                      </a>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (have_rows('restaurants_overview')):?>
                    <?php while (have_rows('restaurants_overview')): the_row();
    $title = get_sub_field('title');
    $image = get_sub_field('image');
    $url = get_sub_field('url'); ?>
                    <div class="navigation-card">
                      <a href="<?php echo $url; ?>" class="restaurants" title="<?php echo $title; ?>">
                        <picture>
                        <source srcset="<?php echo $image; ?>" type="image/webp">
                          <source srcset="<?php echo $image; ?>" type="image/jpeg"> 
                          <img src="<?php echo $image; ?>" loading="lazy" alt="<?php echo $title; ?>" width="203" height="234">
                        </picture>
                        <span><?php echo $title; ?></span>
                      </a>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (have_rows('spa_overview')):?>
                    <?php while (have_rows('spa_overview')): the_row();
    $title = get_sub_field('title');
    $image = get_sub_field('image');
    $url = get_sub_field('url'); ?>
                    <div class="navigation-card">
                    <a href="<?php echo $url; ?>"  class="spa" title="<?php echo $title; ?>">
                      <picture>
                        <source srcset="<?php echo $image; ?>" type="image/webp">
                          <source srcset="<?php echo $image; ?>" type="image/jpeg"> 
                          <img src="<?php echo $image; ?>" loading="lazy" alt="<?php echo $title; ?>" width="203" height="234">
                        </picture>
                        <span><?php echo $title; ?></span>
                      </a>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (have_rows('offer_overview')):?>
                    <?php while (have_rows('offer_overview')): the_row();
    $title = get_sub_field('title');
    $image = get_sub_field('image');
    $url = get_sub_field('url'); ?>
                    <div class="navigation-card">
                      <a href="<?php echo $url; ?>" class="offers" title="<?php echo $title; ?>">
                      <picture>
                      <picture>
                        <source srcset="<?php echo $image; ?>" type="image/webp">
                          <source srcset="<?php echo $image; ?>" type="image/jpeg"> 
                          <img src="<?php echo $image; ?>" loading="lazy" alt="<?php echo $title; ?>" width="203" height="234">
                        </picture>
                        <span><?php echo $title; ?></span>
                      </a>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (have_rows('wedding_overview')):?>
                    <?php while (have_rows('wedding_overview')): the_row();
    $title = get_sub_field('title');
    $image = get_sub_field('image');
    $url = get_sub_field('url'); ?>
                    <div class="navigation-card">
                      <a href="<?php echo $url; ?>" class="wedding" title="<?php echo $title; ?>">
                      <picture>
                        <source srcset="<?php echo $image; ?>" type="image/webp">
                          <source srcset="<?php echo $image; ?>" type="image/jpeg"> 
                          <img src="<?php echo $image; ?>" loading="lazy" alt="<?php echo $title; ?>" width="203" height="234">
                        </picture>
                        <span><?php echo $title; ?></span>
                      </a>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (have_rows('experience_overview')):?>
                    <?php while (have_rows('experience_overview')): the_row();
    $title = get_sub_field('title');
    $image = get_sub_field('image');
    $url = get_sub_field('url'); ?>
                    <div class="navigation-card">
                    <a href="<?php echo $url; ?>" class="experiences" title="<?php echo $title; ?>">
                    <picture>
                        <source srcset="<?php echo $image; ?>" type="image/webp">
                          <source srcset="<?php echo $image; ?>" type="image/jpeg"> 
                          <img src="<?php echo $image; ?>" loading="lazy" alt="<?php echo $title; ?>" width="203" height="234">
                        </picture>
                        <span><?php echo $title; ?></span>
                      </a>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (have_rows('meeting_overview')):?>
                    <?php while (have_rows('meeting_overview')): the_row();
    $title = get_sub_field('title');
    $image = get_sub_field('image');
    $url = get_sub_field('url'); ?>
                    <div class="navigation-card">
                      <a href="<?php echo $url; ?>" class="meetings" title="<?php echo $title; ?>">
                      <picture>
                        <source srcset="<?php echo $image; ?>" type="image/webp">
                          <source srcset="<?php echo $image; ?>" type="image/jpeg"> 
                          <img src="<?php echo $image; ?>" loading="lazy" alt="<?php echo $title; ?>" width="203" height="234">
                        </picture>
                        <span><?php echo $title; ?></span>
                      </a>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (have_rows('facility_overview')):?>
                    <?php while (have_rows('facility_overview')): the_row();
    $title = get_sub_field('title');
    $image = get_sub_field('image');
    $url = get_sub_field('url'); ?>
                    <div class="navigation-card">
                      <a href="/ubud/facility" class="facilities" title="<?php echo $title; ?>">
                      <picture>
                        <source srcset="<?php echo $image; ?>" type="image/webp">
                          <source srcset="<?php echo $image; ?>" type="image/jpeg"> 
                          <img src="<?php echo $image; ?>" loading="lazy" alt="<?php echo $title; ?>" width="203" height="234">
                        </picture>
                        <span><?php echo $title; ?></span>
                      </a>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}?>
