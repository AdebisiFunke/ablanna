<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ablanna
 */
if(is_active_sidebar('sidebar-1')){$ablanna_column = 8;}else{$ablanna_column = 12;}
get_header();
?>
<section  class="search-area <?php if( ! is_active_sidebar('sidebar-1')): ?>block-content-css<?php endif; ?>" id="content">
		<div class="container">
		<div class="row mt-5">
				<div class="col-lg-<?php echo esc_attr($ablanna_column); ?>">
					<?php if ( have_posts() ) : ?>

						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );
						endwhile;
						the_posts_navigation();
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
				</div>
				<?php if(is_active_sidebar('sidebar-1')): ?>
				<div class="col-lg-4">
					<?php get_sidebar(); ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php
get_footer();
