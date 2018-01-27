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
				<video poster="<?php echo $location['fallback-img']['url'];?>" controls plays-inline style="background: url(<?php echo $location['fallback-img']['url'];?>) no-repeat;" >
					<source src="<?php echo $location['video'];?>" type="video/mp4">
					Your browser does not support the video tag.
				</video>
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

<!-- ******************* The Local Highlights Section ******************* -->
<section class="fastio-highlights">
	<div class="container-fluid">
		<div class="row">
			<div class="col-2">
				<img src="<?php echo get_template_directory_uri()."/img/ilustracao_milho-1.svg"; ?>" alt="" class="img-fluid">
			</div>
			<div class="col-3">
				<article>
					<h3>A apanha do milho</h3>
					<p>Et as ma vollo conem. Ostrunt is reiusa debis qui tenditatae de accabor eiuntiument enihitatus autem. Itas et pa cum et faccum aut asi nectatumque et maxim facidis estiam litate doluptas endigendanda sinihil iquasincto occus, apeliquunt endae. Ernam in con nosa pedionet acea corem se peri ant latibusant enditi ommod que adia seditat.</p>
				</article>
			</div>
			<div class="col-6 offset-1">
				<img src="<?php echo get_template_directory_uri()."/img/ilustracao_milho-2.svg"; ?>" alt="" class="img-fluid">
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<img src="<?php echo get_template_directory_uri()."/img/ilustracao_milho-3.svg"; ?>" alt="" class="img-fluid">
				<article>
					<div class="row">
						<div class="col-5">
							<img src="<?php echo get_template_directory_uri()."/img/onda_azul_subgeres.png"; ?>" alt="" class="img-fluid">
						</div>
						<div class="col-6">
							<p>Et as ma vollo conem. Ostrunt is reiusa debis qui tenditatae de accabor eiuntiument enihitatus autem. Itas et pa cum et faccum aut asi nectatumque et maxim facidis estiam litate doluptas endigendanda sinihil iquasincto occus, apeliquunt endae.</p>
						</div>
					</div>
				</article>
			</div>
			<div class="col-6">
				<h1>“Exerumquatio quassed qui optium eatumqu aeculloribus.”</h1>
				<img src="<?php echo get_template_directory_uri()."/img/ilustracao_espigueiro.svg"; ?>" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<?php
$fastio_360 = get_field('explore-o-geres-subpage-section-4');
if(!empty($fastio_360)): ?>
<!-- ******************* The 360 Foto Section ******************* -->
<section class="fastio-360">
	<div class="container-fluid">
		<div class="row">
			<?php if(!empty($fastio_360['fallback-img'])): ?>
			<img src="<?php echo $fastio_360['fallback-img']['url']; ?>" alt="<?php echo $fastio_360['fallback-img']['title']; ?>" class="img-fluid">
			<?php else: ?>
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
				"panorama": "<?php echo $fastio_360['panorama']; ?>",
				<?php if(!empty($fastio_360['panorama-preview'])){echo '"preview": "'.$fastio_360['panorama-preview'].'",';} ?>
				<?php if(!empty($fastio_360['panorama-auto-rotate'])){echo '"autoRotate": -2,';} ?>
				<?php if(!empty($fastio_360['panorama-autoload'])){echo '"autoLoad": true';} ?>
			});
			</script>
			<?php endif; ?>
		</div>
	</div>
	<!--<img src=<?php echo get_template_directory_uri()."/img/milho_4.png"; ?>"" alt="">-->
</section>
<?php endif; ?>
</section>
<?php get_footer(); ?>