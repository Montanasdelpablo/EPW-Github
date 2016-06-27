<?php 

require 'header.php';

?>

<?php get_template_part("inc/main-nav"); ?>

<div class="container">

	<div class="row">
	
		<div class="col-md-6">
			<?php 

			$args = array( 'post_type' => 'profiel', 'posts_per_page' => 1, 'order' => 'ASC' );
			$loop = new WP_Query( $args );
			
			while ( $loop->have_posts() ) : $loop->the_post();
			echo "<div id='profielitemov' class='col-md-12'>";

			echo "<div class='row'>";
					//the_post_thumbnail();
		  	echo "</div>";

			echo "<div class='row'>";
		  	    echo "<h2>";
		  	    	the_title();
		  	   	echo "</h2>";
			echo '</div>';
				

	  	    echo "<div class='row'>";
	  	    	echo "<p>";
	  	    	echo the_content();
	  	    	echo "</p>";
	  	    echo "</div>";
		  	    
			echo "</div>";
			endwhile;

			?>


		</div>
	

</div>
</div>




<?php 

require 'footer.php';

?>