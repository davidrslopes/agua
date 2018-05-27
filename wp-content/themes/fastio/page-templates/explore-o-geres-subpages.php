<?php
/**
 * Template Name: Explore o Gerês SubPages
 *
 * Template for displaying a specific page
 *
 * @package understrap
 */

get_header();

$info = get_field('explore-o-geres-subpage-info');

//Section 1 : Hero 1
$hero_1 = get_field('explore-o-geres-subpage-section-1');
if(!empty($hero_1)):
?>
<!-- ******************* The Hero Section ******************* -->
<section class="fastio-hero" style="background-image:url('<?php echo $hero_1['bg-img']; ?>');">
	<?php if(!empty($hero_1['title'])): ?>
	<div class="container-fluid">
		<div class="row">
			<header class="fastio-hero-header col-12">
				<h1 class="text-center"<?php if(!empty($hero_1['title-color'])){ echo ' style="color:'.$hero_1['title-color'].';"';} ?>><?php echo $hero_1['title'];?></h1>
			</header>
		</div>
	</div>
	<?php endif; ?>
	<?php if(!empty($hero_1['arrow'])): ?><button class="btn btn-link btn-block fastio-btn-scroll-down"<?php if(!empty($hero_1['arrow-color'])){ echo ' style="color:'.$hero_1['arrow-color'].';"';} ?>><i class="fa fa-angle-down"></i></button><?php endif; ?>
</section><!-- .fastio-hero -->
<?php endif;

//Section 2 : Location
$location = get_field('explore-o-geres-subpage-section-2');
if(!empty($location)):
?>
<!-- ******************* The Location Section ******************* -->
<section class="fastio-location">
	<div class="row no-gutters">
		<?php if(!wp_is_mobile()): // DESKTOP ORDER VERSION ?>
		<div class="fastio-location-feature col-12 col-md-9">
			<?php if(!empty($location['milho-1'])): ?>
			<img data-aos="fade-down" data-aos-duration="3000" class="fastio-milho-1" src="<?php echo $location['milho-1']['url']; ?>" alt="<?php echo $location['milho-1']['title']; ?>" class="img-fluid">
			<?php endif; ?>
			<?php if(!empty($location['video'])):
				$content_width = 1140;
				echo do_shortcode(' [video src="'.$location['video'].'" poster="'. $location['fallback-img']['url'].'"] ');
			else: ?>
			<img src="<?php echo $location['fallback-img']['url'];?>" alt="<?php echo $location['fallback-img']['title'];?>" title="<?php echo $location['fallback-img']['title'];?>" class="fastio-location-image">
			<?php endif; ?>
			<?php if(!empty($location['milho-4'])): ?>
			<img data-aos="fade-up" class="fastio-milho-4 d-none d-md-block" <?php if(!wp_is_mobile()){ echo 'style="margin-top: -110px;z-index:-1;"' ;}?> src="<?php echo $location['milho-4']['url']; ?>" alt="<?php echo $location['milho-4']['title']; ?>" class="img-fluid">
			<?php endif; ?>
		</div>
		<div class="fastio-location-content col-12 col-md-3">
			<?php if(!empty($location['milho-2'])): ?>
			<img data-aos="fade-up" data-aos-duration="3000" class="fastio-milho-2" src="<?php echo $location['milho-2']['url']; ?>" alt="<?php echo $location['milho-2']['title']; ?>" class="img-fluid">
			<?php endif; ?>
			<article>
				<h1><?php the_title();?></h1>
				<p><?php echo $location['text'];?></p>
				<div class="fastio-location-coordinates">
					<img src="<?php echo get_template_directory_uri()."/img/icone-Coordenadas.png"; ?>" height="24" width="24" alt="">
					<?php if(!empty($info['coordenadas-google'])): ?>
					<a href="http://www.google.com/maps/place/<?php echo $info['coordenadas-google']; ?>" target="_blank">
						<?php echo $location['coordinates'];?>
					</a>
					<?php else: echo $location['coordinates']; endif; ?>
				</div>
			</article>
			<?php if(!empty($location['milho-3'])): ?>
			<br>
			<img data-aos="fade-up" class="fastio-milho-3" src="<?php echo $location['milho-3']['url']; ?>" alt="<?php echo $location['milho-3']['title']; ?>" class="img-fluid">
			<?php endif; ?>
		</div>
		<?php else: // MOBILE ORDER VERSION ?>
		
		<div class="fastio-location-content col-12">
			<article data-aos="fade-up">
				<h1><?php the_title();?></h1>
				<p><?php echo $location['text'];?></p>
				<div class="fastio-location-coordinates">
					<img src="<?php echo get_template_directory_uri()."/img/icone-Coordenadas.png"; ?>" height="24" width="24" alt="">
					<?php if(!empty($info['coordenadas-google'])): ?>
					<a href="http://www.google.com/maps/place/<?php echo $info['coordenadas-google']; ?>" target="_blank">
						<?php echo $location['coordinates'];?>
					</a>
					<?php else: echo $location['coordinates']; endif; ?>
				</div>
			</article>
		</div>
		<div class="fastio-location-feature col-12">
			<?php if(!empty($location['video'])):
				$content_width = 1140;
				echo do_shortcode(' [video src="'.$location['video'].'" poster="'. $location['fallback-img']['url'].'"] ');
			else: ?>
			<img src="<?php echo $location['fallback-img']['url'];?>" alt="<?php echo $location['fallback-img']['title'];?>" title="<?php echo $location['fallback-img']['title'];?>" class="fastio-location-image">
			<?php endif; ?>
		</div>
		<?php endif; ?>
	</div>
