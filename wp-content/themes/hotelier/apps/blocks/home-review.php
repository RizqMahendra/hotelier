<?php

add_action('acf/init', 'home_review_init');
function home_review_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'home-review',
            'title' => __('Home Review'),
            'description' => __('Home Review Block'),
            'category' => 'hotelier_media',
            'icon' => 'format-image',
            'keywords' => ['review'],
            'mode' => 'auto',
            'render_callback' => 'home_review_callback',
        ]);
    }
}

function home_review_callback($block)
{
    $title = get_field('title');
    $review_score = get_field('review_score');
    $review_total = get_field('review_total'); ?>
<section class="home-reviews section-padding lazyloaded">
    <div class="container-fluid">
    <div class="row reviews-intro-row">
            <div class="col-10 offset-1 col-lg-8 offset-lg-2 p-0">
                <h3 class="section-heading"><?php echo $title; ?></h3>
            </div>
        </div>
    <div class="row reviews-snapshot-row">
            <div class="col-12 p-0 reviews-snapshot-col">
                <p class="agg-score"><?php echo $review_score; ?>/<span>5</span></p>
                <div class="total-reviews"><a class="info lazyloaded" href="javascript:;" data-toggle="tooltip" data-placement="right" title="" data-original-title="These reviews are collected by Revinate for Maya Resorts. Reviews are based from guests' staying at the resort from the past thirty six months.">
                    More information</a><span><?php echo $review_total; ?> reviews</span></div>
            </div>
        </div>
        <div class="col-1 col-lg-2 p-0">
            <div class="review-swiper-button-prev swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-4d93ae8cf75d6d109"></div>
        </div>
        <div class="col-10 col-lg-8 p-0">
            <div class="swiper-container review-slider-container swiper-container-initialized swiper-container-horizontal">
                <div class="swiper-wrapper review-slider-wrapper"style="transition: all 0ms ease 0s; transform: translate3d(-1033px, 0px, 0px);">
                <?php if (have_rows('review')):?>
                    <?php while (have_rows('review')): the_row();
    $review_site = get_sub_field('review_site');
    $rating = get_sub_field('rating');
    $review_author = get_sub_field('review_author');
    $review_date = get_sub_field('review_date');
    $review_slug = get_sub_field('review_slug'); ?>
                    <div class="swiper-slide swiper-slide-duplicate"style="width: 324.333px; margin-right: 20px;">
                        <div class="review-item">
                            <p class="reviewSite"><?php echo $review_site; ?></p>
                            <div class="rating star5 "><?php echo $rating; ?></div>
                                <p class="author"><?php echo $review_author; ?> <span class="date"><?php echo $review_date; ?></span></p>
                                    <div class="review-fill">
                                        <p class="slug"><?php echo $review_slug; ?></p>
                                    </div>
                            </div>
                    </div>
                    <?php endwhile; ?>
                 <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-1 col-lg-2 p-0">
                <div class="review-swiper-button-next swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-4d93ae8cf75d6d109"></div>
        </div>    
    </div>
</section>

<?php
}
