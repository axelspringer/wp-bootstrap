<?php

namespace AxelSpringer\WP\Bootstrap;

use AxelSpringer\WP\Bootstrap\Settings\AbstractSettings;
use AxelSpringer\WP\Bootstrap\Settings\Page;
use AxelSpringer\WP\Bootstrap\Settings\Field;
use AxelSpringer\WP\Bootstrap\Settings\Section;

/**
 * Class Settings
 *
 * @package AxelSpringer\WP\Bootstrap
 */
class Settings extends AbstractSettings {

    /**
     *
     */
    public function load_settings()
    {
        $args = array(
            'id'			  => 'bootstrap_general',
            'title'			  => __( __TRANSLATE__::SETTINGS_SECTION_GENERAL, __PLUGIN__::TEXT_DOMAIN ),
            'page'			  => $this->page,
            'description'	  => '',
        );
        $general = new Section( $args );

        $args = array(
            'id'				  => 'bootstrap_demo',
            'title'				  => 'Demo',
            'page'				  => $this->page,
            'section'			  => 'bootstrap_general',
            'description'         => '',
            'type'				  => 'text', // text, textarea, password, checkbox
            'multi'				  => false
        );
        $general_demo = new Field( $args );
    }
}