</section>
<?php endif; ?>

<?php
//Section 3 : Local Highlights
$highlights = get_field('explore-o-geres-subpage-section-3');
if(!empty($highlights)): ?>
<!-- ******************* The Local Highlights Section ******************* -->
<section class="fastio-highlights">
	<div class="container-fluid">
	<?php if(!wp_is_mobile()): // DESKTOP ORDER VERSION ?>
		<div class="row">
			<div class="col-md-2">
				<img src="<?php echo $highlights['svg-left-top']['url'];?>" alt="<?php echo $highlights['svg-left-top']['title'];?>" title="<?php echo $highlights['svg-left-top']['title'];?>" class="img-fluid" style="margin-left:-15px;" data-aos="fade-up">
			</div>
			<div class="col-md-3">
				<article>
					<h3><?php echo $highlights['title']; ?></h3>
					<p><?php echo $highlights['text-top']; ?></p>
				</article>
			</div>
			<div class="col-md-6 offset-md-1">
				<img src="<?php echo $highlights['svg-right-top']['url'];?>" alt="<?php echo $highlights['svg-right-top']['title'];?>" title="<?php echo $highlights['svg-right-top']['title'];?>" class="img-fluid" style="float:right;margin-right:-15px;" data-aos="fade-up">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<img src="<?php echo $highlights['svg-left']['url'];?>" alt="<?php echo $highlights['svg-left']['title'];?>" title="<?php echo $highlights['svg-left']['title'];?>" class="img-fluid" data-aos="fade-up">
				<article class="row">
					<div class="offset-md-3 col-md-7">
						<p class="fastio-highlights-bottom-left" style="background-image:url('<?php echo $highlights['svg-left-bottom']['url'];?>');"><?php echo $highlights['text-bottom']; ?></p>
					</div>
				</article>
			</div>
			<div class="col-md-6">
				<h2><?php echo $highlights['title-big']; ?></h2>
				<img src="<?php echo $highlights['svg-right-bottom']['url'];?>" alt="<?php echo $highlights['svg-right-bottom']['title'];?>" title="<?php echo $highlights['svg-right-bottom']['title'];?>" class="img-fluid" <?php if(!wp_is_mobile()){ echo 'style="padding-top: 220px;"';}?> data-aos="fade-up">
			</div>
		</div>
		<?php else: // MOBILE ORDER VERSION ?>
		<img src="<?php echo $highlights['svg-left-top']['url'];?>" alt="<?php echo $highlights['svg-left-top']['title'];?>" title="<?php echo $highlights['svg-left-top']['title'];?>" class="img-fluid" style="margin-left:-15px;" data-aos="fade-up">
		
		<article>
			<h3><?php echo $highlights['title']; ?></h3>
			<p><?php echo $highlights['text-top']; ?></p>
		</article>
		
		<img src="<?php echo $highlights['svg-right-top']['url'];?>" alt="<?php echo $highlights['svg-right-top']['title'];?>" title="<?php echo $highlights['svg-right-top']['title'];?>" class="img-fluid" style="float: right;margin-right: -15px;padding-bottom: 10px;" data-aos="fade-up">
		
		
		<h2><?php echo $highlights['title-big']; ?></h2>
		
		<img src="<?php echo $highlights['svg-left']['url'];?>" alt="<?php echo $highlights['svg-left']['title'];?>" title="<?php echo $highlights['svg-left']['title'];?>" class="img-fluid" data-aos="fade-up">
		
		<article>
			<p class="fastio-highlights-bottom-left" style="background-image:url('<?php echo $highlights['svg-left-bottom']['url'];?>');"><?php echo $highlights['text-bottom']; ?></p>
		</article>
		
		<img src="<?php echo $highlights['svg-right-bottom']['url'];?>" alt="<?php echo $highlights['svg-right-bottom']['title'];?>" title="<?php echo $highlights['svg-right-bottom']['title'];?>" class="img-fluid" data-aos="fade-up">
		<?php endif; ?>
	</div>
