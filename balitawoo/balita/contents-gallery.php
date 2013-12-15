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
			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'tokokoo' ), 'after' => '</p>' ) ); ?>
			</div><!-- .entry-content -->

		<?php } else { ?>

			<div class="framebox">
								
				<?php
					$args = array(
						'order'          => 'ASC',
						'post_type'      => 'attachment',
						'post_parent'    => $post->ID,
						'post_mime_type' => 'image',
						'post_status'    => null,
						'numberposts'    => -1,
					);
					$attachments = get_children( $args );

					if ( $attachments ) { ?>
						<ul>
							<?php foreach ( $attachments as $attachment ) { ?>
								<li>
									<?php echo wp_get_attachment_image( $attachment->ID, 'tokokoo_gallery', false, false ); ?>
								</li>
							<?php } ?>
					<?php }
				?>	

			</div><!-- .framebox -->
		
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

		<?php } ?>

	</div><!-- .entry-container -->
	
</article><!-- #article-<?php the_ID(); ?> -->