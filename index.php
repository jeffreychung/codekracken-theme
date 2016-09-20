<?php get_header(); ?>

   <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1></a>
    
        <?php the_excerpt(); ?>
        

    <?php endwhile; ?>
<?php endif; ?>
   
   
<?php get_footer(); ?>