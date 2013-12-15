<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

	<h2 class="entry-title">
		<a href="<?php the_permalink(); ?>">
			<?php the_title();  ?>
		</a>
	</h2>
	<div class="meta">
		<time><abbr><?php the_time(get_option('date_format')); ?></abbr></time> . Posted under <?php the_category(',','single')?> . By <a href="<?php echo bloginfo('siteurl').'/author/';?><?php the_author(); ?>"><?php the_author()?></a>
	</div>
	<div class="entry-content">
		
		<?php if ( is_singular( get_post_type() ) ) { ?>

			<?php get_template_part( 'author', 'meta' ); ?>

			<div class="framebox">
				<?php echo tokokoo_get_audio(); ?>
			</div><!-- .framebox -->
			
			<?php get_template_part( 'author', 'meta' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->

		<?php } else { ?>

			<div class="framebox">
				<?php echo tokokoo_get_audio(); ?>
			</div><!-- .framebox -->
		
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

		<?php } ?>

	</div><!-- .entry-container -->
	
</article><!-- #article-<?php the_ID(); ?> -->