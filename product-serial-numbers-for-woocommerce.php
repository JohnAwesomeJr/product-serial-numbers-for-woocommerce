<?php

/**
 * Plugin Name: product serial numbers for woocommerce
 * Version: 0.0.0
 * Plugin URI: http://www.webdevsummer.com
 * Description: Add serial numbers to products for woocommerce
 * Author: John Christensen
 * Author URI: http://www.webdevsummer.com
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: product-serial-numbers-for-woocommerce
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author John Christensen
 * @since 0.0.0
 */

if (!defined('ABSPATH')) {
	exit;
}

// Load plugin class files.
require_once 'includes/class-product-serial-numbers-for-woocommerce.php';
require_once 'includes/class-product-serial-numbers-for-woocommerce-settings.php';

// Load plugin libraries.
require_once 'includes/lib/class-product-serial-numbers-for-woocommerce-admin-api.php';
require_once 'includes/lib/class-product-serial-numbers-for-woocommerce-post-type.php';
require_once 'includes/lib/class-product-serial-numbers-for-woocommerce-taxonomy.php';

/**
 * Returns the main instance of product_serial_numbers_for_woocommerce to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object product_serial_numbers_for_woocommerce
 */
function product_serial_numbers_for_woocommerce()
{
	$instance = product_serial_numbers_for_woocommerce::instance(__FILE__, '1.0.0');

	if (is_null($instance->settings)) {
		$instance->settings = product_serial_numbers_for_woocommerce_Settings::instance($instance);
	}

	return $instance;
}

product_serial_numbers_for_woocommerce();
