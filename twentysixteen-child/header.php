<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Acme|Baloo+Chettan+2|Domine:700|Oswald|Raleway:900&display=swap" rel="stylesheet">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-33004113-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-33004113-1');
	</script>
</head>

<body <?php body_class(); ?> <?php if( get_field('achtergrond', 'option') ): ?>style="background-image: url(<?php the_field('achtergrond', 'option'); ?>)" <?php endif; ?>>
<?php 
	wp_body_open(); 
	$front_page_appendix = is_front_page() ? " front-page" : "";
?>
<div id="page" class="site<?= $front_page_appendix ?>">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
			<div class="top-menu">	
						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'social',
											'menu_class'  => 'social-links-menu',
											'depth'       => 1,
											'link_before' => '<span class="screen-reader-text">',
											'link_after'  => '</span>',
										)
									);
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>				
				
				<?php if ( has_nav_menu( 'mini-menu' ) ) : ?>
					<div id="site-mini-menu" class="site-header-menu mini-menu">
						<?php if ( has_nav_menu( 'mini-menu' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'mini-menu',
											'menu_class' => 'primary-menu',
										)
									);
								?>
							</nav><!-- .mini-menu -->
						<?php endif; ?>	
					</div>	
				<?php endif; ?>	
			</div>
				<div class="site-branding">
				<?php if (get_header_image()) : ?>
					<div class="filler">
						<img src="<?php header_image(); ?>">	
					</div>
				<?php endif; ?>	
						
					<div class="custom-logo">
						<a href="<?php echo get_site_url(); ?>">
							<img src="<?php echo get_site_url(); ?>/wp-content/uploads/Logo-Basisinkomen-Nederland-2-square.png">
						</a>	
					</div>
						
					<div class="titles">
						<a href="<?php echo get_site_url(); ?>">
							<img src="<?php echo get_site_url(); ?>/wp-content/uploads/Logo-Basisinkomen-Nederland-2-tekst.png">
						</a>
					</div>	
					<div class="bulletpoints">
						 <?php if( get_field('bulletpoints', 'option') ): ?>
							<?php the_field('bulletpoints', 'option'); ?>
						<?php endif; ?>
					</div>
				</div><!-- .site-branding -->

				<?php if ( has_nav_menu( 'primary' ) ) : ?>

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'primary',
											'menu_class' => 'primary-menu',
										)
									);
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>
					</div><!-- .site-header-menu -->
				<?php endif; ?>
			</div><!-- .site-header-main -->

		</header><!-- .site-header -->

		<div id="content" class="site-content widget-area">
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<aside class="headingbar">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</aside>
			<?php endif; ?>

