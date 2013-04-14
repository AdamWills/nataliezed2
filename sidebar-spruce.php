				<div id="sidebar1" class="sidebar spruce-sidebar fourcol last clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'sidebar-spruce' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar-spruce' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert help">
							<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
						</div>

					<?php endif; ?>

				</div>