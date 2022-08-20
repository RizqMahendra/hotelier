<?php

add_action('acf/init', 'accomodation_list_init');
function accomodation_list_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'accomodation-list',
            'title' => __('Accomodation list'),
            'description' => __('Page Accomodation list Block'),
            'category' => 'hotelier_elements',
            'icon' => 'format-image',
            'keywords' => ['Intro', 'image'],
            'mode' => 'auto',
            'render_callback' => 'accomodation_list_callback',
        ]);
    }
}

function accomodation_list_callback($block)
{
    $title = get_field('title'); ?>

<section class="accommodation-list lazyloaded">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0 accommodation-type-heading">
                <h2><?php echo $title; ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 accommodation-wrapper-col">
                <div class="row">
                <?php
    if (have_rows('list')): ?>
                    <?php while (have_rows('list')):the_row('list');
    $link = get_sub_field('link');
    $title = get_sub_field('title');
    $img = get_sub_field('img');
    $img_mobile = get_sub_field('img_mobile');
    $desc = get_sub_field('desc');
    $price_detail = get_sub_field('price_detail');
    $rates = get_sub_field('rates'); ?>
                    <div class="col-12 col-lg-6 accommodation-item">
                       <div class="content-wrapper">
                       <a class="list-img-link desktop" href="<?php echo $link; ?>">
                            <picture>
                                <source srcset="<?php echo $img; ?>" type="image/webp">
                                <source srcset="<?php echo $img; ?>" type="image/jpeg">
                                <img class="list-img" src="<?php echo $img; ?>" loading="lazy" alt="<?php echo $title; ?>" width="850" title="<?php echo $title; ?>">
                            </picture>
                        </a>
                        <a class="list-img-link mobile">
                            <picture>
                                <source srcset="<?php echo $img; ?>" type="image/webp">
                                <source srcset="<?php echo $img; ?>" type="image/jpeg">
                                <img class="list-img" src="<?php echo $img; ?>" loading="lazy" alt="<?php echo $title; ?>" width="850" title="<?php echo $title; ?>">
                            </picture>
                        </a>
                        <div class="desktop-description">
                            <a class="desktop-title" href="<?php echo $link; ?>"><?php echo $title; ?></a>                                            
                            <p><?php echo $desc; ?>.</p>
                                    <?php
    if (have_rows('list_detail')):?>
                                    <?php while (have_rows('list_detail')): the_row();
    $size = get_sub_field('size');
    $bed = get_sub_field('bed');
    $occupancy = get_sub_field('occupancy');
    $balcony = get_sub_field('balcony');
    $connecting = get_sub_field('connecting'); ?>
                            <ul>
                                <li class="size"><span><?php echo $size; ?></span></li>
                                <li class="bed"><span><?php echo $bed; ?></span></li>
                                <li class="occupancy"><span><?php echo $occupancy; ?></span></li>
                                <li class="connecting"><span><?php echo $connecting; ?></span></li>
                                <li class="balcony"><span><?php echo $balcony; ?></span></li>                                            
                            </ul>
                        <?php
                        endwhile;
    endif; ?>
                        </div>
                        <div class="desktop-foot-container">
                            <p class="price"><?php echo $price_detail; ?></p>
                                <div class="cta-container">
                                    <a class="hlink" href="<?php echo $link; ?>">Read more</a>                                                
                                    <a class="button" href="<?php echo $rates; ?>">Check rates</a>                                            
                                </div>
                        </div>
                        <div class="mobile-description">
                        <a class="list-img-link desktop" href="<?php echo $link; ?>"><?php echo $title; ?></a>
                                <div>
                                <p><?php echo $desc; ?>.</p>
                                    <?php
    if (have_rows('list_detail')):?>
                                    <?php while (have_rows('list_detail')): the_row();
    $size = get_sub_field('size');
    $bed = get_sub_field('bed');
    $occupancy = get_sub_field('occupancy');
    $balcony = get_sub_field('balcony');
    $connecting = get_sub_field('connecting'); ?>
                            <ul>
                                <li class="size"><span><?php echo $size; ?></span></li>
                                <li class="bed"><span><?php echo $bed; ?></span></li>
                                <li class="occupancy"><span><?php echo $occupancy; ?></span></li>
                                <li class="connecting"><span><?php echo $connecting; ?></span></li>
                                <li class="balcony"><span><?php echo $balcony; ?></span></li>                                            
                            </ul>
                        <?php
                        endwhile;
    endif; ?>
                                     <p class="price"><?php echo $price_detail; ?></p>       
                                    <div class="cta-container">
                                        <a class="hlink" href="<?php echo $link; ?>">Read more</a>                                                   
                                        <a class="button" href="<?php echo $rates; ?>">Check rates</a>                                                
                                </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
} ?>