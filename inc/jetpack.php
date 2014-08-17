<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package unpacked
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function unpacked_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'unpacked_jetpack_setup' );
