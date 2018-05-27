<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">
	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content','understrap' ); ?></a>
		<nav class="navbar fixed-top">
		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>
				<?php if ( ! has_custom_logo() ) { ?>
					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="navbar-brand mb-0">
							<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</h1>
					<?php else : ?>
						<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
					<?php endif; ?>	
				<?php } else {
					the_custom_logo();
				} ?>
				<div class="fastio-nav dropdown">
					<button class="btn dropdown-toggle" type="button" id="fastioMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MENU </button>
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'dropdown-menu',
						'container_id'    => 'fastioMenuDropdown',
						//'menu_class'      => 'dropdown-item',
						'items_wrap'	  => '%3$s',
						'fallback_cb'     => false,
						'menu_id'         => '',
						'walker'          => new fastio_Navwalker(),
					)
				); ?>
				</div>
				<!-- The WordPress Menu goes here -->
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>
		</nav><!-- .site-navigation -->
	</div><!-- .wrapper-navbar end -->