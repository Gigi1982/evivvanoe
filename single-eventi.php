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
                    <?php 
            
                    $immaginiGenerali = get_field('gallery_generale');
                    if ($immaginiGenerali) {
                        foreach($immaginiGenerali as $immagineGenerale) {
                            echo '<div class="col-md-6">
                                    <a class="artist-single-images" href="'.$immagineGenerale['immagine_gallery_generale'].'">
                                <img class="img-responsive" src="'.$immagineGenerale['immagine_gallery_generale'].'" />
                                </a>
                            </div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
        



    </div>
</section>

<?php get_footer(); ?>