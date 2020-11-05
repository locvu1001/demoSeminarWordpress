<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Makenzie_Blog
 */

get_header(); ?>

	<div id="primary" class="content-area small-12 large-9 cell">
		<main id="main" class="site-main">
			<?php
				$makenzie_archive_title_on_off = makenzie_lite_get_theme_mod( 'archive_title_on_off', 'on' );
				if ( $makenzie_archive_title_on_off != 'off') :
					get_template_part( 'template-parts/header/template-title' );
				endif;
			?>
		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :

				the_post();

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			/* Custom post navigation */
			makenzie_lite_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
