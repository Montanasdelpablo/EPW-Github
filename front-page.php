<?php 

require 'header.php';


?>

<?php get_template_part("inc/sidebar-nav"); ?>

<div id="page-content-wrapper">

 <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
	

<div class="container-fluid" id="maincontent1">
	<div class="row row-centered">
		<div class="col-md-12 text-center" id="introduction">
		<h1> Welcome to my Website! </h1>
		<h4> Feel free to look around. Scroll down if you want to take a fast look. <br> Any questions? Contact me.</h4>

		<div class="row row-centered">
	 	<div class="col-md-12 text-center" id="calltoaction">

		<button class="introbutton" type="button"> <a href="#maincontent2">  MY PORTFOLIO</a> </button>
		<button class="introbutton" type="button"> <a href="#contact"> CONTACT ME</a>  </button>
		</div>
	</div>
	</div>

	
</div>

	

</div>

<div class="container-bg">
<div class="container-fluid" id="maincontent2">
	<div class="row">
		<div class="col-md-6" id="leftcontent2"> 
		<h1> Portfolio <h1>
		<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac fringilla enim, vitae ultrices justo. Curabitur in dolor interdum, feugiat augue vel, congue purus. Quisque vitae diam turpis. Sed vestibulum porta augue, id interdum tellus interdum consectetur. Etiam sagittis nisi vel mi rutrum elementum. In non placerat nibh, eget dignissim urna. In malesuada risus arcu, sed ornare massa tempus ac. Sed sodales sapien id eros congue, at dictum risus laoreet. Duis sed quam eu nibh lobortis dapibus sed eget quam. Aliquam finibus, magna consectetur convallis gravida, nibh tortor eleifend nisi, in congue lorem lacus vitae sapien. Nunc ac efficitur dui, porta bibendum odio.

</p>
		</div>
		
		<div class="col-md-6" id="rightcontent2"> 
		<div class="row">
			<?php 

			$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 9, 'order' => 'ASC' );
			$loop = new WP_Query( $args );
			
			while ( $loop->have_posts() ) : $loop->the_post();
			echo "<div id='portfolioitem' class='col-md-3'>";

			echo "<div class='entry-content'>";
	  	    echo "<h1>";
	  	    	the_title();
	  	   	echo "</h1>";
				
			  echo '</div>';
				echo "<div class='row'>";
					the_post_thumbnail();
		  	    echo "</div>";

		  	    echo "<div class='row'>";
		  	    	echo "<button class='readmorebutton'> <a> READ MORE </a> </button>";
		  	    echo "</div>";
		  	    
			echo "</div>";
			endwhile;

			?>
		</div>

		</div>

	</div>
</div>

<div class="container-fluid" id="maincontent3">
	<div class="row">

		
		<div class="col-md-6" id="leftcontent3"> 
		<h1> About me <h1>
		<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac fringilla enim, vitae ultrices justo. Curabitur in dolor interdum, feugiat augue vel, congue purus. Quisque vitae diam turpis. Sed vestibulum porta augue, id interdum tellus interdum consectetur. Etiam sagittis nisi vel mi rutrum elementum. In non placerat nibh, eget dignissim urna. In malesuada risus arcu, sed ornare massa tempus ac. Sed sodales sapien id eros congue, at dictum risus laoreet. Duis sed quam eu nibh lobortis dapibus sed eget quam. Aliquam finibus, magna consectetur convallis gravida, nibh tortor eleifend nisi, in congue lorem lacus vitae sapien. Nunc ac efficitur dui, porta bibendum odio.
 </p>

		</div>
		<div class="col-md-6" id="rightcontent3"> 


		<?php 

			$args = array( 'post_type' => 'profiel', 'posts_per_page' => 1 );
			$loop = new WP_Query( $args );
			
			while ( $loop->have_posts() ) : $loop->the_post();
			echo "<div id='profielitem' class='col-md-12'>";

			echo "<div class='row entry-content'>";
	  	    echo "<h1>";
	  	    	the_title();
	  	   	echo "</h1>";
				echo "<button class='readmorebutton'> <a> READ MORE </a> </button>";
			echo '</div>';
				
				echo "<div class='row'>";
					the_post_thumbnail();
		  	    echo "</div>";

		  	    
			echo "</div>";
			endwhile;

			?>

		</div>

	</div>

</div>

<div class="container-fluid" id="maincontent4">
		<div class="row">

			<div class="col-md-6" id="leftcontent4"> 
				<h1> My blog <h1>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac fringilla enim, vitae ultrices justo. Curabitur in dolor interdum, feugiat augue vel, congue purus. Quisque vitae diam turpis. Sed vestibulum porta augue, id interdum tellus interdum consectetur. Etiam sagittis nisi vel mi rutrum elementum. In non placerat nibh, eget dignissim urna. In malesuada risus arcu, sed ornare massa tempus ac. Sed sodales sapien id eros congue, at dictum risus laoreet. Duis sed quam eu nibh lobortis dapibus sed eget quam. Aliquam finibus, magna consectetur convallis gravida, nibh tortor eleifend nisi, in congue lorem lacus vitae sapien. Nunc ac efficitur dui, porta bibendum odio.

				</p>

			</div>
			<div class="col-md-6" id="rightcontent4"> 


			<?php 

			$args = array( 'post_type' => 'blog', 'posts_per_page' => 2, 'order' => 'ASC' );
			$loop = new WP_Query( $args );
			
			while ( $loop->have_posts() ) : $loop->the_post();
			echo "<div id='blogitem' class='col-md-3'>";

			echo "<div class='row entry-content'>";
	  	    echo "<h1>";
	  	    	the_title();
	  	   	echo "</h1>";
				echo "<button class='readmorebutton'> <a> READ MORE </a> </button>";
			echo '</div>';
				echo "<div class='row'>";
					the_post_thumbnail('blog-item-frontpage');
		  	    echo "</div>";

		  	    
			echo "</div>";
			endwhile;

			?>


			</div>

		</div>

	</div>
	</div>

<div id="contact" class="container-fluid">

<div class="row">
	<h1 class='col-md-6 col-md-offset-3'> Contact me </h1>
</div>

<div class="row"  id="contactform">
	
<?php get_template_part("inc/contactform"); ?>

</div>
	
</div>

</div>


<?php 

require 'footer.php';



?>

