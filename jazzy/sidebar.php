<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jazzy
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<button class="button-primary sidebar-toggle" onclick="openNav()"><i class="fab fa-facebook-square"></i> Feed</button>
<div id="sidebar" id="secondary" class="widget-area sidebar">
    <button class="button-primary close-btn" onclick="closeNav()"><i class="fas fa-times"></i> Close</button>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->

<script>
    function openNav() {
        document.getElementById("sidebar").style.width = "320px";
    }

    function closeNav() {
        document.getElementById("sidebar").style.width = "0";
    }
</script>