<?php
/**
Theme specific styles and scripts
	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
	wp_enqueue_style( $handle, $src, $deps, $ver );
*/ 
wp_enqueue_script('parallax-js', 'https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js', array('jquery'), '1.0.0', true);
?>