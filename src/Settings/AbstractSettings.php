<?php

namespace AxelSpringer\WP\Bootstrap\Settings;

/**
 * Class Settings
 *
 * @package AxelSpringer\WP\Bootstrap
 */
abstract class AbstractSettings {
  public $page;
  public $permission;
  public $title;
  public $menu;
  public $version;
  public $options;
  public $callback;

  public function __construct( $title, $menu, $page, $permission, $version, $options = null, $callback = null ) {
    $this->title      = $title;
    $this->page       = $page;
    $this->menu       = $menu;
    $this->version    = $version;
    $this->permission = $permission;
    $this->options    = $options;
    $this->callback   = $callback;

    if ( empty( $this->callback ) ) {
      $this->callback = function() {};
    }

    add_action(	'admin_menu', array( &$this, 'admin_menu' ) );
  }

  public function settings_page() {
    $settings_page = new Page( $this->page, $this->title, $this->version, $this->callback );
  }

  public function admin_menu() {
    add_options_page( $this->title, $this->menu, $this->permission, $this->page, array( &$this, 'settings_page' ) );
  }
}
