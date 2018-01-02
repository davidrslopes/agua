<?php
/**
 * Template Name: A Nossa Agua
 *
 * Template for displaying a specific page
 *
 * @package understrap
 */

get_header();
?>

<!-- ******************* The Hero Section ******************* -->
<section class="fastio-hero" style="background-image:url('<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>');">
	<div class="container-fluid">
		<div class="row">
			<header class="fastio-hero-header col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php 
					the_title( '<h1 class="fastio-hero-title">', '</h1>' );
					//edit_post_link( '<i class="fa fa-pencil" title="'.__( 'Editar esta página', 'understrap' ).'"></i>', '<div class="edit-link text-center">', '</div>' );
				?>
			</header>
		</div>
	</div>
</section><!-- .fastio-hero -->

<!-- ******************* The Products Section ******************* -->
<section class="fastio-products">
	<div class="container">
		<div class="nav flex-column">
			<a class="nav-link active" id="fastio-tab-plastico" href="#tab-plastico" role="tab" aria-controls="tab-plastico" aria-selected="true"><?php __( 'Plástico', 'understrap' ); ?></a>
			<a class="nav-link" id="fastio-tab-vidro" href="#tab-vidro" role="tab" aria-controls="tab-vidro" aria-selected="false"><?php __( 'Vidro', 'understrap' ); ?></a>
			<a class="nav-link" id="fastio-tab-packs" href="#tab-packs" role="tab" aria-controls="tab-packs" aria-selected="false"><?php __( 'Packs', 'understrap' ); ?></a>
		</div>
		<div class="tab-content">
			<div class="tab-pane fade show active" id="tab-plastico" role="tabpanel" aria-labelledby="tab-plastico">
				
			</div>
			<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
