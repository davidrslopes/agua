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
			<header class="col-12">
				<h1 class="text-center" <?php if(!empty($hero_1['cor_do_titulo'])){ echo 'style="color:'.$hero_1['cor_do_titulo'].';"';} ?>><?php echo $hero_1['title'];?></h1>
			</header>
		</div>
	</div>
	<?php endif; ?>
	<button class="btn btn-link btn-block fastio-btn-scroll-down" <?php if(!empty($hero_1['cor_da_seta'])){ echo 'style="color:'.$hero_1['cor_da_seta'].';"';} ?>><i class="fa fa-angle-down"></i></button>
</section><!-- .fastio-video-hero -->
<?php endif; ?>



<!-- ******************* The Bottle Feature Section ******************* -->
<?php 
	$bottle = get_field('fastio-go-section-2');
	if(!empty($bottle)):
?>
<section class="fastio-go-bottle">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-1 vertical-align">
				<?php if(!empty($bottle['embalagem-img'])): ?><img class="img-fluid" src="<?php echo $bottle['embalagem-img']['url']; ?>" title="<?php echo $bottle['embalagem-img']['title']; ?>" alt="<?php echo $bottle['embalagem-img']['title']; ?>"><?php endif; ?>
			</div>
			<div class="col-3 vertical-align">
				<?php if(!empty($bottle['embalagem-title'])){ echo '<h2>'.$bottle['embalagem-title'].'</h2>'; } ?>
				<?php if(!empty($bottle['embalagem-text'])){ echo '<p>'.$bottle['embalagem-text'].'</p>'; } ?>
			</div>
			<div class="col-4 text-center">
				<?php if(!empty($bottle['img'])): ?><img class="img-fluid" src="<?php echo $bottle['img']['url']; ?>" title="<?php echo $bottle['img']['title']; ?>" alt="<?php echo $bottle['img']['title']; ?>"><?php endif; ?>
			</div>
			<div class="col-3 vertical-align">
				<?php if(!empty($bottle['capsula-title'])){ echo '<h2>'.$bottle['capsula-title'].'</h2>'; } ?>
				<?php if(!empty($bottle['capsula-text'])){ echo '<p>'.$bottle['capsula-text'].'</p>'; } ?>
			</div>
			<div class="col-1 vertical-align text-right">
				<?php if(!empty($bottle['capsula-img'])): ?><img class="img-fluid" src="<?php echo $bottle['capsula-img']['url']; ?>" title="<?php echo $bottle['capsula-img']['title']; ?>" alt="<?php echo $bottle['capsula-img']['title']; ?>"><?php endif; ?>
			</div>
		</div>
	</div>
</section><!-- .fastio-go-bottle -->

<?php endif;

//Section 3 : Hero 1
$hero_1 = get_field('fastio-go-section-3');
if(!empty($hero_1)):
?>
<!-- ******************* The Hero Section ******************* -->
<section class="fastio-hero" style="background-image:url('<?php echo $hero_1['bg-img']; ?>');">
	<?php if(!empty($hero_1['title'])): ?>
	<div class="container">
		<div class="row">
			<header class="fastio-hero-header col-3 text-center">
				<?php if(!empty($hero_1['img'])): ?><img class="img-fluid" src="<?php echo $hero_1['img']['url']; ?>" title="<?php echo $hero_1['img']['title']; ?>" alt="<?php echo $hero_1['img']['title']; ?>"><?php endif; ?>
				<?php if(!empty($hero_1['title'])): ?><h1<?php if(!empty($hero_1['title-color'])){ echo ' style="color:'.$hero_1['title-color'].';"';} ?>><?php echo $hero_1['title'];?></h1><?php endif; ?> 
			</header>
		</div>
	</div>
	<?php endif; ?>
</section><!-- .fastio-hero -->
<?php endif;

