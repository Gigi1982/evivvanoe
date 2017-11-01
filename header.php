<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body data-spy="scroll" <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">
            


			<!-- header -->
			<header class="header clear" role="banner">
                
                    <div class="banner">
                        <div class="container">
                            <div class="text-center banner-text">COME VISIT US @ PARATISSIMA 2017 - Stand 12 - Torino 1-5 novembre 2017 - Caserma La Marmora - Via Asti 22</div>
                        </div>
                    </div> 

					<!-- nav -->
                    <nav class="navbar navbar-default navbar-fixed-top">
                      <div class="container">
                          <a class="logo" href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Logo" class="logo-img">
						  </a>
                        <?php
                            if (($locations = get_nav_menu_locations()) && isset($locations['header-menu'])) {
                                $menu = wp_get_nav_menu_object($locations['header-menu']);
                                $menu_items = wp_get_nav_menu_items($menu->term_id);
                            }

                            else {
                                echo 'no menu voices to display';
                            }

                        ?>
                        <ul class="social-nav list-unstyled visible-md visible-lg">
                            <li><a class="social-links" href="https://www.facebook.com/evvivanoe/" target="_blank"><i class="icon icon-facebook-square"></i></a></li>
                            <li><a class="social-links" href="https://www.instagram.com/evvivanoe/" target="_blank"><i class="icon icon-instagram-square"></i></a></li>
                            <li><a class="social-links" href="https://twitter.com/evvivanoe" target="_blank"><i class="icon icon-twitter-square"></i></a></li>
                            <li><a class="social-links" href="https://it.pinterest.com/evvivanoearte/" target="_blank"><i class="icon icon-pinterest-square"></i></a></li>
                        </ul>
                          <?php html5blank_nav(); ?>
                        <!--<ul class="nav navbar-nav navbar-right desktop-nav visible-md visible-lg">
                            <li><?php echo '<a href="'.$menu_items[0]->url.'">'?><?php echo $menu_items[0]->title;?></a></li> 
                          <li><?php echo '<a href="'.$menu_items[1]->url.'">'?><?php echo $menu_items[1]->title;?></a></li> 
                            <li><?php echo '<a href="'.$menu_items[2]->url.'">'?><?php echo $menu_items[2]->title;?></a></li>
    <li><?php echo '<a href="'.$menu_items[3]->url.'">'?><?php echo $menu_items[3]->title;?></a></li>
<li><?php echo '<a href="'.$menu_items[4]->url.'">'?><?php echo $menu_items[4]->title;?></a></li>
<li><?php echo '<a href="'.$menu_items[5]->url.'">'?><?php echo $menu_items[5]->title;?></a></li>
                            
                        </ul>
-->

                        
                        
<!--                        -->
                        <div class="mobile-nav-icon">
                            <a href="#" id="nav-icon3" class="hidden-md hidden-lg">
                              <span></span>
                              <span></span>
                              <span></span>
                              <span></span>
                            </a>
                        </div>
                            
                      </div>
                        
                    </nav>
                
                    <nav class="mobile-nav">
                        <ul class="list-unstyled">
                            <li><?php echo '<a href="'.$menu_items[0]->url.'">'?><?php echo $menu_items[0]->title;?></a></li> 
                      <li><?php echo '<a href="'.$menu_items[1]->url.'">'?><?php echo $menu_items[1]->title;?></a></li> 
                        <li><?php echo '<a href="'.$menu_items[2]->url.'">'?><?php echo $menu_items[2]->title;?></a></li> 
<li><?php echo '<a href="'.$menu_items[3]->url.'">'?><?php echo $menu_items[3]->title;?></a></li>
<li><?php echo '<a href="'.$menu_items[4]->url.'">'?><?php echo $menu_items[4]->title;?></a></li>
<li><?php echo '<a href="'.$menu_items[5]->url.'">'?><?php echo $menu_items[5]->title;?></a></li>
<li class="social-mobile-links"><a class="social-links" href="https://www.facebook.com/evvivanoe/" target="_blank"><i class="icon icon-facebook-square"></i></a></li>
<li class="social-mobile-links"><a class="social-links" href="https://www.instagram.com/evvivanoe/" target="_blank"><i class="icon icon-instagram-square"></i></a></li>
<li class="social-mobile-links"><a class="social-links" href="https://twitter.com/evvivanoe" target="_blank"><i class="icon icon-twitter-square"></i></a></li>
<li class="social-mobile-links"><a class="social-links" href="https://it.pinterest.com/evvivanoearte/" target="_blank"><i class="icon icon-pinterest-square"></i></a></li>
                        </ul>
                        
                    </nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
