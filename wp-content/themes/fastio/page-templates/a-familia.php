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
?>
<!-- ******************* The Video Hero Section ******************* -->
<section class="fastio-video-hero" style="background-image:url('<?php echo $hero_1['fallback-img']; ?>');">
	
	<?php if(!empty($hero_1['video'])): ?>
	<div class="fastio-video-container">
		<?php echo do_shortcode(' [video class="fastio-video" autoplay="on" loop="on" src="'.$hero_1['video'].'" poster="'. $hero_1['fallback-img'] .'"] '); ?>
	</div>
	<?php endif; ?>
	
	<header class="fastio-video-header">
	<?php if(!empty($hero_1['title'])): ?>
<<<<<<< HEAD
		<h1 <?php if(!empty($hero_1['cor_do_titulo'])){ echo 'style="color:'.$hero_1['cor_do_titulo'].';"';} ?>><?php echo $hero_1['title'];?></h1>
=======
	<div class="container-fluid">
		<div class="row">
			<header class="col col-md-4 offset-4">
				<h1 class="text-center"<?php if(!empty($hero_1['title-color'])){ echo ' style="color:'.$hero_1['title-color'].';"';} ?>><?php echo $hero_1['title'];?></h1>
				<?php if(!empty($hero_1['hashtag-img'])): ?><div class="text-left"><img src="<?php echo $hero_1['hashtag-img']['url'];?>" alt="<?php echo $hero_1['hashtag-img']['title'];?>"></div><?php endif; ?>
			</header>
		</div>
	</div>
>>>>>>> 84e70ef6bd65315a4e612da12f54eb8cafd49b0e
	<?php endif; ?>
		<button class="btn btn-link btn-block fastio-btn-scroll-down" <?php if(!empty($hero_1['cor_da_seta'])){ echo 'style="color:'.$hero_1['cor_da_seta'].';"';} ?>><i class="fa fa-angle-down"></i></button>
	</header>
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
<<<<<<< HEAD
			<div class="col-12 col-md-7 text-right">
				<?php if(!empty($feature['img'])): ?><img class="img-fluid" src="<?php echo $feature['img']['url']; ?>" title="<?php echo $feature['img']['title']; ?>" alt="<?php echo $feature['img']['title']; ?>" data-aos="fade-up"><?php endif; ?>
			</div>
			<div class="col-12 col-md-5 text-left">
				<article class="bg-primary pull-bottom" data-aos="fade-up">
=======
			<div class="col col-md-7 text-right">
				<?php if(!empty($feature['img'])): ?><img class="img-fluid" src="<?php echo $feature['img']['url']; ?>" title="<?php echo $feature['img']['title']; ?>" alt="<?php echo $feature['img']['title']; ?>" data-aos="fade-up"><?php endif; ?>
			</div>
			<div class="col col-md-5 text-left pull-bottom">
				<article class="bg-primary" data-aos="fade-up">
>>>>>>> 84e70ef6bd65315a4e612da12f54eb8cafd49b0e
					<?php if(!empty($feature['text'])){ echo '<h4 data-aos="fade-up">'.$feature['text'].'</h4>'; } ?>
				</article>
			</div>
		</div>
		<img class="ondas right bottom" src="<?php echo get_template_directory_uri()."/img/onda_azul_familia-r-dark.png"; ?>" alt="onda azul r" data-aos="fade-up">
	</div>
</section><!-- .fastio-feature -->
<?php endif; ?>

<?php
//Section 3 : Hero
$hero_3 = get_field('a-familia-section-3');
if(!empty($hero_3)):
?>
<!-- ******************* The Hero III Section ******************* -->
<section class="fastio-hero-3" style="background-image:url('<?php echo $hero_3['bg-img']; ?>');" data-aos="fade-up">
	<div class="container-fluid">
		<img class="ondas left bottom" src="<?php echo get_template_directory_uri()."/img/onda_azul_familia-l.png"; ?>" alt="onda azul l" data-aos="fade-up">
		<div class="row">
<<<<<<< HEAD
			<header class="fastio-hero-header offset-md-2 col-md-10" data-aos="fade-up">
=======
			<header class="fastio-hero-header offset-2 col col-md-10" data-aos="fade-up">
>>>>>>> 84e70ef6bd65315a4e612da12f54eb8cafd49b0e
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
<<<<<<< HEAD
			<div class="col-12 col-md-7 text-right">
				<?php if(!empty($feature_2['img'])): ?><img class="img-fluid" src="<?php echo $feature_2['img']['url']; ?>" title="<?php echo $feature_2['img']['title']; ?>" alt="<?php echo $feature_2['img']['title']; ?>" data-aos="fade-up"><?php endif; ?>
			</div>
			<div class="col-12 col-md-5 text-left">
				<article class="bg-warning pull-bottom" data-aos="fade-up">
=======
			<div class="col col-md-7 text-right">
				<?php if(!empty($feature_2['img'])): ?><img class="img-fluid" src="<?php echo $feature_2['img']['url']; ?>" title="<?php echo $feature_2['img']['title']; ?>" alt="<?php echo $feature_2['img']['title']; ?>" data-aos="fade-up"><?php endif; ?>
			</div>
			<div class="col col-md-5 text-left pull-bottom">
				<article class="bg-warning" data-aos="fade-up">
>>>>>>> 84e70ef6bd65315a4e612da12f54eb8cafd49b0e
					<?php if(!empty($feature_2['text'])){ echo '<h4 data-aos="fade-up">'.$feature_2['text'].'</h4>'; } ?>
				</article>
			</div>
		</div>
		<img class="ondas right bottom" src="<?php echo get_template_directory_uri()."/img/onda_azul_familia-r-dark.png"; ?>" alt="onda azul r"  data-aos="fade-up">
	</div>
</section><!-- .fastio-feature -->
<?php endif; ?>

<!-- ******************* The Feature Image Section III ******************* -->
<?php 
	$feature_3 = get_field('a-familia-section-5');
	if(!empty($feature_3)):
?>
<section class="fastio-feature-2">
	<img class="ondas left bottom" src="<?php echo get_template_directory_uri()."/img/onda_azul_familia-l-dark.png"; ?>" alt="onda azul l" data-aos="fade">
	<div class="row no-gutters">
<<<<<<< HEAD
		<div class="col-12 col-md-5 text-right">
=======
		<div class="col col-md-5 text-right">
>>>>>>> 84e70ef6bd65315a4e612da12f54eb8cafd49b0e
			<article class="bg-warning left text-left" data-aos="fade">
				<?php if(!empty($feature_3['text'])){ echo '<h4 data-aos="fade-up">'.$feature_3['text'].'</h4>';} ?>
			</article>
		</div>
<<<<<<< HEAD
		<div class="col-12 col-md-7 text-left">
=======
		<div class="col col-md-7 text-left">
>>>>>>> 84e70ef6bd65315a4e612da12f54eb8cafd49b0e
			<?php if(!empty($feature_3['img'])): ?><img class="img-fluid" src="<?php echo $feature_3['img']['url']; ?>" title="<?php echo $feature_3['img']['title']; ?>" alt="<?php echo $feature_3['img']['title']; ?>" data-aos="fade"><?php endif; ?>
		</div>
	</div>
</section><!-- .fastio-feature-2 -->
<?php endif; ?>
<?php get_footer(); ?>
