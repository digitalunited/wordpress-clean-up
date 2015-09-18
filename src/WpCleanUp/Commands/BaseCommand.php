<?php namespace DigitalUnited\WpCleanUp\Commands;

class BaseCommand
{
    protected $params;

    function __construct($_params) {
        $this->params = $_params;
    }
}