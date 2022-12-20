<?php 
	
	get_header();  // loads header.php

?>

<div style="float:left; width: 25%;">

	<?php get_sidebar(); ?>

</div>

<div id="main" style="width: 75%;">

  <h1>
	<?php 
		
		// Name of web site
		//echo "Name: " .bloginfo('name');  // Displays the page's title
	// this is now in header.php

	?>
  </h1>

  <h2>
	<?php 
	  // Tagline:

	echo "Description: ";
	bloginfo('description'); 
	?>
  </h2>
  
	
  <?php

	if(have_posts()) {

		while(have_posts()) {

		  the_post();  // note: commenting this out will break the "loop"

		  the_content();

	  }

	}

?>

</div>

<!-- Note: Use this to make the next div go below the previous one-->

<div id="footer" style="clear:both;"">

<?php
get_footer();
?>

</div>