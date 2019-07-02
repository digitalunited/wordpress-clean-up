<?php
/**
 * Plugin Name: WordPress Clean up
 * Plugin URI: https://github.com/digitalunited/wordpress-clean-up
 * Description: A simple plugin that cleans up and removes unnecessary stuff in WordPress
 * Version: 0.0.7
 * Author: Digital United - Lucas Andersson, Tim Cifuentes Vargas, Fredrik Axtelius 
 * Author URI: http://haus.se
 */

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
}

add_action('init', function() {
    $vcCleanUp = new \DigitalUnited\WpCleanUp\WpCleanUp();
    $vcCleanUp->go();
});
