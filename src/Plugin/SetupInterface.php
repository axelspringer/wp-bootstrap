<?php

namespace AxelSpringer\WP\Bootstrap\Plugin;

interface SetupInterface
{
    public function load_options( string $options );
    public function update_version();
    public function migrate_schema();
}
