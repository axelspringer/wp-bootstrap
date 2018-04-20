<?php

namespace AxelSpringer\WP\Bootstrap;

use AxelSpringer\WP\Bootstrap\Plugin\AbstractPlugin;

/**
 * Class Plugin
 *
 * @package AxelSpringer\WP\Bootstrap
 */
class Plugin extends AbstractPlugin
{

    /**
     * Initializes the plugin
     */
    public function init()
    {
        // load options
        $this->setup->load_options( 'AxelSpringer\WP\Bootstrap\__OPTION__' );
        $this->settings = new Settings(
            __( __TRANSLATE__::SETTINGS_PAGE_TITLE ),
            __( __TRANSLATE__::SETTINGS_MENU_TITLE ),
            __PLUGIN__::SETTINGS_PAGE,
            __PLUGIN__::SETTINGS_PERMISSION,
            $this->setup->version
        );

        // $title, $menu, $page, $permission, $version, $options = null, $callback = null
    }

    /**
     * Activates the Bootstrap plugin
     *
     * @return bool
     */
    public static function activation()
    {
        // noop
		return true;
    }

    /**
     * Do actions after init
     */
    public function after_init()
    {
        do_action( __HOOK__::AFTER_INIT, $this );
    }

    /**
     * Deactivates the Bootstrap plugin
     *
     * @return bool
     */
    public static function deactivation()
    {
        // noop
		return true;
    }

    /**
     * Loads the required WP hooks
     *
     * @return
     */
    public function load_hooks()
    {

    }

    /**
     * Enqueue required scripts
     *
     * @return
     */
    public function enqueue_scripts()
    {
        add_action( 'admin_enqueue_scripts',  array( &$this, 'enqueue_admin_scripts' ) );
    }

    /**
     * Enqueue shared styles and scripts
     *
     * @return
     */
	public function enqueue_admin_scripts() {
        // these can be used across plugins
		wp_register_style( 'bootstrap-admin-style', $this->plugin_url( 'admin/admin.css' ), false, $this->setup->version );
		wp_register_script( 'bootstrap-admin-script' , $this->plugin_url( 'admin/admin.css' ), array( 'jquery', 'wp-util'), $this->setup->version, true );

		wp_enqueue_style( 'bootstrap-admin-style' );
		wp_enqueue_script( 'bootstrap-admin-script' );
	}
}
