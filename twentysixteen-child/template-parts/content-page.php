<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_post_thumbnail(); ?>

<?php $countacc=0;
if( have_rows('content') ):
    while ( have_rows('content') ) : the_row();
        if( get_row_layout() == 'een_kolom' ):
            $field1 = get_sub_field('kolom_1');
			echo "<div class='dranger'>"; if( get_sub_field('achtergrond') ): echo "<div class='achtergrond'><img src='".get_sub_field('achtergrond')."'></div>"; endif; echo "<div class='entry-content rij kolom1 rkop'>";
				echo $field1;
			echo "</div></div>";	
        elseif( get_row_layout() == 'kop' ):
            $field1 = get_sub_field('kop');
			echo "<div class='dranger'>"; if( get_sub_field('achtergrond') ): echo "<div class='achtergrond'><img src='".get_sub_field('achtergrond')."'></div>"; endif; echo "<div class='entry-content rij kolom1 rkop'><h2>";
				echo $field1;
			echo "</h2></div></div>";	
        elseif( get_row_layout() == 'knop' ):
            $field1 = get_sub_field('knop');
			$field2 = get_sub_field('link');
			echo "<div class='dranger'>"; if( get_sub_field('achtergrond') ): echo "<div class='achtergrond'><img src='".get_sub_field('achtergrond')."'></div>"; endif; echo "<div class='entry-content rij kolom1 rkop'>";
				echo $field1;
			echo "</h5></a></div></div>";			
        elseif( get_row_layout() == 'twee_kolommen_beeld_links' ): 
            $field1 = get_sub_field('kolom_1');
            $field2 = get_sub_field('kolom_2');	
			echo "<div class='dranger'>"; if( get_sub_field('achtergrond') ): echo "<div class='achtergrond'><img src='".get_sub_field('achtergrond')."'></div>"; endif; echo "<div class='entry-content rij kolom1 rkop'>";
				echo "<div class='kolom25'>";
					if( !empty( $field1 ) ): ?>
    					<img src="<?php echo esc_url($field1['url']); ?>" alt="<?php echo esc_attr($field1['alt']); ?>" />
					<?php endif; 
				echo "</div>";	
				echo "<div class='kolom75'>";
					echo $field2;	
				echo "</div>";		
			echo "</div></div>";		
        elseif( get_row_layout() == 'twee_kolommen_beeld_rechts' ): 
            $field1 = get_sub_field('kolom_1');
            $field2 = get_sub_field('kolom_2');	
			echo "<div class='dranger'>"; if( get_sub_field('achtergrond') ): echo "<div class='achtergrond'><img src='".get_sub_field('achtergrond')."'></div>"; endif; echo "<div class='entry-content rij kolom1 rkop'>";
				echo "<div class='kolom25'>";
					if( !empty( $field2 ) ): ?>
    					<img src="<?php echo esc_url($field2['url']); ?>" alt="<?php echo esc_attr($field2['alt']); ?>" />
					<?php endif; 	
				echo "</div>";			
				echo "<div class='kolom75'>";
					echo $field1;		
				echo "</div>";	
			echo "</div></div>";
        elseif( get_row_layout() == 'twee_kolommen_tekst' ): 
            $field1 = get_sub_field('kolom_1');
            $field2 = get_sub_field('kolom_2');	
			echo "<div class='dranger'>"; if( get_sub_field('achtergrond') ): echo "<div class='achtergrond'><img src='".get_sub_field('achtergrond')."'></div>"; endif; echo "<div class='entry-content rij kolom1 rkop'>";
				echo "<div class='kolom50'>";
					echo $field1;	 	
				echo "</div>";			
				echo "<div class='kolom50'>";
					echo $field2;		
				echo "</div>";	
			echo "</div></div>";
        elseif( get_row_layout() == 'drie_kolommen_tekst' ): 
            $field1 = get_sub_field('kolom1');
            $field2 = get_sub_field('kolom2');	
            $field3 = get_sub_field('kolom3');		
			echo "<div class='dranger'>"; if( get_sub_field('achtergrond') ): echo "<div class='achtergrond'><img src='".get_sub_field('achtergrond')."'></div>"; endif; echo "<div class='entry-content rij kolom1 rkop'>";
				echo "<div class='kolom33'>";
					echo $field1;	 	
				echo "</div>";			
				echo "<div class='kolom33'>";
					echo $field2;		
				echo "</div>";
				echo "<div class='kolom33'>";
					echo $field3;		
				echo "</div>";			
			echo "</div></div>";	
        elseif( get_row_layout() == 'drie_kolommen_ng' ): 
            $field1 = get_sub_field('kolom1');
            $field2 = get_sub_field('kolom2');	
            $field3 = get_sub_field('kolom3');		
			echo "<div class='dranger'>"; if( get_sub_field('achtergrond') ): echo "<div class='achtergrond'><img src='".get_sub_field('achtergrond')."'></div>"; endif; echo "<div class='entry-content rij kolom1 rkop'>";
				echo "<div class='kolom34'>";
					echo $field1;	 	
				echo "</div>";			
				echo "<div class='kolom34'>";
					echo $field2;		
				echo "</div>";
				echo "<div class='kolom34'>";
					echo $field3;		
				echo "</div>";			
			echo "</div></div>";		
        elseif( get_row_layout() == 'vier_kolommen_tekst' ): 
            $field1 = get_sub_field('kolom_1');
            $field2 = get_sub_field('kolom_2');	
            $field3 = get_sub_field('kolom_3');
            $field4 = get_sub_field('kolom_4');			
			echo "<div class='dranger'>"; if( get_sub_field('achtergrond') ): echo "<div class='achtergrond'><img src='".get_sub_field('achtergrond')."'></div>"; endif; echo "<div class='entry-content rij kolom1 rkop'>";
				echo "<div class='kolom25'>";
					echo $field1;	 	
				echo "</div>";			
				echo "<div class='kolom25'>";
					echo $field2;		
				echo "</div>";	
				echo "<div class='kolom25'>";
					echo $field3;	 	
				echo "</div>";			
				echo "<div class='kolom25'>";
					echo $field4;		
				echo "</div>";			
			echo "</div></div>";			
        elseif( get_row_layout() == 'drie_kolommen' ): 
            $field1 = get_sub_field('icon_1');
            $field2 = get_sub_field('titel_1');	
            $field3 = get_sub_field('icon_2');
            $field4 = get_sub_field('titel_2');		
            $field5 = get_sub_field('icon_3');
            $field6 = get_sub_field('titel_3');	
            $field7 = get_sub_field('kolom_1');	
            $field8 = get_sub_field('kolom_2');	
            $field9 = get_sub_field('kolom_3');			
			echo "<div class='dranger'>"; if( get_sub_field('achtergrond') ): echo "<div class='achtergrond'><img src='".get_sub_field('achtergrond')."'></div>"; endif; echo "<div class='entry-content rij kolom1 rkop'>";
				echo "<div class='kolom33'>"; ?> <?php
					echo $field1;
					echo "<h4>".$field2."</h4>";
					echo $field7;
				echo "</div>";	
				echo "<div class='kolom33'>"; ?><?php
					echo $field3;
					echo "<h4>".$field4."</h4>";
					echo $field8;
				echo "</div>";	
				echo "<div class='kolom33'>"; ?><?php
					echo $field5;
					echo "<h4>".$field6."</h4>";
					echo $field9;
				echo "</div>";		
			echo "</div></div>";	
 		elseif( get_row_layout() == 'blogcategorie' ):
			echo "<div class='dranger'>"; if( get_sub_field('achtergrond') ): echo "<div class='achtergrond'><img src='".get_sub_field('achtergrond')."'></div>"; endif; echo "<div class='entry-content rij kolom1 rkop'>";
				$field1 = get_sub_field('blogcategorie');
				$field2 = get_sub_field('aantal');
				$field3 = get_sub_field('elementen');
				if ($field2=="") { $field2=0; }
					$args = array(
    					'post_type'=>'post',
    					'cat'=>$field1,
						'posts_per_page' => $field2,
						);
					$pusts = new WP_Query($args);
					if ($pusts->have_posts()){
    					while ($pusts->have_posts()){
        					$pusts->the_post(); 
							echo "<div class='blogpost'><a href='".get_the_permalink()."'>";
							if( $field3!="" ): 
								foreach( $field3 as $element ): 
									if ($element=="beeld") { the_post_thumbnail('thumbnail'); }
								endforeach; 
							endif; 		
							echo "</a><div class='blogtekst'>";
							if( $field3 ): 
								foreach( $field3 as $element ): 
									if ($element=="titel") { echo "<a href='".get_the_permalink()."'><h6>".get_the_title()."</h6></a>"; }
									if ($element=="datum") { echo "<span class='datum'>".get_the_date()."</span>"; }
									if ($element=="samenvatting") { echo "<p class='samenvatting'>".get_the_excerpt()."</p>"; 
																	echo "<a class='samenvatting' href='".get_the_permalink()."'>Lees verder</a>";
																  }	
								endforeach; 
							else :
								echo "<a href='".get_the_permalink()."'><h6>".get_the_title()."</h6></a>";
								echo "<span class='datum'>".get_the_date()."</span>";
							endif; 										
        					echo "</div></a></div>";																			
    					} 
					}
				wp_reset_postdata();	
			echo "</div></div>";		
        elseif( get_row_layout() == 'accordeon' ): 
			$countacc++;
			echo "<div class='dranger'>"; if( get_sub_field('achtergrond') ): echo "<div class='achtergrond'><img src='".get_sub_field('achtergrond')."'></div>"; endif; echo "<div class='entry-content rij kolom1 rkop'>";
			if( have_rows('tab') ):
				$count=1; 
				while ( have_rows('tab') ) : the_row();
				echo "<div class='linksacc'>";
					$field1 = get_sub_field('titel'); ?>
						<a onclick="toggle_visibility('<?php echo "link".$countacc.$count."a"; ?>', '<?php echo "c".$countacc; ?>')">
						<div class='acctitel'>
							<?php echo $field1; ?>
						</div></a>	<?php
				echo "</div>";	
				echo "<div class='rechtsacc'>";							
					$field2 = get_sub_field('tekst');
						if ($count==1) { $tt=" style='display: block'"; } else { $tt=""; } 
						echo "<div class='acctab c".$countacc."'".$tt." id='link".$countacc.$count."a'>";
							echo $field2;
						echo "</div>";	
						$count++; 
					echo "</div>";
				endwhile; 								
			endif;	
			echo "</div></div>";				
    elseif( get_row_layout() == 'drie_kolommen_links' ): 
			$field1 = get_sub_field('icon_1');
			$field2 = get_sub_field('kolom_1');	
			$field3 = get_sub_field('icon_2');
			$field4 = get_sub_field('kolom_2');		
			$field5 = get_sub_field('icon_3');
			$field6 = get_sub_field('kolom_3');	
			$field7 = get_sub_field('link_1');	
			$field8 = get_sub_field('link_2');	
			$field9 = get_sub_field('link_3');			
			echo "<div class='dranger'>"; if( get_sub_field('achtergrond') ): echo "<div class='achtergrond'><img src='".get_sub_field('achtergrond')."'></div>"; endif; echo "<div class='entry-content rij kolom1 rkop'>";
				echo "<div class='kolom33'>"."<a href='".$field7."'>";
					echo $field1;
					echo $field2;		
				echo "</a></div>";	
				echo "<div class='kolom33'>"."<a href='".$field8."'>";
					echo $field3;
					echo $field4;	
				echo "</a></div>";	
				echo "<div class='kolom33'>"."<a href='".$field9."'>";
					echo $field5;
					echo $field6;	
				echo "</a></div>";		
			echo "</div></div>";
		elseif( get_row_layout() == 'home_introductie' ):
			get_template_part( 'template-parts/componenten/introductie/index' );
		elseif( get_row_layout() == 'arguments_favor' ):
			get_template_part( 'template-parts/componenten/pluspunten/index' );
		elseif( get_row_layout() == 'arguments_against' ):
			get_template_part( 'template-parts/componenten/tegenwerpingen/index' );
		elseif( get_row_layout() == 'recent_posts' ):
			get_template_part( 'template-parts/componenten/recente_berichten/index' );
    endif;		
    endwhile;
endif;
?>	

	<main id="main" class="site-main" role="main">	
		<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
		?>

</article><!-- #post-<?php the_ID(); ?> -->
