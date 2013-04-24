<?php
/**
 * @package WordPress
 * @subpackage Yoko
 */
?>


<ul>
<?php
global $post;
$args = array( 'numberposts' => 2, 'post_type' => 'updates' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>




<div id="secondary" class="widget-area" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
				
			<?php endif; // end sidebar 1 widget area ?>
		</div><!-- #secondary .widget-area -->
</div><!-- end main -->

		<div id="tertiary" class="widget-area" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>
			
		<?php endif; // end sidebar 2 widget area ?>
		</div><!-- end tertiary .widget-area -->