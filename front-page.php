<?php get_header(); ?> 
 <header>
    <h1>CodeKracken</h1>
    <p>Kracken the code in web design</p>
</header>
<section class="tiles">
 <?php 
     $args = array(
    'meta_key' => 'order',
    'orderby' => 'meta_value',
    'order' => 'ASC'
);
    query_posts( $args, 'post_type=post&cat=13'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
/* * See if the current post is in category html5. 
   * If it is, the div is given the CSS class "post-category-three".
   * Otherwise, the div is given the CSS class "post".
*/
if ( in_category( 'html5' ) ) : ?>
<article class="style1">
    <?php elseif ( in_category( 'css3' )) : ?>
<article class="style2">
   <?php elseif ( in_category( 'javascript' )) : ?>
   <article class="style3">
   <?php elseif ( in_category( 'php' )) : ?>
   <article class="style4">
   <?php elseif ( in_category( 'wordpress' )) : ?>
   <article class="style5">
   <?php elseif ( in_category( 'reseller-hosting' )) : ?>
   <article class="style6">
    <?php endif; ?>
 <span class="image">
    <?php the_post_thumbnail(); ?>
</span>
        <a href="<?php the_permalink(); ?>">
        <h2><?php the_title() ?></h2>
        <div class="content">
            <?php the_excerpt(); ?>
        </div>
       </a>
    </article>
<?php endwhile; else :
/*
 * The very first "if" tested to see if there were any posts to
 * display. This "else" part tells what do if there weren't any.
 */
_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
 // Completely stop the Loop.
 endif;
       
       wp_reset_query();
?>
   
    </section>			
<?php get_footer(); ?>