<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

	<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[entry-published] [entry-comments-link] [entry-author] [entry-terms before="Tags:"] [entry-terms taxonomy="category" before="Posted in:"]', 'tokokoo' ) . '</div>' ); ?>
	
	<div class="entry-container">

		<?php if ( is_singular( get_post_type() ) ) { ?>

			<header class="entry-header">
				<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' );  ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php hybrid_attachment(); // Function for handling non-image attachments. ?>
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'tokokoo' ), 'after' => '</p>' ) ); ?>
			</div><!-- .entry-content -->

		<?php } else { ?>

			<header class="entry-header">
				<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' );  ?>
			</header><!-- .entry-header -->

			<div class="entry-summary">
				<?php the_excerpt(); ?>
				<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'tokokoo' ), 'after' => '</p>' ) ); ?>
			</div><!-- .entry-summary -->

		<?php } ?>

	</div><!-- .entry-container -->

</article><!-- #article-<?php the_ID(); ?> -->