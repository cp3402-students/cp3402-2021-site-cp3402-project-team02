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
        <a href="https://www.facebook.com/Townsville-Jazz-Club-Inc-354976484531491/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="mailto:townsvillejazz@icloud.com"><i class="fas fa-envelope" aria-hidden="true"></i></a>
        <a href="tel:0413456542"><i class="fas fa-phone" aria-hidden="true"></i></i></a>
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
