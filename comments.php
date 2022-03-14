<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ablanna
 */
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area">
	<?php if ( have_comments() ):?>
		<h2 class="comments-title"><?php $ablanna_comment_count = get_comments_number();
			if('1' === $ablanna_comment_count ) {printf( esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'ablanna' ),'<span>'. wp_kses_post( get_the_title() ).'</span>');
			} else {
				printf( esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $ablanna_comment_count, 'comments title', 'ablanna' ) ),
				number_format_i18n( $ablanna_comment_count ),'<span>' . wp_kses_post( get_the_title() ) . '</span>');
			}
			?>
		</h2><!-- .comments-title -->
		<?php the_comments_navigation(); ?>
		<ol class="comment-list"><?php wp_list_comments( array('style'=> 'ol','short_ping' => true,));?></ol><!-- .comment-list -->
		<?php the_comments_navigation(); if ( ! comments_open() ):?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'ablanna' ); ?></p>
			<?php endif;
	endif; comment_form();
	?>
</div><!-- #comments -->
