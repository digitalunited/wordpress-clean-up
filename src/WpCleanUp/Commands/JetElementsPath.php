<?php namespace DigitalUnited\WpCleanUp\Commands;

class JetElementsPath extends BaseCommand
{
    public function register() {
        add_filter( 'cherry_core_base_url', [$this, 'run'] );
        add_filter( 'cx_include_module_url', [$this, 'run'] );
    }

    public function run($url)
    {
        return home_url( '/' ) . explode( '/web/', $url )[1];
    }
}
