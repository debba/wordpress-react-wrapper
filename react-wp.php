<?php
/**
 * @wordpress-react-wrapper
 * Plugin Name:       Embedding React In Wordpress
 * Author: dueclic
 */

defined( 'ABSPATH' ) or die( 'Direct script access disallowed.' );
define( 'ALKW_WIDGET_PATH', plugin_dir_path( __FILE__ ) . '/widget' );
define( 'ALKW_ASSET_MANIFEST', ALKW_WIDGET_PATH . '/build/asset-manifest.json' );
define( 'ALKW_INCLUDES', plugin_dir_path( __FILE__ ) . '/includes' );

require_once( ALKW_INCLUDES . '/enqueue.php' );
require_once( ALKW_INCLUDES . '/shortcode.php' );
