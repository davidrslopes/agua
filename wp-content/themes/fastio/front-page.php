<?php
/**
 * The front page file.
 *
 */

get_header();

$home_video = get_theme_mod( 'home_video' );
$home_video_fallback = get_theme_mod( 'home_video_fallback' );
$home_video_text = get_theme_mod( 'home_video_text' );
$home_video_text_color = get_theme_mod( 'home_video_text_color' );
?>
<!-- ******************* The Video Area ******************* -->
<?php /* Nota IMPORTANTE: Temos de verificar como deve ser o comportamento mobile desta area, apenas permitir a visualização do vídeo em WIFI era o ideal, em 3G este video não deve ser incluído, e deverá comprimir-se em vários formatos para que seja possivel a responsividade também em relação ao peso em mb do site. */ ?>
<video class="fastio-video" poster="<?php echo $home_video_fallback; ?>" autoplay loop muted plays-inline style="background: url(<?php echo $home_video_fallback; ?>) no-repeat;">
	<source src="<?php echo $home_video; ?>" type="video/mp4">
</video>
<!-- ******************* The Video Area End ******************* -->

<!-- ******************* The Content ******************* -->
<?php if(!empty($home_video_text)): ?>
<h1 class="fastio-home-title" <?php if(!empty($home_video_text_color)){ echo 'style="color:'.$home_video_text_color.';"';} ?>><?php echo $home_video_text; ?></h1>
<?php endif; ?>
<!-- ******************* The Content End ******************* -->

<?php get_footer(); ?>