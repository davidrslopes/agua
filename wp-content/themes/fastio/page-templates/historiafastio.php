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
?>

<div class="wrapper historiafastio" id="full-width-page-wrapper">

    <section id="seccao1">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                    <?php $image = wp_get_attachment_image_src(get_field('seccao_1_imagem_esquerda'), 'full'); ?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_1_imagem_esquerda')) ?>" class="img-responsive showcase-left">  
            </div>
            <div class="col-md-6 col-sm-6 content-area" id="primary">
               	<main class="site-main" id="main" role="main">
                                    
                        <?php $args = array('post_type' => 'historia','p' => '115'); ?>
                        <?php $loop = new WP_Query($args); ?>
                        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'historia' ); ?>

					<?php endwhile; // end of the loop. ?>
                        <?php else: ?>
                            <h1>No posts here!</h1>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
		</main><!-- #main -->
            </div>
            
        </div>
    </section>
    <section id="seccao2">
        <div class="row">
            <div class="col-md-6 col-sm-6 content-area" id="primary">
               	<main class="site-main" id="main" role="main">
                                    
                        <?php $args = array('post_type' => 'historia','p' => '117'); ?>
                        <?php $loop = new WP_Query($args); ?>
                        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'historia' ); ?>

					<?php endwhile; // end of the loop. ?>
                        <?php else: ?>
                            <h1>No posts here!</h1>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
		</main><!-- #main -->
            </div>
            <div class="col-md-6 col-sm-6">
               <?php $image2 = wp_get_attachment_image_src(get_field('seccao_2_imagem_esquerda'), 'full'); ?>
                <img src="<?php echo $image2[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_2_imagem_esquerda')) ?>" class="img-responsive">  
            </div>
        </div>
    </section>
    <section id="seccao3">
     <div class="row">
            <div class="col-md-6 col-sm-6">
              <?php $image3 = wp_get_attachment_image_src(get_field('seccao_3_imagem_esquerda'), 'full'); ?>
              <img src="<?php echo $image3[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_3_imagem_esquerda')) ?>" class="img-responsive">  
            </div>
            <div class="col-md-6 col-sm-6 content-area" id="primary">
               	<main class="site-main" id="main" role="main">
                                    
                        <?php $args = array('post_type' => 'historia','p' => '117'); ?>
                        <?php $loop = new WP_Query($args); ?>
                        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'historia' ); ?>

					<?php endwhile; // end of the loop. ?>
                        <?php else: ?>
                            <h1>No posts here!</h1>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
		</main><!-- #main -->
            </div>
            
        </div>
    </section>
    <section id="seccao4">
        <div class="row">
            <div class="col-md-6 col-sm-6">
            <?php $image4 = wp_get_attachment_image_src(get_field('seccao_4_imagem_esquerda_1'), 'full'); ?>
            <img src="<?php echo $image4[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_4_imagem_esquerda_1')) ?>" class="img-responsive">  
            <?php $image5 = wp_get_attachment_image_src(get_field('seccao_4_imagem_esquerda_2'), 'full'); ?>
            <img src="<?php echo $image5[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_4_imagem_esquerda_2')) ?>" class="img-responsive">  
            </div>
            <div class="col-md-6 col-sm-6 content-area" id="primary">
               	<main class="site-main" id="main" role="main">
                                    
                        <?php $args = array('post_type' => 'historia','p' => '117'); ?>
                        <?php $loop = new WP_Query($args); ?>
                        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'historia' ); ?>

					<?php endwhile; // end of the loop. ?>
                        <?php else: ?>
                            <h1>No posts here!</h1>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
		</main><!-- #main -->
            </div>
            
        </div>  
    </section>
    <section id="seccao5">
     <div class="<?php echo esc_attr( $container ); ?>" id="content">
                <main class="site-main row" id="main" role="main">
                                    
                        <?php $args = array('post_type' => 'historia','posts_per_page' => 4, 'order'=> 'DESC', 'orderby' => 'date' ); ?>
                        <?php $loop = new WP_Query($args); ?>
                        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="col-md-3">
			<?php get_template_part( 'loop-templates/content', 'historia' ); ?>
                        </div>
			<?php endwhile; // end of the loop. ?>
                        <?php else: ?>
                            <h1>No posts here!</h1>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                         <?php $image8 = wp_get_attachment_image_src(get_field('seccao_5_imagem_3'), 'full'); ?>
                        <img src="<?php echo $image8[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_5_imagem_3')) ?>" class="img-responsive">  
                   
		</main><!-- #main -->
                <div class="row" id="primary">
                <?php $image6 = wp_get_attachment_image_src(get_field('seccao_5_imagem_1'), 'full'); ?>
                <img src="<?php echo $image6[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_5_imagem_1')) ?>" class="img-responsive">  
		<?php $image7 = wp_get_attachment_image_src(get_field('seccao_5_imagem_2'), 'full'); ?>
                <img src="<?php echo $image7[0]; ?>" alt="<?php echo get_the_title(get_field('seccao_5_imagem_2')) ?>" class="img-responsive">  
                </div><!-- .row end -->
	</div><!-- Container end -->
    </section>  
        <div class="row no-gutters">
                    <div class="col">
                        <a href="<?php the_field('link_imagem_1'); ?>" class="thumbnail">
                             <?php $image = wp_get_attachment_image_src(get_field('imagem_1'), 'full'); ?>
                             <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('imagem_1')) ?>" class="img-responsive">
                        </a>
                    </div>
                    <div class="col">
                       <a href="<?php the_field('link_imagem_2'); ?>" class="thumbnail">
                            <?php $image2 = wp_get_attachment_image_src(get_field('imagem_2'), 'full'); ?>
                           <img src="<?php echo $image2[0]; ?>" alt="<?php echo get_the_title(get_field('imagem_2')) ?>" class="img-responsive">
                       </a>
                   </div>
                    <div class="col">
                        <a href="<?php the_field('link_imagem_3'); ?>" class="thumbnail">
                            <?php $image3 = wp_get_attachment_image_src(get_field('imagem_3'), 'full'); ?>
                               <img src="<?php echo $image3[0]; ?>" alt="<?php echo get_the_title(get_field('imagem_3')) ?>" class="img-responsive">
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?php the_field('link_imagem_4'); ?>" class="thumbnail">
                                <?php $image4 = wp_get_attachment_image_src(get_field('imagem_4'), 'full'); ?>
                               <img src="<?php echo $image4[0]; ?>" alt="<?php echo get_the_title(get_field('imagem_4')) ?>" class="img-responsive">
                        </a>
                    </div>
        </div>
    

</div><!-- Wrapper end -->

<?php get_footer(); ?>
