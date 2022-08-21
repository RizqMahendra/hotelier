<?php

add_action('acf/init', 'multi_catalogues_init');
function multi_catalogues_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'multi-catalogues',
            'title' => __('Multi Catalogues'),
            'description' => __('Multi Catalogues blocks'),
            'category' => 'hotelier_media',
            'icon' => 'format-image',
            'keywords' => ['gallery'],
            'mode' => 'auto',
            'render_callback' => 'multi_catalogues_callback',
        ]);
    }
}

function multi_catalogues_callback($block)
{
    ?>
<section class="multi-catalogue-list lazyloaded">
<div class="catalogue-list-nav offer-list-nav bg-txt-dark">
        <nav>
            <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                <a class="nav-item nav-link" id="nav-stay-tab" data-toggle="tab" href="#stay" role="tab" aria-controls="stay" aria-selected="true">Accommodation</a>
                <a class="nav-item nav-link" id="nav-fb-tab" data-toggle="tab" href="#fb" role="tab" aria-controls="fb" aria-selected="false">F&amp;B</a>
                <a class="nav-item nav-link" id="nav-wellness-tab" data-toggle="tab" href="#wellness" role="tab" aria-controls="wellness" aria-selected="false">Spa &amp; Leisure</a>
            </div>
        </nav>
    </div>
<?php if (have_rows('item')):?>
<?php while (have_rows('item')): the_row('item');
    $choice = get_sub_field('choice');
    $title = get_sub_field('title');
    $desc = get_sub_field('desc');
    $url = get_sub_field('url');
    $img_desktop = get_sub_field('img_desktop');
    $img_mobile = get_sub_field('img_mobile'); ?>
<div class="tab-content" id="nav-tabContent">
    <div class="catalogue-list tab-pane" id="<?php echo $choice; ?>" role="tabpanel"aria-labelledby="<?php echo $choice; ?>">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 p-0">
                <div class="row">
                <div class="col-12 col-md-10 offset-md-1 col-lg-4 offset-lg-0 catalogue-item" id="catalogue-item-1">
                                <div class="catalogue-item-content">
                                    <a class="img-link desktop" href="<?php echo $url; ?>">
                                        <picture>
                                            <source srcset="<?php echo $img_desktop; ?>" type="image/webp">
                                            <source srcset="<?php echo $img_desktop; ?>" type="image/jpeg">
                                            <img src="<?php echo $img_desktop; ?>" loading="lazy" alt="<?php echo $title; ?>" title="<?php echo $title; ?>" width="850">
                                        </picture>
                                    </a>
                                    <a class="title desktop" href="<?php echo $url; ?>"><?php echo $title; ?></a>                                  
                                    <div class="desktop-container">
                                        <p><?php echo $desc; ?></p>
                                    </div>
                                    <?php if ($choice = 'stay'):?>
                                    <p class="desktop-cta"><a class="hlink" href="<?php echo $url; ?>">Read more</a></p>
                                    <?php endif; ?>
                                    <?php if ($choice == 'fb' || 'wellness'): ?>
                                    <p class="desktop-cta"><a class="button" href="<?php echo $url; ?>">Contact us</a></p>
                                    <?php endif; ?>
                                    <a class="img-link mobile"href="#catalogue1">
                                        <picture>
                                        <source srcset="<?php echo $img_mobile; ?>" type="image/webp">
                                            <source srcset="<?php echo $img_mobile; ?>" type="image/jpeg">
                                            <img src="<?php echo $img_mobile; ?>" loading="lazy" alt="<?php echo $title; ?>" title="<?php echo $title; ?>" width="850">
                                        </picture>
                                    </a>
                                    <a class="title mobile" href="<?php echo $url; ?>"><?php echo $title; ?></a>                                    
                                    <div class="mobile-description">
                                        <div>
                                            <p><?php echo $desc; ?></p>
                                            <?php if ($choice == 'fb' || 'wellness'): ?>
                                            <a class="button" href="<?php echo $url; ?>">Contact us</a>
                                            <?php endif; ?>
                                            <?php if ($choice = 'stay'):?>
                                            <p><a class="hlink" href="<?php echo $url; ?>">Read more</a></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>
</section>
<?php
}?>
