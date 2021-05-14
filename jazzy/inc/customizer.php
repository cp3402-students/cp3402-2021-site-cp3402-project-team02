<?php
/**
 * jazzy Theme Customizer
 *
 * @package jazzy
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function jazzy_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'jazzy_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'jazzy_customize_partial_blogdescription',
			)
		);
	}

	// Media Player
    $wp_customize->add_section(
        'media-player',
        array(
            'title' => __('Media Player', 'jazzy'),
            'priority' => 30,
            'description' => __('Enter the URL to your media file that your want to play', 'jazzy')
        )
    );

    $wp_customize->add_setting( 'audio-url', array( 'default' => '' ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'audio-url', array( 'label' => __( 'URL', 'jazzy' ), 'section' => 'media-player', 'settings' => 'audio-url', ) ) );
}
add_action( 'customize_register', 'jazzy_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function jazzy_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function jazzy_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function jazzy_customize_preview_js() {
	wp_enqueue_script( 'jazzy-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'jazzy_customize_preview_js' );
