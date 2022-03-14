<?php
/**
 * The template for displaying Archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ablanna
 */
get_header(); ?>
<section id="content">
<div class="container">
  <div class="row">
      <div class="col-lg-12">
		<?php if ( have_posts() ) : ?>
			<header class="page-header py-4"><?php the_archive_title( '<h2 class="page-title">', '</h2>' ); the_archive_description( '<div class="archive-description">', '</div>' );?>
			</header><!-- .page-header -->
			<?php 
			while ( have_posts() ) :the_post();get_template_part( 'template-parts/content', get_post_format() );endwhile;
			the_posts_navigation(); else :get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
    </div><!--.col-12 -->
	</section>
<?php
get_footer();