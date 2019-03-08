<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JaxyPants
 */

get_header();
?>

	<div id="primary" class="content-area row">
		<div class="col-md-9 jaxy-page-content">
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
		</div><!-- .col-md-9 -->
		<div class="col-md-3 jaxy-page-content">
			<!-- #sidebar here -->
			<?php if ( is_active_sidebar('sidebar') ) : ?>
			<?php dynamic_sidebar('sidebar'); ?>
			<?php endif; ?>
		
		</div><!-- .col-md-3 -->
	</div><!-- #primary -->

<?php
get_footer();
