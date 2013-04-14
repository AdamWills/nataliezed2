			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="wrap clearfix">
					
					<div class="bio">

						<?php
							$options = get_option( 'nz_theme_options' );

							query_posts( 'page_id='.$options['sprucebioid'] );

							if( have_posts() ) : while ( have_posts() ) : the_post();
							?>
							
							<h3><?php echo $options['sprucebiotitle']; ?></h3>

							<div class="thumb">
								<?php the_post_thumbnail( 'medium' ); ?>
							</div>
							<div class="info">
								<?php global $more; $more = 0; ?>
								<?php the_content('Read More...'); ?>
							</div>

							<?php endwhile; endif; 	?>

					</div>

					<nav role="navigation">
    					<?php bones_footer_links(); ?>
	                </nav>
	                		
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
