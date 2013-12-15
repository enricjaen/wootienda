<?php

// Exit if accessed directly
if ( !defined('ABSPATH') ) exit;

/**
 * Primary Menu Template
 *
 * Displays the Primary Menu if it has active menu items.
 *
 * @package 	balitawoo
 * @author		Tokokoo
 * @license		license.txt
 * @since 		1.0
 */
if ( has_nav_menu( 'primary' ) ) : ?>
	<?php do_action( 'balitawoo_menu_primary_before' ); ?>
	<?php do_action( 'balitawoo_menu_primary_open' ); ?>
	<?php 
		wp_nav_menu( 
			array( 
				'theme_location' => 'primary',
				'container' => 'nav',
				'container_id' => 'mainnav', 
				'menu_class' => 'menu'
			)
		);
	?>
	<?php do_action( 'balitawoo_menu_primary_open' ); ?>
	<?php do_action( 'balitawoo_menu_primary_after' ); ?>

<?php endif; ?>