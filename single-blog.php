<?php 

require 'header.php';

?>

<?php get_template_part("inc/main-nav"); ?>

<div class="container">

	<div id="button" class="row">
		<button class="readmorebutton"> <a href="index.php?page_id=11"> GO BACK </a> </button>
	</div>

	<div id="singlepost" class="row">
	
			
			
			<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
  		

  		 <?php  
  		 	echo "<div id='blogitem' class='col-md-12'>";

			echo "<div class='row'>";
					the_post_thumbnail();
		  	echo "</div>";

			echo "<div class='entry-content'>";
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
			

		    	?>
		<?php endwhile; ?>
		<?php endif; ?> 


		
	

</div>
</div>



<?php 

require 'footer.php';

?>