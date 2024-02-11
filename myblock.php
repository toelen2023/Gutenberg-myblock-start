<?php
/**
 * Plugin Name: My Block
 * Plugin URI: https://somesite.com
 * Description: Gutenberg Block
 * Author: Name Lasname
 * Author URI: https://somesite.com/about
 */

 function myplugin_myblock_init(){
    register_block_type_from_metadata( __DIR__ );
 }
 add_action('init','myplugin_myblock_init');