<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

	<h2 class="entry-title">
		<a href="<?php the_permalink(); ?>">
			<?php the_title();  ?>
		</a>
	</h2>
	<a href="<?php the_permalink(); ?>"><img src="<?php balitawoo_get_thumbnail_src( 'list-thumbnail' ); ?>" class="alignleft"></a>
	<div class="meta">
		<time><abbr><?php the_time(get_option('date_format')); ?></abbr></time> . Posted under <?php the_category(',','single')?> . By <a href="<?php echo bloginfo('siteurl').'/author/';?><?php the_author(); ?>"><?php the_author()?></a>
	</div>
	<div class="entry-content">

		<div class="entry-summary">
		<?php the_excerpt(); ?>
		</div>

	</div><!-- .entry-container -->

</article><!-- #article-<?php the_ID(); ?> -->