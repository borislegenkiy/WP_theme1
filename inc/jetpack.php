<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package business_factory
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function business_factory_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'business_factory_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function business_factory_jetpack_setup
add_action( 'after_setup_theme', 'business_factory_jetpack_setup' );

function business_factory_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function business_factory_infinite_scroll_render