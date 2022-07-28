<?php
/** 
 * @package WpCssJsCode
*/
/*
Plugin Name:  WP CSS, Javascript and HTML
Plugin URI:   https://wordpress.org/plugins/wp-css-js-code/
Description:  Custom CSS, Javascript and HTML on specific posts or page or you can do it in global.
Version:      2.3.2
Author:       Jundell Agbo
Author URI:   https://profiles.wordpress.org/jundellagbo/#content-plugins
License:      GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wp-css-js-code
*/

defined( "ABSPATH" ) or die( "You are not allowed to access this file." );
define("WPCSSJSCODE_plugin_url", plugin_dir_url( __FILE__ ));
define("WPCSSJSCODE_plugin_dir", plugin_dir_path( __FILE__ ));
require_once WPCSSJSCODE_plugin_dir . "inject.php";
require_once WPCSSJSCODE_plugin_dir . "admin.php";