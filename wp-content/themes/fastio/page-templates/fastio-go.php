<?php
/**
 * Template Name: Fastio GO
 *
 * Template for displaying a specific page
 *
 * @package understrap
 */

get_header();
?>


<?php 
//Section 1 : Hero 1
$hero_1 = get_field('fastio-go-section-1');
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



<!-- ******************* The Bottle Feature Section ******************* -->
<?php 
	$bottle = get_field('fastio-go-section-2');
	if(!empty($bottle)):
?>
<section class="fastio-go-bottle" data-aos="fade">
	<div class="container">
		<div class="row no-gutters">
			<?php if(!wp_is_mobile()): // DESKTOP ORDER VERSION ?>
			<div class="col-4 col-lg-1 vertical-align">
				<div data-aos="fade-up" class="fastio-go-bottle-img-left">
				<?php if(!empty($bottle['embalagem-img'])): ?><img class="img-fluid" src="<?php echo $bottle['embalagem-img']['url']; ?>" title="<?php echo $bottle['embalagem-img']['title']; ?>" alt="<?php echo $bottle['embalagem-img']['title']; ?>"><?php endif; ?>
				</div>
			</div>
			<div class="col-8 col-lg-3 vertical-align">
				<div data-aos="fade-up" class="fastio-go-bottle-text-left">
				<?php if(!empty($bottle['embalagem-title'])){ echo '<h2>'.$bottle['embalagem-title'].'</h2>'; } ?>
				<?php if(!empty($bottle['embalagem-text'])){ echo '<p>'.$bottle['embalagem-text'].'</p>'; } ?>
				</div>
			</div>
			<div class="col-12 col-lg-4 text-center">
				<div data-aos="fade-up">
				<?php if(!empty($bottle['img'])): ?><img class="img-fluid" class="fastio-go-bottle-img" src="<?php echo $bottle['img']['url']; ?>" title="<?php echo $bottle['img']['title']; ?>" alt="<?php echo $bottle['img']['title']; ?>"><?php endif; ?>
				</div>
			</div>
			<div class="col-6 col-lg-3 vertical-align">
				<div data-aos="fade-up" class="fastio-go-bottle-text-right">
				<?php if(!empty($bottle['capsula-title'])){ echo '<h2>'.$bottle['capsula-title'].'</h2>'; } ?>
				<?php if(!empty($bottle['capsula-text'])){ echo '<p>'.$bottle['capsula-text'].'</p>'; } ?>
				</div>
			</div>
			<div class="col-6 col-lg-1 vertical-align text-right">
				<div data-aos="fade-up" class="fastio-go-bottle-img-right">
				<?php if(!empty($bottle['capsula-img'])): ?><img class="img-fluid" src="<?php echo $bottle['capsula-img']['url']; ?>" title="<?php echo $bottle['capsula-img']['title']; ?>" alt="<?php echo $bottle['capsula-img']['title']; ?>"><?php endif; ?>
				</div>
			</div>
			<?php else: // MOBILE ORDER VERSION ?>
			<div class="col-12 text-center">
				<div data-aos="fade-up">
				<?php if(!empty($bottle['img'])): ?><img class="img-fluid" src="<?php echo $bottle['img']['url']; ?>" title="<?php echo $bottle['img']['title']; ?>" alt="<?php echo $bottle['img']['title']; ?>"><?php endif; ?>
				</div>
			</div>
			<div class="col-12 text-center">
				<br>
				<div data-aos="fade-up">
				<?php if(!empty($bottle['embalagem-img'])): ?><img class="img-fluid fastio-go-icon" src="<?php echo $bottle['embalagem-img']['url']; ?>" title="<?php echo $bottle['embalagem-img']['title']; ?>" alt="<?php echo $bottle['embalagem-img']['title']; ?>"><?php endif; ?>
				</div>
				<br>
				<div data-aos="fade-up">
				<?php if(!empty($bottle['embalagem-title'])){ echo '<h2>'.$bottle['embalagem-title'].'</h2>'; } ?>
				<?php if(!empty($bottle['embalagem-text'])){ echo '<p>'.$bottle['embalagem-text'].'</p>'; } ?>
				</div>
				<br>
			</div>
			<div class="col-12 text-center">
				<div data-aos="fade-up">
				<?php if(!empty($bottle['capsula-img'])): ?><img class="img-fluid fastio-go-icon" src="<?php echo $bottle['capsula-img']['url']; ?>" title="<?php echo $bottle['capsula-img']['title']; ?>" alt="<?php echo $bottle['capsula-img']['title']; ?>"><?php endif; ?>
				</div>
				<br>
				<div data-aos="fade-up">
				<?php if(!empty($bottle['capsula-title'])){ echo '<h2>'.$bottle['capsula-title'].'</h2>'; } ?>
				<?php if(!empty($bottle['capsula-text'])){ echo '<p>'.$bottle['capsula-text'].'</p>'; } ?>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section><!-- .fastio-go-bottle -->

