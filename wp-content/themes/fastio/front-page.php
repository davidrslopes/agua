<?php
/**
 * The front page file.
 *
 */

get_header();

$fastio_home_video = get_theme_mod( 'fastio_home_video' );
$fastio_home_image_fallback = get_theme_mod( 'fastio_home_image_fallback' );
?>
<!-- ******************* The Video Area ******************* -->
<video class="fastio-video" poster="<?php echo $fastio_home_image_fallback; ?>" autoplay loop muted style="background: url(<?php echo $fastio_home_image_fallback; ?>) no-repeat;">
	<source src="<?php echo $fastio_home_video; ?>" type="video/mp4">
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