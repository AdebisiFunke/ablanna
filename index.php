<?php
/**
 * The main template file
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ablanna 
 */
if(is_active_sidebar('sidebar-1')){$ablanna_column = 8;}else{$ablanna_column = 12;}
get_header();
?>
<section class="blog-area <?php if( ! is_active_sidebar('sidebar-1')): ?>block-content-css<?php endif; ?>" id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-<?php echo esc_attr($ablanna_column); ?> ">
				<?php if ( have_posts() ):if ( is_home() && ! is_front_page()):?><div><h2 class="page-title screen-reader-text"><?php single_post_title(); ?></h2></div>
				<?php endif; while ( have_posts() ):the_post(); get_template_part( 'template-parts/content', get_post_type() );endwhile; the_posts_navigation();else :get_template_part( 'template-parts/content', 'none' );endif;?>
			</div>
			<?php if(is_active_sidebar('sidebar-1')): ?>
			<div class="col-lg-4"><?php get_sidebar(); ?></div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php
get_footer();
