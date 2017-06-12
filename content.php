<div class="col homepage-functie">
    <div class="homepage-functie-titel">
        <h3><?php the_title(); ?></h3>
    </div>
    <div class="homepage-functie-afbeelding">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/functie-open.png" class="image-fluid" />
    </div>
    <div class="homepage-functie-omschrijving">
        <?php the_excerpt(); ?>
    </div>
    <div class="homepage-funcie-meer">
        <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary" role="button">Lees meer</a>
    </div>
</div>