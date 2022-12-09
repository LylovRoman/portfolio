<?php
/**
 * The home template file.
 *
 * @package Talon
 */

get_header(); ?>

<div class="row">
	<div id="primary" class="content-area col-md-8 <?php echo esc_attr(talon_blog_layout()); ?>">
		<main id="main" class="site-main" role="main">

		ы

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
	if ( talon_blog_layout() == 'list' ) {
		get_sidebar();
	}
?>
</div>
<?php get_footer(); ?>
