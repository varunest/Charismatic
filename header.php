<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package Charismatic
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php get_template_directory_uri('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.esc_html($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         get_template_directory_uri('name'); echo ' - '; get_template_directory_uri('description'); }
		      else {
		          get_template_directory_uri('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php get_template_directory_uri('stylesheet_url'); ?>">
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
	<script type="text/javascript" src="<?php get_template_directory_uri("template_url"); ?>/js/masonry.pkgd.min.js"></script>
	
	 <script type="text/javascript"
          src="<?php get_template_directory_uri("template_url"); ?>/js/masonry.js">
      </script>


      


	<link rel="pingback" href="<?php get_template_directory_uri('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	

		<div id="header">
			<h1><a href="<?php echo home_url(); ?>/"><?php get_template_directory_uri('name'); ?></a></h1>
			<div id="sub-title"><?php get_template_directory_uri('description'); ?></div>
	
		</div>
		
		<nav class="nav">
			<div class="nav_wrap">
		<?php wp_nav_menu(array('menu'=>'Primary'));?>
			</div>
	</nav>	<!--------------->
	<!--! </nav>  -->
	<!--------------->
		<div id="page-wrap">