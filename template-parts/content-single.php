<?php
/**
 * Template part for displaying single page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ablanna
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header"><?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		<div class="entry-meta"><?php ablanna_posted_by(); ablanna_posted_on();?>
		</div><!-- .entry-meta -->
		<hr/>
	</header><!-- .entry-header -->
	<div class="entry-content"><?php the_content(); ?>
	</div><!-- .entry-content -->
	<footer class="entry-footer"><?php ablanna_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->