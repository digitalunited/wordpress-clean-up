<?php namespace DigitalUnited\WpCleanUp\Commands;

class RemoveRestApi extends BaseCommand
{
    public function register() {
        // add_action('init', [$this, 'run'], 999);
    }

    public function run()
    {
        remove_action('template_redirect', 'rest_output_link_header', 11, 0);
        remove_action('wp_head', 'rest_output_link_wp_head', 10);
        remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
        add_filter('rest_enabled', '__return_false');
        add_filter('rest_jsonp_enabled', '__return_false');
    }
}
