<?php get_header(); ?>

<main>
	<?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    else :
        echo __('Sorry, nothing to display.', 'udigital');
    endif;
    ?>
</main>

<?php get_footer(); ?>
