<?php 

require 'header.php';

?>

<?php get_template_part("inc/main-nav"); ?>

<div class="container">

	<div class="row">
	
		<div class="col-md-6">
			<?php 

			$args = array( 'post_type' => 'blog', 'posts_per_page' => 5, 'order' => 'ASC' );
			$loop = new WP_Query( $args );
			
			while ( $loop->have_posts() ) : $loop->the_post();
			echo "<div id='blogitemov' class='col-md-12'>";

			echo "<div class='row'>";
					echo "<h2>";
					echo the_title(); + "</h2>";

					echo "<h4>";
					echo "Geschreven door: ";
					echo the_author() + "</h4>";
		  	echo "</div>";

		  	 echo "<div class='row'>";
		  	    
		  	    echo "<p>";
		  	    echo the_excerpt(); + "</p>";
		  	 echo "</div>";

		  	 echo "<div class='row'>";
		  	    $y = get_permalink();
		  	    	echo "<button  class='readmorebutton'> <a href='$y'> READ MORE </a> </button>";
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