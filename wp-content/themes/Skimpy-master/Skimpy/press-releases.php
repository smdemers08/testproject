<?php
/*
Template Name: Press-Releases
*/
?>
<?php
/*
 * @package WordPress
 */
get_header(); ?>
<div class="content">

	
<!-- COPY AND PASTE ALL BELOW THIS LINE TILL I SAY STOOOOOPPPPPPPPP -->
<!-- PAST IN YOUR CONTENT DIV -->

<?php 
/* Get posts by type */
$args = array( 'post_type' => 'press-releases');
$lastposts = get_posts( $args );

/* LOOPS through all posts that it can find by the type above*/
foreach($lastposts as $post) : setup_postdata($post); ?>

	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	
		<?php the_content(); ?>

		<hr />

		<div class="publication">
				Published in: <?php print_custom_field('placeofpublication'); ?>
		</div>

		<div class="pubdate">
		Date: <?php print_custom_field('publication_date'); ?><br />
	</div>

	<div class="author">
		Written By: <?php print_custom_field('author'); ?><br />
	</div>
<?php endforeach; ?>

<!-- STOOOOOPPPPPPPPP -->

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?> 