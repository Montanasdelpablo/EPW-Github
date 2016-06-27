<div id="wrapper">
        <div class="overlay">
        	
        </div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       Pablo
                    </a>
                </li>
                

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
               
              
                
              
            </ul>
        </nav>
        
      
      