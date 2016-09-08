<?php /* Template Name: colors */ get_header(); ?>

    <section class="colors-listing">

    <h1><?php the_title(); ?></h1>
        
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>
                
                <?php 

				if( have_rows('color_chart') ): ?>
					<div id="color-chart-container">
					<?php 

					// loop through rows (parent repeater)
					while( have_rows('color_chart') ): the_row(); ?>
						<div>
							<h3><?php the_sub_field('year_title'); ?></h3>
							<?php 

							// check for rows (sub repeater)
							if( have_rows('colors_sub_chart') ): ?>
								<ul>
								<?php 

								// loop through rows (sub repeater)
								while( have_rows('colors_sub_chart') ): the_row();

									echo 'fin qua ci sei';
									?>
									<li><?php the_sub_field('nome_colore'); ?></li>
								<?php endwhile; //color sub chart endwhile?>
								</ul>
							<?php endif; //end if color sub chart ?>
						</div>	

					<?php endwhile; // end while color chart ?>
					</div>
				<?php endif; // end if color list ?>
        
        
                </section>

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
