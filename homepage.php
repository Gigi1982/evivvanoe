<?php /* Template Name: home */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="homepage-content">
            <!--<aside class="scroll-icons">
                <a class="scroll-down" href="#"><i class="glyphicon glyphicon-menu-down"></i></a>
            </aside>-->
            <div class="section slide1-kaleido">
                <div class="full-page-bg visible-sm visible-xs"></div>
                <div class="video-bg-container">
                    <video class="embed-video-bg hidden-sm hidden-xs" autoplay loop muted>
                      <source src="<?php echo get_template_directory_uri(); ?>/img/caleido.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="container">
                    <div class="home-slide">
                        <div class="video-showcase-text">
                            <h1 class="big-showcase-title">EVVIVANOè GALLERIA D'ARTE TORINO.</h1>
                            <h2 class="big-showcase-subtitle theano">one story, many stories. </h2>
                        </div>
                        <h3 class="home-title"><?php echo pll_e('Ultimi Eventi'); ?></h3>
                        <ul class="events-slider">
                            <?php 
                            $args = array('post_type' => 'eventi');
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                            ?>

                            <li class="">
                                <header class="events-bg" style="background-image:url('<?php echo get_field('eventi_bg'); ?>')"></header>
                                <div class="events-caption">
                                    <a class="event-caption" href="<?php the_permalink(); ?>">
                                        <div class="caption-flexed">
                                            <h4 class="artist-title"><?php the_title(); ?></h4>
                                            <h5 class="theano artist-subtitle"><?php the_field('sottotitolo_eventi'); ?></h5>
                                        </div>
                                        <i class="icon icon-right-open"></i>
                                    </a>
                                </div>
                            </li>


                        <?php endwhile;?>
                        </ul>
                        
                    </div>
                </div>
                <?php wp_reset_postdata(); ?>
                
<!-- da decommentare - caption su video
                <div class="video-showcase-text">
                    <div class="container">
                        <h1 class="big-showcase-title">EVVIVANOè WITH KALEIDOSCOPE EYES.</h1>
                        <h2 class="big-showcase-subtitle theano">one story, many stories. </h2>
                    </div>
                </div>
-->
                
            </div>
            <div class="section slide2-artist-listing">
                <div class="container">
                    <div class="home-slide-titles">
                        <h3 class="artist-title"><?php echo pll_e('I NOSTRI ARTISTI'); ?></h3>
                    </div>

                    <ul class="artist-home-listing">
                    <?php 
                    $args = array('post_type' => 'artisti');
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                      <li class="artist-container">
                            <header class="artist-header" style="background-image:url('<?php echo get_field('foto_artisti'); ?>')">
                            </header>
                            <div class="artist-listing-content">
                                <a class="event-caption" href="<?php the_permalink(); ?>">
                                    <div class="caption-flexed">
                                        <h4 class="home-title"><?php the_title(); ?></h4>
                                        <h5 class="theano artist-subtitle"><?php the_field('sottotitolo_principale'); ?></h5>
                                    </div>
                                    <i class="icon icon-right-open"></i>
                                </a>
                            </div>
                      </li>
                    <?php endwhile;?>
                    </ul>
                    <div class="home-buttons">
                        <a class="theano" href="<?php echo get_page_link(12); ?>"><i class="
icon icon-right-open"></i> Tutti gli artisti</a>
                    </div>
                </div>
            </div>
            <div class="section events">
                <div class="container">
                    <div class="home-slide-titles">
                        <h3 class="home-title"><?php echo pll_e('Ultime News'); ?></h3>
                    </div>
                    <ul class="home-news-listing">  
                        <?php 
                        $temp = $wp_query; $wp_query= null;
                        $wp_query = new WP_Query(); $wp_query->query('showposts=20' . '&paged='.$paged);
                        $category = get_the_category();
                        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                            <?php 
                            $featuredThumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
                            $url = $featuredThumb['0'];

                        ?>
                        <li class="news-thumb-container">
                            <div class="news-bg" style="background-image:url('<?php echo $featuredThumb['0']; ?>')"></div>
                            <a class="event-caption dark" href="<?php the_permalink(); ?>">
                                <div class="caption-flexed">
                                    <h4 class="home-title"><?php echo get_the_title(); ?></h4>
                                </div>
                                <i class="icon icon-right-open"></i>
                            </a>
                        </li>

                        <?php endwhile; ?>
                    </ul>
                    <div class="home-buttons">
                        <a class="theano" href="<?php echo get_page_link(32); ?>"><i class="
