<?php
/**
 * Template Name: Page Historia Fastio
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );

$fundo_da_pagina=get_field('imagem_fundo_da_pagina');
if(!empty($fundo_da_pagina)): 
?>
<style>
    body.page-template-historiafastio{
       background-image:url(<?php echo $fundo_da_pagina; ?>); 
    }
</style>
<?php endif; ?>

<div class="wrapper historiafastio" id="full-width-page-wrapper">

    <section id="seccao1">
        <div class="row">
            <div class="col-8 col-md-5 col-sm-5">
                <div data-aos="fade-right" data-aos-duration="2000">
                    <?php $image = wp_get_attachment_image_src(get_field('seccao_1_imagem_esquerda'), 'full'); ?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_1_imagem_esquerda')) ?>" class="img-responsive showcase-left">  
                </div>
                <div data-aos="fade-right" data-aos-duration="2000">
                     <?php $imagesection1leftbottom = wp_get_attachment_image_src(get_field('seccao_1_imagem_4'), 'full'); ?>
                    <img src="<?php echo $imagesection1leftbottom[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_1_imagem_4')) ?>" class="img-responsive showcase-left" style="margin-top: -120px;margin-left: 270px;">
                </div>
            </div>
            <div class="col-12 col-md-5 col-sm-5 content-area" id="primary">
                <div class="d-none d-md-block" data-aos="fade-down" data-aos-duration="2000">
                    <?php $imagesection1top = wp_get_attachment_image_src(get_field('seccao_1_imagem_2'), 'full'); ?>
                    <img src="<?php echo $imagesection1top[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_1_imagem_2')) ?>" class="img-responsive">  
               	</div>
				<main class="site-main" id="main" role="main">

				<?php $args = array('post_type' => 'historia','p' => '115'); //WTF? ?>
				<?php $loop = new WP_Query($args); ?>
				<?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'historia' ); ?>

				<?php endwhile; // end of the loop. ?>
				<?php else: ?>
					<!-- Dummy Content added for dev -->
					<article>
						<div class="media">
							<div class="media-left media-middle">
								<span class="year media-object">????</span>
							</div>
							<div class="media-body">
								<h1 class="entry-title media-heading">Entrada em falta!</h1>
								<div class="entry-content">
									<p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit!</p></p>
									<a href="#">
										<?php  esc_html_e( 'ver', 'fastio' ); ?> <i class="fa fa-plus-circle" aria-hidden="true"></i>
									</a>
								</div><!-- .entry-content -->
							</div>
						</div>
					</article><!-- Dummy Content end -->
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
				</main><!-- #main -->
            </div>
            <div class="d-none d-md-block col-md-2" style="padding-top:260px;">
                <div data-aos="fade-left" data-aos-duration="2000">
                <?php $imagesection1right = wp_get_attachment_image_src(get_field('seccao_1_imagem_3'), 'full'); ?>
                <img src="<?php echo $imagesection1right[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_1_imagem_3')) ?>" class="img-responsive">  
                </div>
            </div>
        </div>
    </section>
    <section id="seccao2">
        <div class="row">
            <div class="col-12 col-md-2" style="margin-top: 80px;">
                <div data-aos="fade-right" data-aos-duration="2000">
                   <?php $image2 = wp_get_attachment_image_src(get_field('seccao_2_imagem_esquerda'), 'full'); ?>
                    <img src="<?php echo $image2[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_2_imagem_esquerda')) ?>" class="img-responsive">  
                </div>
            </div>
            <div class="col-12 col-md-4 col-sm-4 content-area" id="primary" style="margin-top: 50px;">
               	<main class="site-main" id="main" role="main">
                                    
                        <?php $args = array('post_type' => 'historia','p' => '117'); //WTF? ?>
                        <?php $loop = new WP_Query($args); ?>
                        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'historia' ); ?>

					<?php endwhile; // end of the loop. ?>
                        <?php else: ?>
                            <!-- Dummy Content added for dev -->
							<article>
								<div class="media">
									<div class="media-left media-middle">
										<span class="year media-object">????</span>
									</div>
									<div class="media-body">
										<h1 class="entry-title media-heading">Entrada em falta!</h1>
										<div class="entry-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit!</p>
											<a href="#">
												<?php  esc_html_e( 'ver', 'fastio' ); ?> <i class="fa fa-plus-circle" aria-hidden="true"></i>
											</a>
										</div><!-- .entry-content -->
									</div>
								</div>
							</article><!-- Dummy Content end -->
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
				</main><!-- #main -->
            </div>
            <div class="offset-6 col-6 offset-md-0 col-md-6" style="text-align:right;">
                <div data-aos="fade-left" data-aos-duration="2000">
                <?php $imagesection2right = wp_get_attachment_image_src(get_field('seccao_2_imagem_3'), 'full'); ?>
                <img src="<?php echo $imagesection2right[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_2_imagem_3')) ?>" class="img-responsive" style="margin-top: -205px;">  
                </div>
            </div>
            <div class="col-4 col-md-6 col-sm-6 align-right" style="text-align:right">
                <div data-aos="fade-down" data-aos-duration="2000">               
                <?php $imagesection2bottom = wp_get_attachment_image_src(get_field('seccao_2_imagem_2'), 'full'); ?>
                <img src="<?php echo $imagesection2bottom[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_2_imagem_2')) ?>" class="img-responsive" style="margin-top: -190px;">  
                </div>
            </div>
        </div>
    </section>
    <section id="seccao3">
     <div class="row">
            <div class="col-8 col-md-5 col-sm-5">
                <div data-aos="fade-right" data-aos-duration="2000">
              <?php $image3 = wp_get_attachment_image_src(get_field('seccao_3_imagem_esquerda'), 'full'); ?>
              <img src="<?php echo $image3[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_3_imagem_esquerda')) ?>" class="img-responsive">  
                </div>
            </div>
            <div class="col-12 col-md-5 col-sm-5 content-area" id="primary" style="margin-top: 180px;">
               	<main class="site-main" id="main" role="main">
                                    
                        <?php $args = array('post_type' => 'historia','p' => '122'); //WTF? ?>
                        <?php $loop = new WP_Query($args); ?>
                        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<?php get_template_part( 'loop-templates/content', 'historia' ); ?>

			<?php endwhile; // end of the loop. ?>
                        <?php else: ?>
                            <!-- Dummy Content added for dev -->
							<article>
								<div class="media">
									<div class="media-left media-middle">
										<span class="year media-object">????</span>
									</div>
									<div class="media-body">
										<h1 class="entry-title media-heading">Entrada em falta!</h1>
										<div class="entry-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit!</p>
											<a href="#">
												<?php  esc_html_e( 'ver', 'fastio' ); ?> <i class="fa fa-plus-circle" aria-hidden="true"></i>
											</a>
										</div><!-- .entry-content -->
									</div>
								</div>
							</article><!-- Dummy Content end -->
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
		</main><!-- #main -->
            </div>
         <div class="d-none d-md-block col-md-2" style="margin-top: 225px;">
                <div data-aos="fade-left" data-aos-duration="2000">
                    <?php $imagesection3right = wp_get_attachment_image_src(get_field('seccao_3_imagem_2'), 'full'); ?>
                    <img src="<?php echo $imagesection3right[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_3_imagem_2')) ?>" class="img-responsive">  
                </div>
         </div>
     </div>
  
    </section>
    <section id="seccao4" style="margin-bottom: -185px;">
        <div class="row">
            <div class="col-12 col-md-2 col-sm-4" style="margin-top: 210px;">  
            <?php $image5 = wp_get_attachment_image_src(get_field('seccao_4_imagem_esquerda_2'), 'full'); ?>
            <img src="<?php echo $image5[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_4_imagem_esquerda_2')) ?>" class="img-responsive">  
            </div>
            <div class="col-12 col-md-5 col-sm-5 content-area" id="primary" style="margin-top: 180px;">
               	<main class="site-main" id="main" role="main">
                                    
                        <?php $args = array('post_type' => 'historia','p' => '123'); //WTF? ?>
                        <?php $loop = new WP_Query($args); ?>
                        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'historia' ); ?>

					<?php endwhile; // end of the loop. ?>
                        <?php else: ?>
							<!-- Dummy Content added for dev -->
							<article>
								<div class="media">
									<div class="media-left media-middle">
										<span class="year media-object">????</span>
									</div>
									<div class="media-body">
										<h1 class="entry-title media-heading">Entrada em falta!</h1>
										<div class="entry-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit!</p>
											<a href="#">
												<?php  esc_html_e( 'ver', 'fastio' ); ?> <i class="fa fa-plus-circle" aria-hidden="true"></i>
											</a>
										</div><!-- .entry-content -->
									</div>
								</div>
							</article><!-- Dummy Content end -->
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
		</main><!-- #main -->
            </div>
            <div class="offset-6 col-6 offset-md-0 col-md-5">
                <div data-aos="fade-left" class="pull-right" data-aos-duration="2000">
                       <?php $imagesection3bottomright = wp_get_attachment_image_src(get_field('seccao_3_imagem_3'), 'full'); ?>
                       <img src="<?php echo $imagesection3bottomright[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_3_imagem_3')) ?>" class="img-responsive" style="margin-top: -13px;">    
                </div>
			</div>
        </div>
        <div class="row">
            <div data-aos="fade-up-right" data-aos-duration="2000">
            <?php $image4 = wp_get_attachment_image_src(get_field('seccao_4_imagem_esquerda_1'), 'full'); ?>
            <img src="<?php echo $image4[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_4_imagem_esquerda_1')) ?>" class="img-responsive" style="margin-top: -285px;">
            </div>
            <div data-aos="fade-down-right" data-aos-duration="2000">
            <?php $imagesection4bottom = wp_get_attachment_image_src(get_field('seccao_4_imagem_3'), 'full'); ?>
            <img src="<?php echo $imagesection4bottom[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_4_imagem_3')) ?>" class="img-responsive">  
            </div>
            
        </div>  
    </section>
    <?php
    $seccao5fundo = get_field('seccao_5_-_imagem_de_fundo');
    ?>
    <section id="seccao5" style="margin-bottom:-60px;" style="background-image:url('<?php if(!empty($seccao5fundo)){echo $seccao5fundo ;} ?>');">
    <div data-aos="fade-up" data-aos-duration="2000">
     <div class="<?php echo esc_attr( $container ); ?>" id="content">
                <main class="site-main row" id="main" role="main">
                       
                        <?php $args = array('post_type' => 'historia','posts_per_page' => 4, 'order'=> 'DESC', 'orderby' => 'date' ); ?>
                        <?php $loop = new WP_Query($args); ?>
                        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="col-12 col-md-3">
						<?php get_template_part( 'loop-templates/content', 'historia' ); ?>
                        </div>
						<?php endwhile; // end of the loop. ?>
                        <?php else: ?>
                            <!-- Dummy Content added for dev -->
                           	<div class="col-12 col-md-3">
							<article>
								<div class="media">
									<div class="media-left media-middle">
										<span class="year media-object">????</span>
									</div>
									<div class="media-body">
										<h1 class="entry-title media-heading">Entrada em falta!</h1>
										<div class="entry-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit!</p>
											<a href="#">
												<?php  esc_html_e( 'ver', 'fastio' ); ?> <i class="fa fa-plus-circle" aria-hidden="true"></i>
											</a>
										</div><!-- .entry-content -->
									</div>
								</div>
							</article><!-- Dummy Content end -->
                       		</div>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
		</main><!-- #main -->
	</div><!-- Container end -->
                <div class="row" id="primary">
                    <div class="col-4 col-md-5">
                    <div data-aos="fade-down-right" data-aos-duration="2000">
                    <?php $image6 = wp_get_attachment_image_src(get_field('seccao_5_imagem_1'), 'full'); ?>
                    <img src="<?php echo $image6[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_5_imagem_1')) ?>" class="img-responsive">  
                    </div>
                    </div>
                    <div class="col-4 col-md-5">
                    <div data-aos="fade-up" data-aos-duration="2000">
                        <?php $image7 = wp_get_attachment_image_src(get_field('seccao_5_imagem_2'), 'full'); ?>
                        <img src="<?php echo $image7[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_5_imagem_2')) ?>" class="img-responsive">  
                    </div>
                    </div>
                    <div class="col-4 col-md-2">
                    <div data-aos="fade-up-left" data-aos-duration="2000" class="pull-right">
                        <?php $image8 = wp_get_attachment_image_src(get_field('seccao_5_imagem_3'), 'full'); ?>
                        <img src="<?php echo $image8[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_5_imagem_3')) ?>" class="img-responsive" style="margin-top: -290px;">  
                    </div>
                    </div>
                </div><!-- .row end -->
    </div></section>
       <?php
	if( have_rows('historia-section-6') ): 
		$links_count = count(get_field('historia-section-6'));
		$links_col = ceil(12 / $links_count);
 		if($links_col<3) $links_col = 3;
?>
<!-- ******************* The Fastio Links Section ******************* -->
<section class="fastio-img-links">
	<div class="row no-gutters">
		<?php while( have_rows('historia-section-6') ): the_row(); 
			$link_id = get_sub_field('link', false, false);
		?>
		<div class="col-<?php echo $links_col*2; ?> col-md-<?php echo $links_col; ?>">
			<article style="background-image:url('<?php the_sub_field('img'); ?>');">
				<a href="<?php echo get_the_permalink($link_id); ?>">
					<h5 class="align-middle"><?php echo get_the_title($link_id); ?></h5>
				</a>
			</article>
		</div>
		<?php endwhile; ?>
	</div>
</section><!-- .fastio-img-links -->
<?php endif; ?>
</div><!-- Wrapper end -->
<?php get_footer(); ?>
