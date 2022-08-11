<?php

add_action('acf/init', 'wellness_spa_init');
function wellness_spa_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'wellness-spa',
            'title' => __('Wellness and Spa'),
            'description' => __('Wellness and Spa Block'),
            'category' => 'hotelier_elements',
            'icon' => 'format-image',
            'keywords' => ['Wellness and Spa'],
            'mode' => 'auto',
            'render_callback' => 'wellness_spa_callback',
        ]);
    }
}

function wellness_spa_callback($block)
{
    $title = get_field('title'); ?>
    <section class="home-wellness section-padding lazyloaded">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h3 class="section-heading"><?php echo $title; ?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-1 p-0">
                <div class="d-flex justify-content-between flex-wrap">
                <?php if (have_rows('welness')):?>
                <?php while (have_rows('welness')): the_row();
    $subtitle_spa = get_sub_field('subtitle_spa');
    $link_spa = get_sub_field('subtitle_spa');
    $image_spa = get_sub_field('subtitle_spa'); ?>
                    <div class="navigation-card spa lazyloaded">
                        <a href="<?php echo $link_spa; ?>">                          
                            <div class="subtitle"><h5><?php echo $subtitle_spa; ?></h5></div>
                        </a>
                    </div>
                    <?php endwhile; ?>
                     <?php endif; ?>
                     <?php if (have_rows('fitness')):?>
                    <?php while (have_rows('fitness')): the_row();
    $subtitle_fitness = get_sub_field('subtitle_fitness');
    $image_fitness = get_sub_field('image_fitness');
    $link_fitness = get_sub_field('link_fitness'); ?>
                    <div class="navigation-card lazybg lazyloaded" data-src="<?php echo $image_fitness; ?>" style="background-image: url(<?php echo $image_fitness; ?>);">
                        <a href="<?php echo $link_fitness; ?>">                          
                            <div class="subtitle"><h5><?php echo $subtitle_fitness; ?></h5></div>
                        </a>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (have_rows('yoga')):?>
                    <?php while (have_rows('yoga')): the_row();
    $subtitle_yoga = get_sub_field('subtitle_yoga');
    $image_yoga = get_sub_field('image_yoga');
    $link_yoga = get_sub_field('link_yoga'); ?>
                    <div class="navigation-card lazybg lazyloaded" data-src="<?php echo $image_yoga; ?>" style="background-image: url(<?php echo $image_yoga; ?>);">
                        <a href="<?php echo $link_yoga; ?>">
                            <div class="subtitle"><h5><?php echo $subtitle_yoga; ?></h5></div>
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
}
