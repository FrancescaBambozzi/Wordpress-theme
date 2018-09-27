<?php
/*
  Template Name: Portfolio Page
*/
 ?>

 <?php get_header();?>

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

   <h1><?php the_title(); ?></h1>

   <p><?php the_field('description'); ?></p> <!-- advanced custom field plugin -->

 	<?php the_field('images'); ?> <!-- advanced custom field plugin -->

<p>
  <?php previous_post_link(); ?> -
  <a href="<?php bloginfo('url'); ?>/portfolio" ?>Back to Portfolio</a> -
  <?php next_post_link(); ?>
</p>

		<?php the_content(); ?>




 <?php endwhile; else : ?>
 <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>


 <?php get_footer();?>
