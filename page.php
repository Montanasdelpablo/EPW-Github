<?php 

require 'header.php';

?>

<?php get_template_part("inc/main-nav"); ?>

<div class="container">
	
	<div class="row">
		
		
		<?php 

			$args = array( 'post_type' => 'page');
			$loop = new WP_Query( $args );
			
			while ( $loop->have_posts() ) : $loop->the_post();
			echo "<div id='' class='col-md-6'>";

			echo "<div class='entry-content'>";
			$y = get_permalink();
	  	    echo "<h2> <a href='$y'>";
	  	    	the_title();
	  	   	echo " </a> </h2> ";
				
			  echo '</div>';
				
				echo "<div class='row'>";
				echo "<p>";
				the_content();
				echo "</p>";

		  	    echo "</div>";

		  	  
		  	    
			echo "</div>";
			endwhile;

			?>

	</div>
</div>





<?php 

require 'footer.php';

?>