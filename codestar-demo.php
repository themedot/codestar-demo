<?php
/*
Plugin Name: Codestar demo
Plugin URI: http://example.com/
Description: Demonstration of CodeStar framework
Version: 1.0
Author: sadat hossen himel
Author URI: http://example.com/
License: GPLv2 or later
Text Domain: codestar-demo
Domain Path: /languages
*/

define( 'CS_ACTIVE_FRAMEWORK',   true );
define( 'CS_ACTIVE_TAXONOMY',    false );
define( 'CS_ACTIVE_SHORTCODE',   false );
define( 'CS_ACTIVE_CUSTOMIZE',   false );
define( 'CS_ACTIVE_LIGHT_THEME', true );

require_once(plugin_dir_path(__FILE__)."/lib/csf/cs-framework.php");
require_once( plugin_dir_path( __FILE__ ) . "inc/metabox.php" );
function csdemo_assets(){
    load_plugin_textdomain('codestar-demo',false,plugin_dir_path(__FILE__)."/languages");
}
add_action( 'plugin_loaded', 'csdemo_assets');

