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

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
                                    
                        <?php $args = array('post_type' => 'historia'); ?>
                        <?php $loop = new WP_Query($args); ?>
                        <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php endwhile; // end of the loop. ?>
                        <?php else: ?>
                            <h1>No posts here!</h1>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->
        
        <div class="row">
                    <div class="col-md-3">
                        <?php $image = wp_get_attachment_image_src(get_field('imagem_1'), 'full'); ?>
                        <a href="<?php the_field('link_imagem_1'); ?>" class="thumbnail">
                             <?php $image = wp_get_attachment_image_src(get_field('imagem_1'), 'full'); ?>
                             <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('imagem_1')) ?>" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-md-3">
                       <a href="<?php the_field('link_imagem_2'); ?>" class="thumbnail">
                            <?php $image2 = wp_get_attachment_image_src(get_field('imagem_2'), 'full'); ?>
                           <img src="<?php echo $image2[0]; ?>" alt="<?php echo get_the_title(get_field('imagem_2')) ?>" class="img-responsive">
                       </a>
                   </div>
                    <div class="col-md-3">
                        <a href="<?php the_field('link_imagem_3'); ?>" class="thumbnail">
                            <?php $image3 = wp_get_attachment_image_src(get_field('imagem_3'), 'full'); ?>
                               <img src="<?php echo $image3[0]; ?>" alt="<?php echo get_the_title(get_field('imagem_3')) ?>" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="<?php the_field('link_imagem_4'); ?>" class="thumbnail">
                                <?php $image4 = wp_get_attachment_image_src(get_field('imagem_4'), 'full'); ?>
                               <img src="<?php echo $image4[0]; ?>" alt="<?php echo get_the_title(get_field('imagem_4')) ?>" class="img-responsive">
                        </a>
                    </div>
        </div>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
