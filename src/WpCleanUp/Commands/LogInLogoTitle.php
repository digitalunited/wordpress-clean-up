<?php namespace DigitalUnited\WpCleanUp\Commands;

class LogInLogoTitle extends BaseCommand
{
    public function register()
    {
        add_filter('login_headertitle', [$this, 'run'], 999);
    }

    public function run()
    {
        return $this->params;
    }
}