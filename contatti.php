<?php /* Template Name: contatti */ get_header(); ?>

	<!-- section -->
<section class="normal-page-content">
    
    <div class="container">
        <header class="without-bg">
            <div class="row">
                <div class="col-md-3">
                    <h1 class="single-content-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </header>
        <div class="row">
                <div class="col-md-6">
                    <div class="contact-column">
                        <h6>CONTATTI </h6><p>Telefono: 3397340061<br>
    e-mail: <a href="mailto:info@evvivanoe.it">info@evvivanoe.it</a></p><h6>ORARI</h6><p>Apertura: dal martedì al sabato,<br> 
    10:30-13:30 - 16-19:30</p><p></p><h6>INDIRIZZO</h6><p>Via Grassi 16, Torino</p>
                    </div>
                </div>
            <div class="col-md-6">
                <h6>CONTATTACI </h6>
                <?php echo do_shortcode('[contact-form-7 id="93" title="Modulo di contatto 1"]')?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>