</section>
<?php endif; ?>
<?php
$fastio_360 = get_field('explore-o-geres-subpage-section-4');
if(!empty($fastio_360)):
if(!empty($fastio_360['panorama-video']) || !empty($fastio_360['panorama-img'])): ?>
<!-- ******************* The 360 Foto / Video Section ******************* -->
<section class="fastio-360">
	<div class="container-fluid">
		<?php if(!empty($fastio_360['milho-1']['url'])){ echo '<img src="'.$fastio_360['milho-1']['url'].'" class="fastio-img-milho top" alt="'.$fastio_360['milho-1']['url'].'" data-aos="fade-in">'; } ?>
		<div class="row">
			<?php if(!empty($fastio_360['panorama-video'])): ?>
			<!-- Pannellum & Video JS Includes -->
			<link rel="stylesheet" href="https://cdn.pannellum.org/2.3/pannellum.css"/>
			<script type="text/javascript" src="https://cdn.pannellum.org/2.3/pannellum.js"></script>
			<link href="https://vjs.zencdn.net/5.4.6/video-js.css" rel="stylesheet" type="text/css">
			<script src="https://vjs.zencdn.net/5.4.6/video.js"></script>
			<script src="<?php echo get_template_directory_uri()."/js/videojs-pannellum-plugin.js"; ?>"></script>
			<video id="panorama" class="video-js vjs-default-skin vjs-big-play-centered fastio-panorama-video" controls preload="none" poster="<?php echo $fastio_360['panorama-preview']; ?>" crossorigin="anonymous">
				<source src="<?php echo $fastio_360['panorama-video']; ?>" type="video/mp4"/>
				<p class="vjs-no-js">
					To view this video please enable JavaScript, and consider upgrading to
					a web browser that <a href="http://videojs.com/html5-video-support/"
					target="_blank">supports HTML5 video</a>
				</p>
			</video>

			<script>
			videojs('panorama', {
				<?php if(!empty($fastio_360['panorama-autoload'])){echo '"autoplay": true,';} ?>
				plugins: {
					pannellum: {
						"mouseZoom": false,
						<?php if(!empty($fastio_360['panorama-auto-rotate'])){echo '"autoRotate": -4,';} ?>
						<?php if(!empty($fastio_360['panorama-autoload'])){echo '"autoLoad": true';} ?>
					}
				}
			});
			</script>
			<?php elseif(!empty($fastio_360['panorama-img'])): ?>
			<!-- Pannellum -->
			<!-- Latest compiled and minified JavaScript -->
			<script src="https://cdn.pannellum.org/2.3/pannellum.js"></script>
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://cdn.pannellum.org/2.3/pannellum.css">
			<div id="panorama" class="fastio-panorama"></div>
			<script>
				pannellum.viewer('panorama', {
					"type": "equirectangular",
					"compass": true,
					"mouseZoom": false,
					"panorama": "<?php echo $fastio_360['panorama-img']; ?>",
					<?php if(!empty($fastio_360['panorama-preview'])){echo '"preview": "'.$fastio_360['panorama-preview'].'",';} ?>
					<?php if(!empty($fastio_360['panorama-auto-rotate'])){echo '"autoRotate": -2,';} ?>
					<?php if(!empty($fastio_360['panorama-autoload'])){echo '"autoLoad": true';} ?>
				});
			</script>
			<?php endif; ?>
		</div>
		<?php if(!empty($fastio_360['milho-2']['url'])){ echo '<img src="'.$fastio_360['milho-2']['url'].'" class="fastio-img-milho bottom" alt="'.$fastio_360['milho-2']['url'].'" data-aos="fade-in">'; } ?>
	</div>
</section>
<?php else: ?>
<!-- ******************* The Fastio 360 Fallback ******************* -->
<section class="fastio-hero-fallback" style="background-image: url(<?php echo $fastio_360['panorama-fallback']['url']; ?>);">
	<?php if(!empty($fastio_360['milho-1']['url'])){ echo '<img src="'.$fastio_360['milho-1']['url'].'" class="fastio-img-milho top" alt="'.$fastio_360['milho-1']['url'].'" data-aos="fade-in">'; } ?>
	<?php if(!empty($fastio_360['milho-2']['url'])){ echo '<img src="'.$fastio_360['milho-2']['url'].'" class="fastio-img-milho bottom" alt="'.$fastio_360['milho-2']['url'].'" data-aos="fade-in">'; } ?>
</section>
<?php endif; ?>
<?php endif; ?>
<?php get_footer(); ?>