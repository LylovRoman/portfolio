<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Talon
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-md-4" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<a href="https://www.wptheme.us/cat/adaptivnye/" title="Адаптивные темы WordPress">Адаптивные шаблоны WordPress</a>
</aside><!-- #secondary -->
