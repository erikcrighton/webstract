<?php 
/**
 * Theme Page Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Esteem
 * @since Esteem 1.0
 */
?>

<?php get_header(); ?>

	<?php do_action( 'esteem_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="clearfix">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	
	

	<?php do_action( 'esteem_after_body_content' ); ?>

<?php get_footer(); ?>