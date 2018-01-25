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
				<h1 class="text-center"><?php echo $hero_1['title'];?></h1>
			</header>
		</div>
	</div>
	<?php endif; ?>
</section><!-- .fastio-hero -->
<?php endif;

//Section 2 : Location
$location = get_field('explore-o-geres-subpage-section-2');
if(!empty($location)):
?>
<!-- ******************* The Location Section ******************* -->
<section class="fastio-location">
	<div class="row no-gutters">
		<div class="fastio-location-feature  col-10">
			<?php if(!empty($location['video'])): ?>
			<div class="embed-responsive embed-responsive-16by9">
				<video src="<?php echo $location['video']['url'];?>" class="fastio-location-video"></video>
			</div>
			<?php else: ?>
			<img src="<?php echo $location['fallback-img']['url'];?>" alt="<?php echo $location['fallback-img']['title'];?>" title="<?php echo $location['fallback-img']['title'];?>" class="fastio-location-image">
			<?php endif; ?>
		</div>
		<div class="fastio-location-content col-2">
			<article>
				<h1><?php the_title();?></h1>
				<p><?php echo $location['text'];?></p>
				<div class="fastio-location-coordinates">
					<img src="<?php echo get_template_directory_uri()."/img/icone-Coordenadas.png"; ?>" height="24" width="24" alt="">
					<?php if(!empty($info['coordenadas-google'])): ?>
					<a href="http://www.google.com/maps/place/<?php echo $info['coordenadas-google']; ?>">
						<?php echo $location['coordinates'];?>
					</a>
					<?php else: echo $location['coordinates']; endif; ?>
				</div>
			</article>
		</div>
	</div>
</section>
<?php endif; ?>
<?php get_footer(); ?>