icon icon-right-open"></i> Tutte le news</a>
                    </div>
                </div>
            </div>
            <div class="section newsletter">
                <div class="container">
                    <div class="col-md-8 col-md-offset-2">
                        <!-- Begin Mailchimp Signup Form -->
                        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                        <style type="text/css">
                            #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                            /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                               We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                        </style>
                        <style type="text/css">
                            #mc-embedded-subscribe-form input[type=checkbox]{display: inline; width: auto;margin-right: 10px;}
                            #mergeRow-gdpr {margin-top: 20px;}
                            #mergeRow-gdpr fieldset label {font-weight: normal;}
                            #mc-embedded-subscribe-form .mc_fieldset{border:none;min-height: 0px;padding-bottom:0px;}
                        </style>
                        <div id="mc_embed_signup">
                        <form action="https://evvivanoe.us5.list-manage.com/subscribe/post?u=a3892d7d047bc8d80249621ab&amp;id=ab7fc75d31" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                            <h2>Iacriviti alla nostra newsletter</h2>
                        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                        <div class="mc-field-group">
                            <label for="mce-EMAIL">Indirizzo mail  <span class="asterisk">*</span>
                        </label>
                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                        </div>
                        <div class="mc-field-group">
                            <label for="mce-FNAME">Nome e cognome  <span class="asterisk">*</span>
                        </label>
                            <input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
                        </div>
                        <div class="mc-field-group">
                            <label for="mce-MMERGE6">Città  <span class="asterisk">*</span>
                        </label>
                            <input type="text" value="" name="MMERGE6" class="required" id="mce-MMERGE6">
                        </div>
                        <div class="mc-field-group input-group">
                            <strong>Formato Email </strong>
                            <ul><li><input type="radio" value="html" name="EMAILTYPE" id="mce-EMAILTYPE-0"><label for="mce-EMAILTYPE-0">HTML</label></li>
                        <li><input type="radio" value="text" name="EMAILTYPE" id="mce-EMAILTYPE-1"><label for="mce-EMAILTYPE-1">TESTO</label></li>
                        </ul>
                        </div>
                        <div id="mergeRow-gdpr" class="mergeRow gdpr-mergeRow content__gdprBlock mc-field-group">
                            <div class="content__gdpr">
                                <label>Marketing Permissions</label>
                                <p>Evvivanoé utilizzerà le informazioni da te fornite in questo modulo per restare in contatto con te, aggiornarti sulle attività culturali e per renderti partecipe delle iniziative artistiche. Per favore facci sapere il modo in cui vorresti essere contattato:</p>
                                <fieldset class="mc_fieldset gdprRequired mc-field-group" name="interestgroup_field">
                                <label class="checkbox subfield" for="gdpr_4101"><input type="checkbox" id="gdpr_4101" name="gdpr[4101]" value="Y" class="av-checkbox gdpr"><span>Email</span> </label><label class="checkbox subfield" for="gdpr_4105"><input type="checkbox" id="gdpr_4105" name="gdpr[4105]" value="Y" class="av-checkbox gdpr"><span>Direct Mail</span> </label><label class="checkbox subfield" for="gdpr_4109"><input type="checkbox" id="gdpr_4109" name="gdpr[4109]" value="Y" class="av-checkbox gdpr"><span>Customized online advertising</span> </label>
                                </fieldset>
                                <p>Puoi cambiare idea in qualsiasi momento e disiscriverti cliccando sul link di cancellazione al fondo di ogni email che ricevi o contattandoci su evvivanoe@evvivanoe.it. Tratteremo le tue informazioni con rispetto . Se vuoi conoscere il modo in cui trattiamo i dati personali puoi leggere l'informativa sulla privacy sul nostro sito. Cliccando qui sotto, dai il consenso al trattamento dei tuoi dati.</p>
                            </div>
                            <div class="content__gdprLegal">
                                <p><a href="https://mailchimp.com/legal/" target="_blank"></a>We<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>use<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>Mailchimp<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>as<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>our<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>marketing<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>platform<a href="https://mailchimp.com/legal/" target="_blank"></a>. <a href="https://mailchimp.com/legal/" target="_blank"></a>By<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>clicking<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>below<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>to<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>subscribe<a href="https://mailchimp.com/legal/" target="_blank"></a>, <a href="https://mailchimp.com/legal/" target="_blank"></a>you<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>acknowledge<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>that<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>your<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>information<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>will<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>be<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>transferred<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>to<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>Mailchimp<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>for<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>processing<a href="https://mailchimp.com/legal/" target="_blank"></a>. <a href="https://mailchimp.com/legal/" target="_blank"></a>Learn<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>more<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>about<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>Mailchimp<a href="https://mailchimp.com/legal/" target="_blank"></a>'<a href="https://mailchimp.com/legal/" target="_blank"></a>s<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>privacy<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>practices<a href="https://mailchimp.com/legal/" target="_blank"></a> <a href="https://mailchimp.com/legal/" target="_blank"></a>here<a href="https://mailchimp.com/legal/" target="_blank"></a>.</p>
                            </div>
                        </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a3892d7d047bc8d80249621ab_ab7fc75d31" tabindex="-1" value=""></div>
                            <div class="clear"><input type="submit" value="Iscriviti" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                            </div>
                        </form>
                        </div>
                        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[6]='MMERGE6';ftypes[6]='text';fnames[2]='MMERGE2';ftypes[2]='birthday'; /*
                         * Translated default messages for the $ validation plugin.
                         * Locale: IT
                         */
                        $.extend($.validator.messages, {
                               required: "Campo obbligatorio.",
                               remote: "Controlla questo campo.",
                               email: "Inserisci un indirizzo email valido.",
                               url: "Inserisci un indirizzo web valido.",
                               date: "Inserisci una data valida.",
                               dateISO: "Inserisci una data valida (ISO).",
                               number: "Inserisci un numero valido.",
                               digits: "Inserisci solo numeri.",
                               creditcard: "Inserisci un numero di carta di credito valido.",
                               equalTo: "Il valore non corrisponde.",
                               accept: "Inserisci un valore con un&apos;estensione valida.",
                               maxlength: $.validator.format("Non inserire pi&ugrave; di {0} caratteri."),
                               minlength: $.validator.format("Inserisci almeno {0} caratteri."),
                               rangelength: $.validator.format("Inserisci un valore compreso tra {0} e {1} caratteri."),
                               range: $.validator.format("Inserisci un valore compreso tra {0} e {1}."),
                               max: $.validator.format("Inserisci un valore minore o uguale a {0}."),
                               min: $.validator.format("Inserisci un valore maggiore o uguale a {0}.")
                        });}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                        <!--End mc_embed_signup-->
                    </div>
                    
                </div>
                
            </div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>