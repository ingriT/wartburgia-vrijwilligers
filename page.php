<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">

<?php 
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content-single', get_post_format() );
    endwhile; endif; 
?>
        </div>
        <div class="col-md-2">
            <p>
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/wartlogo_2.png" class="img-fluid" />
            </p>
            <p>
                <strong>Contact</strong><br/>
                <a href="mailto:bestuur@asvwartburgia.nl">bestuur@asvwartburgia.nl</a><br/>
            </p>
        </div>
    </div>
</div>
        
<?php get_footer(); ?>