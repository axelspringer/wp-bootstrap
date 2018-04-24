<?php

namespace AxelSpringer\WP\Bootstrap\Settings;

class Page {

  public function __construct( $name, $title, $version, $callback ) {
    self::render( $name, $title, $version, $callback );
  }

  public static function render( $name, $title, $version, $callback ) {
		?>
		<div class="wrap bootstrap-settings-page">
			<h2><span class='hidden-xs'><?= esc_html($title) ?></span></h2>
			<form action="options.php" method="post">
			<?php
				global $wp_settings_sections, $wp_settings_fields;
				settings_fields( $name );
                $page = $name;
			?>
			<div class="container-fluid settings-container">
				<div class="row container-row">
					<div class="col-xs-12 col-sm-4 col-md-3 navigation-container">
						<ul class="navigation">
						<?php

							if ( isset( $wp_settings_sections[$page] ) ) {
								foreach ( (array) $wp_settings_sections[$page] as $section ) {
									echo '<li class="nav-item">';
										echo '<a href="#'.$section['id'].'">';
											if($section['icon'])
												echo '<i class="fa fa-'.$section['icon'].'"></i> ';

											echo '<span class="hidden-xs">' . $section['title'] . '</span>';

										echo '</a>';
									echo '</li>';
								}
							}

						?>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-9 content-container">
						<?php

							if ( isset( $wp_settings_sections[$page] ) ) {
								foreach ( (array) $wp_settings_sections[$page] as $section ) {
									echo '<div class="section" id="section-'.$section['id'].'">';
									if ( $section['icon'] ) {
										$icon = "<i class='fa fa-{$section['icon']}'></i>";
									} else {
										$icon = null;
									}
									if ( $section['title'] )
										echo "<h2>$icon {$section['title']}</h2>\n";
									if ( $section['callback'] )
										call_user_func( $section['callback'], $section );

									do_action($section['id']);

									if ( ! isset( $wp_settings_fields ) || !isset( $wp_settings_fields[$page] ) || !isset( $wp_settings_fields[$page][$section['id']] ) ) {
										echo '</div>';
										continue;
									}
									echo '<table class="form-table">';
										do_settings_fields( $page, $section['id'] );
									echo '</table>';
									echo '
				<p class="submit">
					<input name="Submit" type="submit" class="button-primary" value="'.esc_attr(__('Save Changes')).'" />
				</p>';
									echo '</div>';
								}
							}

						?>
					</div>
				</div>
			</div>
			</form>

      <?php call_user_func( $callback ) ?>

			<div class="credits-container">
				<div class="row">
					<div class="col-xs-12">
            Version <?= $version ?>
					</div>
				</div>
			</div>
		</div><!-- wrap -->
		<?php
	}
}
