<?php
/*
Template Name: Portfolio
*/

    get_header(); 
    get_sidebar(); 

?>

<div class="index-container-portfolio-page">
    
    <div class="featured-image-container">

        <?php
        // the query
            $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

        <?php if ( $wpb_all_query->have_posts() ) : ?>

           <!-- the loop -->

           <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

            <div class="hvr-border-fade">
                <div class="featured-image">

                   <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>

                </div>
            </div>

           <?php endwhile; ?>
           <!-- end of the loop -->

           <?php wp_reset_postdata(); ?> 

        <?php else : ?>

           <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

        <?php endif; ?>

        
        
    </div>
    
</div>
    
<?php 

    get_footer();

?>