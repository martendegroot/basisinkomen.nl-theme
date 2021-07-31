<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php the_content(); ?>
		<?php
			$args = array(
				'post_type' => 'nieuwsberichten',
				'post_status' => 'publish',
				'posts_per_page' => 8, 
				'orderby' => 'title', 
				'meta_key' => 'datum',
				'orderby' => 'meta_value',
				'order' => 'DSC'				
			);	
		   	$nieuws_posts = new WP_Query($args);
		   	if($nieuws_posts->have_posts()) : 
			  	while($nieuws_posts->have_posts()) : 
					$nieuws_posts->the_post();
		?>		<div class="nieuwsbericht">
				   	<h3><?php the_field('datum') ?> - <?php the_field('bron') ?></h3>
					<a href="<?php the_field('link'); ?>" target="_blank"><h2><?php the_title() ?></h2></a>
				 	<div><?php the_field('korte_omschrijving') ?></div> 
					<?php if (has_category()): $category = get_the_category(); echo $category[0]->cat_name; endif; ?>
					<?php the_tags(); ?>
					<a href="<?php the_field('link'); ?>" target="_blank">open link</a>
				<hr/>
				</div>
		<?php
			  endwhile;
		   else: 
		?>
			 <p>Geen nieuwsberichten</p> 
		<?php
		   endif;
		?>
			

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
