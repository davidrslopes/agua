<?php
/**
 * Template Name: A Família
 *
 * Template for displaying a specific page
 *
 * @package understrap
 */

get_header();
?>


<?php 
//Section 1 : Hero 1
$hero_1 = get_field('a-familia-section-1');
if(!empty($hero_1)):
/* Nota IMPORTANTE: Temos de verificar como deve ser o comportamento mobile desta area, apenas permitir a visualização do vídeo em WIFI era o ideal, em 3G este video não deve ser incluído, e deverá comprimir-se em vários formatos para que seja possivel a responsividade também em relação ao peso em mb do site. */
?>
<!-- ******************* The Video Hero Section ******************* -->
<section class="fastio-video-hero" style="background-image:url('<?php echo $hero_1['fallback-img']; ?>');">
	
	<?php if(!empty($hero_1['video'])): ?>
	<div class="fastio-video-container">
		<video poster="<?php echo $hero_1['fallback-img']; ?>" autoplay loop muted plays-inline style="background: url(<?php echo $hero_1['fallback-img']; ?>) no-repeat;">
			<source src="<?php echo $hero_1['video']; ?>" type="video/mp4">
		</video>
	</div>
	<?php endif; ?>
	
	<?php if(!empty($hero_1['title'])): ?>
	<div class="container-fluid">
		<div class="row">
			<header class="col-6 offset-4">
				<h1 class="text-left"<?php if(!empty($hero_1['title-color'])){ echo ' style="color:'.$hero_1['title-color'].';"';} ?>><?php echo $hero_1['title'];?></h1>
				<?php if(!empty($hero_1['hashtag-img'])): ?><div class="text-left"><img src="<?php echo $hero_1['hashtag-img']['url'];?>" alt="<?php echo $hero_1['hashtag-img']['title'];?>"></div><?php endif; ?>
			</header>
		</div>
	</div>
	<?php endif; ?>
	<?php if(!empty($hero_1['arrow'])): ?><button class="btn btn-link btn-block fastio-btn-scroll-down"<?php if(!empty($hero_1['arrow-color'])){ echo ' style="color:'.$hero_1['arrow-color'].';"';} ?>><i class="fa fa-angle-down"></i></button><?php endif; ?>
</section><!-- .fastio-video-hero -->
<?php endif; ?>

<!-- ******************* The Feature Image Section ******************* -->
<?php 
	$feature = get_field('a-familia-section-2');
	if(!empty($feature)):
?>
<section class="fastio-feature mt">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-7 text-right">
				<?php if(!empty($feature['img'])): ?><img class="img-fluid" src="<?php echo $feature['img']['url']; ?>" title="<?php echo $feature['img']['title']; ?>" alt="<?php echo $feature['img']['title']; ?>"><?php endif; ?>
			</div>
			<div class="col-5 text-left pull-bottom">
				<article class="bg-primary">
					<?php if(!empty($feature['text'])){ echo '<h4>'.$feature['text'].'</h4>'; } ?>
				</article>
			</div>
		</div>
		<img class="ondas right bottom" src="<?php echo get_template_directory_uri()."/img/onda_azul_familia-r-dark.png"; ?>" alt="onda azul r">
	</div>
</section><!-- .fastio-feature -->
<?php endif; ?>

<?php
//Section 3 : Hero
$hero_3 = get_field('a-familia-section-3');
if(!empty($hero_3)):
?>
<!-- ******************* The Hero III Section ******************* -->
<section class="fastio-hero-3" style="background-image:url('<?php echo $hero_3['bg-img']; ?>');">
	<div class="container-fluid">
		<img class="ondas left bottom" src="<?php echo get_template_directory_uri()."/img/onda_azul_familia-l.png"; ?>" alt="onda azul l">
		<div class="row">
			<header class="fastio-hero-header offset-2 col-10">
				<?php if(!empty($hero_3['title'])): ?><h3 class="text-primary"><?php echo $hero_3['title']; ?></h3><?php endif; ?>
				<?php if(!empty($hero_3['hashtag'])): ?><img class="img-fluid" src="<?php echo $hero_3['hashtag']['url']; ?>" title="<?php echo $hero_3['hashtag']['title']; ?>" alt="<?php echo $hero_3['hashtag']['title']; ?>"><?php endif; ?>
			</header>
		</div>
	</div>
</section><!-- .fastio-hero-3 -->
<?php endif; ?>

<!-- ******************* The Feature Image Section II ******************* -->
<?php 
	$feature_2 = get_field('a-familia-section-4');
	if(!empty($feature_2)):
?>
<section class="fastio-feature">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-7 text-right">
				<?php if(!empty($feature_2['img'])): ?><img class="img-fluid" src="<?php echo $feature_2['img']['url']; ?>" title="<?php echo $feature_2['img']['title']; ?>" alt="<?php echo $feature_2['img']['title']; ?>"><?php endif; ?>
			</div>
			<div class="col-5 text-left pull-bottom">
				<article class="bg-warning">
					<?php if(!empty($feature_2['text'])){ echo '<h4>'.$feature_2['text'].'</h4>'; } ?>
				</article>
			</div>
		</div>
		<img class="ondas right bottom" src="<?php echo get_template_directory_uri()."/img/onda_azul_familia-r-dark.png"; ?>" alt="onda azul r">
	</div>
</section><!-- .fastio-feature -->
<?php endif; ?>

<!-- ******************* The Feature Image Section III ******************* -->
<?php 
	$feature_3 = get_field('a-familia-section-5');
	if(!empty($feature_3)):
?>
<section class="fastio-feature-2">
	<img class="ondas left bottom" src="<?php echo get_template_directory_uri()."/img/onda_azul_familia-l-dark.png"; ?>" alt="onda azul l">
	<div class="row no-gutters">
		<div class="col-5 text-right">
			<article class="bg-warning left text-left">
				<?php if(!empty($feature_3['text'])){ echo '<h4>'.$feature_3['text'].'</h4>';} ?>
			</article>
		</div>
		<div class="col-7 text-left">
			<?php if(!empty($feature_3['img'])): ?><img class="img-fluid" src="<?php echo $feature_3['img']['url']; ?>" title="<?php echo $feature_3['img']['title']; ?>" alt="<?php echo $feature_3['img']['title']; ?>"><?php endif; ?>
		</div>
	</div>
</section><!-- .fastio-feature-2 -->
<?php endif; ?>
<?php get_footer(); ?>
