<?php namespace DigitalUnited\WpCleanUp\Commands;

class JetElementsPath extends BaseCommand
{
    public function register() {
        add_filter( 'cherry_core_base_url', [$this, 'run1'] );
        add_filter( 'cx_include_module_url', [$this, 'run2'] );
    }

    public function run1($url)
    {   
        // \error_log("1:" . $url . " :: " . home_url( '/' ) . explode( '/web/', $url )[1]);
        return home_url( '/' ) . explode( '/web/', $url )[1];
    }
    public function run2($url)
    {   
        // \error_log("2: " . $url . " :: " . home_url( '/' ) . explode( '/web/', $url )[1]);
        return home_url( '/' ) . explode( '/web/', $url )[1];
    }

}
