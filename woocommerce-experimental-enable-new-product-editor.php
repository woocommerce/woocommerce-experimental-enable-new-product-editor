<?php
/**
 * Plugin Name: WooCommerce Enable Experimental New Product Editor
 * Plugin URI: https://github.com/Automattic/woocommerce-experimental-enable-new-product-editor
 * Description: Enables the experimental new WooCommerce product editor.
 * Author: WooCommerce
 * Author URI: https://woocommerce.com/
 * Version: 0.2.0
 * Requires at least: 5.6
 * Requires PHP: 7.0
 *
 * WC requires at least: 7.5.0
 * WC tested up to: 7.5.0
 *
 * @package WooCommerce\Admin
 */

function enable_experimental_new_product_editor( $features ) {
	// only enable if it hasn't been explicitly disabled
	if ( ! isset($features['new-product-management-experience']) ) {
		$features['new-product-management-experience'] = true;
	}

	return $features;
}

add_filter( 'woocommerce_admin_get_feature_config', 'enable_experimental_new_product_editor' );