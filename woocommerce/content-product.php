<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 1 );

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
	$classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
	$classes[] = 'last';
?>
<div <?php post_class( " row" ); ?> data-equalizer>
	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
	<div class="small-12 medium-6 product-image columns" data-equalizer-watch>
	<a href="<?php the_permalink(); ?>">

		<?php
			/**
			 * woocommerce_before_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
			do_action( 'woocommerce_before_single_product_summary' );
		?>
	</a>
	</div>
	<div class="small-12 product-description medium-6 columns" data-equalizer-watch>
	<a href="<?php the_permalink(); ?>">
		<h3><?php the_title(); ?></h3>
	</a>

		<?php
			/**
			 * woocommerce_after_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_template_loop_rating - 5
			 * @hooked woocommerce_template_loop_price - 26
			 */
			 remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
					
					
							 
			 add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 27 );
			
			 do_action( 'woocommerce_single_product_summary' );
			/* do_action( 'woocommerce_after_shop_loop_item_title' ); */
		?>

	
	
	<?php /* do_action( 'woocommerce_after_shop_loop_item' ); */ ?>
	</div>

</div>
<hr>