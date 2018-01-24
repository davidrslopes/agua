<?php
/**
 * Template Name: Explore o Gerês SubPages
 *
 * Template for displaying a specific page
 *
 * @package understrap
 */

get_header();

//Section 1 : Hero 1
$hero_1 = get_field('explore-o-geres-subpage-section-1');
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


<?php get_footer(); ?>