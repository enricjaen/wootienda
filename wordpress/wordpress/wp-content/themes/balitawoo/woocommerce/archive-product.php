<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
global $woocommerce_loop;
$woocommerce_loop['columns'] = 5;
get_header('shop'); 
?>
	<?php get_template_part( 'contents', 'slider' ); ?>
	<div class="prolog"><?php echo of_get_option( 'balitawoo_prolog_message' ); ?> <a class="btn2" href="<?php echo of_get_option( 'balitawoo_prolog_link' ); ?>"><?php echo of_get_option( 'balitawoo_prolog_button' ); ?></a></div><!-- prolog -->

		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

		<?php endif; ?>

		<?php do_action( 'woocommerce_archive_description' ); ?>

	<div class="content-area no-sidebar" id="primary">
		<div id="content" class="site-content page-product">
			<?php woocommerce_breadcrumb(); ?>
			<?php if ( have_posts() ) : ?> 

				<?php
					/**
					 * woocommerce_before_shop_loop hook
					 *
					 * @hooked woocommerce_result_count - 20
					 * @hooked woocommerce_catalog_ordering - 30
					 */
					do_action( 'woocommerce_before_shop_loop' );
				?>
			<?php
				/**
				 * woocommerce_before_main_content hook
				 *
				 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
				 * @hooked woocommerce_breadcrumb - 20
				 */
				do_action('woocommerce_before_main_content');
			?>

				<?php woocommerce_product_loop_start(); ?>

					<?php woocommerce_product_subcategories(); ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php woocommerce_get_template_part( 'content', 'product' ); ?>

					<?php endwhile; // end of the loop. ?>

				<?php woocommerce_product_loop_end(); ?>


			<div class="clear"></div>
					<?php
						/**
						 * woocommerce_after_shop_loop hook
						 *
						 * @hooked woocommerce_pagination - 10
						 */
						do_action( 'woocommerce_after_shop_loop' );
					?>
		</div>
	</div>
		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

		<?php woocommerce_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>
		<?php
			/**
			 * woocommerce_after_main_content hook
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action('woocommerce_after_main_content');
		?>


<?php get_footer('shop'); ?>