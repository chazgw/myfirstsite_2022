<?php 
	
	get_header();  // loads header.php

	echo '<h1 style="text-align: center;">';
	echo "This is a headersssss!";
	echo '</h1>';

bloginfo('name');  // Displays the page's title

do_action( 'wp_head' ); // is the normal stuff that a default header provides