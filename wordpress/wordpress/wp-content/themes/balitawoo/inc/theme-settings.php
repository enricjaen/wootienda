<?php

/* Add custom options to the theme settings. */
add_filter( 'tokokoo_options_setting', 'tokokoo_custom_options' );


/* Custom inline scripts. */
add_action( 'optionsframework_custom_scripts', 'balitawoo_custom_inline_script' );

add_filter( 'tokokoo_options_setting_general', 'tokokoo_general_settings_custom_option' );


/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 *  
 * @since 1.0
 */
function tokokoo_custom_options($options) {

	$options[] = array( 
		'name'	=> __( 'Banner', 'tokokoo' ),
		'type'	=> 'heading'
	);


	$options[] = array( 
		'name'	=> __( 'Header Banner', 'tokokoo' ),
		'desc'	=> __( 'Banner text on header', 'tokokoo' ),
		'id'	=> 'balitawoo_header_banner',
		'type'	=> 'textarea'
	);

	$options[] = array( 
		'name'	=> __( 'Prolog Message', 'tokokoo' ),
		'desc'	=> __( 'Text to show under slider on shop page', 'tokokoo' ),
		'id'	=> 'balitawoo_prolog_message',
		'type'	=> 'textarea'
	);

	$options[] = array( 
		'name'	=> __( 'Prolog Button', 'tokokoo' ),
		'desc'	=> __( 'Text for prolog button', 'tokokoo' ),
		'id'	=> 'balitawoo_prolog_button',
		'type'	=> 'text'
	);

	$options[] = array( 
		'name'	=> __( 'Prolog Button Link', 'tokokoo' ),
		'desc'	=> __( 'Link to be embedded into button', 'tokokoo' ),
		'id'	=> 'balitawoo_prolog_link',
		'type'	=> 'text'
	);


	/* ============================== End Banner Settings ================================= */


	$options[] = array( 
		'name' => __( 'Social', 'tokokoo' ),
		'type' => 'heading'
	);

	$options[] = array(
		'desc' => __( 'The social icon will appear on footer of your site.', 'tokokoo' ),
		'type' => 'info'
	);

	$options[] = array( 
		"name" => __( 'Header', 'tokokoo' ),
	    "desc" => __( 'Insert header for social section', 'tokokoo' ),
		"id" => 'tokokoo_social_header',
		"type" => 'text'
	);

	$options[] = array( 
		"name" => __( 'Flickr', 'tokokoo' ),
	    "desc" => __( 'Insert your flickr username', 'tokokoo' ),
		"id" => 'tokokoo_flickr',
		"type" => 'text'
	);

	$options[] = array( 
		"name" => __( 'Facebook', 'tokokoo' ),
	    "desc" => __( 'Insert your facebook username', 'tokokoo' ),
		"id" => 'tokokoo_fb',
		"type" => 'text'
	);

	$options[] = array( 
		"name" => __( 'Twitter', 'tokokoo' ),
	    "desc" => __( 'Insert your twitter username', 'tokokoo' ),
		"id" => 'tokokoo_tw',
		"type" => 'text'
	);
	
	/* ============================== End Social Settings ================================= */

	$options[] = array( 
		'name'	=> __( 'Contact', 'tokokoo' ),
		'type'	=> 'heading'
	);

	$options[] = array(
		'desc' => __( 'Info for your contact page, you can get Latitude and Longitude at location service such as <a href="http://www.latlong.net" target="_blank">here</a>', 'tokokoo' ),
		'type' => 'info'
	);

	$options[] = array(
		"name" => __( 'Latitude', 'tokokoo' ),
		"desc" => __( 'Your location latitude', 'tokokoo' ),
		"id" => 'balitawoo_lat',
		"type" => 'text'
	);

	$options[] = array(
		"name" => __( 'Longitude', 'tokokoo' ),
		"desc" => __( 'Your location longitude', 'tokokoo' ),
		"id" => 'balitawoo_lon',
		"type" => 'text'
	);

	$options[] = array(
		"name" => __( 'Street', 'tokokoo' ),
		"desc" => __( 'Street location', 'tokokoo' ),
		"id" => 'balitawoo_street',
		"type" => 'textarea'
	);

	$options[] = array(
		"name" => __( 'Description', 'tokokoo' ),
		"desc" => __( 'Description', 'tokokoo' ),
		"id" => 'balitawoo_desc',
		"type" => 'textarea'
	);

	/* ============================== End Contact Settings ================================= */

	$options[] = array(
		"name" => "Homepage",
		"type" => "heading"
	);

	$options[] = array( 
		'name'	=> __( 'Slider Shortcode', 'tokokoo' ),
		'desc'	=> __( 'Paste your slider shortcode here, this is will be shown on the home page.', 'tokokoo' ),
		'id'	=> 'balitawoo_slider_shortcode',
		'type'	=> 'textarea'
	);

	$options[] = array(
		'name'		=> __( 'Homepage banner', 'tokokoo' ),
		'desc'		=> __( 'Settings for banner that will show up at homepage', 'tokokoo' ),
		'id'		=> 'balitawoo_banner_number',
		'std'		=> 'none',
		'type'		=> 'select',
		'class'		=> 'mini',
		'options'	=> array(
			'none'			=> __( 'Choose Banner', 'tokokoo' ),
			'banner1'		=> __( 'Banner 1', 'tokokoo' ),
			'banner2'		=> __( 'Banner 2', 'tokokoo' ),
			'banner3'		=> __( 'Banner 3', 'tokokoo' ),
			'banner4'		=> __( 'Banner 4', 'tokokoo' )
		)
	);

	$options[] = array(
		'name'		=> __( 'Banner 1 image', 'tokokoo' ),
		'desc'		=> __( 'Select image for your Banner 1', 'tokokoo' ),
		'id'		=> 'balitawoo_banner1_image',
		'type'		=> 'upload',
		'class'		=> 'hidden'
	);

	$options[] = array(
		'name'		=> __( 'Banner 1 title', 'tokokoo' ),
		'desc'		=> __( 'Title for your Banner 1', 'tokokoo' ),
		'id'		=> 'balitawoo_banner1_title',
		'type'		=> 'text',
		'class'		=> 'hidden'
	);

	$options[] = array(
		'name'		=> __( 'Banner 1 text', 'tokokoo' ),
		'desc'		=> __( 'Text for your Banner 1', 'tokokoo' ),
		'id'		=> 'balitawoo_banner1_text',
		'type'		=> 'text',
		'class'		=> 'hidden'
	);

	$options[] = array(
		'name'		=> __( 'Banner 1 link', 'tokokoo' ),
		'desc'		=> __( 'Link for Banner 1', 'tokokoo' ),
		'id'		=> 'balitawoo_banner1_link',
		'type'		=> 'text',
		'class'		=> 'hidden'
	);

	/* ============================== End banner1 Settings ================================= */

	$options[] = array(
		'name'		=> __( 'Banner 2 image', 'tokokoo' ),
		'desc'		=> __( 'Select image for your Banner 2', 'tokokoo' ),
		'id'		=> 'balitawoo_banner2_image',
		'type'		=> 'upload',
		'class'		=> 'hidden'
	);

	$options[] = array(
		'name'		=> __( 'Banner 2 title', 'tokokoo' ),
		'desc'		=> __( 'Title for your Banner 2', 'tokokoo' ),
		'id'		=> 'balitawoo_banner2_title',
		'type'		=> 'text',
		'class'		=> 'hidden'
	);

	$options[] = array(
		'name'		=> __( 'Banner 2 text', 'tokokoo' ),
		'desc'		=> __( 'Text for your Banner 2', 'tokokoo' ),
		'id'		=> 'balitawoo_banner2_text',
		'type'		=> 'text',
		'class'		=> 'hidden'
	);

	$options[] = array(
		'name'		=> __( 'Banner 2 link', 'tokokoo' ),
		'desc'		=> __( 'Link for Banner 2', 'tokokoo' ),
		'id'		=> 'balitawoo_banner2_link',
		'type'		=> 'text',
		'class'		=> 'hidden'
	);

	/* ============================== End banner2 Settings ================================= */

	$options[] = array(
		'name'		=> __( 'Banner 3 image', 'tokokoo' ),
		'desc'		=> __( 'Select image for your Banner 3', 'tokokoo' ),
		'id'		=> 'balitawoo_banner3_image',
		'type'		=> 'upload',
		'class'		=> 'hidden'
	);

	$options[] = array(
		'name'		=> __( 'Banner 3 title', 'tokokoo' ),
		'desc'		=> __( 'Title for your Banner 3', 'tokokoo' ),
		'id'		=> 'balitawoo_banner3_title',
		'type'		=> 'text',
		'class'		=> 'hidden'
	);

	$options[] = array(
		'name'		=> __( 'Banner 3 text', 'tokokoo' ),
		'desc'		=> __( 'Text for your Banner 3', 'tokokoo' ),
		'id'		=> 'balitawoo_banner3_text',
		'type'		=> 'text',
		'class'		=> 'hidden'
	);

	$options[] = array(
		'name'		=> __( 'Banner 3 link', 'tokokoo' ),
		'desc'		=> __( 'Link for Banner 3', 'tokokoo' ),
		'id'		=> 'balitawoo_banner3_link',
		'type'		=> 'text',
		'class'		=> 'hidden'
	);

	/* ============================== End banner3 Settings ================================= */

	$options[] = array(
		'name'		=> __( 'Banner 4 image', 'tokokoo' ),
		'desc'		=> __( 'Select image for your Banner 4', 'tokokoo' ),
		'id'		=> 'balitawoo_banner4_image',
		'type'		=> 'upload',
		'class'		=> 'hidden'
	);

	$options[] = array(
		'name'		=> __( 'Banner 4 title', 'tokokoo' ),
		'desc'		=> __( 'Title for your Banner 4', 'tokokoo' ),
		'id'		=> 'balitawoo_banner4_title',
		'type'		=> 'text',
		'class'		=> 'hidden'
	);

	$options[] = array(
		'name'		=> __( 'Banner 4 text', 'tokokoo' ),
		'desc'		=> __( 'Text for your Banner 4', 'tokokoo' ),
		'id'		=> 'balitawoo_banner4_text',
		'type'		=> 'text',
		'class'		=> 'hidden'
	);

	$options[] = array(
		'name'		=> __( 'Banner 4 link', 'tokokoo' ),
		'desc'		=> __( 'Link for Banner 4', 'tokokoo' ),
		'id'		=> 'balitawoo_banner4_link',
		'type'		=> 'text',
		'class'		=> 'hidden'
	);

	/* ============================== End banner4 Settings ================================= */

	return $options;

}

