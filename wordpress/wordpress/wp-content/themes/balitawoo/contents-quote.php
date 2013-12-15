<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class('blogpost format-quote'); ?>">

	

		<?php if ( is_singular( get_post_type() ) ) { ?>

			<?php get_template_part( 'author', 'meta' ); ?>

			<?php the_content(); ?>
			<div class="entry-content">
			</div><!-- .entry-content -->
			<div class="meta">
				<time><abbr><?php the_time(get_option('date_format')); ?></abbr></time> . Posted under <?php the_category(',','single')?> . By <a href="<?php echo bloginfo('siteurl').'/author/';?><?php the_author(); ?>"><?php the_author()?></a>
			</div>

		<?php } else { ?>

			<?php the_content(); ?>
			<div class="entry-content">
			</div><!-- .entry-content -->
			<div class="meta">
				<time><abbr><?php the_time(get_option('date_format')); ?></abbr></time> . Posted under <?php the_category(',','single')?> . By <a href="<?php echo bloginfo('siteurl').'/author/';?><?php the_author(); ?>"><?php the_author()?></a>
			</div>


		<?php } ?>


</article><!-- #article-<?php the_ID(); ?> -->