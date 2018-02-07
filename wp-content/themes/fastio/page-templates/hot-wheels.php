<?php
/**
 * Template Name: Hot Wheels
 *
 * Template for displaying a specific page
 *
 * @package understrap
 */

get_header();
$imagebackground = get_field('fundo_pagina');
if( !empty($imagebackground) ): ?>
<style>
    body.page-template-hot-wheels{
       background-image:url('<?php echo $imagebackground['url']; ?>'); 
    }
</style>
<?php endif; ?>

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
            <div class="col-6" style="padding-right: 0px;"><img src="<?php echo $hero_1['logo-img']; ?>" class="img-fluid float-right"/></div>
            <div class="col-6" style="padding-right: 0px;"><img src="<?php echo $hero_1['bg-img']; ?>" class="img-fluid float-right"/></div>
           </div>
        </div>
	<?php endif; ?>
	<div class="icon faa-float animated">
                        <i class="fa fa-angle-down"></i>
        </div>
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
			<header class="fastio-hero-header col-12">
                        <?php if(!empty($titles['titulo_1'])): ?><h1 class="title"><?php echo $titles['titulo_1'];?></h1><?php endif; ?> 
			<?php if(!empty($titles['titulo_2'])): ?><h1 class="title"><?php echo $titles['titulo_2'];?></h1><?php endif; ?>
                        <?php if(!empty($titles['titulo_3'])): ?><h1 class="title"><?php echo $titles['titulo_3'];?></h1><?php endif; ?>
                        <?php if(!empty($titles['subtitulo'])): ?><h3 class="subtitle"><?php echo $titles['subtitulo'];?></h3><?php endif; ?> 
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
 		if($links_col<6) $links_col = 4;
?>
<!-- ******************* The Fastio Links Section ******************* -->
<section class="fastio-hotwheels-subpages">
        <div class="container">
	<div class="row">
		<?php while( have_rows('hotwheels-section-3') ): the_row(); 
			$link_id = get_sub_field('link', false, false);
		?>
		<div class="col-<?php echo $links_col; ?>">
                        <a href="<?php echo get_the_permalink($link_id); ?>">
			<article style="background-image:url('<?php the_sub_field('img'); ?>');">
			</article>
                        </a>
		</div>
		<?php endwhile; ?>
	</div>
        </div>
</section><!-- .fastio-img-links -->
<?php endif; ?>

<?php get_footer(); ?>
