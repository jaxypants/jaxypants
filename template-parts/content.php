<?php
/**
 * Template part for displaying posts on blog or home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JaxyPants
 */

?>

<div class="card jaxypost col-md-3 shadow-sm">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<?php jaxypants_post_thumbnail(); ?>
	
	
	<?php if ( has_post_thumbnail() ) { ?>
	<div class="entry-header">
	<?php } else { ?> 
	<div class="card-header">
	<?php } ?> 
	
	
	<?php if ( has_post_thumbnail() ) { ?>
		
		<?php
		
		if ( is_singular() ) :
			the_title( '<h5 class="image-card-title">', '</h5>' );
		else :
			the_title( '<h5 class="image-card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta"><small>
				<?php
				jaxypants_posted_on();
				//jaxypants_posted_by();
				?>
			</small></div><!-- .entry-meta -->
		<?php endif; ?>
		
		<?php } else { ?> 
		
		
		<?php
		
		if ( is_singular() ) :
			the_title( '<h5 class="card-title">', '</h5>' );
		else :
			the_title( '<h5 class="card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta"><small>
				<?php
				//jaxypants_posted_on();
				//jaxypants_posted_by();
				?>
			</small></div><!-- .entry-meta -->
		<?php endif; ?>
		
		
		<?php } ?> 
		
		
		
		
		
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content card-text">
		<?php
		the_excerpt( sprintf(
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
		<a href="<?php the_permalink(); ?>">Read More</a>
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
</div>