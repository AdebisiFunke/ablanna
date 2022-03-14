<?php
/**
 * The template for displaying 404 Error
 * 
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ablanna
 */
get_header();
?>
<section class="error-404">
	<div class="container">
  		<div class="row">
      		<div class="col-lg-12">
	  			<div class="post-content">
				<header class="entry-header">
				<h2 class="page-title"><?php esc_html_e( 'Error 404-Page Not Found', 'ablanna' ); ?></h2>
				</header><!-- .entry-header -->
				<p><?php esc_html_e( 'Nothing was found, try one of the links below or a search?', 'ablanna' ); ?></p>
					<?php get_search_form(); ?>
					<?php the_widget( 'WP_Widget_Recent_Posts' );?>
					<div class="widget widget_categories">
						<h2><?php esc_html_e( 'Most Used Categories', 'ablanna' ); ?></h2>
						<ul><?php wp_list_categories(array('orderby'=>'count','order'=> 'DESC','show_count'=> 1,'title_li' => '','number'=> 10,	));?></ul>
					</div><!-- .widget -->
					<?php $ablanna_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'ablanna' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2> $ablanna_archive_content" );
					the_widget( 'WP_Widget_Tag_Cloud' );
					?>
	  		</div><!--col-lg-12-->
		</div><!-- row -->
    </div><!-- .container -->
</section><!-- .error-404 -->
<?php
get_footer();