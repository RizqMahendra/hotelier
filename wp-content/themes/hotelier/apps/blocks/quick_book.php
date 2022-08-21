<?php

add_action('acf/init', 'quickbook_init');
function quickbook_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'quickbook',
            'title' => __('quickbook Plan'),
            'description' => __('quickbook Block'),
            'category' => 'hotelier_elements',
            'icon' => 'format-image',
            'keywords' => ['quickbook', 'image'],
            'mode' => 'auto',
            'render_callback' => 'quickbook_callback',
        ]);
    }
}

function quickbook_callback($block)
{
    $book_now_url = get_field('book_now_url'); ?>
    <section class="home-quickbook">
        <a href="<?php echo $book_now_url;?>" class="button quickbook"><?php echo __('Book now', 'hotelier')?></a>
    </section>
<?php
}
