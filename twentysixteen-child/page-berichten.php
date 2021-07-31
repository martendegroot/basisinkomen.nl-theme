<?php
/**
 * Template Name: Berichtenlijst
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main class="site-main">
		<?php the_content(); ?>
		<?php
			$args = array(
				'post_type' => 'nieuwsberichten',
				'post_status' => 'publish',
				'posts_per_page' => 10000, 
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
				   	<h3><?php the_field('datum') ?> - <?php $id = get_the_ID(); $terms = get_the_terms($id, 'bronnen'); 
						if ( $terms ) :
								foreach( $terms as $term ) {
											if ( $cnt == "1"): echo ', '; endif;
											$cnt = 1;
											echo $term->name;
										}
						endif;
						$cnt = 0;
						?></h3>						
					<a href="<?php the_field('link'); ?>" target="_blank"><h2><?php the_title() ?></h2></a>
				 	<div><?php the_field('korte_omschrijving') ?></div> 
					<?php if (has_category()):  
						echo "<p><br/>Categorieën: ";
						foreach (get_the_category() as $category) {
							if ($a=='name') { echo " - "; }							
							echo $category->name;
							$a='name';
						}
						echo "</p>";
						endif; ?>
					<?php $tags = get_the_tags(); if($tags):  
						echo "<p><br/>Tags: ";
						foreach (get_the_tags() as $tag) {
							if ($a=='name') { echo " - "; }							
							echo $tag->name;
							$a='name';
						}
						echo "</p>";
						endif; ?>
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

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
