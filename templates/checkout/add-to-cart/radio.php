<?php
/**
 * Template to display product selection fields in a list
 *
 * @package WooCommerce-One-Page-Checkout/Templates
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;
?>
<label class="opc-radio-list-label">
	<input type="radio" id="product_<?php echo esc_attr( $product->get_id() ); ?>" name="add_to_cart" value="<?php echo esc_attr( $product->get_id() ); ?>" data-add_to_cart="<?php echo esc_attr( $product->get_id() ); ?>" <?php checked( wcopc_get_products_prop( $product, 'in_cart' ) ); ?>/>
</label>
