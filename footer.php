			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="wrap clearfix">

				<div class="clearfix">

				<div class="fourcol first clearfix">
					<h3>Stay Connected</h3>
					<ul class="icons contact">
						<li><a href="mailto:nzwalschots@gmail.com"><i class="icon-envelope icon-2x"></i></a></li>
						<li><a href="//twitter.com/nataliezed"><i class="icon-twitter icon-2x"></i></a></li>
						<li><a href="//www.facebook.com/NatalieZed"><i class="icon-facebook icon-2x"></i></a></li>
						<li><a href="//plus.google.com/112539816416047516237"><i class="icon-google-plus icon-2x"></i></a></li>
						<li><a href="//ca.linkedin.com/in/nataliezed"><i class="icon-linkedin icon-2x"></i></a></li>
						<li><a href="/feed/"><i class="icon-rss icon-2x"></i></a></li>
					</ul>

				</div>
		

				<div class="bio eightcol last clearfix">

						<?php
							$options = get_option( 'nz_theme_options' );

							query_posts( 'page_id='.$options['bioid'] );

							if( have_posts() ) : while ( have_posts() ) : the_post();
							?>
							
							<h3><?php echo $options['biotitle']; ?></h3>

							<div class="thumb">
								<?php the_post_thumbnail( 'medium' ); ?>
							</div>
							<div class="info">
								<?php global $more; $more = 0; ?>
								<?php the_content('Read More...'); ?>
							</div>

							<?php endwhile; endif; 	?>

					</div>

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
