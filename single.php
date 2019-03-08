<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package JaxyPants
 */

get_header();
?>

<div id="primary" class="content-area side-margins row">
	<div class="col-md-9 jaxy-post-content">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();
			?>

			<div class="underlay">	
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-meta-post">
						<small>
						<?php
						jaxypants_posted_on();
						jaxypants_posted_by();
						?>
						</small>
						</div><!-- .entry-meta -->
				<header class="entry-header">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="jaxy-post-title">', '</h1>' );
					else :
						the_title( '<h1 class="jaxy-post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
					endif;
			
					if ( 'post' === get_post_type() ) :
						?>
						
					<?php endif; ?>
				</header><!-- .entry-header -->

				<div class="jaxy-post-entry-content">
					<img src="<?php the_post_thumbnail_url('medium'); ?>" class="alignleft" alt="">
				
					<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'jaxypants' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jaxypants' ),
						'after'  => '</div>',
					) );
					?>
				</div><!-- .jaxy-post-entry-content -->
			
				<footer class="entry-footer">
					<?php jaxypants_entry_footer(); ?>
				</footer><!-- .entry-footer -->

				</article><!-- #post-<?php the_ID(); ?> -->
					
				<?php	
				//the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

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