function tokokoo_general_settings_custom_option( $options ) {

	$options[] = array( 
		'name'	=> __( 'Custom logo', 'tokokoo' ),
		'desc'	=> 'Logo for your site',
		'id'	=> 'balitawoo_custom_logo',
		'type'	=> 'upload' 
	);

	return $options;

}

function balitawoo_custom_inline_script() { ?>

	<script type='text/javascript'>

	var $ = jQuery.noConflict();

	jQuery(document).ready(function($) {

		var banner1 = $( '#section-balitawoo_banner1_image, #section-balitawoo_banner1_text, #section-balitawoo_banner1_title, #section-balitawoo_banner1_link' );
		var banner2 = $( '#section-balitawoo_banner2_image, #section-balitawoo_banner2_text, #section-balitawoo_banner2_title, #section-balitawoo_banner2_link' );
		var banner3 = $( '#section-balitawoo_banner3_image, #section-balitawoo_banner3_text, #section-balitawoo_banner3_title, #section-balitawoo_banner3_link' );
		var banner4 = $( '#section-balitawoo_banner4_image, #section-balitawoo_banner4_text, #section-balitawoo_banner4_title, #section-balitawoo_banner4_link' );

		$( '#balitawoo_banner_number' ).on( 'change', function() {
	       banner1.toggle( $(this).val() == 'banner1' );
	       banner2.toggle( $(this).val() == 'banner2' );
	       banner3.toggle( $(this).val() == 'banner3' );
	       banner4.toggle( $(this).val() == 'banner4' );
		});

		if ( $('#balitawoo_banner_number option:selected').val() === 'banner1' ) {
			banner1.show();
		}

		if ( $('#balitawoo_banner_number option:selected').val() === 'banner2' ) {
			banner2.show();
		}
		if ( $('#balitawoo_banner_number option:selected').val() === 'banner3' ) {
			banner3.show();
		}

		if ( $('#balitawoo_banner_number option:selected').val() === 'banner4' ) {
			banner4.show();
		}

	});
	</script>
<?php
}

?>