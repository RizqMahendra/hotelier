<?php

add_action('acf/init', 'floorplan_init');
function floorplan_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'floorplan',
            'title' => __('Floor Plan'),
            'description' => __('Floor Plan Block'),
            'category' => 'hotelier_elements',
            'icon' => 'format-image',
            'keywords' => ['floorplan', 'image'],
            'mode' => 'auto',
            'render_callback' => 'floorplan_callback',
        ]);
    }
}

function floorplan_callback($block)
{
    $title = get_field('title');
    $image = get_field('image');
    $caption = get_field('caption'); ?>
    <section class="room-floorplan room-details-section lazyloaded">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 offset-1 col-lg-8 offset-lg-2 p-0">
                    <h3><?php echo $title; ?></h3>
                </div>
                <div class="col-10 offset-1 col-lg-6 offset-lg-3 p-0">
                    <div class="tab-content" id="floorplan-tab-content">
                        <div class="tab-pane fade show active" id="floor1" role="tabpanel" aria-labelledby="floor1-tab">
                            <img class="list-img" src="<?php echo $image; ?>" loading="lazy" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                        </div>                      
                    </div>
                </div>
                <div class="col-12 p-0 floorplan-note">
                    <span><?php echo $caption; ?></span>
                </div>
                            </div>
        </div>
    </section>
<?php
}
