<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JaxyPants
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area erin-sidebar">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</aside><!-- #secondary -->
