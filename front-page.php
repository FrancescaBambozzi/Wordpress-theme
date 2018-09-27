<?php get_header(); ?>

<div id="hero">
   <h1>First Theme</h1>
   <h2>Ciao<h2>
</div>

<?php if ( have_posts() ) : ?>
   <?php while ( have_posts() ) : the_post(); ?>
       <?php the_content();?>
   <?php endwhile; ?>
<?php endif; ?>





<?php get_footer(); ?>
