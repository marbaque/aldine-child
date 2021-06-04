<?php
/**
 * @author  Mario <mbadilla@uned.a.cr>
 * @license GPLv2 (or any later version)
 */

add_action( 'after_setup_theme', function () {
	// TODO
} );

/**
 * Loads the child theme textdomain.
 */
function aldine_child_theme_setup() {
    load_child_theme_textdomain( 'pressbooks-aldine', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'aldine_child_theme_setup' );
