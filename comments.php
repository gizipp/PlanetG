<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to planetg_comment() which is
 * located in the functions.php file.
 *
 * @package PlanetG
 * @since PlanetG 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<section id="comments" class="comments-area">
	<?php
	$comments_args = array(
			'title_reply_to'    => __( 'Tinggalkan Jejak %s' ),
	        // change the title of send button 
	        'label_submit'=>'Kirim',
	         'comment_notes_before' => '',
	        // change the title of the reply section
	        'title_reply'=>'Tinggalkan Jejak',
	        // remove "Text or HTML to be displayed after the set of comment fields"
	        'comment_notes_after' => '',
	       
	);

	comment_form($comments_args);
	?>
	
	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			printf( _n( '1 Jejak Alien Pada &ldquo;%2$s&rdquo;', '%1$s Jejak Alien Pada &ldquo;%2$s&rdquo;', get_comments_number(), 'planetg' ),
			number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<ol class="commentlist">
			<?php wp_list_comments( array( 'callback' => 'planetg_comment', 'style' => 'ol' ) ); ?>
		</ol> <!-- /.commentlist -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
			<nav id="comment-nav-below" class="navigation" role="navigation">
				<h1 class="assistive-text section-heading"><?php esc_html_e( 'Comment navigation', 'planetg' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'planetg' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'planetg' ) ); ?></div>
			</nav>
		<?php endif; // check for comment navigation ?>

	<?php // If comments are closed and there are comments, let's leave a little note.
	elseif ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="nocomments"><?php esc_html_e( 'Comments are closed.', 'planetg' ); ?></p>
	<?php endif; ?>



</section> <!-- /#comments.comments-area -->
