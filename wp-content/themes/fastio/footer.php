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
$footer_text = get_theme_mod( 'footer_text' );
$fb_link = get_theme_mod( 'footer_fb' );
$instagr_link = get_theme_mod( 'footer_instag' );
$footer_logos_src = get_template_directory_uri()."/img/footer-logos.png"; //Setup options...
$footer_logos_url = "#"; //Setup options...
$footer_logos_alt = "Portugal 2020"; //Setup options...
$footer_logos_title = "Portugal 2020"; //Setup options...
?>

<?php get_sidebar( 'footerfull' ); ?>

<?php 
// ******************* The Front Page Footer ******************* //
if ( is_front_page() ) : ?>
<div class="wrapper home-footer-wrapper" id="wrapper-footer-home">
	<footer class="home-footer <?php echo esc_attr( $container ); ?>" id="colophon">
		<div class="row">
			<div class="col-4">
				<div class="fastio-footer-logos">
					<a href="<?php echo $footer_logos_url;?>"><img src="<?php echo $footer_logos_src;?>" alt="<?php echo $footer_logos_alt;?>" title="<?php echo $footer_logos_title;?>"></a>
				</div>
			</div>
			<div class="col-3 offset-5 text-right">
				<?php do_action('icl_language_selector'); ?>
				<ul class="list-inline fastio-home-social pull-right">
					<li class="list-inline-item"><a href="<?php echo $fb_link; ?>" target="_blank"><i class="fa fa-facebook-square social"></i></a></li>
					<li class="list-inline-item"><a href="<?php echo $instagr_link; ?>" target="_blank"><i class="fa fa-instagram social"></i></a></li>
				</ul>
			</div><!--col end -->
		</div><!-- row end -->
	</footer><!-- footer container end -->
</div><!-- wrapper end -->
<?php 
// ******************* The Main Pages Footer ******************* //
elseif ( is_page() ) : ?>
<div class="wrapper main-footer-wrapper" id="wrapper-footer-main">
	<footer class="main-footer <?php echo esc_attr( $container ); ?>" id="colophon">
		<div class="row">
			<div class="col-3">
				<!-- Footer Logos -->
				<div class="fastio-footer-logos">
					<a href="<?php echo $footer_logos_url;?>"><img src="<?php echo $footer_logos_src;?>" alt="<?php echo $footer_logos_alt;?>" title="<?php echo $footer_logos_title;?>"></a>
				</div>
			</div>
			<div class="col-2">
				<!-- Social -->
				<ul class="fastio-footer-social nav">
					<li class="nav-item"><a class="nav-link" href="<?php echo $fb_link; ?>" target="_blank"><i class="fa fa-facebook-square social"></i></a></li>
					<li class="nav-item"><a class="nav-link" href="<?php echo $instagr_link; ?>" target="_blank"><i class="fa fa-instagram social"></i></a></li>
				</ul>
			</div>
			<div class="col-1">
				<!-- Language -->
				<div class="fastio-footer-lang">
					<?php do_action('icl_language_selector'); ?>
				</div>
			</div>
			<div class="col-4">
				<!-- Footer Menu -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'footer',
						'container_class' => 'fastio-footer-nav',
						'container_id'    => 'fastioFooterNav',
						'menu_class'      => 'nav',
						//'items_wrap'	  => '%3$s',
						'fallback_cb'     => '',
						'menu_id'         => 'footer-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			</div>
			<div class="col-2">
				<div class="fastio-footer-copy text-right">
				<?php 
					if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
						$lang_code = ICL_LANGUAGE_CODE;
					}else{
						$lang_code = 'pt-pt';
					}
					echo '<a href="http://savage-agency.pt" target="_blank"><img src="'.get_template_directory_uri().'/img/savage-'.$lang_code.'.png" alt="'.__('concebido por SAVAGE', 'understrap').'" title ="'.__('concebido por SAVAGE', 'understrap').'"></a>';
					?>
				</div>
			</div><!--col end -->
		</div><!-- row end -->
	</footer><!-- footer container end -->
</div><!-- wrapper end -->
<?php
// ******************* The Standard Clean Footer ******************* //
else: ?>
<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-12">

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

