<?php
    get_header();
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    else :

$homePage = get_bloginfo(url);

        _e( 'Woops! looks like we made a mistake. That page is not here, either the link is broken or we havent added it yet. <br>', 'codekracken' );
echo 'Try Going back to the ' ?>
 <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home Page</a> or select from a Category below:
  
 <?php 
  $categories = get_categories( array(
    'orderby' => 'name',
    'parent'  => 0
) );
 echo '<ul>';
foreach ( $categories as $category ) {
   
    printf( '<li><a href="%1$s">%2$s</a></li>',
        esc_url( get_category_link( $category->term_id ) ),
        esc_html( $category->name )
    );
    
}
echo '</ul>';
  ?>
   <?php
    endif;
    
    get_footer(); 
?>


