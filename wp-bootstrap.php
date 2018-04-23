<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/axelspringer/wp-bootstrap
 * @since             1.0.0-dev
 * @package           AxelSpringer
 * @author            Axel Springer SE
 *
 * @wordpress-plugin
 * Plugin Name:       WP Bootstrap
 * Plugin URI:        https://github.com/axelspringer/wp-bootstrap
 * Description:       A simple pluggable framework for WordPress plugins.
 * Version:           1.0.0-dev
 * Author:            Axel Springer
 * Author URI:        https://www.axelspringer.de
 * Text Domain:       wp-bootstrap
 */

defined( 'ABSPATH' ) || exit;

// make sure we don't expose any info if called directly
if ( ! function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

// respect composer autoload
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	$loader = require_once __DIR__ . '/vendor/autoload.php';
	$loader->addPsr4( 'AxelSpringer\\WP\\Bootstrap\\', __DIR__ . '/src' );
}

// if not composer, do autoloading
if ( ! class_exists( 'AxelSpringer\WP\Bootstrap\Plugin' ) ) {
    include_once __DIR__ . '/autoloader.php';
}

use \AxelSpringer\WP\Bootstrap\__WP__ as WP;
use \AxelSpringer\WP\Bootstrap\__PLUGIN__ as Plugin;
use \AxelSpringer\WP\Bootstrap\Plugin as Bootstrap;

// bootstrap
if ( ! defined( WP::VERSION ) )
	define( WP::VERSION, Plugin::VERSION );

if ( ! defined( WP::URL ) )
	define( WP::URL, plugin_dir_url( __FILE__ ) );

if ( ! defined( WP::SLUG ) )
	define( WP::SLUG, Plugin::SLUG );

// activation
register_activation_hook( __FILE__, '\AxelSpringer\WP\Bootstrap\Plugin::activation' );

// deactivation
register_deactivation_hook( __FILE__, '\AxelSpringer\WP\Bootstrap\Plugin::deactivation' );

// run
global $wp_bootstrap; // this bootstraps the plugin, and provides a global accessible helper
$wp_bootstrap = new Bootstrap( BOOTSTRAP_SLUG, BOOTSTRAP_VERSION, __FILE__ );
