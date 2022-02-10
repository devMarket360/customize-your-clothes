<?php 
/* 
Plugin Name: Customize Clothes 
Plugin URI: https://www.market360.com.co
Description: Plugin que permite crear modelos de prendas de ropa y mostrarlos al usuario para que este pueda personalizarlos a su gusto.
Version: 1.0 
Author: Market360
Author URI: https://www.market360.com.co
License: GPLv2 
*/

define( 'MKRCSM__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
require_once( MKRCSM__PLUGIN_DIR . 'creationdb.php' );
require_once( 'views/start.php' );
require_once( MKRCSM__PLUGIN_DIR . 'class.mrkcustomize.php' );
require_once( MKRCSM__PLUGIN_DIR . 'customize-clothes-settings.php' );
