<?php
	// Loads the header.php template.
	get_header(); 
?>
	
	<div class="content-area no-sidebar" id="primary">
		
		<div id="content" class="site-content page-blog">
			<?php get_template_part( 'breadcrumbs' ); ?>
			
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
				
					<?php get_template_part( 'contents', ( post_type_supports( get_post_type(), 'post-formats' ) ? get_post_format() : get_post_type() ) ); ?>

				<?php endwhile; ?>

			<?php elseif ( current_user_can( 'edit_posts' ) ) : ?>

				<?php 
					// Loads the no-results.php template.
					get_template_part( 'no-results' ); 
				?>

			<?php endif; ?>
			
		</div><!-- #content .site-content -->
		
		<?php 
			loop_pagination();
		?>
		
	</div><!-- #primary .content-area .has-sidebar -->
	<div class="clear">
	</div>
 
<?php 
	// Loads the footer.php template.
	get_footer(); 
?>