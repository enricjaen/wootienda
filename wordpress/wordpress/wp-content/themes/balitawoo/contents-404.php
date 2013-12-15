<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

	<header class="entry-header">
		<h1 class="entry-title"><?php esc_html_e( 'Oops! That page can\'t be found.', 'tokokoo' ); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-container">

		<div class="entry-content">
			
			<p><?php esc_html_e( 'The following is a list of the latest posts from the blog. Maybe it will help you find what you\'re looking for.', 'tokokoo' ); ?></p>

			<ul>
				<?php wp_get_archives( array( 'limit' => 10, 'type' => 'postbypost' ) ); ?>
			</ul>

		</div><!-- .entry-content -->

	</div><!-- .entry-container -->

</article><!-- #post-<?php the_ID(); ?> -->