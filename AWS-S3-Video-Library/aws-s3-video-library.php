<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           AWS-S3-Video-Library
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Plugin Boilerplate
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Your Name or Your Company
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-aws-s3-video-library-activator.php
 */
function activate_aws_s3_video_library() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-aws-s3-video-library-activator.php';
	AwsS3VideoLibrary_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-aws-s3-video-library-deactivator.php
 */
function deactivate_aws_s3_video_library() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-aws-s3-video-library-deactivator.php';
	AwsS3VideoLibrary_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_aws_s3_video_library' );
register_deactivation_hook( __FILE__, 'deactivate_aws_s3_video_library' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-aws-s3-video-library.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_aws_s3_video_library() {

	$plugin = new AwsS3VideoLibrary();
	$plugin->run();

}
run_aws_s3_video_library();
