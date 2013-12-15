<!DOCTYPE html>
<!--[if IE 8]>    <html class="ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>    <html class="ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php hybrid_document_title(); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body class="<?php hybrid_body_class(); ?>">
	
	<div class="hfeed site" id="page">
		<?php if ( '' != of_get_option( 'balitawoo_header_banner' ) ): ?>
		<div id="headbanner">
			<p>
				<strong><?php echo of_get_option( 'balitawoo_header_banner' ); ?></strong>
			</p>
		</div>
		<?php endif; ?>
		
		<div id="container">
			<header id="masthead" class="site-header" role="banner">

			<h1 id="logo">
				<!-- <a href="<?php echo home_url( ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_newbalita.png" width="256" height="85"></a> -->
				<?php if ( of_get_option('balitawoo_custom_logo') ): ?>
					<a href="<?php echo home_url( ); ?>"><img src="<?php echo esc_url( of_get_option('balitawoo_custom_logo') ) ?>" width="256" height="85"></a>
				<?php else: ?>
				<a href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a>
				<?php endif; ?>
			</h1>
			<!-- logo -->
<div style="float:right">
			<?php if (function_exists('qtrans_generateLanguageSelectCode')) { echo qtrans_generateLanguageSelectCode('image'); } ?>

			<div id="loginsearch">
				<p class="loginmenu">
					<?php if ( ! is_user_logged_in() ) { ?>

						<a href="<?php echo wp_login_url( home_url() ); ?>"><?php _e( 'Login', 'balitawoo' ); ?></a><span>|</span>
						<a href="<?php echo site_url( 'wp-login.php?action=register' ); ?>"><?php _e( 'Register', 'balitawoo' ); ?></a>

					<?php } else { ?>

						<a href="<?php echo get_permalink( woocommerce_get_page_id( 'myaccount' ) ); ?>"><?php _e( 'My Account', 'balitawoo' ); ?></a><span>|</span>
						<a href="<?php echo wp_logout_url( home_url() ); ?>"><?php _e( 'Logout', 'balitawoo' ); ?></a>

					<?php } ?> 
				</p>
				<?php get_template_part( 'searchform' ); ?>
			</div>
</div>
			<div class="clear">
			</div>
			<?php
		 		get_template_part( 'menu', 'primary' );
		 	?>
		 	<?php if ( function_exists( 'balitawoo_your_cart_url' ) ) balitawoo_your_cart_url(); ?>


			</header>
		<div id="main" class="site-main cl">
	<?php //echo do_shortcode( '[koo-slides id="14"]' ); ?>