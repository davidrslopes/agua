<?php
/**
 * Template Name: Hot Wheels SubPages
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
    body.page-template-hot-wheels-subpages{
       background-image:url(<?php echo $fundo_da_pagina; ?>); 
    }
</style>
<?php endif; ?>


<?php 
//Section 1 : Hero 1
$hero_1 = get_field('hotwheels-section-1');
if(!empty($hero_1)):
?>
<!-- ******************* The Logo and Images Hero Section ******************* -->
<section class="fastio-images-hero fastio-hotwheels-subpages-1">
	
        <div class="container-fluid">
           <div class="row">    
            <div class="col-6">
                <div data-aos="fade-up" data-aos-duration="3000">
                    <img src="<?php echo $hero_1['img_titulo']; ?>" class="img-fluid float-right"/>
                </div>
                <div data-aos="fade-up" data-aos-duration="3000">                
                <div class="title">
                    <?php echo $hero_1['texto']; ?>
                </div></div>
            </div>
            <div class="col-6">           
                <div data-aos="fade-up" data-aos-duration="3000">
                 <img src="<?php echo $hero_1['img2']; ?>" class="img-fluid bottleimg"/>
                </div>
                <img src="<?php echo $hero_1['img_hashtag']; ?>" class="img-fluid hashtagimg float-right"/>
                
            </div>
           </div>
            <div class="row">
                <div class="col-6">
                    <div class="icon faa-float animated">
                        <i class="fa fa-angle-down"></i></div>
                </div>
                <div class="col-6">
                    <div data-aos="fade-up" data-aos-duration="3000">
                    <img src="<?php echo $hero_1['img1']; ?>" class="img-fluid float-right passadeiraimg"/>
                    </div>
                </div>
            </div>
        </div>
</section><!-- .fastio-images-hero -->
<?php endif; ?>
<!-- ******************* The Section2 ******************* -->
<?php 
	$section2 = get_field('hotwheels-section-2');
	if(!empty($section2)):
?>
<section class="fastio-hotwheels-subpages-section2">
	<div class="container">
		<div class="row">
                    <div class="col-12">
                        <div data-aos="fade-up" data-aos-duration="3000">
                            <img src="<?php echo $section2['img1']; ?>" class="img-fluid imgcarrohotwheels"/>
                            <img src="<?php echo $section2['img2']; ?>" class="img-fluid metaimg"/>
                        </div>
                    </div>
		</div>
            <div class="row">
                <div class="col-6"></div>
                <div class="col-6">
                    <div data-aos="fade-up" data-aos-duration="3000">
                        <img src="<?php echo $section2['img_titulo']; ?>" class="img-fluid float-right"/>
                        <div class="title">
                            <?php echo $section2['subtitulo']; ?>
                        </div>
                    </div>
                </div>
            </div>
	</div>
</section><!-- .fastio-hotwheels-section2 -->

<?php endif;?>

<?php 
//Section 3 : Hero 3
$section_3 = get_field('hotwheels-section-3');
if(!empty($section_3)):
?>
<!-- ******************* Section 3 ******************* -->
<section class="fastio-hotwheels-subpages-section3">
        <div class="container-fluid">
           <div class="row">
            <div class="col-3"></div>
            <div class="col-9">
                <div data-aos="fade-up"data-aos-duration="3000">
                    <img src="<?php echo $section_3['img1']; ?>" class="img-fluid float-left"/>
                </div>
            </div>
           </div>
            <div class="row">
                <div class="col-6">
                    <div data-aos="fade-up" data-aos-duration="3000">
                        <img src="<?php echo $section_3['img2']; ?>" class="img-fluid float-left imgbancada"/>
                    </div>
                </div>
                <div class="col-6 titulo-subtitulo">
                    <div data-aos="fade-up" data-aos-duration="3000">
                        <img src="<?php echo $section_3['img_titulo']; ?>" class="img-fluid float-left"/>
                        <div class="title">
                            <?php echo $section_3['subtitulo']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section><!-- .fastio-images-section3 -->
<?php endif; ?>
<?php

//Section 4 : Slider Subpages
	if( have_rows('hotwheels-section-4-1') ): 
		$links_count = count(get_field('hotwheels-section-4-1'));
		$links_col = ceil(12 / $links_count);
 		if($links_col<6) $links_col = 6;
?>
<!-- ******************* The Fastio Links Section ******************* -->
<?php
$hero_4 = get_field('hotwheels-section-4');?>
<section class="fastio-hotwheels-subpages-section4" style="background-image:url('<?php echo $hero_4['bg-img']; ?>');">
        <div class="container-fluid">
            <div class="row">
                <!-- //Section 4 : Subpages -->
                <?php
                $hero_4 = get_field('hotwheels-section-4');
                if(!empty($hero_4)):
                ?>
                <div class="col-3"></div>
                <div class="col-9">
                    <div data-aos="fade-up" data-aos-duration="3000">
                        <img src="<?php echo $hero_4['img_titulo']; ?>" class="img-fluid float-right escolhecarroimg"/>
                    </div>
                </div>
          
                <?php endif; ?>
            </div>
	<div class="row">
            <!--Section 4-1 : Subpages Slider -->
       <div id="hotwheelssubpagescarousel" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-80 mx-auto" role="listbox" >
        <?php $i = 0; ?>
        <?php while( have_rows('hotwheels-section-4-1') ) : the_row(); 
        $link_id = get_sub_field('link', false, false);
        $i++;
        ?>
            <div class="carousel-item col-md-3 <?php echo $i===1 ? 'active' : '';?>">
                <a href="<?php echo get_the_permalink($link_id); ?>">
		<img src="<?php the_sub_field('img') ?>" alt="" />
                </a>
            </div>
        <?php endwhile; ?>
    </div>
           <a class="carousel-control-prev" href="#hotwheelssubpagescarousel" role="button" data-slide="prev">
         <i class="fa fa-angle-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#hotwheelssubpagescarousel" role="button" data-slide="next">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
    </div>
	</div>
        </div>
</section><!-- .fastio-hotwheels-subpages-section4 -->
<?php endif; ?>

<?php get_footer();?>