<?php endif;

//Section 3 : Hero 1
$hero_1 = get_field('fastio-go-section-3');
if(!empty($hero_1)):
?>
<!-- ******************* The Hero Section ******************* -->
<div data-aos="fade">
<section class="fastio-hero" style="background-image:url('<?php echo $hero_1['bg-img']; ?>');">
	<?php if(!empty($hero_1['title'])): ?>
	<div class="container">
		<div class="row">
			<header class="fastio-hero-header col-md-3 offset-md-1">
				<div data-aos="fade-up">
			<?php if(!empty($hero_1['img'])): ?><img class="img-fluid" src="<?php echo $hero_1['img']['url']; ?>" title="<?php echo $hero_1['img']['title']; ?>" alt="<?php echo $hero_1['img']['title']; ?>"><?php endif; ?>
			<?php if(!empty($hero_1['title'])): ?><h2<?php if(!empty($hero_1['title-color'])){ echo ' style="color:'.$hero_1['title-color'].';"';} ?>><?php echo $hero_1['title'];?></h2><?php endif; ?> 
				</div>
			</header>
		</div>
	</div>
	<?php endif; ?>
</section></div><!-- .fastio-hero -->
<?php endif;

//Section 4 : Workout
$workout = get_field('fastio-go-section-4');
if(!empty($workout)):
?>
<!-- ******************* The Fastio GO Workout Section ******************* -->
<div data-aos="fade">
<section class="fastio-go-workout" style="background-image:url('<?php echo $workout['bg-img']; ?>');">
	<div class="container">
		<div class="row">
			<div class="offset-md-1 col-md-10 hero">
				<?php if(!empty($workout['img']) || !empty($workout['title']) || !empty($workout['desc'])): ?>
				<article class="inner-hero<?php if(wp_is_mobile()){echo " text-center";} ?>">
					<div class="row">
						<?php if(!empty($workout['img'])): ?>
						<div class="col-md-3">
							<img class="img-fluid" src="<?php echo $workout['img']['url']; ?>" title="<?php echo $workout['img']['title']; ?>" alt="<?php echo $workout['img']['title']; ?>" loop=infinite>
						</div>
						<?php endif; ?>
						<div class="col-md-5">
							<?php if(!empty($workout['title'])): ?><h4 class="text-warning"><?php echo $workout['title'];?></h4><?php endif; ?>
							<?php if(!empty($workout['text'])): ?><p class="text-warning"><?php echo $workout['text'];?></p><?php endif; ?>
						</div>
					</div>
				</article>
				<?php endif; ?>
				<?php if( have_rows('fastio-go-workouts') ):
					$workout_count = count(get_field('fastio-go-workouts'));
					$workout_col = ceil(12 / $workout_count);
					if($workout_col<3) $workout_col = 3;
				?>
				<div class="row mt">
					<?php while( have_rows('fastio-go-workouts') ): the_row();
						$go_workout_img = get_sub_field('img');
						$go_workout_file = get_sub_field('file');
					?>
					<div class="col-<?php echo $workout_col*2; ?> col-md-<?php echo $workout_col; ?>">
						<article class="fastio-workout text-center">
							<?php if(!empty($go_workout_img)): ?>
							<img class="img-fluid img-thumbnail" src="<?php echo $go_workout_img['url']; ?>" title="<?php echo $go_workout_img['title']; ?>" alt="<?php echo $go_workout_img['title']; ?>">
							<?php endif; ?>
							<?php if(!empty($go_workout_file)): ?>
							<a href="<?php echo $go_workout_file['url']; ?>" target="_blank">
							<?php endif; ?>
								<h6><?php the_sub_field('title'); ?></h6>
								<img class="fastio-download" src="<?php echo get_template_directory_uri()."/img/icone-download.png" ?>" alt="Download">
							<?php if(!empty($go_workout_file)): ?></a><?php endif; ?>
						</article>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section></div><!-- .fastio-go-workout -->
