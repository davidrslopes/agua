<?php
/**
 * Template Name: A Nossa Água
 *
 * Template for displaying a specific page
 *
 * @package understrap
 */

get_header();
//Section 1 : Hero 1
$hero_1['title'] = get_the_title( '<h1 class="fastio-hero-title">', '</h1>' );
$hero_1['bg_img'] = get_the_post_thumbnail_url( $post->ID, 'full' );
//Section 2 : Product Section

//Section 3 : Hero 2
$hero_2 = get_field('a-nossa-agua-section-3');
//$hero_2['title'] = get_field('a-nossa-agua-section-3-title');
//$hero_2['bg_img'] = get_field('a-nossa-agua-section-3-bg-img');
//$hero_2['hashtag_svg'] = wp_get_attachment_image_src(get_field('a-nossa-agua-section-3-hastag-svg'), 'full');
//$hero_2['hashtag_svg_alt'] = get_the_title(get_field('a-nossa-agua-section-3-hastag-svg'));
?>

<!-- ******************* The Hero Section ******************* -->
<section class="fastio-hero" style="background-image:url('<?php echo $hero_1['bg_img']; ?>');">
	<div class="container-fluid">
		<div class="row">
			<header class="fastio-hero-header col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php 
					echo $hero_1['title'];
					//edit_post_link( '<i class="fa fa-pencil" title="'.__( 'Editar esta página', 'understrap' ).'"></i>', '<div class="edit-link text-center">', '</div>' );
				?>
			</header>
		</div>
	</div>
</section><!-- .fastio-hero -->

<!-- ******************* The Products Section ******************* -->
<section class="fastio-products">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<div class="list-group" id="list-tab" role="tablist">
					<a class="list-group-item list-group-item-action active" id="nav-tab-plastico" data-toggle="list" href="#tab-plastico" role="tab" aria-controls="tab-plastico"><?php _e( 'Plástico', 'understrap' ); ?></a>
					<a class="list-group-item list-group-item-action" id="nav-tab-vidro" data-toggle="list" href="#tab-vidro" role="tab" aria-controls="tab-vidro"><?php _e( 'Vidro', 'understrap' ); ?></a>
					<a class="list-group-item list-group-item-action" id="nav-tab-packs" data-toggle="list" href="#tab-packs" role="tab" aria-controls="tab-packs"><?php _e( 'Packs', 'understrap' ); ?></a>
				</div>
			</div>
			<div class="col-10">
				<div class="tab-content">
					<div class="tab-pane fade show active" id="tab-plastico" role="tabpanel" aria-labelledby="tab-plastico"></div>
					<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
					<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ******************* The Hero II Section ******************* -->
<section class="fastio-hero-2" style="background-image:url('<?php echo $hero_2['bg_img']; ?>');">
	<div class="container-fluid">
		<div class="row">
			<header class="fastio-hero-header col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php if(!empty($hero_2['title'])): ?><h1><?php echo $hero_2['title']; ?></h1><?php endif; ?>
				<?php if(!empty($hero_2['hashtag_svg'])): ?><img class="hero-hashtag" src="<?php echo $hero_2['hashtag_svg']; ?>" alt="<?php echo $hero_2['hashtag_svg']['title']; ?>"><?php endif; ?>
			</header>
		</div>
	</div>
</section><!-- .fastio-hero-2 -->
<?php get_footer(); ?>
