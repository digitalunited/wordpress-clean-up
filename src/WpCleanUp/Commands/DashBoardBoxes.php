<?php namespace DigitalUnited\WpCleanUp\Commands;

class DashBoardBoxes extends BaseCommand
{
    public function register() {
        add_action('admin_init', [$this, 'run'], 999);
    }

    public function run()
    {
        remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
        remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
        remove_meta_box('dashboard_primary', 'dashboard', 'side');
        remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
        remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
        remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');
        remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
        remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
        remove_meta_box('dashboard_activity', 'dashboard', 'normal');
    }
}