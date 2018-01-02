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

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->
                
                <div class="row">
                    <div class="col-xs-3">
                        <?php
                        if(get_field('imagem_1'))
                        {
                                echo '<p>' . get_field('imagem_1') . '</p>';
                        }

                        ?>
                        <img src="<?php the_field('imagem_1'); ?>" alt="" />
                        <?php $image = wp_get_attachment_image_src(get_field('imagem_1'), 'full'); ?>
                        <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('imagem_1')) ?>" />
                        <a href="#" class="thumbnail">
                             <img src="http://placehold.it/350x150" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-xs-3">
                       <a href="#" class="thumbnail">
                            <img src="http://placehold.it/350x150" class="img-responsive">
                       </a>
                   </div>
                    <div class="col-xs-3">
                        <a href="#" class="thumbnail">
                             <img src="http://placehold.it/350x150" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-xs-3">
                        <a href="#" class="thumbnail">
                             <img src="http://placehold.it/350x150" class="img-responsive">
                        </a>
                    </div>
                </div>

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
