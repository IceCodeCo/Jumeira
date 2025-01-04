<?php
/**
 * Soul Anchor functions and definitions
 *
 * @package Soul Anchor
 * @since 1.0
 */

if ( ! function_exists( 'soul_anchor_support' ) ) :
	function soul_anchor_support() {
			
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		
		add_theme_support( 'wp-block-styles' );

		add_editor_style( 'style.css' );

	}
endif;
add_action( 'after_setup_theme', 'soul_anchor_support' );

/*-------------------------------------------------------------
 Enqueue Styles
--------------------------------------------------------------*/

if ( ! function_exists( 'soul_anchor_styles' ) ) :
	function soul_anchor_styles() {
		// Register theme stylesheet.
		wp_enqueue_style('soul-anchor-style', get_stylesheet_uri(), array(), wp_get_theme()->get('version') );
		wp_enqueue_style('soul-anchor-style-blocks', get_template_directory_uri(). '/assets/css/blocks.css');
		wp_enqueue_style('soul-anchor-style-responsive', get_template_directory_uri(). '/assets/css/responsive.css');
	}

endif;
add_action( 'wp_enqueue_scripts', 'soul_anchor_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

?>