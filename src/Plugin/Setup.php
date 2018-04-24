<?php

namespace AxelSpringer\WP\Bootstrap\Plugin;

/**
 * Class Setup
 *
 * This bootstraps a plugin, and provides configuration
 *
 * @package AxelSpringer\WP\Bootstrap
 */
class Setup implements SetupInterface
{
    /**
     * Version of the plugin
     *
     * @var string
     */
    public $version;

    /**
     * Slug of the plugin
     *
     * @var string
     */
    public $slug;

    /**
     * Plugin file
     *
     * @var string
     */
    public $file;

    /**
     * Plugin options
     *
     * @var array
     */
    public $options = [];

    /**
     * Setup constructor
     */
    public function __construct( string $slug = null, string $version = null, string $file )
    {
        $this->version = $version;
        $this->slug = $slug;
        $this->file = $file;

        // update version
        $this->update_version();
    }

    /**
     * Load required options
     *
     *
     */
    public function load_options( $options )
    {
        // get constants
        $reflect = new \ReflectionClass( $options );
        $options = $reflect->getConstants();

        // iterate needed params
        foreach ( $options as $option => $default ) {
            $key = strtolower( $option ); //
            $env = getenv( $option );
            $this->options[ $key ] = get_option( $key, $default );
            // overload env variables
            $this->options[ $key ] = ! $env ? $this->options[ $key ] : $env;
        }
    }

    /**
     * Check options
     *
     * @param array $options
     * @return bool
     */
    public function check_options( $options = [] )
    {
        foreach( $options as $option ) {
            if ( ! $option ) {
                return false;
            }
        }

        return true;
    }

    /**
     * Updates the version of the plugin
     *
     * @return bool
     */
    public function update_version()
    {
        $option = $this->slug . '_version';
        $old_version = get_option( $option );

        if ( false === $old_version ||
            version_compare( $old_version, $this->version, '<' ) ) {
            return update_option( $option, $this->version );
        }

        return true;
    }

    /**
     * Database migration
     *
     * @return bool
     */
    public function migrate_schema()
    {
        return true;
    }

    /**
     * noop
     */
    protected function __clone()
    {
    }
}
