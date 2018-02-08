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
<?php 
if(empty($home_video) || wp_is_mobile()):
	echo '<div class="img-fill" style="background-image:url('.$home_video_fallback.');">';
else:
	echo do_shortcode(' [video class="fastio-video" autoplay="on" loop="on" src="'.$home_video.'" poster="'. $home_video_fallback .'"] ');
endif;
?>
<!-- ******************* The Video Area End ******************* -->

<!-- ******************* The Content ******************* -->
<?php if(!empty($home_video_text)): ?>
<h1 class="fastio-home-title" <?php if(!empty($home_video_text_color)){ echo 'style="color:'.$home_video_text_color.';"';} ?>><?php echo $home_video_text; ?></h1>
<?php endif; ?>
<!-- ******************* The Content End ******************* -->
<?php if(empty($home_video) || wp_is_mobile()): echo'</div>'; endif; ?>
<?php get_footer(); ?>