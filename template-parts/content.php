<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ablanna
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row border p-2 mb-2">
        <div class="col-lg-4 pt-3"><?php ablanna_post_thumbnail(); ?></div>
        <div class="col-lg-8">
            <div class="post-content">
                <header class="entry-header">
                    <?php if (is_singular()) : the_title('<h2 class="entry-title">', '</h1>');
					else : the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '"  arial-label="Page Title">', '</a></h2>');
					endif; ?>
                    <?php if ('post' === get_post_type()) : ?>
                    <div class="entry-meta"><?php ablanna_posted_by();
												ablanna_posted_on(); ?>
                    </div><!-- .entry-meta -->
                    <?php endif; ?>
                </header><!-- .entry-header -->
                <div class="entry-content">
                    <?php if (is_single()) {
						the_content(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__('Read More ..<span class="screen-reader-text"> "%s"</span>', 'ablanna'),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								wp_kses_post(get_the_title())
							)
						);
					} else {
						the_excerpt();
						echo '<a role="button" href="' . esc_url(get_the_permalink($post->ID)) . '" class="read-more-btn"  role="link">' . esc_html__('Read More', 'ablanna') . '&nbsp;<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>';
					}
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__('Pages:', 'ablanna'),
							'after'  => '</div>',
						)
					);
					?>
                </div><!-- .entry-content -->
                <?php if (is_singular()) : ?>
                <footer class="entry-footer"><?php ablanna_entry_footer(); ?></footer><!-- .entry-footer -->
                <?php endif; ?>
            </div><!-- .post-content -->
        </div>
        <!--.col-md-8 col-sm-6-->
    </div>
    <!--.row-->
</article>