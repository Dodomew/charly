<?php get_header(); ?>

 
<?php get_sidebar(); ?>


<div class="index-container">

    <?php if ( have_posts() ) : ?>
    
    <?php 
    $counter = 0; // Start the counter
    $maximumPosts = 6;
?>

        <div class="featured-image-container">
        <?php
            
            while ( have_posts() ) : the_post();
            
            if ( $counter == $maximumPosts)
            {
                break;
            }
            $counter++;
            
        ?>
		
			<?php if ( is_home() ) : ?>
		
				<div class="featured-image">
                    
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
                    
				</div><!-- .post-->
		
			<?php else : ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="post-header">

						<div class="date"><?php the_time( 'M j y' ); ?></div>

						<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

						<div class="author"><?php the_author(); ?></div>

					</div><!--.post-header-->

					<div class="entry clear">

						<?php the_content(); ?>

						<?php edit_post_link(); ?>

						<?php wp_link_pages(); ?>

					</div><!--. entry-->

					<footer class="post-footer">

						<div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>

					</footer><!--.post-footer-->

				</div><!-- .post-->

			<?php endif; ?>
			
        <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>

    </div>
            <!--<nav class="navigation index">
                <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
                <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
            </nav>--><!--.navigation-->
			
        <?php else : ?>

    <?php endif; ?>
    
    </div>


<?php get_footer(); ?>