<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col">

<?php 
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content-single', get_post_format() );

        $verantwoordelijkheden = get_field('verantwoordelijkheden');
        if (isset($verantwoordelijkheden) || !trim($verantwoordelijkheden)==='')
        { 
            echo('<h2>Verantwoordelijkheden</h2>');
            echo($verantwoordelijkheden);
        }

        $tijdsinspanning = get_field('tijdsinspanning');
        if (isset($tijdsinspanning) || !trim($tijdsinspanning)==='')
        { 
            echo('<h2>Tijdsinspanning</h2>');
            echo($tijdsinspanning);
        }


        $organisatie = get_field('organisatie');
        if (isset($organisatie) || !trim($organisatie)==='')
        { 
            echo('<h2>Organisatie</h2>');
            echo($organisatie);
        }
        
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    endwhile; endif; 
?>
        </div>
        <div class="col-4">
            <p>
                <strong>Huidige invulling</strong><br/>
<?php

        $ingevuld = get_field('ingevulde_functie');

        if ($ingevuld) 
        {   ?>
            <img src="<?php the_field('afbeelding_huidige_vrijwilliger'); ?>" />
            <br/><br/><?php
            the_field('huidige_invulling');            
        }
        else
        {   ?>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/functie-open.png" class="image-fluid" />
            <br/><br/>Vrijwilliger gezocht<br/><br/>
            <a href="/aanmelden" class="btn btn-primary" role="button">Aanmelden</a>    <?php
        }   ?>

            </p>
        </div>
    </div>
</div>
        
<?php get_footer(); ?>