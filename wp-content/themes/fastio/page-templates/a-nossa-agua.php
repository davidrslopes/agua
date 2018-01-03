<?php
/**
 * Template Name: A Nossa Água
 *
 * Template for displaying a specific page
 *
 * @package understrap
 */

get_header();
?>


<?php 
//Section 1 : Hero 1
$hero_1 = get_field('a-nossa-agua-section-1');
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
<?php endif; ?>

<!-- ******************* The Products Section ******************* -->
<?php 
	$products = get_field('a-nossa-agua-section-2');
	$gallery_options = 'size="full" columns="5" link="none"';
	while( have_rows('a-nossa-agua-section-2') ): the_row(); 
		if( get_sub_field('plastic',false) ):
			$plastic_gallery = '[gallery ids="' . implode(',', get_sub_field('plastic',false)) . '" '.$gallery_options.' ]';
		endif;
		if( get_sub_field('glass',false) ):
			$glass_gallery = '[gallery ids="' . implode(',', get_sub_field('glass',false)) . '" '.$gallery_options.' ]';
		endif;
		if( get_sub_field('packs',false) ):
			$packs_gallery = '[gallery ids="' . implode(',', get_sub_field('packs',false)) . '" '.$gallery_options.' ]';
		endif;
	endwhile;
	if(!empty($products)):
?>
<section class="fastio-products">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<div class="list-group" id="list-tab" role="tablist">
					<a class="list-group-item list-group-item-action active" id="nav-tab-plastic" data-toggle="list" href="#tab-plastic" role="tab" aria-controls="tab-plastic"><?php _e( 'Plástico', 'understrap' ); ?></a>
					<a class="list-group-item list-group-item-action" id="nav-tab-glass" data-toggle="list" href="#tab-glass" role="tab" aria-controls="tab-glass"><?php _e( 'Vidro', 'understrap' ); ?></a>
					<a class="list-group-item list-group-item-action" id="nav-tab-packs" data-toggle="list" href="#tab-packs" role="tab" aria-controls="tab-packs"><?php _e( 'Packs', 'understrap' ); ?></a>
				</div>
			</div>
			<div class="col-10">
				<div class="tab-content">
					<div class="tab-pane fade show active" id="tab-plastic" role="tabpanel" aria-labelledby="tab-plastic">
						<?php echo do_shortcode( $plastic_gallery ); ?>
						<footer>
							<img src="<?php echo get_template_directory_uri()."/img/onda_branco.png" ?>" alt="onda">
							<p>Image Description Goes Here</p>
						</footer>
					</div>
					<div class="tab-pane fade" id="tab-glass" role="tabpanel" aria-labelledby="tab-glass">
						<?php echo do_shortcode( $glass_gallery ); ?>
						<footer>
							<img src="<?php echo get_template_directory_uri()."/img/onda_branco.png" ?>" alt="onda">
							<p>Image Description Goes Here</p>
						</footer>
					</div>
					<div class="tab-pane fade" id="tab-packs" role="tabpanel" aria-labelledby="tab-packs">
						<?php echo do_shortcode( $packs_gallery ); ?>
						<footer>
							<img src="<?php echo get_template_directory_uri()."/img/onda_branco.png" ?>" alt="onda">
							<p>Image Description Goes Here</p>
						</footer>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- .fastio-products -->
<?php endif; ?>

<?php
//Section 3 : Hero 2
$hero_2 = get_field('a-nossa-agua-section-3');
if(!empty($hero_2)):
?>
<!-- ******************* The Hero II Section ******************* -->
<section class="fastio-hero-2" style="background-image:url('<?php echo $hero_2['bg-img']; ?>');">
	<div class="container-fluid">
		<div class="row">
			<header class="fastio-hero-header offset-lg-7 col-lg-4 offset-md-8 col-md-4 offset-xs-6 col-xs-6">
				<?php if(!empty($hero_2['title'])): ?><h3 class="text-primary"><?php echo $hero_2['title']; ?></h3><?php endif; ?>
				<?php if(!empty($hero_2['hashtag'])): ?><img class="img-fluid" src="<?php echo $hero_2['hashtag']['url']; ?>" title="<?php echo $hero_2['hashtag']['title']; ?>" alt="<?php echo $hero_2['hashtag']['title']; ?>"><?php endif; ?>
			</header>
		</div>
	</div>
</section><!-- .fastio-hero-2 -->
<?php endif; ?>

<?php 
	if( have_rows('a-nossa-agua-section-4') ): 
		$benefit_count = count(get_field('a-nossa-agua-section-4'));
		$benefit_col = ceil(12 / $benefit_count);
 		if($benefit_col<3) $benefit_col = 3;
?>
<!-- ******************* The Fastio Benefits Section ******************* -->
<section class="fastio-benefits">
	<img class="ondas left" src="<?php echo get_template_directory_uri()."/img/onda_azul-1.png" ?>" alt="onda azul">
	<div class="container">
		<div class="row">
			<?php while( have_rows('a-nossa-agua-section-4') ): the_row(); ?>
			<div class="col-<?php echo $benefit_col; ?>">
				<article>
					<h5><?php the_sub_field('title'); ?></h5>
					<p><?php the_sub_field('desc'); ?></p>
				</article>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
	<img class="ondas right" src="<?php echo get_template_directory_uri()."/img/onda_azul-2.png" ?>" alt="onda azul">
</section><!-- .fastio-benefits -->
<?php endif; ?>

<?php
	if( have_rows('a-nossa-agua-section-5') ): 
		$links_count = count(get_field('a-nossa-agua-section-5'));
		$links_col = ceil(12 / $links_count);
 		if($links_col<3) $links_col = 3;
?>
<!-- ******************* The Fastio Links Section ******************* -->
<section class="fastio-img-links">
	<div class="row no-gutters">
		<?php while( have_rows('a-nossa-agua-section-5') ): the_row(); ?>
		<div class="col-<?php echo $links_col; ?>">
			<article style="background-image:url('<?php the_sub_field('img'); ?>');">
				<a href="<?php the_sub_field('link'); ?>">
					<h5 class="align-middle"><?php the_sub_field('title'); ?></h5>
				</a>
			</article>
		</div>
		<?php endwhile; ?>
	</div>
</section><!-- .fastio-img-links -->
<?php endif; ?>
<?php get_footer(); ?>
