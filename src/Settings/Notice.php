<?php

namespace AxelSpringer\WP\Bootstrap\Settings;

class Notice {

  public function __construct( $name ) {
    if( isset( $_GET['page'] ) && $_GET['page'] !== 'theme_settings' ){
			return;
		}

		if( isset( $_GET['settings-updated'] ) && $_GET['settings-updated'] === true){
			add_settings_error( $name, $name, 'Erfolgreich aktualisiert.' , 'updated' );
		}

		settings_errors( $name );
  }
}