<?php endif; 

$fastio_go_social = get_field('fastio-go-section-5');
if(!empty($fastio_go_social)):
?>
<div data-aos="fade">
<section class="fastio-go-social">
	<div class="row no-gutters">
		<div class="col-12 col-md-5">
			<?php if(!empty($fastio_go_social['img-big'])): ?>
			<img class="img-fluid" src="<?php echo $fastio_go_social['img-big']['url']; ?>" title="<?php echo $fastio_go_social['img-big']['title']; ?>" alt="<?php echo $fastio_go_social['img-big']['title']; ?>">
			<?php endif; ?>
		</div>
		<div class="col-12 col-md-7">
			<div class="row no-gutters">
				<div class="col-6 col-md-4">
					<?php if(!empty($fastio_go_social['img-1'])): ?>
					<img class="img-fluid" src="<?php echo $fastio_go_social['img-1']['url']; ?>" title="<?php echo $fastio_go_social['img-1']['title']; ?>" alt="<?php echo $fastio_go_social['img-1']['title']; ?>">
					<?php endif; ?>
				</div>
				<div class="col-6 col-md-4">
					<?php if(!empty($fastio_go_social['img-2'])): ?>
					<img class="img-fluid" src="<?php echo $fastio_go_social['img-2']['url']; ?>" title="<?php echo $fastio_go_social['img-2']['title']; ?>" alt="<?php echo $fastio_go_social['img-2']['title']; ?>">
					<?php endif; ?>
				</div>
				<div class="col-6 col-md-4">
					<?php if(!empty($fastio_go_social['img-3'])): ?>
					<img class="img-fluid" src="<?php echo $fastio_go_social['img-3']['url']; ?>" title="<?php echo $fastio_go_social['img-3']['title']; ?>" alt="<?php echo $fastio_go_social['img-3']['title']; ?>">
					<?php endif; ?>
				</div>
			<?php if (wp_is_mobile() === 0){echo '</div><div class="row no-gutters">';} ?>
				<div class="col-6 col-md-4">
					<?php if(!empty($fastio_go_social['img-4'])): ?>
					<img class="img-fluid" src="<?php echo $fastio_go_social['img-4']['url']; ?>" title="<?php echo $fastio_go_social['img-4']['title']; ?>" alt="<?php echo $fastio_go_social['img-4']['title']; ?>">
					<?php endif; ?>
				</div>
				<div class="col-6 col-md-4">
					<?php if(!empty($fastio_go_social['img-5'])): ?>
					<img class="img-fluid" src="<?php echo $fastio_go_social['img-5']['url']; ?>" title="<?php echo $fastio_go_social['img-5']['title']; ?>" alt="<?php echo $fastio_go_social['img-5']['title']; ?>">
					<?php endif; ?>
				</div>
				<div class="col-6 col-md-4">
					<?php if(!empty($fastio_go_social['img-6'])): ?>
					<img class="img-fluid" src="<?php echo $fastio_go_social['img-6']['url']; ?>" title="<?php echo $fastio_go_social['img-6']['title']; ?>" alt="<?php echo $fastio_go_social['img-6']['title']; ?>">
					<?php endif; ?>
				
				</div>
			</div>
		</div>
	</div>
</section></div>
<?php endif; ?>
<?php get_footer(); ?>
