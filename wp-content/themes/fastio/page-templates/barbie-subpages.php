<?php
/**
 * Template Name: Fastio Barbie Subpaginas
 *
 * Template for displaying a specific page
 *
 * @package understrap
 */

get_header();
?>


<?php 
//Section 1 : Hero 1
$hero_1 = get_field('barbiesubpages-section-1');
if(!empty($hero_1)):
?>
<!-- ******************* The Logo and Images Hero Section ******************* -->
<section class="fastio-images-hero fastio-barbie-subpages-1">
	
        <div class="container">
           <div class="row">    
            <div class="col-6">
                <div data-aos="fade-up" data-aos-duration="3000">
                    <img src="<?php echo $hero_1['img_titulo']; ?>" class="img-fluid"/>
                </div>
                <div data-aos="fade-up" data-aos-duration="3000">                
                <div class="title">
                    <?php echo $hero_1['texto']; ?>
                </div></div>
                <div class="icon faa-float animated">
                        <i class="fa fa-angle-down"></i></div>
            </div>
            <div class="col-6">           
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
                    <div class="col-12">
                        <div data-aos="fade-up" data-aos-duration="3000">
                            <img src="<?php echo $section2['img1']; ?>" class="img-fluid imgpolaroid"/>
                        </div>
                    </div>
		</div>
            <div class="row">
                <div class="col-3">
                    <img src="<?php echo $section2['img2']; ?>" class="img-fluid imgestrelas"/>
                </div>
                <div class="col-9">
                    <div data-aos="fade-up" data-aos-duration="3000">
                        <img src="<?php echo $section2['img_titulo']; ?>" class="img-fluid float-left"/>
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
<section class="fastio-barbie-subpages-section3">
	<div class="container-fluid">
		<div class="row">
			<div class="col-3">
				<img src="<?php echo $section3['img_titulo']; ?>" class="img-fluid float-right"/> 
				<div class="title">
				<?php echo $section_3['subtitulo']; ?>
				</div>
			</div>
			<div class="col-3">
				<img src="<?php echo $section3['img_estrelas']; ?>" class="img-fluid float-right"/>
			</div>
			<div class="col-6">
				<div data-aos="fade-up"data-aos-duration="3000">
					<img src="<?php echo $section_3['img1']; ?>" class="img-fluid float-right imgcamera"/>
				</div>
			</div>
		</div>
	</div>
	<div class="row no-gutters">
		<div class="col-3">
			<div data-aos="fade-up" data-aos-duration="3000">
				<img src="<?php echo $section_3['img2']; ?>" class="img-fluid float-right imgestrelasbarbiefotografa"/>
			</div>
		</div>
		<div class="col-3">
			 <img src="<?php echo $section_3['img3']; ?>" class="img-fluid float-left imgbarbiefotografa"/>
		</div>
		<div class="col-6">
			<div class="row no-gutters">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
					<img src="<?php echo $section_3['grelha_de_imagem_imagem1']; ?>" class="img-fluid"/>
					<img src=https://i.scdn.co/image/2fd8fa0f7ef2f83691a0fb9628ee369b8e3b688e class="img-responsive">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
					<img src="<?php echo $section_3['grelha_de_imagem_imagem2']; ?>" class="img-fluid"/>
					<img src=https://i.scdn.co/image/2fd8fa0f7ef2f83691a0fb9628ee369b8e3b688e class="img-responsive">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
					<img src="<?php echo $section_3['grelha_de_imagem_imagem3']; ?>" class="img-fluid"/>
					<img src=https://i.scdn.co/image/2fd8fa0f7ef2f83691a0fb9628ee369b8e3b688e class="img-responsive">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
					<img src="<?php echo $section_3['grelha_de_imagem_imagem4']; ?>" class="img-fluid"/>
					<img src=https://i.scdn.co/image/2fd8fa0f7ef2f83691a0fb9628ee369b8e3b688e class="img-responsive">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
					<img src="<?php echo $section_3['grelha_de_imagem_imagem5']; ?>" class="img-fluid"/>
					<img src=https://i.scdn.co/image/2fd8fa0f7ef2f83691a0fb9628ee369b8e3b688e class="img-responsive">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
					<img src="<?php echo $section_3['grelha_de_imagem_imagem6']; ?>" class="img-fluid"/>
					<img src=https://i.scdn.co/image/2fd8fa0f7ef2f83691a0fb9628ee369b8e3b688e class="img-responsive">
				</div>
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
	</div>
</section><!-- .fastio-images-section3 -->
<?php endif; ?>
<?php

//Section 4 : Slider Subpages
	if( have_rows('barbiesubpages-section-4-1') ): 
		$links_count = count(get_field('barbiesubpages-section-4-1'));
		$links_col = ceil(12 / $links_count);
 		if($links_col<6) $links_col = 6;
?>
<!-- ******************* The Fastio Links Section ******************* -->
<section class="fastio-barbie-subpages-section4">
        <div class="container-fluid">
            <div class="row">
                <!-- //Section 4 : Subpages -->
                <?php
                $hero_4 = get_field('barbiesubpages-section-4');
                if(!empty($hero_4)):
                ?>
                <div class="col-3"></div>
                <div class="col-9">
                    <div data-aos="fade-up" data-aos-duration="3000">
                        <img src="<?php echo $hero_4['img_titulo']; ?>" class="img-fluid float-right escolhebarbieimg"/>
                    </div>
                </div>
          
                <?php endif; ?>
            </div>
	<div class="row">
            <!--Section 4-1 : Subpages Slider -->
       <div id="subpagescarousel" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-80 mx-auto" role="listbox" >
        <?php $i = 0; ?>
        <?php while( have_rows('barbiesubpages-section-4-1') ) : the_row(); 
        $link_id = get_sub_field('link', false, false);
        $i++;
        ?>
            <div class="carousel-item col-md-3 <?php echo $i==0 ? 'active' : '';?>">
                <a href="<?php echo get_the_permalink($link_id); ?>">
		<img src="<?php the_sub_field('img') ?>" alt="" />
                </a>
            </div>
        <?php endwhile; ?>
    </div>
           <a class="carousel-control-prev" href="#subpagescarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#subpagescarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
	</div>
        </div>
</section><!-- .fastio-hotwheels-subpages-section4 -->
<?php endif; ?>

<?php get_footer();?>
