<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?><div class="widget-area">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div><!-- .widget-area --><?php endif; ?><?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?><div class="widget-area">
						<?php dynamic_sidebar( 'sidebar-3' ); ?>
					</div><!-- .widget-area --><?php endif; ?><?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?><div class="widget-area">
						<?php dynamic_sidebar( 'sidebar-4' ); ?>
					</div><!-- .widget-area --><?php endif; ?><?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?><div class="widget-area">
						<?php dynamic_sidebar( 'sidebar-5' ); ?>
					</div><!-- .widget-area --><?php endif; ?><div class="site-info">

			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->


<?php wp_footer(); ?>
<script type="text/javascript">
<!--
    function toggle_visibility(id, className) {
	  tabcontent = document.getElementsByClassName("tab");
  			for (i = 0; i < tabcontent.length; i++) {
    			tabcontent[i].style.display = "none";
  			}
	  tabcontent = document.getElementsByClassName(className);
  			for (i = 0; i < tabcontent.length; i++) {
    			tabcontent[i].style.display = "none";
  			}	
	   var activetab = document.getElementById(id);
       if(activetab.style.display == 'block')
          activetab.style.display = 'none';
       else
          activetab.style.display = 'block';
    }
 	$(".linksacc").click(function() {
    	$(this).addClass('selected');
    });
//-->
</script>
</body>
</html>
