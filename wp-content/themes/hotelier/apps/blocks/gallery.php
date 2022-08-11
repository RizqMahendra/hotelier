<?php

add_action('acf/init', 'gallery_init');
function gallery_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'gallery',
            'title' => __('Gallery'),
            'description' => __('Gallery Block'),
            'category' => 'hotelier_media',
            'icon' => 'format-image',
            'keywords' => ['gallery'],
            'mode' => 'auto',
            'render_callback' => 'gallery_callback',
        ]);
    }
}

function gallery_callback($block)
{
    $title = get_field('title');
    $images = get_field('gallery'); ?>
    <section class="details-gallery room-details-section lazyloaded" id="details-gallery-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 offset-1 col-lg-8 offset-lg-2 p-0">
                        <h3><?php echo $title; ?></h3>
                    </div>
                </div>
                <div class="row desktop-gallery">
                    <div class="col-8 offset-2 p-0">
                        <div id="details-gallery" class="desktop-gallery-wrapper six-items" itemscope="" itemtype="http://schema.org/ImageGallery">
                        <?php if (isset($images)):?>
                        <?php foreach ($images as $image): ?>
                        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a class="details-gallery-item" href="<?php echo esc_url($image['url']); ?>" data-caption="<?php echo $image['caption']; ?>" data-size="<?php echo $image['width'].'x'.$image['height']; ?>" itemprop="contentUrl">
                                <picture>
                                <source srcset="<?php echo esc_url($image['sizes']['medium']); ?>" type="image/webp">
                                <source srcset="<?php echo esc_url($image['sizes']['medium']); ?>" type="image/jpeg">
                                <img class="list-img" src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </picture>
                             </a>
                        </figure>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
<?php
}
