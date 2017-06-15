<div class="col-4 homepage-functie">
    <div class="homepage-functie-titel">
        <h3><?php the_title(); ?></h3>
    </div>
    <div class="homepage-functie-afbeelding">
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        } ?>
    </div>
    <div class="homepage-functie-omschrijving">
        <?php the_excerpt(); ?>
    </div>
    <div class="homepage-funcie-meer">
        <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary" role="button">Lees meer</a>
    </div>
</div>