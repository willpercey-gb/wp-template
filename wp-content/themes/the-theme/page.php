<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
            
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <?php
                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();
                                get_template_part( 'template-parts/content/content', 'page' );
                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) {
                                    comments_template();
                                }
                            endwhile; // End of the loop.
                        ?>    
                    </div>
                </div>
            </div>		

		</main><!-- #main -->
	</section><!-- #primary -->


<?php get_footer(); ?>