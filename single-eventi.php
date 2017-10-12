<?php get_header(); ?>

<!-- section -->
<section class="normal-page-content">
    <?php echo '<header class="content-header" style="background-image:url('.get_field('eventi_bg').')">' ?>
        <div class="single-content-heading">
            <div class="container">
                <h1 class="single-content-title"><?php the_title(); ?></h1>
                <h2 class="single-content-subtitle theano"><?php the_field('sottotitolo_eventi'); ?></h2>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="artisti-content">
        <?php 
            
        $testiGenerali = get_field('blocco_testo_generale');
        if($testiGenerali)
        {
            foreach($testiGenerali as $testoGenerale)
            {
                echo '<div class="text-block">
                    <h2 class="subtitle"><span class="underlined">'.$testoGenerale['sottotitolo_sottolineato_generale'].'</span></h2>
                    <h3 class="artist-subtitle theano">'.$testoGenerale['secondo_sottotitolo_generale'].'</h3>
                    <p>'.$testoGenerale['contenuto_testuale_generale'].'</p>
                </div>';
            }
        }
        ?>
        </div>
        <section class="gallery-section">
            <h2 class="subtitle"><span class="underlined">Gallery</span></h2>
            <h3 class="artist-subtitle theano"></h3> 
            <div id="lightgallery">
                <div class="row">
                    
<!--
                    <?php 
                    //$immaginiGenerali = get_field('gallery_generale');
                    //if ($immaginiGenerali) {
                      //  echo '<ul class="events-gallery-slider">';
                        //foreach($immaginiGenerali as $immagineGenerale) {
                            //echo '<li class=""><img class="img-responsive" src="'.$immagineGenerale['immagine_gallery_generale'].'" /></li';
                        //}
                        //echo '</ul>';
                    //}
                    ?>
-->
                    <?php if(have_rows('gallery_generale')): ?>
                    <ul class="events-gallery-slider">
                        <?php while (have_rows('gallery_generale')) : the_row(); ?>
                            <li>
                                <img class="img-responsive" src="<?php the_sub_field('immagine_gallery_generale'); ?>" />
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                
            </div>
        </section>
        



    </div>
</section>

<?php get_footer(); ?>