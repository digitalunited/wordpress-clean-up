<?php namespace DigitalUnited\WpCleanUp;

/**
 * Class WpCleanUp
 * @package DigitalUnited\WpCleanUp
 */
class WpCleanUp
{
    protected $config = [];

    function __construct()
    {
        if (!file_exists($this->getConfigPath())) {
          return false;
        }

        $this->loadConfig();
    }

    public function go()
    {
        foreach ($this->config as $command => $params) {
            if (!empty($params)) {
                $this->execute($command, $params);
            }
        }
    }

    protected function loadConfig()
    {
        if (file_exists($this->getConfigPath())) {
            $this->config = include($this->getConfigPath());
        }
        else {
          return false;
        }
    }

    protected function getConfigPath()
    {
        // Is there a config in templates dir...
        if (file_exists(get_template_directory() . '/WpCleanUpConfig.php'))
            return get_template_directory() . '/WpCleanUpConfig.php';
        // Otherwise just take default settings... 
        return __DIR__.'/../../configBoilerplate.php';
    }

    protected function execute($commandClass, $params)
    {
        $commandClass = "\\DigitalUnited\\WpCleanUp\\Commands\\" . $commandClass;

        if (class_exists($commandClass)) {
            $command = new $commandClass($params);
            $command->register();
        }
        else {
            throw new \Exception($commandClass . ': Is not a valid WordPress Clean up Config entry');
        }
    }
}