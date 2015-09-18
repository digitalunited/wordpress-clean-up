<?php
/**
 * Plugin Name: WpCleanUp
 * Plugin URI: https://github.com/digitalunited/VisualComposerCleanUp
 * Author: Digital United
 * Author URI: http://digitalunited.io
 */


function wpcuCreateCleanupConfigIfNotExists()
{
    $boilerplaceConfigPath = __DIR__.'/configBoilerplate.php';
    $themeConfigPath = get_template_directory().'/WpCleanUpConfig.php';

    if (!file_exists($themeConfigPath)) {
        copy($boilerplaceConfigPath, $themeConfigPath);
    }
}

register_activation_hook(__FILE__, 'wpcuCreateCleanupConfigIfNotExists');


if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
}

add_action('init', function() {
    $vcCleanUp = new \DigitalUnited\WpCleanUp\WpCleanUp();
    $vcCleanUp->go();
});
