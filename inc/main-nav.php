<div id="header">
<div class="container">	

                   	
						
						<div class="toggle" style='display:none'>
							<a class="toggleMenu" href="#"><?php _e('Menu','epw'); ?></a>
						</div> 	
						<div class="row">
							<div class="col-md-12 main-nav">

								
								<?php wp_nav_menu( array(
									'theme_location'  => 'primary', 
									'menu'            => 'Primary Menu',
									'container'       => 'div',
									'container_class' => 'col-md-6 col-md-offset-3',
									'container_id'    => 'cssmenu',
									'menu_class'      => 'menu',
									'menu_id'         => '',
									'echo'            => true,
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul class="row">%3$s</ul>'
									) ); ?>							
							</div>	
						</div>					
				<div class="clear"></div>

 </div>
 </div>