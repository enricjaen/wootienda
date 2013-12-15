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
			<p>
				<?php if ( has_post_thumbnail() ): ?>
				<a href="<?php the_permalink()?>"><?php the_post_thumbnail( 'blog' )?> </a>
				<?php endif; ?>
				<?php the_content(); ?>
			<p><!-- .entry-content -->

		<?php } else { ?>
			<?php if ( has_post_thumbnail() ): ?>
				<a href="<?php the_permalink()?>"><?php the_post_thumbnail( 'blog' )?> </a>
			<?php else: ?>
				<a href="<?php the_permalink()?>"><img src="http://placehold.it/770x320" alt="Image is not available"></a>
			<?php endif; ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

		<?php } ?>

	</div><!-- .entry-container -->

</article><!-- #article-<?php the_ID(); ?> -->