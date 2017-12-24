<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
$footer_text = get_theme_mod( 'text_setting' );
$fb_link=get_theme_mod( 'understrap_footer_fb' );
$instagr_link = get_theme_mod( 'understrap_footer_instag' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<?php if ( is_front_page() ) : ?>
<div class="wrapper home-footer-wrapper" id="wrapper-footer-home">
	<footer class="home-footer <?php echo esc_attr( $container ); ?>" id="colophon">
		<div class="row">
			<div class="col-lg-4 col-md-4" dir="rtl">
				<?php do_action('icl_language_selector'); ?>
			</div>
			<div class="col-lg-4 col-md-4 text-center">
				<a class="btn btn-link fastio-home-link" href="/desde-1979">Viaje pela natureza <i class="fa fa-angle-down"></i></a>
			</div>
			<div class="col-lg-4 col-md-4 text-right">
				<ul class="list-inline fastio-home-social">
					<li class="list-inline-item"><a href="<?php echo $fb_link; ?>" target="_blank"><i class="fa fa-facebook-square social"></i></a></li>
					<li class="list-inline-item"><a href="<?php echo $instagr_link; ?>" target="_blank"><i class="fa fa-instagram social"></i></a></li>
				</ul>
			</div><!--col end -->
		</div><!-- row end -->
	</footer><!-- footer container end -->
</div><!-- wrapper end -->
<?php else: ?>
<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

							<a href="<?php  echo esc_url( __( 'http://wordpress.org/','understrap' ) ); ?>"><?php printf( 
							/* translators:*/
							esc_html__( 'Proudly powered by %s', 'understrap' ),'WordPress' ); ?></a>
								<span class="sep"> | </span>
					
							<?php printf( // WPCS: XSS ok.
							/* translators:*/
								esc_html__( 'Theme: %1$s by %2$s.', 'understrap' ), $the_theme->get( 'Name' ),  '<a href="'.esc_url( __('http://understrap.com', 'understrap')).'">understrap.com</a>' ); ?> 
				
							(<?php printf( // WPCS: XSS ok.
							/* translators:*/
								esc_html__( 'Version: %1$s', 'understrap' ), $the_theme->get( 'Version' ) ); ?>)
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

<?php endif; ?>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

