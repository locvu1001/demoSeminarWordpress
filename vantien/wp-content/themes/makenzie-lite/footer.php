<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Makenzie_Blog
 */

	$makenzie_lite_footer_text_left = makenzie_lite_get_theme_mod( 'footer_text_left', __( 'Copyright 2020. All Rights reserved.', 'makenzie-lite' ) );

?>
			</div><!-- #grid-x -->
		</div><!-- #grid container -->
	</div><!-- #content -->

	<footer id="colophon">
		<div class="site-footer">
			<div class="grid-container fluid">
				<div class="grid-x grid-padding-x">
					<?php
					if ( is_active_sidebar( 'footer' ) ) :
						dynamic_sidebar( 'footer' );
					endif;
					?>
				</div>
			</div>
		</div>
	</footer><!-- #footer-widgets -->
	<div class="small-site-footer">
		<div class="grid-container fluid">
			<div class="grid-x grid-padding-x">
				<div class="cell small-12 medium-auto text-center medium-text-left">
						<?php if ( $makenzie_lite_footer_text_left ) : ?>
						<?php echo esc_attr( $makenzie_lite_footer_text_left ); ?>
						<?php
						if ( function_exists( 'the_privacy_policy_link' ) ) {
							the_privacy_policy_link( '<span class="privacy_policy">', '</span>' );
						}
						?>
					<?php endif; ?>
				</div>
				<div class="cell small-12 medium-shrink">
					<a href="#page" class="linktop" data-smooth-scroll title="<?php _e('Top', 'makenzie-lite'); ?>"><i class="fas fa-chevron-up"></i></a>
				</div>
				<div class="cell small-12 medium-auto text-center medium-text-right">
					<a href="<?php echo esc_url( __( 'https://wplook.com/product/themes/magazines/makenzie-lifestyle-blog-magazine-wordpress-theme/?utm_source=footer&utm_medium=link&utm_campaign=makenzie_lite', 'makenzie-lite' ) ); ?>" rel="nofollow">
						<?php
							printf( __( 'Made with %1$s by %2$s', 'makenzie-lite' ), '<i class="fas fa-heart"></i>', __( 'WPlook Themes', 'makenzie-lite' ) );
						?>
					</a>
				</div>

			</div>
		</div>
	</div>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
