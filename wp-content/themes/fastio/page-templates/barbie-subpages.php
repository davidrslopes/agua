<?php
/**
 * Template Name: Fastio Barbie Subpaginas
 *
 * Template for displaying a specific page
 *
 * @package understrap
 */

get_header();
$fundo_da_pagina=get_field('fundo_da_pagina');
if(!empty($fundo_da_pagina)): 
?>
<style>
    body.page-template-barbie-subpages{
       background-image:url(<?php echo $fundo_da_pagina; ?>); 
    }
</style>
<?php endif; ?>
<?php

//Section 1 : Hero 1
$hero_1 = get_field('barbiesubpages-section-1');
if(!empty($hero_1)):
?>
<!-- ******************* The Logo and Images Hero Section ******************* -->
<section class="fastio-images-hero fastio-barbie-subpages-1">
	
        <div class="container">
           <div class="row">    
            <div class="col-12 col-md-6">
                <div data-aos="fade-up" data-aos-duration="3000">
                    <img src="<?php echo $hero_1['img_titulo']; ?>" class="img-fluid float-right"/>
                </div>
                <div data-aos="fade-up" data-aos-duration="3000">                
                <div class="title">
                    <?php echo $hero_1['texto']; ?>
                </div></div>
                <div class="icon faa-float animated" <?php if(!empty($hero_1['cor_da_seta'])){ echo ' style="color:'.$hero_1['cor_da_seta'].';"';} ?>>
                        <i class="fa fa-angle-down"></i></div>
            </div>
            <div class="col-12 col-md-6">           
                <div data-aos="fade-up" data-aos-duration="3000">
                 <img src="<?php echo $hero_1['img1']; ?>" class="img-fluid bottleimg"/>
                </div>
            </div>
           </div>
        </div>
</section><!-- .fastio-images-hero -->
<?php endif; ?>
<!-- ******************* The Section2 ******************* -->
<?php 
	$section2 = get_field('barbiesubpages-section-2');
	if(!empty($section2)):
?>
<section class="fastio-barbie-subpages-section2">
	<div class="container">
		<div class="row">
                    <div class="col-12 col-md-12">
                        <div data-aos="fade-up" data-aos-duration="3000">
                            <img src="<?php echo $section2['img1']; ?>" class="img-fluid imgpolaroid"/>
                        </div>
                    </div>
		</div>
            <div class="row">
                <div class="col-12 col-md-1 d-none d-sm-block">
                    <div data-aos="fade-up"data-aos-duration="3000">
                    <img src="<?php echo $section2['img2']; ?>" class="img-fluid imgestrelas"/>
                    </div>
                </div>
                <div class="col-12 col-md-11">
                    <div data-aos="fade-up" data-aos-duration="3000">
                        <img src="<?php echo $section2['img_titulo']; ?>" class="img-fluid"/>
                        <div class="title">
                            <?php echo $section2['subtitulo']; ?>
                        </div>
                    </div>
                </div>
            </div>
	</div>
</section><!-- .fastio-barbie-subpages-section2 -->

<?php endif;?>

<?php 
//Section 3 : Hero 3
$section_3 = get_field('barbiesubpages-section-3');
if(!empty($section_3)):
?>
<!-- ******************* Section 3 ******************* -->
<section class="fastio-barbie-subpages-section3" style="background-image:url(<?php echo $section_3['bg-img']; ?>);">
	<div class="container-fluid">
		<div class="row">
                    <?php if(!wp_is_mobile()): // DESKTOP ORDER VERSION ?>
			<div class="col col-md-5 imgtitulocriatividade">
                            <div data-aos="fade-up"data-aos-duration="3000">
				<img src="<?php echo $section_3['img_titulo']; ?>" class="img-fluid float-right"/> 
                                <div class="title" style="width:356px;">
				<?php echo $section_3['subtitulo']; ?>
				</div>
                            </div>
			</div>
			<div class="col col-md-1 imgestrelas">
                            <div data-aos="fade-up"data-aos-duration="3000">
				<img src="<?php echo $section_3['img_estrelas']; ?>" class="img-fluid float-right"/>
                            </div>
                        </div>
			<div class="col col-md-6 imgcameracol">
				<div data-aos="fade-up"data-aos-duration="3000">
					<img src="<?php echo $section_3['imgcamera']; ?>" class="img-fluid float-right imgcamera"/>
				</div>
			</div>
                    <?php else:?>

                    <div class="col-12 col-md-5 imgtitulocriatividade">
                            <div data-aos="fade-up"data-aos-duration="3000">
				<img src="<?php echo $section_3['img_titulo']; ?>" class="img-fluid float-right"/> 
                                <div class="title" style="width:356px;">
				<?php echo $section_3['subtitulo']; ?>
				</div>
                            </div>
                    </div>
                    <div class="col-12 col-md-6 imgcameracol">
				<div data-aos="fade-up"data-aos-duration="3000">
					<img src="<?php echo $section_3['imgcamera']; ?>" class="img-fluid float-right imgcamera"/>
				</div>
                    </div>
                    <?php endif;?>
		</div>
	</div>
	<div class="row no-gutters">
            <?php if(!wp_is_mobile()): // DESKTOP ORDER VERSION ?>
		<div class="col col-md-2">
		</div>
		<div class="col col-md-4 align-self-end">
                    <div data-aos="fade-up"data-aos-duration="3000">
			 <img src="<?php echo $section_3['img3']; ?>" class="img-fluid float-left imgbarbiefotografa"/>
                    </div>
                </div>
		<div class="col col-md-6">
			<div class="barbie-galeria">
                            <?php
