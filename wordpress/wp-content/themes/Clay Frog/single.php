<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Clay Frog
 * 
 */

get_header(); 
get_sidebar(); 

?>

<div class="single-post-body">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					?>
                    <article id="post-<?php the_ID(); ?>"<?php post_class(); ?> >

                        <header class="post-header">

                            <?php the_title(); ?>


                        </header><!-- .entry-header -->
                        
                        
                        <?php the_post_thumbnail(); ?>

                        <div class="post-text">
                            
                            <?php the_content(); ?>
                            
                        </div><!-- .entry-content -->
                        
                            <?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
                        
                        </article><!-- #post-## -->
            
                        <?php
            
                            endwhile;
            
                        ?>
                            </div><!-- #content -->

                        <?php

get_footer();