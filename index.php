<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Wartburgia vrijwilligers</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p>
                Welkom op de site over de vrijwilligers van Wartburgia!</p>
            <p>
                Wartburgia is een vereniging en leeft dus bij de gratie van vrijwilligers. Lid zijn van Wartburgia betekent lid zijn van 
                een vereniging en houdt ook in dat iedereen zich inzet, langdurig of eenmalig, veel uren of maar een paar, het maakt 
                niet uit. Maar al onze leden zijn onderdeel van onze vereniging!</p>
            <p>
                Op deze site vind je de totale organisatiestructuur van Wartburgia (ingevuld door vrijwilligers), met een omschrijving 
                per functie, door wie de functie wordt ingevuld of dat hij nog vrij is. </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Uitgelichte functies</h2>
        </div>
    </div>
    <div class="row">

<?php 
    if ( have_posts() ) : while ( have_posts() ) : the_post();

        get_template_part( 'content', get_post_format() );

    endwhile; endif; 
?>

    </div>
</div>

<?php get_footer(); ?>