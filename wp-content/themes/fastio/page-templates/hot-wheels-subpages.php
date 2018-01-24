<?php
/**
 * Template Name: Hot Wheels SubPages
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
                <div data-aos="fade-up" data-aos-duration="3000">
                <img src="<?php echo $hero_1['img_hashtag']; ?>" class="img-fluid hashtagimg float-right"/>
                </div>
            </div>
           </div>
            <div class="row">
                <div class="col-6">
                    <button class="btn btn-link btn-block fastio-btn-scroll-down"><i class="fa fa-angle-down"></i></button>
                </div>
                <div class="col-6">
                    <div data-aos="fade-up" data-aos-duration="3000">
                    <img src="<?php echo $hero_1['img1']; ?>" class="img-fluid float-right"/>
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
                            <img src="<?php echo $section2['img1']; ?>" class="img-fluid"/>
                            <img src="<?php echo $section2['img2']; ?>" class="img-fluid"/>
                        </div>
                    </div>
		</div>
            <div class="row">
                <div class="col-6"></div>
                <div class="col-6">
                    <div data-aos="fade-up" data-aos-duration="3000">
                        <img src="<?php echo $section2['img_tituloImagem']; ?>" class="img-fluid"/>
                        <div class="title">
                            <?php echo $section2['subtituloTexto']; ?>
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
            <div class="col-6"></div>
            <div class="col-6">
                <div data-aos="fade-up"data-aos-duration="3000">
                    <img src="<?php echo $section_3['img1']; ?>" class="img-fluid float-left"/>
                </div>
            </div>
           </div>
            <div class="row">
                <div class="col-6">
                    <div data-aos="fade-up" data-aos-duration="3000">
                        <img src="<?php echo $section_3['img2']; ?>" class="img-fluid float-left"/>
                    </div>
                </div>
                <div class="col-6">
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
<section class="fastio-hotwheels-subpages-section4">
        <div class="container">
            <div class="row">
                <!-- //Section 4 : Subpages -->
                <?php
                $hero_4 = get_field('hotwheels-section-4');
                if(!empty($hero_4)):
                ?>
                <div class="col-3"></div>
                <div class="col-7">
                    <div data-aos="fade-up" data-aos-duration="3000">
                        <img src="<?php echo $hero_4['img_titulo']; ?>" class="img-fluid float-right"/>
                    </div>
                </div>
          
                <?php endif; ?>
            </div>
	<div class="row">
            <!--Section 4-1 : Subpages Slider -->
       <div id="carousel" class="carousel slide page-slider" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
        <?php $i = 0; ?>
        <?php while( have_rows('hotwheels-section-4-1') ) : the_row(); 
        $link_id = get_sub_field('link', false, false);
        ?>
            <div class="item <?php echo $i==0 ? 'active' : ''; $i++; ?>">
                <a href="<?php echo get_the_permalink($link_id); ?>">
		<img src="<?php the_sub_field('img') ?>" alt="" />
                </a>
            </div>
        <?php endwhile; ?>
    </div>
           <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
	</div>
        </div>
</section><!-- .fastio-hotwheels-subpages-section4 -->
<?php endif; ?>

<?php get_footer();?>
