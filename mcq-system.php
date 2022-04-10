<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              mrinalbd.com
 * @since             1.0.0
 * @package           Wp_Admin_Vue
 *
 * @wordpress-plugin
 * Plugin Name:       MCQ System
 * Plugin URI:        mrinalbd.com
 * Description:       MCQ System for WordPress.
 * Version:           1.0.0
 * Author:            Mrinal Haque
 * Author URI:        mrinalbd.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mcq-system
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Define plugin constants
 */
define( 'PLUGIN_NAME', 'mcq-system' );
define( 'PLUGIN_MAIN_FILE', __FILE__ );
define( 'MCQ_SYSTEM_VERSION', '1.0.0' );
define( 'PAGE_SLUG', 'mcq-system');

function activation() {
	require plugin_dir_path( __FILE__ ) . 'includes/Activator.php';
	MCQ\Includes\Activator::activate();
}
function deactivation() {
	require plugin_dir_path( __FILE__ ) . 'includes/Deactivator.php';
    MCQ\Includes\Deactivator::deactivate();
}
register_activation_hook( __FILE__, 'activation' );
register_deactivation_hook( __FILE__, 'deactivation' );

add_action( 'init', function(){
		require plugin_dir_path( __FILE__ ) . 'includes/Controller.php';
		new MCQ\Includes\Controller();
});