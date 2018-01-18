<?php
/**
 * Template Name: Explore o Gerês
 *
 * Template for displaying a specific page
 *
 * @package understrap
 */

get_header();

//Section 1 : Hero 1
$hero_1 = get_field('explore-o-geres-section-1');
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

<?php 
$args = array(
	child_of => get_the_ID()
);
$subpages = get_pages($args);
if( !empty( $subpages ) ): ?>
<!-- ******************* The Places Display Section ******************* -->
<section class="fastio-places">
	<div id="fastio-places-slide" class="carousel slide" data-ride="carousel" data-interval="9000">
		<div class="carousel-inner row w-100 mx-auto" role="listbox">
<?php
	$total = count($subpages);
	$i = 0;
	foreach( $subpages as $page ):
	$i++;
?>
			<article class="carousel-item col-md-3<?php if($i===1){ echo' active'; }?>">
				<a href="<?php echo get_page_link( $page->ID ); ?>">
					<img class="img-fluid mx-auto d-block" src="//placehold.it/400x300/000/fff?text=<?php echo $page->post_title; ?>" alt="<?php echo $page->post_title; ?>">
				</a>
				<h4>
					<a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a>
				</h4>
			</article>

<?php
	endforeach;
?>
		</div>
		<a class="carousel-control-prev" href="#fastio-places-slide" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="carousel-control-next" href="#fastio-places-slide" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Próximo</span>
		</a>
	</div>
</section>
<?php endif; ?>

<?php 
$args = array(
	child_of => get_the_ID()
);
$subpages = get_pages($args);
if( !empty( $subpages ) ): ?>
<!-- ******************* The Map Section ******************* -->
<section class="fastio-map">
	<div id="map"></div>
</section>
<script>
	var map;
	function initMap() {
		map = new google.maps.Map(document.getElementById('map'), {
			zoom: 11,
			center: new google.maps.LatLng(41.838648, -8.241580),
			mapTypeId: 'terrain'
		});
	}
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAg5djlKiQzO9o1bb9fBKT51Crt_LKjPqE&callback=initMap">
    </script>
<?php endif; ?>


<?php get_footer(); ?>