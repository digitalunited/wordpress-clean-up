<?php namespace DigitalUnited\WpCleanUp\Commands;

class LogInLogoUrl extends BaseCommand
{
    public function register()
    {
        add_filter('login_headerurl', [$this, 'run'], 999);
    }

    public function run()
    {
        return $this->params;
    }
}