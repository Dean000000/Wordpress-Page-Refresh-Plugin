<?php
/*
Plugin Name: auction price updater
Description: Refreshes the .woocommerce-notices-wrapper and .auction-bid and .auction_form.cart elements every 10 seconds
Version: 1.0
Author: Dean Hattingh
*/

function add_page_refresh_script() {
    // Enqueue the JavaScript file as an asset
    wp_enqueue_script( 'page-refresh', plugin_dir_url( __FILE__ ) . 'assets/page-refresh.js', array(), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'add_page_refresh_script' );
