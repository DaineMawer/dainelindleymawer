<?php
/**
 * WP Theme constants and setup functions
 *
 * @package DaineMawer
 * @since 0.1.0
 */

// Useful global constants.
define( 'DM_THEME_SCAFFOLD_VERSION',      '0.1.0' );
define( 'DM_THEME_SCAFFOLD_URL',          get_stylesheet_directory_uri() );
define( 'DM_THEME_SCAFFOLD_TEMPLATE_URL', get_template_directory_uri() );
define( 'DM_THEME_SCAFFOLD_PATH',         get_template_directory() . '/' );
define( 'DM_THEME_SCAFFOLD_INC',          DM_THEME_SCAFFOLD_PATH . 'includes/' );

require_once DM_THEME_SCAFFOLD_INC . 'core.php';
require_once DM_THEME_SCAFFOLD_INC . 'template-tags.php';

// Run the setup functions.
DaineMawer\Core\setup();

// What does this do?
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once 'vendor/autoload.php';
}
