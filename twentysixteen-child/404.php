<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?><div class="widget-area">
						<?php dynamic_sidebar( 'sidebar-6' ); ?>
					</div><!-- .widget-area --><?php endif; ?>
			<?php get_search_form() ?>
		</main><!-- .site-main -->

		<?php get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
