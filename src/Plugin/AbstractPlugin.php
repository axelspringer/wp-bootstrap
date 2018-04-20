<?php

namespace AxelSpringer\WP\Bootstrap\Plugin;

use \AxelSpringer\WP\Bootstrap\Settings\Settings;

abstract class AbstractPlugin {

    /**
     * Setup holds the setup of a plugin
     *
     * @var Setup
     */
    public $setup;

    /**
     * Settings holds the settings page of the plugin
     *
     * @var AxelSpringer\WP\Bootstrap\Settings
     */
    public $settings;

    /**
     * Abstract plugin constructor
     *
     * @param string $file
     * @param string $slug
     * @param string $version
     */
    public function __construct( string $slug = null, string $version = null, string $file )
    {
        $this->setup = new Setup( $slug, $version, $file ); // use configured setup

        // call to
        $this->init();

        // after init
        $this->after_init();

        // enqueue scripts
        $this->enqueue_scripts();
    }

    /**
     * Get urls of plugin assets
     *
     * @param string $path
     * @return string
     */
    public function plugin_url( string $path )
    {
        return plugins_url( $path, $this->setup->file );
    }

    abstract protected function init();
    abstract protected function load_hooks();
    abstract protected function enqueue_scripts();
    abstract protected function after_init();
	abstract static public function activation();
	abstract static public function deactivation();
}
