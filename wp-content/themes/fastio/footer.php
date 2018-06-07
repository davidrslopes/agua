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
$footer_logos_url = "https://www.portugal2020.pt/Portal2020"; //Setup options...
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
			<div class="col-6 col-lg-4">
				<div class="fastio-footer-logos">
					<a href="<?php echo $footer_logos_url;?>"><img src="<?php echo $footer_logos_src;?>" alt="<?php echo $footer_logos_alt;?>" title="<?php echo $footer_logos_title;?>"></a>
				</div>
			</div>
			<div class="col-4 offset-2 col-lg-3 offset-lg-5 text-right">
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
// ******************* The Mobile Only Main Pages Footer ******************* //
elseif(is_page() && wp_is_mobile()): ?>
<div class="wrapper main-footer-wrapper" id="wrapper-footer-main">
	<footer class="main-footer <?php if(!wp_is_mobile()){echo esc_attr( $container );}else{echo "container-fluid";}?>" id="colophon">
		<div class="row">
			<div class="col-9">
				<!-- Footer Menu -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'footer',
						'container_class' => 'fastio-footer-nav',
						'container_id'    => 'fastioFooterNav',
						'menu_class'      => 'nav pull-left',
						//'items_wrap'	  => '%3$s',
						'fallback_cb'     => '',
						'menu_id'         => 'footer-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			</div>
			<div class="col-3">
				<!-- Language -->
				<div class="fastio-footer-lang">
					<?php do_action('icl_language_selector'); ?>
				</div>
			</div>
		</div><!-- row end -->
		<div class="row">
			<div class="col-8">
				<!-- Footer Logos -->
				<div class="fastio-footer-logos">
					<?php 
					if(!is_page_template()):
						if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
							$lang_code = ICL_LANGUAGE_CODE;
						}else{
							$lang_code = 'pt-pt';
						}
						echo '<a href="http://savage-agency.pt" target="_blank"><img class="logo-savage" src="'.get_template_directory_uri().'/img/savage-'.$lang_code.'.png" alt="'.__('concebido por SAVAGE', 'understrap').'" title ="'.__('concebido por SAVAGE', 'understrap').'"></a>';
					else:
					?>
					<a href="<?php echo $footer_logos_url;?>"><img class="logo-2020" src="<?php echo $footer_logos_src;?>" alt="<?php echo $footer_logos_alt;?>" title="<?php echo $footer_logos_title;?>"></a>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-4 text-right">
				<!-- Social -->
				<ul class="list-inline fastio-footer-social">
					<li class="list-inline-item"><a href="<?php echo $fb_link; ?>" target="_blank"><i class="fa fa-facebook-square social"></i></a></li>
					<li class="list-inline-item"><a href="<?php echo $instagr_link; ?>" target="_blank"><i class="fa fa-instagram social"></i></a></li>
				</ul>
			</div><!--col end -->
		</div><!-- row end -->
	</footer><!-- footer container end -->
</div><!-- wrapper end -->
<?php
else:
// ******************* The Main Pages Footer ******************* //
?>
<div class="wrapper main-footer-wrapper" id="wrapper-footer-main">
	<footer class="main-footer <?php echo esc_attr( $container ); ?>" id="colophon">
		<div class="row">
			<div class="col-12 col-md-4">
				<!-- Footer Logos -->
				<div class="fastio-footer-logos">
					<?php 
					if(!is_page_template()):
						if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
							$lang_code = ICL_LANGUAGE_CODE;
						}else{
							$lang_code = 'pt-pt';
						}
						echo '<a href="http://savage-agency.pt" target="_blank"><img class="logo-savage" src="'.get_template_directory_uri().'/img/savage-'.$lang_code.'.png" alt="'.__('concebido por SAVAGE', 'understrap').'" title ="'.__('concebido por SAVAGE', 'understrap').'"></a>';
					else:
					?>
					<a href="<?php echo $footer_logos_url;?>"><img class="logo-2020" src="<?php echo $footer_logos_src;?>" alt="<?php echo $footer_logos_alt;?>" title="<?php echo $footer_logos_title;?>"></a>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-12 col-md-4 offset-md-2">
				<!-- Footer Menu -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'footer',
						'container_class' => 'fastio-footer-nav',
						'container_id'    => 'fastioFooterNav',
						'menu_class'      => 'nav float-right',
						//'items_wrap'	  => '%3$s',
						'fallback_cb'     => '',
						'menu_id'         => 'footer-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			</div>
			<div class="col-6 col-md-1 text-right">
				<!-- Language -->
				<div class="fastio-footer-lang">
					<?php do_action('icl_language_selector'); ?>
				</div>
			</div>
			<div class="col-6 col-md-1 text-right">
				<!-- Social -->
				<ul class="list-inline fastio-footer-social">
					<li class="list-inline-item"><a href="<?php echo $fb_link; ?>" target="_blank"><i class="fa fa-facebook-square social"></i></a></li>
					<li class="list-inline-item"><a href="<?php echo $instagr_link; ?>" target="_blank"><i class="fa fa-instagram social"></i></a></li>
				</ul>
			</div><!--col end -->
		</div><!-- row end -->
	</footer><!-- footer container end -->
</div><!-- wrapper end -->
<?php endif; ?>

</div>

<?php wp_footer(); ?>

</body>

</html>

