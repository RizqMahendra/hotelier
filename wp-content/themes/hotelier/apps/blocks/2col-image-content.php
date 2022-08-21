<?php

add_action('acf/init', 'col_image_content_init');
function col_image_content_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'col-image-content',
            'title' => __('2 Cols image Content'),
            'description' => __('2 Cols image Content Block'),
            'category' => 'hotelier_elements',
            'icon' => 'format-image',
            'keywords' => ['2 Cols image Content', 'image'],
            'mode' => 'auto',
            'render_callback' => 'col_image_content_callback',
        ]);
    }
}

function col_image_content_callback($block)
{
    $option = get_field('option'); ?>
<section class="home-events lazyloaded">
    <div class="container-fluid">
        <div class="row">
        <?php if (have_rows('row_one')):?>
        <?php while (have_rows('row_one')): the_row();
    $title = get_sub_field('title');
    $desc = get_sub_field('desc');
    $url = get_sub_field('url'); ?>
            <div class="col-12 col-md-6 p-0 order-2 order-md-1 bg-txt-dark lazyloaded">
                <div class="events-content-wrapper">
                    <div class="events-content wedding">
                        <h3 class="section-heading"><?php echo $title; ?></h3>
                        <p><?php echo $desc; ?></p>
                        <a class="button cta" href="<?php echo $url; ?>">Explore</a>                    
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 order-1 order-md-2 events-bg wedding lazyloaded">
                <a href="<?php echo $url; ?>" style="width:100%;height:100%;display:block;">Ubud, The Town of Love</a>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
        <?php
        if ($option == 'next-row'):?>
        <div class="row">
        <?php if (have_rows('row_two')):?>
        <?php while (have_rows('row_two')): the_row();
    $title = get_sub_field('title');
    $desc = get_sub_field('desc');
    $url = get_sub_field('url'); ?>
            <div class="col-12 col-md-6 p-0 order-2 order-md-2 bg-txt-dark lazyloaded">
                <div class="events-content-wrapper">
                    <div class="events-content meeting">
                        <h3 class="section-heading"><?php echo $title; ?></h3>
                        <p><?php echo $desc; ?></p>
                        <a class="button cta" href="<?php echo $url; ?>">Explore</a>                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 order-1 order-md-1 events-bg meeting lazyloaded">
                <a href="<?php echo $url; ?>" title="Explore Meetings &amp; Events at Maya" style="width:100%;height:100%;display:block;">Donna, New Clubbing Experience in Ubud</a> 
            </div>
<?php endwhile; ?>
<?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php
}?>
