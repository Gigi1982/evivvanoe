<?php /* Template Name: inventario */ get_header(); ?>

	<!-- section -->
		<section class="artisti-single-content">
            <!-- artisti listing content-->
            <div class="container">
                <h1 class="single-content-title"><?php the_title(); ?></h1>
                <div class="artist-listing inventory-listing">
                    <div class="row">
                    <?php 
                    $args = array('post_type' => 'inventari','orderby' => 'title', 'order' => 'ASC');
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                        <?php 
                            if(have_rows('galleria_inventario')): 
                        ?>
                        <?php 
                            while (have_rows('galleria_inventario')) : the_row(); 
                            $inventoryImages = get_field('galleria_inventario');
                            $bgInventory = get_sub_field('immagine_opera');
                        ?>
                        <?php endwhile; ?>
                        <?php endif; ?>
                            <div class="col-md-6">
                                <a href="<?php the_permalink(); ?>">
                                    <div style="background-image:url('<?php echo $bgInventory; ?>')" class="inventory-bg">
                                        <header class="inventory-listing-item">
                                            <h1 class="inventory-listing-title"><?php the_title(); ?></h1>
                                            <span class="inventory-listing-subtitle"><?php _e( 'Opere presenti in catalogo:', 'html5blank' ); ?> <?php echo count($inventoryImages); ?></span>
                                        </header>
                                    </div>
                                </a>
                            </div>
                        
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </section>


            
            
		<!-- /section -->

                                
<?php get_footer(); ?>
