<?php

?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?> >
	<head>
    <meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <?php wp_head(); ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    </head>
<body <?php body_class(); ?>  style="height: -webkit-fill-available;">
<header>
<div id="perspective" class="showMenu">

<!-- nav menu side bar start-->
<nav id="main-perspective-nav" class="closeNav">
    <div class="main-perspective-nav-container">
        <div class="close-container">
            <button id="perspective-close-btn" type="button" class="close">×</button>
        </div>
        <ul id="w0" class="nav">
            <li class="active">
                <a href="#">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/Maya_Resorts_Header_Logo_Icon_Grey.svg" width="132" height="32" loading="lazy" title="Maya Ubud Homepage" alt="Home">
                </a>
            </li>
            <li><?php wp_nav_menu(['theme_location' => 'top-menu']); ?></li>
            <li><a class="book-button button" href="javascript:;" data-toggle="modal" data-target="#navBook">Book Now</a></li>
        </ul>
    </div>
    <div class="main-perspective-nav-footer">
        <hr>
        <p>Other Destination</p>
        <a href="#sanur">
            <img src="./img/maya-sanur-logotype.svg" width="132" height="32" loading="lazy" class="alternative" title="Maya Sanur Resort &amp; Spa" alt="Maya Sanur">
        </a>
    </div>
</nav>
<!-- nav menu side bar end-->


<!-- site index start -->
<div class="perspective-container" id="site-index"> 
    <div id="main-menu-closer"></div>

    <!-- perspective wrapper start -->
    <div id="perspective-wrapper" class="perspective-wrapper">


        <!-- header start-->
        <nav id="homepageHeader" class="navbar navbar-toggleable-xs navbar-light sticky-top top-navbar homepage-navbar">    
            <div class="main-logo-wrapper">
                <a id="logo" class="navbar-brand text-primary logo ubud" href="#">Maya Ubud Resort &amp; Spa</a>
            </div>
            <div class="main-toggler-wrapper">
                <button id="main-perspective-menu-toggle" class="navbar-toggler navbar-toggler-left main-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                </button>
            </div>
        </nav>
        

        <div class="book-trigger-wrapper">
            <div class="mobile-trigger-wrapper">
                <a id="mobile-cta-chat" href="#" class="whatsapp">Chat with us</a>
                <a id="mobile-cta-call" href="#" class="phone">Call us</a>
                <a id="mobile-cta-email" href="#" class="email">Send us Email</a>
            </div>
            <a id="global-cta-book" class="book-trigger" href="javascript:;" data-toggle="modal" data-target="#navBook">Book Now</a>
        </div>

        <div class="desktop-float-cta-wrapper">
            <div class="float-btn-wrapper">
                <a id="desktop-cta-chat" href="#" class="whatsapp" title="Chat via Whatsapp">Chat via Whatsapp</a>
            </div>
        </div>
        <!-- header end -->

</header>
