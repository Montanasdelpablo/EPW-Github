<div id="header">
<div class="container">	

                   	
						
						<div class="toggle" style='display:none'>
							<a class="toggleMenu" href="#"><?php _e('Menu','epw'); ?></a>
						</div> 	

						<div class="main-nav">

							
							<?php wp_nav_menu( array(
								'theme_location'  => 'primary', 
								'menu'            => 'Primary Menu',
								'container'       => 'div',
								'container_class' => 'menu-{menu slug}-container',
								'container_id'    => 'cssmenu',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => true,
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul>%3$s</ul>'
								) ); ?>							
						</div>						
				<div class="clear"></div>

 </div>
 </div>