<?php
/**
* Plugin Name: Different Shipping And Billing Address For Woocommerce
* Description: This plugin allows create Different Shipping And Billing Address For Woocommerce plugin.
* Version: 1.0
* Copyright: 2022
* Text Domain: different-shipping-and-billing-address-for-woocommerce
* Domain Path: /languages
*/


if (!defined('ABSPATH')) {
  die('-1');
}

// Define Plugin File
define('DSABAFW_PLUGIN_FILE', __FILE__);

// Define Plugin Dir
define('DSABAFW_PLUGIN_DIR',plugins_url('', __FILE__));

// Define Plugin Base Name
define('DSABAFW_BASE_NAME', plugin_basename(DSABAFW_PLUGIN_FILE));

// Include Plugins File
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

// Include Files
include_once('main/backend/dsabafw-comman.php');
include_once('main/backend/dsabafw-backend.php');
include_once('main/frontend/dsabafw-front.php');
include_once('main/resources/dsabafw-installation-require.php');
include_once('main/resources/dsabafw-language.php');
include_once('main/resources/dsabafw-load-js-css.php');