//Section 3 : Galeria Fotos
	if( have_rows('barbiesubpages-section-3-galeria') ): 
		$links_count = count(get_field('barbiesubpages-section-3-galeria'));
		$links_col = ceil(12 / $links_count);
 		if($links_col<6) $links_col = 4;
?>
				<div class="row no-gutters">
                                    <?php while( have_rows('barbiesubpages-section-3-galeria') ): the_row(); ?>
					<div class="col-<?php echo $links_col; ?> col-md-4 col-sm-4">
                                            <div class="hovereffect">
						<img src="<?php the_sub_field('fotografia'); ?>" class="img-fluid"/>
						<div class="overlay">
                                                    <h2 class="name"><?php the_sub_field('nome'); ?></h2>
                                                    <h2 class="years"><?php the_sub_field('idade'); ?></h2>
                                                    <h2 class="location"><?php the_sub_field('localidade_-_pais'); ?></h2>
                                                </div>
                                            </div>
					</div>
                                    <?php endwhile; ?>
				</div>
                            <?php endif; ?>
			</div>
		</div>
		<!--<div class="col-6 imagensgrelha">
			<div data-aos="fade-up" data-aos-duration="3000">
				<img src="<?php echo $section_3['img_titulo']; ?>" class="img-fluid float-left"/>
				<div class="title">
					<?php echo $section_3['subtitulo']; ?>
				</div>
			</div>
		</div>-->
        <?php else: ?>
             		<div class="col-12 col-md-6">
			<div class="barbie-galeria">
                            <?php
//Section 3 : Galeria Fotos
	if( have_rows('barbiesubpages-section-3-galeria') ): 
		$links_count = count(get_field('barbiesubpages-section-3-galeria'));
		$links_col = ceil(12 / $links_count);
 		if($links_col<6) $links_col = 4;
?>
				<div class="row no-gutters">
                                    <?php while( have_rows('barbiesubpages-section-3-galeria') ): the_row(); ?>
					<div class="col-<?php echo $links_col; ?> col-md-4 col-sm-4">
                                            <div class="hovereffect">
						<img src="<?php the_sub_field('fotografia'); ?>" class="img-fluid"/>
						<div class="overlay">
                                                    <h2 class="name"><?php the_sub_field('nome'); ?></h2>
                                                    <h2 class="years"><?php the_sub_field('idade'); ?></h2>
                                                    <h2 class="location"><?php the_sub_field('localidade_-_pais'); ?></h2>
                                                </div>
                                            </div>
					</div>
                                    <?php endwhile; ?>
				</div>
                            <?php endif; ?>
			</div>
		</div>
                <div class="col-12 col-md-4 align-self-end">
                    <div data-aos="fade-up"data-aos-duration="3000">
			 <img src="<?php echo $section_3['img3']; ?>" class="img-fluid float-left imgbarbiefotografa"/>
                    </div>
                </div>
        <?php endif;?>
	</div>
</section><!-- .fastio-images-section3 -->
<?php endif; ?>
<?php

//Section 4 : Slider Subpages
	if( have_rows('barbiesubpages-section-4-1') ): 
		$links_count = count(get_field('barbiesubpages-section-4-1'));
		$links_col = ceil(12 / $links_count);
 		if($links_col<6) $links_col = 6;
                
                $hero_4 = get_field('barbiesubpages-section-4');
?>
<!-- ******************* The Fastio Links Section ******************* -->
<section class="fastio-barbie-subpages-section4" style="background-image:url(<?php echo $hero_4['background_image']; ?>);">
        <div class="container-fluid">
            <div class="row">
                <!-- //Section 4 : Subpages -->
                <?php
                $hero_4 = get_field('barbiesubpages-section-4');
                if(!empty($hero_4)):
                ?>
                <div class="col col-md-3"></div>
                <div class="col-12 col-md-9">
                    <div data-aos="fade-up" data-aos-duration="3000">
                        <img src="<?php echo $hero_4['img_titulo']; ?>" class="img-fluid float-right escolhebarbieimg"/>
                    </div>
                </div>
          
                <?php endif; ?>
            </div>
	<div class="row">
            <!--Section 4-1 : Subpages Slider -->
       <div id="barbiesubpagescarousel" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner w-80 mx-auto" role="listbox" >
        <?php $i = 0; ?>
        <?php while( have_rows('barbiesubpages-section-4-1') ) : the_row(); 
        $link_id = get_sub_field('link', false, false);
        $i++;
        ?>
            <div class="carousel-item <?php echo $i===1 ? 'active' : '';?>">
                <div class="col-md-3">
					<a href="<?php echo get_the_permalink($link_id); ?>">
						<img src="<?php the_sub_field('img') ?>" alt="" />
					</a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
           <a class="carousel-control-prev" href="#barbiesubpagescarousel" role="button" data-slide="prev">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#barbiesubpagescarousel" role="button" data-slide="next">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
    </div>
	</div>
        </div>
</section><!-- .fastio-hotwheels-subpages-section4 -->
<?php endif; ?>

<?php get_footer();?>
