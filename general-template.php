<?php
/*
Template Name: General Template
*/
?>

<!-- ADDING header.php -->
<?php get_header(); ?>

<!-- ADDING general-template header and content-->
<?php
if( have_posts() ):
	while( have_posts() ): the_post();
    get_template_part( 'template-parts/content' );
	endwhile;
else:
?>
 <p><?php _e( 'There&rsquo;s nothing yet to be displayed...', 'siba-project' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
