<?php /* Template Name: chi-siamo */ get_header(); ?>

	<section class="chi-siamo-content normal-page-content">
            <!-- artisti listing content-->
            <div class="single-content-heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/ema.jpg"></div>
                        <div class="col-md-4"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Sara.jpg"></div>
                        <div class="col-md-4"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/paolo.jpg"></div>
                    </div>
                    <h1 class="single-content-title"><?php the_title(); ?></h1>
                    <h2 class="single-content-subtitle theano"><?php the_field('sottotitolo_header'); ?></h2>
                </div>
            </div>
        </header>
        <div class="container">
            
                <?php 
            
                $testiNormali = get_field('text_block');
                if($testiNormali)
                {
                    foreach($testiNormali as $testoNormale)
                    {
                        echo'<div class="single-text-content">
                        <h2 class="single-text-subtitle">'.$testoNormale['subtitle'].'</h2>
                        <span class="single-text-subtitle">'.$testoNormale['subtitle_underlined'].'</span>
                        <p>'.$testoNormale['paragrafo'].'</p>
                        <div>';
                    }
                }
                ?>
        </div>

    </section>

<?php get_footer(); ?>