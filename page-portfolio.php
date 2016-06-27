<?php 

require 'header.php';

?>

<?php get_template_part("inc/main-nav"); ?>

<div class="container">

	<div class="row">
	
		
			<?php 

			$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 9, 'order' => 'ASC' );
			$loop = new WP_Query( $args );
			
			while ( $loop->have_posts() ) : $loop->the_post();
			echo "<div id='portfolioitemov' class='col-md-12'>";

			echo "<div class='entry-content'>";
	  	    echo "<h2>";
	  	    	the_title();
	  	   	echo "</h2>";
				
			  echo '</div>';
				echo "<div class='row'>";
					the_post_thumbnail('portfolio-item-overview');
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



<?php 

require 'footer.php';

?>