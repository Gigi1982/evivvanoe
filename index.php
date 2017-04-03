<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="normal-page-content news-listing">
            <div class="container">
			     <h1 class="single-content-title"><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

                    <div class="row">
                    <?php 
                    
                    $temp = $wp_query; $wp_query= null;
                    $wp_query = new WP_Query(); $wp_query->query('showposts=10' . '&paged='.$paged);
                    $category = get_the_category();
                    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                        <?php 
                        $featuredThumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
                        $url = $featuredThumb['0'];
                        echo 
                            '<div class="col-md-6 news-thumb-container">
                                <a href="'.get_permalink().'" class="news-thumb">

                                    <div class="news-bg" style="background-image:url('.$featuredThumb['0'].')"></div>
                                    <div class="news-caption">
                                        <span>'.$category[0]->cat_name.'</span>
                                        <h1 class="eventi-listing-title">'.get_the_title().'</h1>
                                    </div>
                                </a>
                            </div>' 
                        ?>
                        
                    <?php endwhile; ?>

                    <?php // wp_reset_postdata(); ?>

                    </div>
            </div>
            
		</section>
		<!-- /section -->
	</main>

<?/*php get_sidebar(); */?>

<?php get_footer(); ?>