//Section 4 : Workout
$workout = get_field('fastio-go-section-4');
if(!empty($workout)):
?>
<!-- ******************* The Fastio GO Workout Section ******************* -->
<section class="fastio-go-workout" style="background-image:url('<?php echo $workout['bg-img']; ?>');">
	<div class="container">
		<div class="row">
			<div class="offset-1 col-10 hero">
				<?php if(!empty($workout['img']) || !empty($workout['title']) || !empty($workout['desc'])): ?>
				<article class="inner-hero">
					<div class="row">
						<?php if(!empty($workout['img'])): ?>
						<div class="col-3">
							<img class="img-fluid" src="<?php echo $workout['img']['url']; ?>" title="<?php echo $workout['img']['title']; ?>" alt="<?php echo $workout['img']['title']; ?>">
						</div>
						<?php endif; ?>
						<div class="col-5">
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
					<div class="col-<?php echo $workout_col; ?>">
						<article class="fastio-workout text-center">
							<?php if(!empty($go_workout_img)): ?>
							<img class="img-fluid img-thumbnail" src="<?php echo $go_workout_img['url']; ?>" title="<?php echo $go_workout_img['title']; ?>" alt="<?php echo $go_workout_img['title']; ?>">
							<?php endif; ?>
							<?php if(!empty($go_workout_file)): ?>
							<a href="<?php echo $go_workout_file['url']; ?>" target="_blank">
							<?php endif; ?>
								<h6><?php the_sub_field('title'); ?></h6>
								<i class="fa fa-download"></i>
							<?php if(!empty($go_workout_file)): ?></a><?php endif; ?>
						</article>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section><!-- .fastio-go-workout -->
<?php endif; 

$fastio_go_social = get_field('fastio-go-section-5');
if(!empty($fastio_go_social)):
?>
<section class="fastio-go-social">
	<div class="row no-gutters">
		<div class="col-5 bg-primary">
			<?php if(!empty($fastio_go_social['img-big'])): ?>
			<img class="img-fluid" src="<?php echo $fastio_go_social['img-big']['url']; ?>" title="<?php echo $fastio_go_social['img-big']['title']; ?>" alt="<?php echo $fastio_go_social['img-big']['title']; ?>">
			<?php endif; ?>
		</div>
		<div class="col-7">
			<div class="row no-gutters">
				<div class="col-4 bg-warning text-center vertical-center">
					<?php if(!empty($fastio_go_social['tweet-1'])): ?><h5 class="text-primary"><?php echo $fastio_go_social['tweet-1'];?></h5><?php endif; ?>
				</div>
				<div class="col-4 bg-primary">
					<?php if(!empty($fastio_go_social['img-1'])): ?>
					<img class="img-fluid" src="<?php echo $fastio_go_social['img-1']['url']; ?>" title="<?php echo $fastio_go_social['img-1']['title']; ?>" alt="<?php echo $fastio_go_social['img-1']['title']; ?>">
					<?php endif; ?>
				</div>
				<div class="col-4 bg-primary">
					<?php if(!empty($fastio_go_social['img-2'])): ?>
					<img class="img-fluid" src="<?php echo $fastio_go_social['img-2']['url']; ?>" title="<?php echo $fastio_go_social['img-2']['title']; ?>" alt="<?php echo $fastio_go_social['img-2']['title']; ?>">
					<?php endif; ?>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-4 bg-primary">
					<?php if(!empty($fastio_go_social['img-3'])): ?>
					<img class="img-fluid" src="<?php echo $fastio_go_social['img-3']['url']; ?>" title="<?php echo $fastio_go_social['img-3']['title']; ?>" alt="<?php echo $fastio_go_social['img-3']['title']; ?>">
					<?php endif; ?>
				</div>
				<div class="col-4 bg-primary">
					<?php if(!empty($fastio_go_social['img-4'])): ?>
					<img class="img-fluid" src="<?php echo $fastio_go_social['img-4']['url']; ?>" title="<?php echo $fastio_go_social['img-4']['title']; ?>" alt="<?php echo $fastio_go_social['img-4']['title']; ?>">
					<?php endif; ?>
				</div>
				<div class="col-4 bg-warning text-center vertical-center">
					<?php if(!empty($fastio_go_social['tweet-2'])): ?><h5 class="text-primary"><?php echo $fastio_go_social['tweet-2'];?></h5><?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
<?php get_footer(); ?>
