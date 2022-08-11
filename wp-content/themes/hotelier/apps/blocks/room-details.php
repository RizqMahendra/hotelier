<?php

add_action('acf/init', 'room_details_init');
function room_details_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'room-details',
            'title' => __('Room details'),
            'description' => __('Room details Block'),
            'category' => 'hotelier_elements',
            'icon' => 'format-image',
            'keywords' => ['Room_details', 'image'],
            'mode' => 'auto',
            'render_callback' => 'room_details_callback',
        ]);
    }
}

function room_details_callback($block)
{
    $title = get_field('title');
    $list = get_field('list');
    $option = get_field('column_option'); ?>
<?php if ($option == '1col'):?>
    <section class="room-overview room-details-section lazyloaded">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 offset-1 col-lg-8 offset-lg-2 p-0">
                    <h3><?php echo $title; ?></h3>
                    <?php if (have_rows('list')):?>
                    <ul class="one-list">
                    <?php while (have_rows('list')) : the_row(); ?>
                    <?php $list_desc = get_sub_field('list_desc'); ?>
                        <li><?php echo $list_desc; ?></li>
                    <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php elseif ($option == '2col'):
    $title_right = get_field('title_right');
    $list_right = get_field('list_right'); ?>
<section class="room-overview room-details-section lazyloaded">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 offset-1 col-lg-4 offset-lg-2 p-0">
                <h3><?php echo $title; ?></h3>
                    <?php if (have_rows('list')):?> 
                    <ul class="two-lists-left">
                    <?php while (have_rows('list')) : the_row(); ?>
                    <?php $list_desc = get_sub_field('list_desc'); ?>
                        <li><?php echo $list_desc; ?></li>
                    <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>

                    </div>
                        <div class="col-10 offset-1 col-lg-4 offset-lg-0 p-0">
                        <h3><?php echo $title_right; ?></h3>
                        <?php if (have_rows('list_right')):?>  
                        <ul class="two-lists-right">
                        <?php while (have_rows('list_right')) : the_row(); ?>
                        <?php $list_right_desc = get_sub_field('list_right_desc'); ?>
                            <li><?php echo $list_right_desc; ?></li>
                        <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                            </div>
        </div>
    </section>
<?php endif; ?>
<?php
}
