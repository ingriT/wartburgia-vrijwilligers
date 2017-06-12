<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Wartburgia vrijwilligers</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p>Omschrijving van de website. Wartburgia is een gezellige zaterdag voetbalclub, met een leuke mengeling van vrouwen en mannen seniorenteams. Er zijn 11 herenteams, waaronder 3 veteranen ( 2 x 35+ en 1 x 45+) en 8 damesteams waarvan 2 veterinnen (35+) zeventallen. 
            De trainingen zijn op maandag- en woensdagavond.<br/>
            Ook hebben wij een florerende zaalafdeling, met 2 herenteams en 11 damesteams, spelend op wisselende avonden. 
            </p><p>
            Kom een keer kijken of neem contact met ons op, als je op zoek bent naar een leuke zaterdagclub. Zaalvoetbal bieden wij alleen aan als extra service voor onze veldleden.</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Uitgelichte vacatures</h2>
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