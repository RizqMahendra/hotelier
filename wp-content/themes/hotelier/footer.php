
        <!-- footer start -->
               <footer id="property-footer" class="property-footer lazyloaded">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-10 offset-1 col-lg-8 offset-lg-2">
                                <div class="row">
                                    <div class="col-12 p-0">
                                        <h4><?php echo __('Discover Pertiwi Resorts & Spa', 'hotelier')?></h4>
                                    </div>
                                </div>
                                <div class="row sitemap">
                                    <div class="col-12 col-lg-3 p-0">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Rooms  &amp; Villas</a>

                                                <?php if( have_rows('rooms_menu', 'options') ):?>
                                                    <ul class="nav flex-column submenu">
                                                    <?php while( have_rows('rooms_menu', 'options') ) : the_row();?>
                                                        <?php
                                                            $label = get_sub_field('label');
                                                            $url = get_sub_field('url');
                                                        ?>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="<?php echo $url;?>"><?php echo $label;?></a>
                                                        </li>
                                                    <?php endwhile;?>
                                                    </ul>
                                                <?php endif;?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg-3 p-0">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Restaurants &amp; Bars</a>
                                                <?php if( have_rows('restaurant_menu', 'options') ):?>
                                                    <ul class="nav flex-column submenu">
                                                    <?php while( have_rows('restaurant_menu', 'options') ) : the_row();?>
                                                        <?php
                                                            $label = get_sub_field('label');
                                                            $url = get_sub_field('url');
                                                        ?>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="<?php echo $url;?>"><?php echo $label;?></a>
                                                        </li>
                                                    <?php endwhile;?>
                                                    </ul>
                                                <?php endif;?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg-3 p-0">
                                        <?php if( have_rows('third_menu', 'options') ):?>
                                            <ul class="nav flex-column">
                                            <?php while( have_rows('third_menu', 'options') ) : the_row();?>
                                                <?php
                                                    $label = get_sub_field('label');
                                                    $url = get_sub_field('url');
                                                ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?php echo $url;?>"><?php echo $label;?></a>
                                                </li>
                                            <?php endwhile;?>
                                            </ul>
                                         <?php endif;?>
                                        
                                    </div>
                                    <div class="col-12 col-lg-3 p-0">
                                    <?php if( have_rows('fourth_menu', 'options') ):?>
                                            <ul class="nav flex-column">
                                            <?php while( have_rows('fourth_menu', 'options') ) : the_row();?>
                                                <?php
                                                    $label = get_sub_field('label');
                                                    $url = get_sub_field('url');
                                                ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?php echo $url;?>"><?php echo $label;?></a>
                                                </li>
                                            <?php endwhile;?>
                                            </ul>
                                         <?php endif;?>
                                    </div>
                                </div>
                                <div class="row contacts-collection">
                                    <div class="col-12 col-lg-3 p-0 order-1 order-lg-1 social-media">
                                        <a class="homepage-link" href="#">
                                            <?php 
                                                $logo = get_field('logo_2', 'options');
                                                $instagram = get_field('instagram', 'options');
                                                $facebook = get_field('facebook', 'options');
                                            ?>
                                            <img src="<?php echo $logo['url'];?>" class="property-logo lazyloaded" width="120" height="120">
                                        </a>
                                        <div class="social-media-container">
                                            <?php if(!is_null($instagram) && $instagram != ''):?>
                                                <a href="<?php echo $instagram;?>"><i class="fa fa-instagram fa-2x"></i></a>
                                            <?php endif;?>
                                            <?php if(!is_null($facebook) && $facebook != ''):?>
                                                <a href="<?php echo $facebook;?>"><i class="fa fa-facebook fa-2x"></i></a>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 p-0 order-3 order-lg-2 newsletter-signup">
                                        <p>Plan your stay in our hotel. Book through the system.</p>
                                        <a href="<?php echo get_field('reservation', 'options');?>" class="button submit-newsletter">Book Now</a>
                                    </div>
                                    <div class="col-12 col-lg-3 p-0 order-2 order-lg-3 contact-info">
                                        <p class="title">Contact</p>
                                        <p>
                                            <a href="https://goo.gl/maps/Cxtkf4WDbwSbE6Sx8">
                                                <?php echo get_field('address', 'options');?>
                                            </a>
                                        </p>
                                        <div class="telephone-container">
                                            <p>Tel: <a href="tel:<?php echo get_field('phone', 'options');?>"><?php echo get_field('phone', 'options');?></a></p>
                                            <p>E:&nbsp;&nbsp;<a href="mailto:<?php echo get_field('email', 'options');?>"><?php echo get_field('email', 'options');?></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- footer end -->


            </div>
            <!-- perspective wrapper end -->

        </div>
        <!-- side index end -->

    </div>
    <!-- perspective end -->

