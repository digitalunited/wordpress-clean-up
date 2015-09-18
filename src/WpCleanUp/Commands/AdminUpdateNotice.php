<?php namespace DigitalUnited\WpCleanUp\Commands;

class AdminUpdateNotice extends BaseCommand
{
    public function register() {
        add_action('admin_menu', [$this, 'run'], 999);
    }

    public function run()
    {
        remove_action( 'admin_notices', 'update_nag', 3);
    }
}