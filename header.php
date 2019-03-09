<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JaxyPants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>
	  <head>
	      <meta charset="<?php bloginfo( 'charset' ); ?>">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="profile" href="https://gmpg.org/xfn/11">
		  <!-- Custom styles for this template -->
	      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
		  <?php wp_head(); ?>
	  </head>
	  <body <?php body_class(); ?>>
			<div class="container-fluid" style="margin-bottom:20px;">
			  	<header id="jaxypants-header" class="blog-header py-3">
			    	<div id="#jaxypants-header-row" class="row flex-nowrap justify-content-between align-items-center">
			      		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jaxypants' ); ?></a>
			      		<div class="col-12 text-center">
			        		<div class="site-branding">
						      <?php			      
						      the_custom_logo();
						      if ( is_front_page() && is_home() ) :
						        ?>
						        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						        <?php
						      else :
						        ?>
						        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						        <?php
						      endif;
						      $jaxypants_description = get_bloginfo( 'description', 'display' );
						      if ( $jaxypants_description || is_customize_preview() ) :
						        ?>
						        <p class="site-description"><?php echo $jaxypants_description; /* WPCS: xss ok. */ ?></p>
						      <?php endif; ?>
			    			</div><!-- .site-branding -->
			      		</div>
			    	</div>
			
			<div class="collapsible-menu">
	            <input type="checkbox" id="menu">
	            <label for="menu">Menu</label>
	            <div class="menu-content">
		            <nav id="site-navigation" class="">
		                <?php
							      wp_nav_menu( array(
							        'theme_location' => 'primary',
							        'menu_id'        => 'primary',
							      ) );
							      ?>
					</nav>
		        </div>
		    </div>

	       <div class="nav-scroller">
	        	<div class="nav-wrapper">
	    			<nav id="site-navigation" class="main-navigation">
	      				
					      <?php
					      wp_nav_menu( array(
					        'theme_location' => 'primary',
					        'menu_id'        => 'primary',
					      ) );
					      ?>
	    			</nav><!-- #site-navigation -->
	    		</div>
		 	</div>
			 		
			</header>
			<div id="jaxypants-overlay"></div>
		  	<div id="jaxypants-custom-header"><?php the_header_image_tag(); ?></div>


			<div id="content" class="site-content">