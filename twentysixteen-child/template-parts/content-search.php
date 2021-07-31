<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

	<div class='blogpost'>
		<a href='<?php the_permalink(); ?>'>
				<?php the_post_thumbnail('thumbnail'); ?>
		</a>		
				<div class='blogtekst'>
					<a href='<?php the_permalink(); ?>'>
						<h6><?php echo get_the_title(); ?></h6>
					</a>	
					<span class='datum'><?php echo get_the_date(); ?></span>
					<p class='samenvatting'><?php echo get_the_excerpt(); ?></p>
					<?php echo "<a class='samenvatting' href='".get_the_permalink()."'>Lees verder</a>"; ?>
				</div>
		</div>


