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
<div class="tab-content" id="nav-tabContent">
    <div class="catalogue-list tab-pane" id="stay" role="tabpanel"aria-labelledby="stay">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 p-0">
                <div class="row">
                <div class="col-12 col-md-10 offset-md-1 col-lg-4 offset-lg-0 catalogue-item" id="catalogue-item-1">
                                <div class="catalogue-item-content">
                                    <a class="img-link desktop" href="offer/early-bird">
                                        <picture>
                                            <source srcset="https://mayaresorts.com/assets/images/offers/list-thumbnail-desktop-webp/iqZGqhXEXMVXodbx8y0aUJgV7_AAyfBW.webp" type="image/webp">
                                            <source srcset="https://mayaresorts.com/assets/images/offers/list-thumbnail-desktop-jpg/E0AtfQvrifeQEnEXLA2o8P4fjX7uyZLS.jpg" type="image/jpeg">
                                            <img src="https://mayaresorts.com/assets/images/offers/list-thumbnail-desktop-jpg/E0AtfQvrifeQEnEXLA2o8P4fjX7uyZLS.jpg" loading="lazy" alt="Plan Now Stay Later" title="Plan Now Stay Later" width="850">
                                        </picture>
                                    </a>
                                    <a class="title desktop" href="/ubud/offer/early-bird">Plan Now Stay Later</a>                                  
                                    <div class="desktop-container">
                                        <p>Plan your next stay with us 30 days in advance and book up to 15% off from our best available rate</p>
                                    </div>
                                    <p class="desktop-cta"><a class="hlink" href="/ubud/offer/early-bird">Read more</a></p>
                                    <a class="img-link mobile" data-toggle="collapse" href="#catalogue1" onclick="scrollToCollapsed('catalogue-item-1','catalogue1')">
                                        <picture>
                                            <source srcset="https://mayaresorts.com/assets/images/offers/list-thumbnail-mobile-webp/hbPGOZTmuTGz2zdMsZKAmZCH_gjwwrqa.webp" type="image/webp">
                                            <source srcset="https://mayaresorts.com/assets/images/offers/list-thumbnail-mobile-jpg/gm-2qkc94ySzZ_JBtqaN9fFPYLn2krnL.jpg" type="image/jpeg">
                                            <img src="https://mayaresorts.com/assets/images/offers/list-thumbnail-mobile-jpg/gm-2qkc94ySzZ_JBtqaN9fFPYLn2krnL.jpg" loading="lazy" alt="Plan Now Stay Later" title="Plan Now Stay Later" width="850">
                                        </picture>
                                    </a>
                                    <a class="title mobile" href="#catalogue1" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="catalogue1" onclick="scrollToCollapsed('catalogue-item-1','catalogue1')">Plan Now Stay Later</a>                                    <a class="more-details-arrow collapsed" href="#catalogue1" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="catalogue1" onclick="scrollToCollapsed('catalogue-item-1','catalogue1')"><span class="left-bar"></span><span class="right-bar"></span></a>                                    <div class="mobile-description">
                                        <div class="collapse" id="catalogue1" data-parent="#offer-index">
                                            <p>Plan your next stay with us 30 days in advance and book up to 15% off from our best available rate</p>
                                            <p><a class="hlink" href="/ubud/offer/early-bird">Read more</a></p>
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
</section>
<?php
}?>
