<?php 

// show admin bar
 show_admin_bar( false ); 

// enqueue scripts
 function enqueuescripts () {
 	wp_enqueue_script("jquery");
 	
 }

 if (function_exists("enqueuescripts")) {
 	enqueuescripts();
 }


// include jquery 


?>