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
		<h1 class="text-center"<?php if(!empty($hero_1['cor_do_titulo'])){ echo 'style="color:'.$hero_1['cor_do_titulo'].';"';} ?>><?php echo $hero_1['title'];?></h1>
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
	<?php if(!wp_is_mobile()): ?><div class="container"><?php endif; ?>
		<div class="row no-gutters">
			<?php if(!wp_is_mobile()): // DESKTOP ORDER VERSION ?>
			<div class="col-12 col-md-7 text-right">
				<?php if(!empty($feature['img'])): ?><img class="img-fluid" src="<?php echo $feature['img']['url']; ?>" title="<?php echo $feature['img']['title']; ?>" alt="<?php echo $feature['img']['title']; ?>" data-aos="fade-up"><?php endif; ?>
			</div>
			<div class="col-12 col-md-5 text-left">
				<div class="decor-line top center text-center">
				<?php if(!empty($feature['decor-right'])): ?>
					<img data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1000" class="" src="<?php echo $feature['decor-right']['url']; ?>" alt="<?php echo $feature['decor-right']['title']; ?>">
				<?php endif; ?>
				<?php if(!empty($feature['decor-right-2'])): ?>
					<img data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1000" class="" src="<?php echo $feature['decor-right-2']['url']; ?>" alt="<?php echo $feature['decor-right-2']['title']; ?>">
				<?php endif; ?>
				<?php if(!empty($feature['decor-right-3'])): ?>
					<img data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1000" class="" src="<?php echo $feature['decor-right-3']['url']; ?>" alt="<?php echo $feature['decor-right-3']['title']; ?>">
				<?php endif; ?>
				<?php if(!empty($feature['decor-right-4'])): ?>
					<img data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1000" class="" src="<?php echo $feature['decor-right-4']['url']; ?>" alt="<?php echo $feature['decor-right-4']['title']; ?>">
				<?php endif; ?>
				</div>
				<article class="bg-primary pull-bottom" data-aos="fade-up">
					<?php if(!empty($feature['text'])){ echo '<h4 data-aos="fade-up">'.$feature['text'].'</h4>'; } ?>
				</article>
			</div>
			<?php else: // MOBILE ORDER VERSION ?>
			<div class="col-12 text-left">
				<article class="bg-primary pull-bottom" data-aos="fade-up">
					<?php if(!empty($feature['text'])){ echo '<h4 data-aos="fade-up">'.$feature['text'].'</h4>'; } ?>
				</article>
			</div>
			<div class="col-12 text-right">
				<img data-aos="fade-up" data-aos-duration="3000" class="decor right top" src="<?php echo $feature['decor-right']['url']; ?>" alt="<?php echo $feature['decor-right']['title']; ?>" class="img-fluid">
				<?php if(!empty($feature['img'])): ?><img class="img-fluid" src="<?php echo $feature['img']['url']; ?>" title="<?php echo $feature['img']['title']; ?>" alt="<?php echo $feature['img']['title']; ?>" data-aos="fade-up"><?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
		<?php if(!wp_is_mobile()): ?>
	</div><?php endif; ?>
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
	<?php if(!wp_is_mobile()): // DESKTOP ORDER VERSION ?>
		<div class="row">
			<div class="col-md-2">
				<?php if(!empty($hero_3['decor-left'])): ?>
				<img data-aos="fade-up" data-aos-duration="3000" class="decor left bottom" src="<?php echo $hero_3['decor-left']['url']; ?>" alt="<?php echo $hero_3['decor-left']['title']; ?>" class="img-fluid">
				<?php endif; ?>
			</div>
			<header class="fastio-hero-header col-md-10" data-aos="fade-up">
				<?php if(!empty($hero_3['title'])): ?><h3 class="text-primary"><?php echo $hero_3['title']; ?></h3><?php endif; ?>
				<?php if(!empty($hero_3['hashtag'])): ?><img class="img-fluid" src="<?php echo $hero_3['hashtag']['url']; ?>" title="<?php echo $hero_3['hashtag']['title']; ?>" alt="<?php echo $hero_3['hashtag']['title']; ?>"><?php endif; ?>
			</header>
		</div>
	<?php else: // MOBILE ORDER VERSION ?>
		<?php if(!empty($hero_3['decor-left'])): ?>
			<header class="fastio-hero-header col-md-10" data-aos="fade-up">
				<?php if(!empty($hero_3['title'])): ?><h3 class="text-primary"><?php echo $hero_3['title']; ?></h3><?php endif; ?>
				<?php if(!empty($hero_3['hashtag'])): ?><img class="img-fluid" src="<?php echo $hero_3['hashtag']['url']; ?>" title="<?php echo $hero_3['hashtag']['title']; ?>" alt="<?php echo $hero_3['hashtag']['title']; ?>"><?php endif; ?>
			</header>
			<img data-aos="fade-up" data-aos-duration="3000" class="decor left bottom" src="<?php echo $hero_3['decor-left']['url']; ?>" alt="<?php echo $hero_3['decor-left']['title']; ?>" class="img-fluid">
		<?php endif; ?>
	<?php endif; ?>
	</div>
