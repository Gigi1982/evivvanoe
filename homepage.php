<?php /* Template Name: home */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="homepage-content">
            <!--<aside class="scroll-icons">
                <a class="scroll-down" href="#"><i class="glyphicon glyphicon-menu-down"></i></a>
            </aside>-->
            <div class="section slide1-kaleido">
                <div class="full-page-bg visible-sm visible-xs"></div>
                <div class="video-bg-container">
                    <video class="embed-video-bg hidden-sm hidden-xs" autoplay loop muted>
                      <source src="<?php echo get_template_directory_uri(); ?>/img/caleido.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="container">
                    <div class="home-slide">
                        <div class="video-showcase-text">
                            <h1 class="big-showcase-title">EVVIVANOè GALLERIA D'ARTE TORINO.</h1>
                            <h2 class="big-showcase-subtitle theano">one story, many stories. </h2>
                        </div>
                        <h3 class="home-title"><?php echo pll_e('Ultimi Eventi'); ?></h3>
                        <ul class="events-slider">
                            <?php 
                            $args = array('post_type' => 'eventi');
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                            ?>

                            <li class="">
                                <header class="events-bg" style="background-image:url('<?php echo get_field('eventi_bg'); ?>')"></header>
                                <div class="events-caption">
                                    <a class="event-caption" href="<?php the_permalink(); ?>">
                                        <div class="caption-flexed">
                                            <h4 class="artist-title"><?php the_title(); ?></h4>
                                            <h5 class="theano artist-subtitle"><?php the_field('sottotitolo_eventi'); ?></h5>
                                        </div>
                                        <i class="icon icon-right-open"></i>
                                    </a>
                                </div>
                            </li>


                        <?php endwhile;?>
                        </ul>
                        
                    </div>
                </div>
                <?php wp_reset_postdata(); ?>
                
<!-- da decommentare - caption su video
                <div class="video-showcase-text">
                    <div class="container">
                        <h1 class="big-showcase-title">EVVIVANOè WITH KALEIDOSCOPE EYES.</h1>
                        <h2 class="big-showcase-subtitle theano">one story, many stories. </h2>
                    </div>
                </div>
-->
                
            </div>
            <div class="section slide2-artist-listing">
                <div class="container">
                    <div class="home-slide-titles">
                        <h3 class="artist-title"><?php echo pll_e('I NOSTRI ARTISTI'); ?></h3>
                    </div>

                    <ul class="artist-home-listing">
                    <?php 
                    $args = array('post_type' => 'artisti');
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                      <li class="artist-container">
                            <header class="artist-header" style="background-image:url('<?php echo get_field('foto_artisti'); ?>')">
                            </header>
                            <div class="artist-listing-content">
                                <a class="event-caption" href="<?php the_permalink(); ?>">
                                    <div class="caption-flexed">
                                        <h4 class="home-title"><?php the_title(); ?></h4>
                                        <h5 class="theano artist-subtitle"><?php the_field('sottotitolo_principale'); ?></h5>
                                    </div>
                                    <i class="icon icon-right-open"></i>
                                </a>
                            </div>
                      </li>
                    <?php endwhile;?>
                    </ul>
                    <div class="home-buttons">
                        <a class="theano" href="<?php echo get_page_link(12); ?>"><i class="
icon icon-right-open"></i> Tutti gli artisti</a>
                    </div>
                </div>
            </div>
            <div class="section events">
                <div class="container">
                    <div class="home-slide-titles">
                        <h3 class="home-title"><?php echo pll_e('Ultime News'); ?></h3>
                    </div>
                    <ul class="home-news-listing">  
                        <?php 
                        $temp = $wp_query; $wp_query= null;
                        $wp_query = new WP_Query(); $wp_query->query('showposts=20' . '&paged='.$paged);
                        $category = get_the_category();
                        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                            <?php 
                            $featuredThumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
                            $url = $featuredThumb['0'];

                        ?>
                        <li class="news-thumb-container">
                            <div class="news-bg" style="background-image:url('<?php echo $featuredThumb['0']; ?>')"></div>
                            <a class="event-caption dark" href="<?php the_permalink(); ?>">
                                <div class="caption-flexed">
                                    <h4 class="home-title"><?php echo get_the_title(); ?></h4>
                                </div>
                                <i class="icon icon-right-open"></i>
                            </a>
                        </li>

                        <?php endwhile; ?>
                    </ul>
                    <div class="home-buttons">
                        <a class="theano" href="<?php echo get_page_link(32); ?>"><i class="
icon icon-right-open"></i> Tutte le news</a>
                    </div>
                </div>
            </div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>