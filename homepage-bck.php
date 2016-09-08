<?php /* Template Name: home */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="homepage-content">
            <?php 

            if( have_rows('fullscreen_images') ): ?>
            <ul id="fullscreenSlider">
            <?php 

            // loop through rows (parent repeater)
            while( have_rows('fullscreen_images') ): the_row(); ?>
              <li>
                <?php echo'<img class="img-responsive" src="'.get_sub_field('immagine').'">'?>
              </li>
            <?php endwhile; //color sub chart endwhile?>
            </ul>
            <?php endif; //color sub chart endwhile?>
<!--			<h1><?php the_title(); ?></h1>-->
            
            <div class="fullscreen-boxes artists">
                <div class="container-fluid">
                    <div class="row">
                    <?php echo'<div class="col-md-6 col-sm-6 no-padding home-full" style="background-image:url('.get_field('super_beetle').')">'?>
                        <div class="text-content">
                            <h2>Super Beetle?</h2>
                            <p>Have you got a super beetle? Here you can find a detailed history year by year</p>
                        </div>
                    </div>
                    <?php echo'<div class="col-md-6 col-sm-6 no-padding home-full" style="background-image:url('.get_field('standard_beetle').')">'?>
                    <div class="text-content">
                        <h2>Standard Beetle?</h2>
                        <p>Have you got a super beetle? Here you can find a detailed history year by year</p>
                    </div>
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