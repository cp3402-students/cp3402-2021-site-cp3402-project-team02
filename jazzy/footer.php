<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jazzy
 */

?>

<footer id="colophon" class="site-footer">
    <div class="social-info">
        <?php

            // custom footer links
            if ( get_theme_mod( 'facebook-url' ) ) {
                echo '<a href="' . get_theme_mod( 'facebook-url' ) . '"><i class="fa fa-facebook"></i></a>';
            }

            if ( get_theme_mod( 'instagram-url' ) ) {
                echo '<a href="' . get_theme_mod( 'instagram-url' ) . '"><i class="fab fa-instagram-square"></i></a>';
            }

            if ( get_theme_mod( 'phone-number' ) ) {
                echo '<a href="tel:' . get_theme_mod( 'phone-number' ) . '"><i class="fas fa-phone"></i></a>';
            }

            if ( get_theme_mod( 'email-address' ) ) {
                echo '<a href="mailto:' . get_theme_mod( 'email-address' ) . '"><i class="fas fa-envelope"></i></a>';
            }
        ?>
    </div>
    <div class="site-info">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jazzy' ) ); ?>">
        </a>
        <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf( esc_html__( 'Theme: %1$s by %2$s', 'jazzy' ), 'jazzy', '<a href="https://github.com/cp3402-students/cp3402-2021-site-cp3402-project-team02">Group02</a>' );
        ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
