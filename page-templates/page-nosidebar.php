<?php
/**
 * Template Name: Page with no sidebar no header picture
 */

get_header('2'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
