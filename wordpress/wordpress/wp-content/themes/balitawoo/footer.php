</div>	
<div class="wave"></div>
		<!-- #colophon .site-footer -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php get_template_part( 'sidebar', 'subsidiary' ) ?>
		<?php
			$socmed_title = ( '' != of_get_option('tokokoo_social_header') ) ? of_get_option('tokokoo_social_header') : 'Elsewhere';
			$twitter = ( '' != of_get_option('tokokoo_tw') ) ? '<li><img src="'.get_template_directory_uri().'/img/ico_twitter.png" width="32" height="31"> <a href="http://www.twitter.com/'.of_get_option('tokokoo_tw').'">Follow our tweet</a></li>' : '';
			$flickr = ( '' != of_get_option('tokokoo_flickr') ) ? '<li><img src="'.get_template_directory_uri().'/img/ico_flickr.png" width="32" height="31"> <a href="http://www.flickr.com/'.of_get_option('tokokoo_flickr').'">Our Flickr Page</a></li>' : '';
			$facebook = ( '' != of_get_option('tokokoo_fb') ) ? '<li><img src="'.get_template_directory_uri().'/img/ico_facebook.png" width="32" height="31"> <a href="http://www.facebook.com/'.of_get_option('tokokoo_fb').'">Our Facebook Page</a></li>' : '';

		?>
		<?php if ( '' != $facebook || '' != $twitter || '' != $flickr ): ?>
		<section class="socmed widget">
		
			<h3><?php echo $socmed_title; ?></h3>
			<ul>
				<?php echo $twitter; ?>
				<?php echo $flickr; ?>
				<?php echo $facebook; ?>
				<!-- <li><img src="<?php echo get_template_directory_uri(); ?>/img/ico_twitter.png" width="32" height="31"> <a href="http://www.twitter.com/<?php echo $twitter; ?>">Follow our tweet</a></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/ico_flickr.png" width="32" height="31"> <a href="http://www.flickr.com/"<?php echo $flickr; ?>>Our Flickr Page</a></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/ico_facebook.png" width="32" height="31"> <a href="http://www.twitter.com/<?php echo $facebook; ?>">Our Facebook Page</a></li> -->
			</ul>
		</section>
		<?php endif; ?>
		<div class="clear"></div>
	</footer>
	</div>
	<!-- container -->
	<div class="foot">
		<div class="w1170">
			<img class="foothome" src="<?php echo get_template_directory_uri(); ?>/img/ico_home.png" width="189" height="169">
			<img class="footapolo" src="<?php echo get_template_directory_uri(); ?>/img/ico_rocket.png" width="108" height="202">
			<div class="pay">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ico_pay.png" width="155" height="22">
				<?php if ( !of_get_option('tokokoo_credits') ): ?>
				<p>
					<?php tokokoo_footer_text(); ?>
				</p>
				<?php endif; ?>
			</div>
		</div>
		<!-- w1170 -->
	</div>

	<!-- foot -->
<?php wp_footer(); ?>

</body>
</html>