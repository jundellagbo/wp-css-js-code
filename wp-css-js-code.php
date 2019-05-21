<?php
/** 
 * @package WpCssJsCode
*/
/*
Plugin Name:  WP Css and Js Code
Plugin URI:   https://wordpress.org/plugins/wp-css-js-code/
Description:  Insert CSS and Javascript on specific or global posts with custom Header and Footer feature.
Version:      1.1
Author:       Jundell Agbo
Author URI:   http://cordovafreelance.uphero.com/
License:      GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wporg
*/

defined( "ABSPATH" ) or die( "You are not allowed to access this file." );
define("WPCSSJSCODE_plugin_url", plugin_dir_url( __FILE__ ));
define("WPCSSJSCODE_plugin_dir", plugin_dir_path( __FILE__ ));
require_once WPCSSJSCODE_plugin_dir . "inject.php";
require_once WPCSSJSCODE_plugin_dir . "admin.php";