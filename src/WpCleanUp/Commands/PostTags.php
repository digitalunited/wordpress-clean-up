<?php namespace DigitalUnited\WpCleanUp\Commands;

class PostTags extends BaseCommand
{
    public function register() {
        add_action('init', [$this, 'run'], 999);
    }

    public function run()
    {
        register_taxonomy('post_tag', array());
    }
}