<?php get_header(); ?>

	<main role="main">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <section class="normal-page-content news-single">
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                <?php $featuredImageUrl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); ?>
                <?php $url = $featuredImageUrl['0']; ?>
                <?php 
                $category = get_the_category();
                
                ?>
                <?php echo'<header class="content-header" style="background-image:url('.$url.')">
                    <div class="single-content-heading">
                        <div class="container">
                            <span class="date">Pubblicato il '.get_the_date().'</span>
                            <h1 class="single-content-title">'.get_the_title().'</h1>
                            <h2 class="single-content-subtitle theano"></h2>
                            <span class="category">Categoria: '.$category[0]->cat_name.'</span>
                        </div>
                    </div>
                    <aside class="go-back-button"><a class="theano" href="'.get_permalink(get_option('page_for_posts')).'"><i class="
glyphicon glyphicon-arrow-left"></i> Torna alle news</a></aside>
                </header>' ?>
			<?php endif; ?>
			<!-- /post thumbnail -->
			<!-- post title -->
            <div class="container">
                <aside class="social-share-links">
                    <a class="fb-share" target="_blank" href="https://www.facebook.com/dialog/feed?app_id=692675060875728&display=popup&name=Evvivanoe+News+&caption=<?php the_excerpt(); ?>&link=<?php the_permalink();?>&description=<?php the_title(); ?>&redirect_uri=<?php the_permalink();?>&picture=<?php the_post_thumbnail_url(); ?>"><i class="icon icon-facebook-square big"></i></a>
                    <a class="twitter-share" target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_field( 'news_testo' ); ?>&via=evvivanoe"><i class="icon icon-twitter-square big"></i></a>
                </aside>
			<!-- /post title -->
                
            <!-- /post content -->
                <div class="single-news-container">
                    <?php 

                        $notizie = get_field('News_fields');
                        if($notizie)
                        {
                            foreach($notizie as $notizia)
                            {
                                echo '<div class="text-block">
                                    <h2 class="subtitle"><span class="underlined">'.$notizia['sottotitolo_news'].'</span></h2>
                                    <p>'.$notizia['news_testo'].'</p>
                                    <div class="news-img-container"><img class="img-responsive" src="'.$notizia['immagine'].'" /></div>
                                </div>';
                            }
                        }
                    ?>
                    <?php 
            
                    $immaginiGenerali = get_field('gallery_generale');
                    if ($immaginiGenerali) {
                        echo '<div id="lightNews"><h2 class="subtitle"><span class="underlined">Gallery</span></h2><div class="row">';
                        foreach($immaginiGenerali as $immagineGenerale) {
                            echo '<div class="col-md-6">
                                    <a class="news-single-images" href="'.$immagineGenerale['immagine_gallery_generale'].'">
                                <img class="img-responsive" src="'.$immagineGenerale['immagine_gallery_generale'].'" />
                                </a>
                            </div>';
                        }
                    }
                    ?>
                    <?php echo'</div></div>' ?>
                </div>
            </div>
            </section>
		</article>
        
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
