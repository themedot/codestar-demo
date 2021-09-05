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

require_once(plugin_dir_path(__FILE__)."/lib/csf/codestar-framework.php");
function csdemo_assets(){
    load_plugin_textdomain('codestar-demo',false,plugin_dir_path(__FILE__)."/languages");
}
add_action( 'plugin_loaded', 'csdemo_assets');

