<?php /* Template Name: sostienici */ get_header(); ?>

	<section class="normal-page-content">
            <!-- artisti listing content-->
        <?php echo '<header class="content-header" style="background-image:url('.get_field('header_bg').')">' ?>
            <div class="single-content-heading">
                <div class="container">
                    <h1 class="single-content-title"><?php the_title(); ?></h1>
                    <h2 class="single-content-subtitle theano"><?php the_field('sottotitolo_header'); ?></h2>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="sostienici-content">
                <div class="row">
                    <?php 

                    $sostieniciGenerali = get_field('sostienici_block');
                    if($sostieniciGenerali)
                    {
                        foreach($sostieniciGenerali as $sostieniciGenerale)
                        {
                            echo '<div class="text-block col-md-6">
                                <h2 class="subtitle"><span class="underlined">'.$sostieniciGenerale['title_sostienici'].'</span></h2>
                                <h3 class="artist-subtitle theano">'.$sostieniciGenerale['subtitle_sostienici'].'</h3>
                                <p>'.$sostieniciGenerale['text_block_sostienici'].'</p>
                            </div>';
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="contact-button"><a href="<?php bloginfo('url'); ?>/?page_id=102" class="btn btn-primary btn-lg">Contattaci</a></div>
            
        </div>

    </section>

<?php get_footer(); ?>