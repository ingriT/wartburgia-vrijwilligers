<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
<?php 
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content-single', get_post_format() );

        $verantwoordelijkheden = get_field('verantwoordelijkheden');
        if (isset($verantwoordelijkheden) || !trim($verantwoordelijkheden)=='')
        { 
            echo('<h2>Verantwoordelijkheden</h2>');
            echo($verantwoordelijkheden);
        }

        $tijdsinspanning = get_field('tijdsinspanning');
        if (isset($tijdsinspanning) || !trim($tijdsinspanning)=='')
        { 
            echo('<h2>Tijdsinspanning</h2>');
            echo($tijdsinspanning);
        }


        $organisatie = get_field('organisatie');
        if (isset($organisatie) || !trim($organisatie)=='')
        { 
            echo('<h2>Overleg</h2>');
            echo($organisatie);
        }
        
        $extra_informatie_vrijwilligers = get_field('extra_informatie_vrijwilligers');
        if (isset($extra_informatie_vrijwilligers) && !trim($extra_informatie_vrijwilligers)=='')
        { 
            $ingevuld = get_field('ingevulde_functie');    
            $afbeelding_huidige_vrijwilliger = get_field('afbeelding_huidige_vrijwilliger');
            $huidige_invulling = get_field('huidige_invulling');

            echo('<h2 id="more" name="more">Huidige invulling</h2>');
            if ($ingevuld && isset($afbeelding_huidige_vrijwilliger) && !trim($afbeelding_huidige_vrijwilliger)=='')
            { 
                echo('<p><img src="' . $afbeelding_huidige_vrijwilliger .'" class="img-fluid" style="max-width: 300px;" /></p>');
            }
            if (isset($huidige_invulling) && !trim($huidige_invulling)=='')
            { 
                echo('<p><strong>' . $huidige_invulling . '</strong></p>');
            }

            echo($extra_informatie_vrijwilligers);
        }

    endwhile; endif; 
?>
        </div>
        <div class="col-md-4">
            <p>
                <strong>Huidige invulling</strong><br/>
<?php
        $ingevuld = get_field('ingevulde_functie');    
        $afbeelding_huidige_vrijwilliger = get_field('afbeelding_huidige_vrijwilliger');

        if (!$ingevuld)
        {   ?>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/functie-open.png" class="img-fluid" />
            <?php
        }
        else if (isset($afbeelding_huidige_vrijwilliger) && !trim($afbeelding_huidige_vrijwilliger)=='')
        { 
            echo('<img src="' . $afbeelding_huidige_vrijwilliger .'" class="img-fluid" />');
        }

        $huidige_invulling = get_field('huidige_invulling');
        if (isset($huidige_invulling) && !trim($huidige_invulling)=='')
        { 
            echo($huidige_invulling . '<br/><br/>');
        }
        else if ($ingevuld) 
        {
            echo('Ingevuld');
        }

        $extra_informatie_vrijwilligers = get_field('extra_informatie_vrijwilligers');
        if (isset($extra_informatie_vrijwilligers) && !trim($extra_informatie_vrijwilligers)=='')
        { 
            echo('<a href="#more" class="btn btn-primary">Lees meer</a>');
        }

        if (!$ingevuld) 
        {   ?>
            <br/><br/>Vrijwilliger gezocht<br/><br/>
            <a href="/aanmelden" class="btn btn-primary" role="button">Aanmelden</a>    <?php
        }   ?>

            </p>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();

                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; endif; 
        ?>
        </div>
    </div>
</div>
        
<?php get_footer(); ?>