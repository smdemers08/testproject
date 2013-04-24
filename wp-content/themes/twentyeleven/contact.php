<?php
/*
Template Name: Contact Page
*/
?>




<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
	<div id="primary">
			<div id="content" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

			<ul>
				<?php
				global $post;
				$args = array( 'post_type'       => 'contacts' );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) :	setup_postdata($post); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<?php endforeach; ?>
				</ul>



			</div><!-- #content -->
		</div><!---#primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>