</section><!-- .fastio-hero-3 -->
<?php endif; ?>

<!-- ******************* The Feature Image Section II ******************* -->
<?php 
	$feature_2 = get_field('a-familia-section-4');
	if(!empty($feature_2)):
?>
<section class="fastio-feature">
	<?php if(!wp_is_mobile()): ?><div class="container"><?php endif; ?>
		<div class="row no-gutters">
			<?php if(!wp_is_mobile()): // DESKTOP ORDER VERSION ?>
			<div class="col-12 col-md-7 text-right">
				<?php if(!empty($feature_2['img'])): ?><img class="img-fluid" src="<?php echo $feature_2['img']['url']; ?>" title="<?php echo $feature_2['img']['title']; ?>" alt="<?php echo $feature_2['img']['title']; ?>" data-aos="fade-up"><?php endif; ?>
			</div>
			<div class="col-12 col-md-5 text-left">
				<div class="decor-line bottom center text-center">
					<?php if(!empty($feature_2['decor-right'])): ?>
					<img data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1000" class="" src="<?php echo $feature_2['decor-right']['url']; ?>" alt="<?php echo $feature_2['decor-right']['title']; ?>">
					<?php endif; ?>
					<?php if(!empty($feature_2['decor-right-2'])): ?>
					<img data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1000" class="" src="<?php echo $feature_2['decor-right-2']['url']; ?>" alt="<?php echo $feature_2['decor-right-2']['title']; ?>">
					<?php endif; ?>
				</div>
				<article class="bg-warning pull-bottom" data-aos="fade-up">
					<?php if(!empty($feature_2['text'])){ echo '<h4 data-aos="fade-up">'.$feature_2['text'].'</h4>'; } ?>
				</article>
			</div>
			<?php else: // MOBILE ORDER VERSION ?>
			<div class="col-12 text-left">
				<article class="bg-warning pull-bottom" data-aos="fade-up">
					<img data-aos="fade-up" data-aos-duration="3000" class="decor right bottom" src="<?php echo $feature_2['decor-right']['url']; ?>" alt="<?php echo $feature_2['decor-right']['title']; ?>" class="img-fluid">
					<?php if(!empty($feature_2['text'])){ echo '<h4 data-aos="fade-up">'.$feature_2['text'].'</h4>'; } ?>
				</article>
			</div>
			<div class="col-12 text-right">
				<?php if(!empty($feature_2['img'])): ?><img class="img-fluid" src="<?php echo $feature_2['img']['url']; ?>" title="<?php echo $feature_2['img']['title']; ?>" alt="<?php echo $feature_2['img']['title']; ?>" data-aos="fade-up"><?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
		<?php if(!wp_is_mobile()): ?>
	</div><?php endif; ?>
</section><!-- .fastio-feature -->
<?php endif; ?>

<!-- ******************* The Feature Image Section III ******************* -->
<?php 
	$feature_3 = get_field('a-familia-section-5');
	if(!empty($feature_3)):
?>
<section class="fastio-feature-2">
	
	<div class="row no-gutters">
		<div class="col-12 col-md-5 text-right">
			<div class="decor-line center text-center">
				<?php if(!empty($feature_3['decor-left'])): ?>
					<img data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1000" class="" src="<?php echo $feature_3['decor-left']['url']; ?>" alt="<?php echo $feature_3['decor-left']['title']; ?>">
				<?php endif; ?>
				<?php if(!empty($feature_3['decor-left-2'])): ?>
					<img data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1000" class="" src="<?php echo $feature_3['decor-left-2']['url']; ?>" alt="<?php echo $feature_3['decor-left-2']['title']; ?>">
				<?php endif; ?>
				<?php if(!empty($feature_3['decor-left-3'])): ?>
					<img data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1000" class="" src="<?php echo $feature_3['decor-left-3']['url']; ?>" alt="<?php echo $feature_3['decor-left-3']['title']; ?>">
				<?php endif; ?>
				</div>
				<article class="bg-warning left text-left" data-aos="fade">
					<?php if(!empty($feature_3['text'])){ echo '<h4 data-aos="fade-up">'.$feature_3['text'].'</h4>';} ?>
				</article>
			</div>
		<div class="col-12 col-md-7 text-left">
			<?php if(!empty($feature_3['img'])): ?><img class="img-fluid" src="<?php echo $feature_3['img']['url']; ?>" title="<?php echo $feature_3['img']['title']; ?>" alt="<?php echo $feature_3['img']['title']; ?>" data-aos="fade"><?php endif; ?>
		</div>
	</div>
</section><!-- .fastio-feature-2 -->
<?php endif; ?>
<?php get_footer(); ?>
