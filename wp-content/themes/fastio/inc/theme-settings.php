<?php
/**
 * Check and setup theme's default settings
 *
 * @package understrap
 *
 */

if ( ! function_exists( 'understrap_setup_theme_default_settings' ) ) :
	function understrap_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$understrap_posts_index_style = get_theme_mod( 'understrap_posts_index_style' );
		if ( '' == $understrap_posts_index_style ) {
			set_theme_mod( 'understrap_posts_index_style', 'default' );
		}

		// Sidebar position.
		$understrap_sidebar_position = get_theme_mod( 'understrap_sidebar_position' );
		if ( '' == $understrap_sidebar_position ) {
			set_theme_mod( 'understrap_sidebar_position', 'right' );
		}

		// Container width.
		$understrap_container_type = get_theme_mod( 'understrap_container_type' );
		if ( '' == $understrap_container_type ) {
			set_theme_mod( 'understrap_container_type', 'container' );
		}
		
		// Homepage Vídeo.
		$home_video = get_theme_mod( 'home_video' );
		if ( '' == $home_video ) {
			set_theme_mod( 'home_video', get_template_directory_uri() . '/video/fastio.mp4' );
		}
		
		// Homepage Vídeo Fallback.
		$home_video_fallback = get_theme_mod( 'home_video_fallback' );
		if ( '' == $home_video ) {
			set_theme_mod( 'home_video_fallback', get_template_directory_uri() . '/img/video-fallback.jpg' );
		}
		
		// Homepage Vídeo Text.
		$home_video_text = get_theme_mod( 'home_video_text' );
		if ( '' == $home_video_text ) {
			set_theme_mod( 'home_video_text', 'Sentir Gerês' );
		}
		
		// Homepage Vídeo Text Color.
		$home_video_text_color = get_theme_mod( 'home_video_text_color' );
		if ( '' == $home_video_text_color ) {
			set_theme_mod( 'home_video_text_color', '#FFFFFF' );
		}
		
	}
endif;
