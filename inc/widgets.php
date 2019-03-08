<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jaxypants_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'jaxypants' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'jaxypants' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Left Sidebar', 'jaxypants' ),
		'id'            => 'left-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'jaxypants' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	
	
	register_sidebar( array(
		'name'          => esc_html__( 'Hero', 'jaxypants' ),
		'id'            => 'hero',
		'description'   => esc_html__( 'Add widgets here.', 'jaxypants' ),
		'before_widget' => '<section id="%1$s" class="col-md-11 jaxy-hero-widget widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	

	register_sidebar( array(
		'name'          => esc_html__( 'Left Footer', 'jaxypants' ),
		'id'            => 'left-footer',
		'description'   => esc_html__( 'Add widgets here.', 'jaxypants' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	
	
	register_sidebar( array(
		'name'          => esc_html__( 'Right Main Content', 'jaxypants' ),
		'id'            => 'right-main-content',
		'description'   => esc_html__( 'Add widgets here.', 'jaxypants' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',

	) );		
	

	
}
add_action( 'widgets_init', 'jaxypants_widgets_init' );
