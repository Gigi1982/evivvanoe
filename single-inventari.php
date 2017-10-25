<?php get_header(); ?>


<div class="container">
    
    <?php if(have_rows('galleria_inventario')): ?>
        <div class="row">
            <?php while (have_rows('galleria_inventario')) : the_row(); ?>
            <div class="col-md-6">
                <div class="inventario-item">
                    <header class="inventario-heading">
                        <img class="img-responsive" src="<?php the_sub_field('immagine_opera'); ?>" />
                    </header>
                    <div class="inventari-content">
                        <h3><?php the_sub_field('titolo_opera'); ?></h3>
                        
                        <?php if( get_sub_field('misure_opera') ): ?>
                        <span class="inventory-data">
                            <?php the_sub_field('misure_opera'); ?>
                        </span>
                         <?php endif; ?>
                        <span class="inventory-data">
                            <?php the_sub_field('materiale_opera'); ?>
                        </span>
                        <div class="inventari-text-content">
                            <?php the_sub_field('testo_opera'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</div>