<!-- modal information start -->
<div class="modal fade hotelinfomodal" id="hotelInfo" tabindex="-2" aria-labelledby="hotelInfoModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="close-container">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <h4 class="modal-title">
                        <?php
                            $logo = get_field('logo_2', 'options');
                        ?>
                        <img src="<?php echo $logo['url'];?>" width="47" height="47" loading="lazy">
                    </h4>
                </div>  
                <div class="modal-body">
                    <div class="container-fluid modal-container lazy lazybg" data-src="./img/maya-ubud-sketch.png">
                        <div class="row">
                            <div class="col-12 wrapper">
                                <h5>Pertiwi Resorts &amp; Spa</h5>
                                <p><?php echo get_field('address', 'options');?></p>
                                <ul>
                                    <li>
                                        <i class="fa fa-phone mr-1"></i>
                                        <a href="tel:<?php echo get_field('phone', 'options');?>"><?php echo get_field('phone', 'options');?></a>
                                    </li>
                                    
                                    <li>
                                        <i class="fa fa-envelope mr-1"></i>
                                        <a href="mailto:<?php echo get_field('email', 'options');?>"><?php echo get_field('email', 'options');?></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-location-arrow mr-1"></i>
                                        <a href="https://goo.gl/maps/Cxtkf4WDbwSbE6Sx8">Direction</a>
                                    </li>
                                    
                                </ul>
                                <p class="social-container">
                                    <<?php if(!is_null($instagram) && $instagram != ''):?>
                                        <a href="<?php echo $instagram;?>"><i class="fa fa-instagram fa-2x"></i></a>
                                    <?php endif;?>
                                    <?php if(!is_null($facebook) && $facebook != ''):?>
                                        <a href="<?php echo $facebook;?>"><i class="fa fa-facebook fa-2x"></i></a>
                                    <?php endif;?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal information end -->
    <!-- modal booking order end -->
    <?php wp_footer(); ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- <script src="js/main.js"></script>
    <script src="./js/00libraryallpages.min.js"></script>
    <script src="./js/040101propertyhomepage.min.js"></script>
    <script src="./js/yii.activeForm.js"></script> -->
    <script>jQuery(function ($) {
        $('.navbook-datepicker').tDatePicker({
            valiDation: true,
            startDate: '2022-05-18',
            dateCheckIn: '2022-05-18',
            dateCheckOut: '2022-05-19'
            // Options
        })
        .on('clickDateCI',function(e, dateCI) {

        });
        $('.quickbook-datepicker').tDatePicker({
            valiDation: true,
            startDate: '2022-05-18',
            dateCheckIn: '2022-05-18',
            dateCheckOut: '2022-05-19'
                // Options
            }).on('clickDateCI',function(e, dateCI) {
                $('.perspective-wrapper')
                .animate({
                    scrollTop: $('#perspective-wrapper').scrollTop() + ($('#quickbook-datepicker').offset().top) - $('.homepage-navbar').height() - $('.booking-title-container').height() - $('.booking-label-container').height()
                }, 400);
            });
        });
    </script>
    <!-- <script type="text/javascript" id="" src="./js/bootstrap.js"></script>
    <script type="text/javascript" id="" src="./js/loader.js" data-thn-current="1"></script>
    <script name="Meta" src="./js/style.js" defer="" async="" crossorigin="anonymous"></script> -->
</body>
</html>