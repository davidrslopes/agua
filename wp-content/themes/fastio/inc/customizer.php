<?php
/**
 * Understrap Theme Customizer
 *
 * @package understrap
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if ( ! function_exists( 'understrap_customize_register' ) ) {
	/**
	 * Register basic customizer support.
	 *
	 * @param object $wp_customize Customizer reference.
	 */
	function understrap_customize_register( $wp_customize ) {
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	}
}
add_action( 'customize_register', 'understrap_customize_register' );

if ( ! function_exists( 'understrap_theme_customize_register' ) ) {
	/**
	 * Register individual settings through customizer's API.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer reference.
	 */
	function understrap_theme_customize_register( $wp_customize ) {

		// Theme layout settings.
		$wp_customize->add_section( 'understrap_theme_layout_options', array(
			'title'       => __( 'Opções de layout', 'understrap' ),
			'capability'  => 'edit_theme_options',
			'description' => __( 'Largura do container e barra lateral por defeito', 'understrap' ),
			'priority'    => 110,
		) );

		 //select sanitization function
        function understrap_theme_slug_sanitize_select( $input, $setting ){
         
            //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
            $input = sanitize_key($input);
 
            //get the list of possible select options 
            $choices = $setting->manager->get_control( $setting->id )->choices;
                             
            //return input if valid or return default option
            return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
             
        }

		$wp_customize->add_setting( 'understrap_container_type', array(
			'default'           => 'container',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'understrap_theme_slug_sanitize_select',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'container_type', array(
					'label'       => __( 'Container Width', 'understrap' ),
					'description' => __( "Choose between Bootstrap's container and container-fluid", 'understrap' ),
					'section'     => 'understrap_theme_layout_options',
					'settings'    => 'understrap_container_type',
					'type'        => 'select',
					'choices'     => array(
						'container'       => __( 'Fixed width container', 'understrap' ),
						'container-fluid' => __( 'Full width container', 'understrap' ),
					),
					'priority'    => '10',
				)
			) );

		$wp_customize->add_setting( 'understrap_sidebar_position', array(
			'default'           => 'right',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sanitize_text_field',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'understrap_sidebar_position', array(
					'label'       => __( 'Sidebar Positioning', 'understrap' ),
					'description' => __( "Set sidebar's default position. Can either be: right, left, both or none. Note: this can be overridden on individual pages.",
					'understrap' ),
					'section'     => 'understrap_theme_layout_options',
					'settings'    => 'understrap_sidebar_position',
					'type'        => 'select',
					'sanitize_callback' => 'understrap_theme_slug_sanitize_select',
					'choices'     => array(
						'right' => __( 'Right sidebar', 'understrap' ),
						'left'  => __( 'Left sidebar', 'understrap' ),
						'both'  => __( 'Left & Right sidebars', 'understrap' ),
						'none'  => __( 'No sidebar', 'understrap' ),
					),
					'priority'    => '20',
				)
			) );
	}
} // endif function_exists( 'understrap_theme_customize_register' ).
add_action( 'customize_register', 'understrap_theme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
if ( ! function_exists( 'understrap_customize_preview_js' ) ) {
	/**
	 * Setup JS integration for live previewing.
	 */
	function understrap_customize_preview_js() {
		wp_enqueue_script( 'understrap_customizer', get_template_directory_uri() . '/js/customizer.js',
			array( 'customize-preview' ), '20130508', true );
	}
}
add_action( 'customize_preview_init', 'understrap_customize_preview_js' );

/*Customizer Code HERE*/

// FASTIO CUSTOMIZER
add_action('customize_register', 'fastio_customizer');

function fastio_customizer($wp_customize){
	
	//OPÇÕES GERAIS
	//Adicionar secção
	/*$wp_customize->add_section('general_settings_section', array(
		'title'          => __( 'Opções Gerais', 'understrap' ),
		'capability'  => 'edit_theme_options',
		'description' => __( 'Opções gerais do tema.', 'understrap' ),
		'priority'    => 110,
	));*/
	
	$wp_customize->add_setting('main_color', array(
		'default'        => '#00aeef',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'main_color', array(
		'label'   =>  __( 'Cor principal', 'understrap' ),
		'description' => __( 'Permite alterar a cor presente em todos os items principais', 'understrap' ),
		'section' => 'colors',
		'settings'    => 'main_color'
	)));
	
	//OPÇÕES DA PÁGINA INICIAL
	//Não é necessário adicionar secção, usa existente : static_front_page
	//Vídeo da Homepage
	$wp_customize->add_setting('home_video', array(
		'default'           => get_template_directory_uri() . '/video/fastio.mp4',
	));
	$wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'home_video', 
		array(
			'label'      => __( 'Vídeo da Homepage', 'understrap' ),
			'description' => __( 'Permite alterar o vídeo em formato MP4 que está incluído na Homepage', 'understrap' ),
			'section'    => 'static_front_page',
			'settings'    => 'home_video'
	)));
	//Fundo da Homepage (Fallback Vídeo)
	$wp_customize->add_setting('home_video_fallback', array(
		'default'           => get_template_directory_uri() . '/img/video-fallback.jpg',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_video_fallback', 
		array(
			'label'      => __( 'Fundo da Homepage', 'understrap' ),
			'description' => __( 'A imagem que aparece em fallback do vídeo', 'understrap' ),
			'section'    => 'static_front_page',
			'settings'    => 'home_video_fallback'
	)));
	//Texto da Homepage
	$wp_customize->add_setting( 'home_video_text', array(
		'default' => 'Sentir Gerês'
	) );

	$wp_customize->add_control( 'home_video_text', array(
		'type' => 'text',
		'section' => 'static_front_page',
		'label'      => __( 'Fundo da Homepage', 'understrap' ),
		'description' => __( 'O texto que aparece em cima do vídeo', 'understrap' )
	) );
	//Cor do Texto da Homepage
	$wp_customize->add_setting( 'home_video_text_color', array(
		'default' => '#FFFFFF'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( 
		$wp_customize, 
		'home_video_text_color', 
		array(
			'label'      => __( 'A cor do texto que aparece em cima do vídeo', 'understrap' ),
			'section'    => 'static_front_page',
			'settings'   => 'home_video_text_color'
		)
	));
	
	//OPÇÕES DE RODAPÉ
	//Adicionar secção  
	$wp_customize->add_section('footer_settings_section', array(
		'title'          => __( 'Opções de rodapé', 'understrap' ),
		'capability'  => 'edit_theme_options',
		'description' => __( 'Opções do rodapé presente em todo o site.', 'understrap' ),
		'priority'    => 150,
	));
	
	//Texto de rodapé
	$wp_customize->add_setting('footer_text', array(
		'default'        => 'Viaje pela natureza',
	));
	$wp_customize->add_control('footer_text', array(
		'label'   =>  __( 'Texto de rodapé', 'understrap' ),
		'description' => __( 'Texto situado a meio do rodapé', 'understrap' ),
		'section' => 'footer_settings_section',
		'settings'    => 'footer_text',
		'type'    => 'textarea',
	));

	//Facebook Url
	$wp_customize->add_setting('footer_fb', array(
		'default'        => 'https://www.facebook.com/aguadofastio/',
	));
	$wp_customize->add_control('footer_fb', array(
		'label'   => __( 'Facebook Url', 'understrap' ),
		'description' => __( 'Altera o destino do botão Facebook, se vazio não aparece.', 'understrap' ),
		'section' => 'footer_settings_section',
		'settings'    => 'footer_fb',
		'type'    => 'input',
	));

	//Instagram Url
	$wp_customize->add_setting('footer_instag', array(
	 'default'        => 'https://www.instagram.com/aguadofastio',
	 ));
	$wp_customize->add_control('footer_instag', array(
		'label'   => __( 'Instagram Url', 'understrap' ),
		'description' => __( 'Altera o destino do botão Instagram, se vazio não aparece.', 'understrap' ),
		'section' => 'footer_settings_section',
		'settings'    => 'footer_instag',
		'type'    => 'input',
	));
}


