

<?php
/**
 * @package WordPress
 */
?><xml version="1.0" encoding="UTF-8"/>
<!DOCTYPE html 

	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>Operation Friendship | Grafton Chapter</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/resources/normalize.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="container">
		<hgroup id="site-title">
		<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		 <h2 id="site-description"><?php echo get_bloginfo ( 'description' );  ?></h2>
		</hgroup>
	<div id="slideshow">
		 <?php do_action('slideshow_deploy', '14'); ?>
	</div>
	<div id="menu-head-navigation-container">
		 <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'depth' => 2, ) ); ?> 
	</div>





	      <h1 class="entry-title">
                        <?php if ( is_day() ) : ?>                            
                        <?php echo get_the_date(); ?>    
                        <?php elseif ( is_month() ) : ?>
                        Monthly Archives: <?php echo get_the_date( 'F Y' ); ?>                        
                        <?php elseif ( is_year() ) : ?>
                        <?php echo get_the_date( 'Y' ); ?>                            
                        <?php elseif(is_category()) : ?>
                        <?php echo single_cat_title( '', false ); ?>
                        <?php elseif(is_tag()) : ?> 
                        <?php echo single_tag_title(); ?>
                        <?php else : the_post(); ?> 
                        <?php echo get_the_title(); ?>
                        <?php rewind_posts(); endif; ?>
      </h1>
