<?php
/**
 * Template Name: Page No Sidebar
 * Post Type: page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JaxyPants
 */

get_header();
?>

	<div id="primary" class="content-area row">
		<div class="col-md-12 jaxy-page-content">
		<main id="main" class="site-main">
		<div class="underlay-page">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );


		endwhile; // End of the loop.
		?>
		</div>
		</main><!-- #main -->
		</div><!-- .col-md-12 -->
		
	</div><!-- #primary -->

<?php
get_footer();
