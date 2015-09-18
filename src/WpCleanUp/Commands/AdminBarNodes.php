<?php namespace DigitalUnited\WpCleanUp\Commands;

class AdminBarNodes extends BaseCommand
{
    public function register() {
        add_action('admin_bar_menu', [$this, 'run'], 999);
    }

    public function run($wp_admin_bar)
    {
        $wp_admin_bar->remove_node('wp-logo');
        $wp_admin_bar->remove_node('search');
        $wp_admin_bar->remove_node('themes');
        $wp_admin_bar->remove_node('customize');
        $wp_admin_bar->remove_node('view-site');
        $wp_admin_bar->remove_node('dashboard');
        $wp_admin_bar->remove_node('appearance');
        $wp_admin_bar->remove_node('menus');
        $wp_admin_bar->remove_node('new-user');
    }
}