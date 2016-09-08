<?php /* Template Name: eventi */ get_header(); ?>

	<!-- section -->
		<section class="eventi-single-content">
            <!-- artisti listing content-->
            <div class="container">
                <div class="eventi-listing">
                    <div class="row">
                    <?php 

                    //Define your custom post type name in the arguments

                    $args = array('post_type' => 'eventi');

                    //Define the loop based on arguments

                    $loop = new WP_Query( $args );

                    //Display the contents

                    while ( $loop->have_posts() ) : $loop->the_post();
                    ?>



                            <div class="col-md-12">
                                <a class="eventi-permalink" href="<?php the_permalink(); ?>">
                                    <?php echo '<div style="background-image:url('.get_field('eventi_bg').')" class="event-bg">' ?>
                                    <div class="eventi-heading-block">
                                        <h1 class="eventi-listing-title"><?php the_title(); ?></h1>
                                        <h2 class="eventi-listing-subtitle theano"><?php the_field('sottotitolo_principale'); ?></h2>
                                    </div>
                                    </div>
                                </a>
                            </div>



                    <?php endwhile;?>
                    </div>
                </div>

            </section>
            </div>


            
            
		<!-- /section -->

                                
<?php get_footer(); ?>
