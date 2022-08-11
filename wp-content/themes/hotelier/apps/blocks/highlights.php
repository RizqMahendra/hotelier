<?php

add_action('acf/init', 'highlights_init');
function highlights_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'highlights',
            'title' => __('Highlights'),
            'description' => __('highlights Block'),
            'category' => 'hotelier_elements',
            'icon' => 'format-image',
            'keywords' => ['highlights'],
            'mode' => 'auto',
            'render_callback' => 'highlights_callback',
        ]);
    }
}

function highlights_callback($block)
{
    $desc = get_field('desc');
    $detail = get_field('detail'); ?>
    <section class="details-highlights bg-txt-light lazyloaded">
    <div class="container-fluid">
        <div class="row details-highlights-row">
            <div class="col-10 offset-1 col-lg-4 offset-lg-2 p-0 details-highlights-col">
            <?php if (have_rows('detail')):?>
                <ul class="icons">
                <?php while (have_rows('detail')) : the_row(); ?>
                    <li class="size"><span><?php echo the_sub_field('size'); ?></span></li>
                    <li class="bed"><span><?php echo the_sub_field('bed'); ?></span></li>
                    <li class="occupancy"><span><?php echo the_sub_field('occupancy'); ?></span></li>
                    <li class="connecting"><span><?php echo the_sub_field('connecting'); ?></span></li>
                    <li class="balcony"><span><?php echo the_sub_field('balcony'); ?></span></li>      
                <?php endwhile; ?>            
                </ul>
            <?php endif; ?>
            </div>
            <div class="col-10 offset-1 col-lg-4 offset-lg-0 p-0 details-description-col">
                <p><?php echo $desc; ?></p>
            </div>
        </div>
    </div>
</section>
<?php
}
