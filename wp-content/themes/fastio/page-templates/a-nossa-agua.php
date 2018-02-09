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
				<h1 class="text-center"<?php if(!empty($hero_1['title-color'])){ echo ' style="color:'.$hero_1['title-color'].';"';} ?>><?php echo $hero_1['title'];?></h1>
			</header>
		</div>
	</div>
	<?php endif; ?>
	<?php if(!empty($hero_1['arrow'])): ?><button class="btn btn-link btn-block fastio-btn-scroll-down"<?php if(!empty($hero_1['arrow-color'])){ echo ' style="color:'.$hero_1['arrow-color'].';"';} ?>><i class="fa fa-angle-down"></i></button><?php endif; ?>
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
<section class="fastio-products" data-aos="fade">
	<div class="container">
		<div class="row">
			<div class="col-4 col-md-2 offset-md-1">
				<div class="list-group" id="list-tab" role="tablist" data-aos="fade-up">
					<a class="list-group-item list-group-item-action active" id="nav-tab-plastic" data-toggle="list" href="#tab-plastic" role="tab" aria-controls="tab-plastic"><?php _e( 'Plástico', 'understrap' ); ?></a>
					<a class="list-group-item list-group-item-action" id="nav-tab-glass" data-toggle="list" href="#tab-glass" role="tab" aria-controls="tab-glass"><?php _e( 'Vidro', 'understrap' ); ?></a>
					<a class="list-group-item list-group-item-action" id="nav-tab-packs" data-toggle="list" href="#tab-packs" role="tab" aria-controls="tab-packs"><?php _e( 'Packs', 'understrap' ); ?></a>
				</div>
			</div>
			<div class="col-8 col-md-9">
				<div class="tab-content" data-aos="fade-up">
					<div class="tab-pane fade show active" id="tab-plastic" role="tabpanel" aria-labelledby="tab-plastic">
						<?php echo do_shortcode( $plastic_gallery ); ?>
						<footer class="gallery-caption">
							<img id="img-gallery-caption" src="<?php echo get_template_directory_uri()."/img/Linha-gotas-brancas.png" ?>" alt="onda" style="display: none;">
							<p></p>
						</footer>
					</div>
					<div class="tab-pane fade" id="tab-glass" role="tabpanel" aria-labelledby="tab-glass">
						<?php echo do_shortcode( $glass_gallery ); ?>
						<footer class="gallery-caption">
							<img id="img-gallery-caption" src="<?php echo get_template_directory_uri()."/img/Linha-gotas-brancas.png" ?>" alt="onda" style="display: none;">
							<p></p>
						</footer>
					</div>
					<div class="tab-pane fade" id="tab-packs" role="tabpanel" aria-labelledby="tab-packs">
						<?php echo do_shortcode( $packs_gallery ); ?>
						<footer class="gallery-caption">
							<img id="img-gallery-caption" src="<?php echo get_template_directory_uri()."/img/Linha-gotas-brancas.png" ?>" alt="onda" style="display: none;">
							<p></p>
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
<section class="fastio-hero-2" style="background-image:url('<?php echo $hero_2['bg-img']; ?>');" data-aos="fade">
	<div class="container-fluid">
		<header class="fastio-hero-2-header">
			<div class="offset-md-7 col-md-4">
			<?php if(!empty($hero_2['title'])): ?>
			<div class="row">
				<h3 <?php if(!empty($hero_2['title-color'])){ echo ' style="color:'.$hero_2['title-color'].';"';} ?> data-aos="fade-up">
					<?php echo $hero_2['title']; ?>
				</h3>
			</div>
			<?php endif; ?>
			<?php if(!empty($hero_2['hashtag'])): ?>
			<div class="row">
				<img class="img-fluid" src="<?php echo $hero_2['hashtag']['url']; ?>" title="<?php echo $hero_2['hashtag']['title']; ?>" alt="<?php echo $hero_2['hashtag']['title']; ?>" data-aos="fade-up">
			</div>
			<?php endif; ?>
			</div>
		</header>
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
<section class="fastio-benefits" data-aos="fade">
	<img class="ondas left top" src="<?php echo get_template_directory_uri()."/img/gotas-esq-1.png" ?>" alt="onda azul l" data-aos="fade-up">
	<img class="ondas left top" src="<?php echo get_template_directory_uri()."/img/gotas-esq-2.png" ?>" alt="onda azul 2" data-aos="fade-up">
        <img class="ondas left top" src="<?php echo get_template_directory_uri()."/img/gotas-esq-3.png" ?>" alt="onda azul 3" data-aos="fade-up">
        <img class="ondas left top" src="<?php echo get_template_directory_uri()."/img/gotas-esq-4.png" ?>" alt="onda azul 4" data-aos="fade-up">
        <img class="ondas left top" src="<?php echo get_template_directory_uri()."/img/gotas-esq-5.png" ?>" alt="onda azul 5" data-aos="fade-up">
        <div class="container">
		<div class="row">
			<?php while( have_rows('a-nossa-agua-section-4') ): the_row(); ?>
			<div class="col-<?php echo $benefit_col*2; ?> col-md-<?php echo $benefit_col; ?>">
				<article data-aos="fade-in">
					<h5><?php the_sub_field('title'); ?></h5>
					<p><?php the_sub_field('desc'); ?></p>
				</article>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
	<img class="ondas right top" src="<?php echo get_template_directory_uri()."/img/onda_azul_a_nossa_agua-r.png" ?>" alt="onda azul r" data-aos="fade-up">
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
		<?php while( have_rows('a-nossa-agua-section-5') ): the_row(); 
			$link_id = get_sub_field('link', false, false);
		?>
		<div class="col-<?php echo $links_col*2; ?> col-md-<?php echo $links_col; ?>">
			<article style="background-image:url('<?php the_sub_field('img'); ?>');">
				<a href="<?php echo get_the_permalink($link_id); ?>">
					<h5 class="align-middle"><?php echo get_the_title($link_id); ?></h5>
				</a>
			</article>
		</div>
		<?php endwhile; ?>
	</div>
</section><!-- .fastio-img-links -->
<?php endif; ?>
<?php get_footer(); ?>
