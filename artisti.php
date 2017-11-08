<?php /* Template Name: artisti */ get_header(); ?>

	<!-- section -->
		<section class="artisti-single-content">
            <!-- artisti listing content-->
            <div class="container">
                <h1 class="single-content-title"><?php the_title(); ?></h1>
                <div class="artist-listing">
                    <div class="row">
                    <?php 

                    //Define your custom post type name in the arguments

                    $args = array('post_type' => 'artisti');

                    //Define the loop based on arguments

                    $loop = new WP_Query( $args );

                    //Display the contents

                    while ( $loop->have_posts() ) : $loop->the_post();
                    ?>



                            <div class="col-md-6">
                                <a class="artisti-permalink" href="<?php the_permalink(); ?>">
                                    <?php echo '<div style="background-image:url('.get_field('foto_artisti').')" class="artist-bg">' ?>
                                    <div class="artist-heading-block">
                                        <h1 class="artisti-listing-title"><?php the_title(); ?></h1>
                                        <h2 class="artisti-listing-subtitle theano"><?php the_field('sottotitolo_principale'); ?></h2>
                                    </div>
                                    </div>
                                </a>
                            </div>


                    <?php endwhile;
                    wp_reset_postdata(); ?>
                    
                    </div>
                </div>

            </section>


            
            
		<!-- /section -->

                                
<?php get_footer(); ?>
