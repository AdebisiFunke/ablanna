<?php
/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ablanna
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-content">
		<?php the_content();wp_link_pages(array('before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ablanna' ),'after'  => '</div>',));?>
	</div><!-- .entry-content -->
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
		<?php edit_post_link( sprintf( wp_kses(__( 'Edit <span class="screen-reader-text">%s</span>', 'ablanna' ),array('span' => array('class' => array(),),)),wp_kses_post( get_the_title() )),'<i class="fa fa-pencil-square-o"></i>&nbsp;<span class="edit-link">','</span>');?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
