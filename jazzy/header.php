<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jazzy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'jazzy' ); ?></a>

	<header id="masthead" class="site-header">

        <?php $slider_id = get_theme_mod( 'slider-id' ); ?>

		<div class="site-branding <?php if ( !$slider_id ) echo 'site-branding-padding' ?>">
			<?php
            the_custom_logo();

            echo do_shortcode( '[metaslider id="' . $slider_id . '"]' );
			?>
        </div><!-- .site-branding -->

        <div class="media-player">
            <?php
            $music_file = get_theme_mod( 'audio-url' );
            echo do_shortcode( '[audio mp3=' . $music_file . ']' );
            ?>
        </div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'jazzy' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
