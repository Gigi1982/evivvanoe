<?php /* Template Name: home */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section id="fullpage" class="homepage-content">
            <aside class="scroll-icons">
                <a class="scroll-down" href="#"><i class="glyphicon glyphicon-menu-down"></i></a>
            </aside>
            <div class="container-fluid">
                <div class="section slide1-kaleido">
                    <div class="full-page-bg visible-sm visible-xs"></div>
                    <video class="embed-video-bg hidden-sm hidden-xs" autoplay loop muted>
                      <source src="<?php echo get_template_directory_uri(); ?>/img/caleido.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="video-showcase-text">
                        <div class="container">
                            <h1 class="big-showcase-title">EVVIVANOè WITH KALEIDOSCOPE EYES.</h1>
                            <h2 class="big-showcase-subtitle theano">one story, many stories. </h2>
                        </div>
                    </div>

                </div>
                <div class="section slide2-artist-listing">
                    <div class="home-slide-titles"><h1 class="artist-title"><?php// echo pll_e('ARTISTI'); ?></h1></div>
                    <ul class="artist-home-listing">
                    <?php 

                    //Define your custom post type name in the arguments

                    $args = array('post_type' => 'artisti');

                    //Define the loop based on arguments

                    $loop = new WP_Query( $args );

                    //Display the contents
                    
                    

                    while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    
                      <li class="artist-container">
                          <a href="<?php the_permalink(); ?>">
                        <?php echo '<header class="artist-header" style="background-image:url('.get_field('foto_artisti').')">' ?>
                        </header>
                        <div class="artist-listing-content">
                            
                                <h1 class="artist-title"><?php the_title(); ?></h1>
                                <h2 class="theano artist-subtitle"><?php the_field('sottotitolo_principale'); ?></h2>
                            </a>
                        </div>
                      </li>
                    
                    
                    <?php endwhile;?>
                    </ul>
                </div>
                <div class="section events">
                    <div class="home-slide-titles"><h1 class="artist-title">EVENTI</h1></div>
                    <ul class="events-slider">
                    <?php 

                    //Define your custom post type name in the arguments

                    $args = array('post_type' => 'eventi');

                    //Define the loop based on arguments

                    $loop = new WP_Query( $args );

                    //Display the contents
                    
                    

                    while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    
                      <li class="">
                        <?php echo '<header class="events-bg" style="background-image:url('.get_field('eventi_bg').')">' ?>
                          <div class="events-caption">
                            <a class="event-caption" href="<?php the_permalink(); ?>">
                                <h1 class="artist-title"><?php the_title(); ?></h1>
                                <h2 class="theano artist-subtitle"><?php the_field('sottotitolo_eventi'); ?></h2>
                            </a>
                        </div>
                        </header>
                        </a>
                      </li>
                    
                    
                    <?php endwhile;?>
                    </ul>
                </div>
                <!--<div class="section map-section">
                    <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzG7V3f5KJfLgbX-rNayJqNraNztA7OXI&libraries=visualization&callback=initMap">
                    </script>
                    <div id="map"></div>
                    <?php echo '<div class="overmap-layer" style="background-image:url('.get_field('header_bg').')">' ?>
                        <div class="map-text-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-column">
                                        <h6>CONTATTI</h6><p>Telefono: 3397340061
e-mail: evvivanoe@evvivanoe.it</p><h6>ORARI</h6><p>Apertura: dal martedì al sabato - 10:30-13:30 - 16-19:30</p><h6>INDIRIZZO</h6><p>Via Grassi 16, Torino</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <div class="button-container hidden-sm hidden-xs"><button class="btn btn-primary btn-lg show-hide-map" href="#"><i class="glyphicon glyphicon-eye-open"></i></button></div>
                </div>
            </div>
            
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>