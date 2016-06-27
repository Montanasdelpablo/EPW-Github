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
		<p> 
Below this or right from this you will see the different portfolio items. The button will take you to the post. From there you can watch other items or you can specify which category you want to see.
<br>
All the portfolio items are divided into short letter codes. For example; IMI stands for "Interactive Media Ideation". Where IMP stands for "Interactive Media Production".
<br>

</p>
		</div>
		
		<div class="col-md-6" id="rightcontent2"> 
		<div class="row">
			<?php 

			$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 6, 'order' => 'ASC' );
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
		  	    $y = get_permalink();
		  	    	echo "<button  class='readmorebutton'> <a href='$y'> READ MORE </a> </button>";
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
		<p> 
		If you want to know something about me, make sure to check out the profile to the right or below this element. From there you can read my curriculum vitae and see the different skills I have.
		<button class="readmorebutton"> <a href="index.php?page_id=7"> READ MORE </a> </button>
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
	  	   	 //$y = get_permalink();
				//echo "<button class='readmorebutton'> <a  href='$y'> READ MORE </a> </button>";
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
				<p> During the years, I have written a lot. Usually these writings go into my blog, feel free to check out some subjects. They vary alot! 

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
	  	   	 $y = get_permalink();
				echo "<button class='readmorebutton'> <a href='$y' > READ MORE </a> </button>";
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

