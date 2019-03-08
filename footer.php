<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JaxyPants
 */

?>
				</div><!-- #content -->
				
				</div><!-- .container-fluid -->
					<div class="container-fluid" style="background-color: #1B1B1B; margin-left:0; margin-right:0; padding-left:0; padding-right:0; position: fixed; bottom: 0;">
						<div class="row" style="background-color: #1B1B1B; margin-left:0; margin-right:0; padding-left:0; padding-right:0;">
							<div class="col-md-12" style="background-color: #1B1B1B; margin-left:0; margin-right:0; padding-left:0; padding-right:0; text-align:center;">
								<footer id="colophon" class="site-footer jaxy-footer" style="background-color: #1B1B1B; padding: 8px;">
									<div class="site-info">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
										
										<span class="sep"> | </span>
											<?php
											/* translators: 1: Theme name, 2: Theme author. */
											printf( esc_html__( 'Theme: %1$s by %2$s.', 'jaxypants' ), 'JaxyPants', '<a href="http://www.erinmcintyre.com">Erin McIntyre</a>' );
											?>
									</div><!-- .site-info -->
								</footer><!-- #colophon -->
							</div>
					</div>				
			</div><!-- .container-fluid -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
	</body>
</html>