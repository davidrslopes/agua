<?php
/**
 * The front page file.
 *
 */

get_header();

$video_setting = get_theme_mod( 'video_setting' ); //Todo: Campo nas opções a funcionar
$fastio_home_image_fallback = get_theme_mod( 'fastio_home_image_fallback' ); //Todo: Campo nas opções
?>
<!-- ******************* The Video Area ******************* -->
<?php /* Nota IMPORTANTE: Temos de verificar como deve ser o comportamento mobile desta area, apenas permitir a visualização do vídeo em WIFI era o ideal, em 3G este video não deve ser incluído, e deverá comprimir-se em vários formatos para que seja possivel a responsividade também em relação ao peso em mb do site. */ ?>
<video class="fastio-video" poster="<?php echo $fastio_home_image_fallback; ?>" autoplay loop muted plays-inline style="background: url(<?php echo $fastio_home_image_fallback; ?>) no-repeat;">
	<source src="<?php echo $video_setting; ?>" type="video/mp4">
</video>
<!-- ******************* The Video Area End ******************* -->

<!-- ******************* Content ******************* -->
<div class="wrapper wrapper-home" id="wrapper-home">
	<div class="container">
		<div class="col-xs-12" id="content" tabindex="-1">
			<!-- Content goes here -->
		</div>
	</div><!-- Container end -->
</div><!-- Wrapper end -->
<!-- ******************* Content End ******************* -->

<?php get_footer(); ?>