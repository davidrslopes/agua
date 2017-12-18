<?php
/**
 * The front page file.
 *
 */

get_header();

$fastio_home_video = get_theme_mod( 'fastio_home_video' );
?>
<div class="wrapper" id="wrapper-home">

	<div class="col-xs-12" id="content" tabindex="-1">

		<div class="row">
			<!-- ******************* The Video Area ******************* -->
			
			<video width="100%" width="100%" style="width:100vw;height:100vh">
				<source src="<?php echo $fastio_home_video; ?>" type="video/mp4">
				Your browser does not support the video tag.
			</video>
			
			<pre>
				<?php print_r($fastio_home_video); ?>
			</pre>
			<!-- TODO HUGO -->
		</div><!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>