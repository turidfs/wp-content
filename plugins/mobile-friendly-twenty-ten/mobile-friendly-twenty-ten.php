<?php
/**
 * Plugin Name: Mobile Friendly Twenty Ten
 * Plugin URI: http://www.guyshaked.co.il
 * Description: This plugin adapts Twenty Ten theme to mobile while keeping its general looks.
 * Version: 1.0
 * Author: Guy Shaked
 * Author URI: http://www.guyshaked.co.il
 * License: GPLv2 or later
 */


   
    add_action( 'wp_enqueue_scripts', 'safely_add_stylesheet' );

    /**
     * Add style.css to the page
     */
    function safely_add_stylesheet() {
        wp_enqueue_style( 'prefix-style', plugins_url('style.css', __FILE__) );
    }
?>