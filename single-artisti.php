<?php get_header(); ?>

<!-- section -->
<section class="artisti-single-content no-padding-top">
    <?php echo '<header class="single-artist-header" style="background-image:url('.get_field('foto_artisti').')">' ?>
        <div class="single-artist-heading">
            <div class="container">
                <h1 class="single-artist-title"><?php the_title(); ?></h1>
                <h2 class="single-artist-subtitle theano"><?php the_field('sottotitolo_principale'); ?></h2>
            </div>
        </div>
    <aside class="go-back-button"><a class="theano" href="<?php echo get_page_link(12); ?>"><i class="
glyphicon glyphicon-arrow-left"></i> Tutti gli artisti</a></aside>
    </header>
    <div class="container">
        <div class="artisti-content">
        <?php 
            
        $testi = get_field('blocco_testo');
        if($testi)
        {
            foreach($testi as $testo)
            {
                echo '<div class="text-block">
                    <h2 class="subtitle"><span class="underlined">'.$testo['sottotitolo_sottolineato'].'</span></h2>
                    <h3 class="artist-subtitle theano">'.$testo['secondo_sottotitolo'].'</h3>
                    <p>'.$testo['contenuto_testuale'].'</p>
                </div>';
            }
        }
        ?>
        </div>
        <section class="gallery-section">
            <h2 class="subtitle"><span class="underlined">Gallery</span></h2>
            <h3 class="artist-subtitle theano"></h3> 
            <div id="lightgallery">
                <?php if(have_rows('gallery')): ?>
                <ul class="events-gallery-slider">
                    <?php while (have_rows('gallery')) : the_row(); ?>
                        <li>
                            <img class="img-responsive" src="<?php the_sub_field('immagine_gallery'); ?>" />
                        </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
            </div>
        </section>
        



    </div>
</section>

<?php get_footer(); ?>