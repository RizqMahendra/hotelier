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
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark static-top" style="--bs-bg-opacity: .5;">
  <div class="container">
    <a class="navbar-brand" href="#">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/Maya_Resorts_Header_Logo_Icon_Grey.svg" width="132" height="32" loading="lazy" title="" alt="Home">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php
        wp_nav_menu([
            'theme_location' => 'top-menu',
            'depth' => 2,
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'bs-example-navbar-collapse-1',
            'menu_class' => 'nav navbar-nav ms-auto',
            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
            'walker' => new WP_Bootstrap_Navwalker(),
        ]);
        ?>
    <!-- <div class="navbar-right" role="login">
					<a href="" class="btn btn-warning navbar-btn">Sign in</a>
				</div> -->
  </div>
</nav>
</header>