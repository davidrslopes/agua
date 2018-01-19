<?php
/**
 * Template Name: Hot Wheels
 *
 * Template for displaying a specific page
 *
 * @package understrap
 */

get_header();
?>


<?php 
//Section 1 : Hero 1
$hero_1 = get_field('hotwheels-section-1');
if(!empty($hero_1)):
/* Nota IMPORTANTE: Temos de verificar como deve ser o comportamento mobile desta area, apenas permitir a visualização do vídeo em WIFI era o ideal, em 3G este video não deve ser incluído, e deverá comprimir-se em vários formatos para que seja possivel a responsividade também em relação ao peso em mb do site. */
?>
<!-- ******************* The Logo and Images Hero Section ******************* -->
<section class="fastio-images-hero">
	
	<?php if(!empty($hero_1['bg-img']) && !empty($hero_1['logo-img'])): ?>
        <div class="container-fluid">
           <div class="row">
            <div class="col-6"><img src="<?php echo $hero_1['logo-img']; ?>" class="img-fluid float-right"/></div>
            <div class="col-6"><img src="<?php echo $hero_1['bg-img']; ?>" class="img-fluid float-right"/></div>
           </div>
        </div>
	<?php endif; ?>
	<button class="btn btn-link btn-block fastio-btn-scroll-down"><i class="fa fa-angle-down"></i></button>
</section><!-- .fastio-images-hero -->
<?php endif; ?>



<!-- ******************* The Titles Feature Section ******************* -->
<?php 
	$titles = get_field('hotwheels-section-2');
	if(!empty($titles)):
?>
<section class="fastio-hotwheels-titles">
	<div class="container">
		<div class="row">
			<header class="fastio-hero-header col-12 text-center">
                        <?php if(!empty($titles['titulo_1'])): ?><h1 class="text-warning"><?php echo $titles['titulo_1'];?></h1><?php endif; ?> 
			<?php if(!empty($titles['titulo_2'])): ?><h1 class="text-warning"><?php echo $titles['titulo_2'];?></h1><?php endif; ?>
                        <?php if(!empty($titles['titulo_3'])): ?><h1 class="text-warning"><?php echo $titles['titulo_3'];?></h1><?php endif; ?>
                        <?php if(!empty($titles['subtitulo'])): ?><h3 class="text-warning"><?php echo $titles['subtitulo'];?></h3><?php endif; ?> 
                        </header>
		</div>
	</div>
</section><!-- .fastio-hotwheels-titles -->

<?php endif;?>


<?php
//Section 3 : Subpages
	if( have_rows('hotwheels-section-3') ): 
		$links_count = count(get_field('hotwheels-section-3'));
		$links_col = ceil(12 / $links_count);
 		if($links_col<6) $links_col = 6;
?>
<!-- ******************* The Fastio Links Section ******************* -->
<section class="fastio-hotwheels-subpages">
        <div class="container">
	<div class="row">
		<?php while( have_rows('hotwheels-section-3') ): the_row(); 
			$link_id = get_sub_field('link', false, false);
		?>
		<div class="col-<?php echo $links_col; ?>">
			<article style="background-image:url('<?php the_sub_field('img'); ?>');">
				<a href="<?php echo get_the_permalink($link_id); ?>">
					<h5 class="align-middle"><?php echo get_the_title($link_id); ?></h5>
				</a>
			</article>
		</div>
		<?php endwhile; ?>
	</div>
        </div>
</section><!-- .fastio-img-links -->
<?php endif; ?>

<?php get_footer(); ?>
