<?php

	/**
	 * Template part for displaying a mobile slider
	 *
	 * @link https://codex.wordpress.org/Template_Hierarchy
	 *
	 * @package Makenzie_Blog
	 */

	// query args
	$makenzie_sticky = get_option( 'sticky_posts' );
	$makenzie_teaser_styles = makenzie_lite_get_theme_mod( 'teaser_styles', 'slider-1' );
	$makenzie_teaser_tag_slug = makenzie_lite_get_theme_mod( 'teaser_tag_slug', '' );
	$makenzie_teaser_number_post = makenzie_lite_get_theme_mod( 'teaser_number_post', '5' );
	$makenzie_teaser_category = makenzie_lite_get_theme_mod( 'teaser_category', 'yes' );
	$makenzie_teaser_excerpt = makenzie_lite_get_theme_mod( 'teaser_excerpt', 'no' );
	$makenzie_teaser_button = makenzie_lite_get_theme_mod( 'teaser_button', 'yes' );
	$makenzie_slug_term = term_exists( 'featured', 'post_tag' );

	if ( $makenzie_slug_term !== 0 && $makenzie_slug_term !== null ) {
		$makenzie_slug_term_featured = 'featured';
	} else {
		$makenzie_slug_term_featured = '';
	}

	if ($makenzie_teaser_tag_slug != '') {
		$makenzie_args = array(
			'post_type' => 'post',
			'posts_per_page' => $makenzie_teaser_number_post,
			'tax_query' => array(
				array(
					'taxonomy' => 'post_tag',
					'field'    => 'slug',
					'terms'    => $makenzie_teaser_tag_slug,
				),
			),
		);
	} elseif ( $makenzie_slug_term_featured == 'featured') {
		$makenzie_args = array(
			'post_type' => 'post',
			'posts_per_page' => $makenzie_teaser_number_post,
			'tax_query' => array(
				array(
					'taxonomy' => 'post_tag',
					'field'    => 'slug',
					'terms'    => 'featured',
				),
			),
		);
	} else {
		$makenzie_args = array(
			'posts_per_page' => 4,
			'post__in'  => get_option( 'sticky_posts' ),
			'ignore_sticky_posts' => 1
		);
	}




	// query posts
	$makenzie_lite_query = new WP_Query( $makenzie_args );

	if ( $makenzie_lite_query->have_posts() ) :

?>

<div id="<?php echo $makenzie_teaser_styles; ?>" data-autoplay="0">
	<div class="slider-content">
		<?php
			/* Start the Loop */
			while ( $makenzie_lite_query->have_posts() ) : $makenzie_lite_query->the_post(); ?>

			<article style="background-image: url(<?php the_post_thumbnail_url(); ?>);" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- Post Main Content -->
				<div class="post-main">

					<!-- Post Category -->
					<?php if ($makenzie_teaser_category != 'no') { ?>
						<span class="entry-category"><?php the_category( ' / ' ); ?></span>
					<?php } ?>

					<!-- Post Title -->
					<header class="entry-header">
						<?php
						if ( is_single() ) :
							the_title( '<h1 class="entry-title">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif; ?>
					</header>

					<!-- Post Content -->
					<?php if ($makenzie_teaser_excerpt != "no" ) { ?>
						<div class="entry-content align-center">
							<?php the_excerpt(); ?>
						</div>
					<?php } ?>

					<?php if ($makenzie_teaser_button != "no" ) { ?>
						<div class="continue-reading">
							<a href="<?php the_permalink(); ?>"><?php _e( 'Continue Reading', 'makenzie-lite' ) ?><span class="arrow">&#8594;</span></a>
						</div>
					<?php } ?>

				</div>
				<div class="slider-post-overlay"></div>
			</article><!-- #post-## -->
			<?php endwhile;
		?>
	</div>
</div>
<?php
	endif;
	wp_reset_postdata();
?>
