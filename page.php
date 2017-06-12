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
    endwhile; endif; 
?>
        </div>
        <div class="col-4">
            <p>
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/wartlogo.gif" class="image-fluid" />
            </p>
            <p>
                <strong>Contact gegevens</strong><br/>
                <a href="mailt:bestuur@wartburgia.nl">bestuur@wartburgia.nl</a><br/>
                <a href="tel:06-12345678">06-12345678</a><br/>
            </p>
        </div>
    </div>
</div>
        
<?php get_footer(); ?>