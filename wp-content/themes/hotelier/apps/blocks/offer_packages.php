<?php

add_action('acf/init', 'offer_packages_init');
function offer_packages_init()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'offer-packages',
            'title' => __('Offer Packages'),
            'description' => __('Offer Packages Block'),
            'category' => 'hotelier_elements',
            'icon' => 'format-image',
            'keywords' => ['Room_details', 'image'],
            'mode' => 'auto',
            'render_callback' => 'offer_packages_callback',
        ]);
    }
}

function offer_packages_callback($block)
{
    ?>
    <section class="home-offers section-padding bg-txt-light lazyloaded">
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 col-xl-4 offset-1 p-0 offers-intro-col">
                <div class="offers-intro-wrapper">
                    <h3 class="section-heading">Offers <span>&amp; Packages</span></h3>
                    <p>Get our best resort deals and enjoy a Maya experience while adding value to your Ubud journey with exclusive benefits at Maya Ubud Resort &amp; Spa.</p>
                </div>
            </div>
            <div class="col-10 offset-1 col-xl-6 offset-xl-0 p-0 program-content-col">
                
                                <a class="program-item" href="/ubud/offer/early-bird">
                    <picture>
                        <source srcset="https://mayaresorts.com/assets/images/offers/list-thumbnail-desktop-webp/iqZGqhXEXMVXodbx8y0aUJgV7_AAyfBW.webp" type="image/webp">
                        <source srcset="https://mayaresorts.com/assets/images/offers/list-thumbnail-desktop-jpg/E0AtfQvrifeQEnEXLA2o8P4fjX7uyZLS.jpg" type="image/jpeg">
                        <img src="https://mayaresorts.com/assets/images/offers/list-thumbnail-desktop-jpg/E0AtfQvrifeQEnEXLA2o8P4fjX7uyZLS.jpg" loading="lazy" alt="Plan Now Stay Later" width="850">
                    </picture>
                    <div class="program-caption">
                        
                        <div class="cta-hover"><p><span class="cta-msg">View offer</span></p></div>                        <div class="program-caption-wrapper">
                            <h6 class="title">Plan Now <span>Stay Later</span></h6>
                            <p>Plan your next stay with us 30 days in advance and book up to 15% off from our best available rate</p>
                        </div>
                    </div>
                </a>
                                <a class="program-item" href="/ubud/offer/stay-more-pay-less">
                    <picture>
                        <source srcset="https://mayaresorts.com/assets/images/offers/list-thumbnail-desktop-webp/EJqCQFeKM2VVMbgILVtTkkV0frVRhD5O.webp" type="image/webp">
                        <source srcset="https://mayaresorts.com/assets/images/offers/list-thumbnail-desktop-jpg/_ooG5q5JEty3JS0scSIlYkXvFcE_L7q1.jpg" type="image/jpeg">
                        <img src="https://mayaresorts.com/assets/images/offers/list-thumbnail-desktop-jpg/_ooG5q5JEty3JS0scSIlYkXvFcE_L7q1.jpg" loading="lazy" alt="Stay More Pay Less" width="850">
                    </picture>
                    <div class="program-caption">
                        
                        <div class="cta-hover"><p><span class="cta-msg">View offer</span></p></div>                        <div class="program-caption-wrapper">
                            <h6 class="title">Stay More <span>Pay Less</span></h6>
                            <p>Save on 8+ nights and get up to 25% off Best Available Rates and IDR 100.000/room daily F&amp;B credit</p>
                        </div>
                    </div>
                </a>
                                <a class="program-item" href="/ubud/offer/family-getaway">
                    <picture>
                        <source srcset="https://mayaresorts.com/assets/images/offers/list-thumbnail-desktop-webp/-R4ljGAuAzwj6O5oAK9YhBk3xNhCyrBV.webp" type="image/webp">
                        <source srcset="https://mayaresorts.com/assets/images/offers/list-thumbnail-desktop-jpg/n6Y2ocHbvdTtVciHW-VVFKgIIfrgMEig.jpg" type="image/jpeg">
                        <img src="https://mayaresorts.com/assets/images/offers/list-thumbnail-desktop-jpg/n6Y2ocHbvdTtVciHW-VVFKgIIfrgMEig.jpg" loading="lazy" alt="Family Getaway at Maya" width="850">
                    </picture>
                    <div class="program-caption">
                        
                        <div class="cta-hover"><p><span class="cta-msg">View offer</span></p></div>                        <div class="program-caption-wrapper">
                            <h6 class="title">Family Getaway <span>at Maya</span></h6>
                            <p>Embark on a fun-filled getaway with your family surrounded by the beauty of Maya Ubud’s nature.</p>
                        </div>
                    </div>
                </a>
                                <a class="program-item" href="/ubud/offer/honeymoon-package">
                    <picture>
                        <source srcset="https://mayaresorts.com/assets/images/offers/list-thumbnail-desktop-webp/q0xvLFbMiElEikGQomLnqLscZ6-K9w-R.webp" type="image/webp">
                        <source srcset="https://mayaresorts.com/assets/images/offers/list-thumbnail-desktop-jpg/jMYXZomxJkX7CEvyriG2bMdE4AeOyzbV.jpg" type="image/jpeg">
                        <img src="https://mayaresorts.com/assets/images/offers/list-thumbnail-desktop-jpg/jMYXZomxJkX7CEvyriG2bMdE4AeOyzbV.jpg" loading="lazy" alt="Honeymoon Package" width="850">
                    </picture>
                    <div class="program-caption">
                        
                        <div class="cta-hover"><p><span class="cta-msg">View offer</span></p></div>                        <div class="program-caption-wrapper">
                            <h6 class="title">Honeymoon <span>at Maya</span></h6>
                            <p>Ignite magic and romantic moments at Maya with your significant other in the teeming forest of Maya Ubud.</p>
                        </div>
                    </div>
                </a>
                                
            </div>
        </div>
        <div class="row">
            <div class="col-12 all-cta-col">
                <a class="button" href="/ubud/offer">View all offers</a>            </div>
        </div>
    </div>
</section>
<?php
}
