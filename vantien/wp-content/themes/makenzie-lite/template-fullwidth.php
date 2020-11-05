<?php

/**
 * Template Name: Full Width
 */

get_header(); ?>

	<div id="primary" class="content-area small-12 column">
		<main id="main" class="site-main">
			<?php
				$makenzie_page_title_on_off = makenzie_lite_get_theme_mod( 'page_title_on_off', 'on' );
				if ( $makenzie_page_title_on_off != 'off') :
					get_template_part( 'template-parts/header/template-title' );
				endif;
			?>
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
