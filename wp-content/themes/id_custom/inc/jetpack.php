<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package id-custom
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function id_custom_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'id_custom_jetpack_setup' );
