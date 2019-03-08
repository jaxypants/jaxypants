<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package JaxyPants
 */

get_header();
?>

	<section id="primary" class="content-area row">
		<div class="col-md-9 jaxy-page-content" style="padding-right: 50px;">
			<main id="main" class="site-main">
				<div class="underlay">
					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<h1 class="page-title">
								<?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search Results for: %s', 'jaxypants' ), '<span>' . get_search_query() . '</span>' );
								?>
							</h1>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>
			</main><!-- #main -->
		</div>
		<div class="col-md-3 jaxy-page-content" style="margin-left:-25px; margin-right:20px;">
				<!-- #sidebar here -->
				<?php if ( is_active_sidebar('sidebar') ) : ?>
				<?php dynamic_sidebar('sidebar'); ?>
				<?php endif; ?>
			
		</div><!-- .col-md-3 -->
	</section><!-- #primary -->

<?php
get_footer();
