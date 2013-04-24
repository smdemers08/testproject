	<div id="comments">
	<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php echo 'This post is password protected. Enter the password to view any comments.', 'wpeden'; ?></p>
	</div><!-- #comments -->
	<?php
 
			return;
		endif;
	?>

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 id="comments-title">
			<?php
				printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'wpeden' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>
		<nav id="comment-nav-above">
			<h1 class="assistive-text"><?php _e( 'Comment navigation', 'wpeden' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link(  '&larr; Previous Comments' ); ?></div>
			<div class="nav-next"><?php next_comments_link(  'Next Comments &rarr;' ); ?></div>
		</nav>
		<?php endif; ?>

		<ul class="commentlist">
			<?php
				/* Loop through and list the comments. Tell wp_list_comments()
				 * to use sensitive_comment() to format the comments.
				 * If you want to overload this in a child theme then you can
				 * define sensitive_comment() and that will be used instead.
				 * See sensitive_comment() in wpeden/functions.php for more.
				 */
				wp_list_comments(array('callback'=>'sensitive_comment','avatar_size'=>64, 'reply_text'=>'Reply')); 
			?>
		</ul>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-below">
			<h1 class="assistive-text"><?php _e( 'Comment navigation', 'wpeden' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link(  '&larr; Older Comments' ); ?></div>
			<div class="nav-next"><?php next_comments_link('Newer Comments &rarr;' ); ?></div>
		</nav>
		<?php endif; ?>

	<?php	 
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="nocomments"><?php echo 'Comments are closed.'; ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
