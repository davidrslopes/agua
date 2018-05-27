<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>
<?php 
//Section 1 : Hero 1
$hero_1 = get_field('commonpage-section-1');
if(!empty($hero_1)):
?>

<!-- ******************* The Hero Section ******************* -->
<section class="fastio-hero" style="background-image:url('<?php echo $hero_1['bg-img']; ?>');">
	<?php if(!empty($hero_1['title'])): ?>
	<div class="container-fluid">
		<div class="row">
			<header class="fastio-hero-header col col-12">
				<h1 class="text-center"><?php echo $hero_1['title'];?></h1>
			</header>
		</div>
	</div>
	<?php endif; ?>
</section><!-- .fastio-hero -->
<?php endif; ?>
<?php 
//Section 2 : Imagem Lateral
$side_image = get_field('seccao_2:_imagem_lateral');
?>
<section class="fastio-common-pages">
	<div class="container-fluid">
		<div class="row">
			<div class="d-none d-sm-block col-lg-3 listnavigationitems">
				<div class="list-group" id="list-tab" role="tablist" style="display:none;">
					<a class="list-group-item list-group-item-action active" id="nav-tab-politica" data-toggle="list" href="#tab-politica" role="tab" aria-controls="tab-politica"><?php _e( 'Política Cookies', 'understrap' ); ?></a>
					<a class="list-group-item list-group-item-action" id="nav-tab-avisolegal" data-toggle="list" href="#tab-avisolegal" role="tab" aria-controls="tab-avisolegal"><?php _e( 'Aviso Legal', 'understrap' ); ?></a>
					<a class="list-group-item list-group-item-action" id="nav-tab-contato" data-toggle="list" href="#tab-contatos" role="tab" aria-controls="tab-contatos"><?php _e( 'Contato', 'understrap' ); ?></a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="tab-content">
					<div class="tab-pane fade show active" id="tab-politica" role="tabpanel" aria-labelledby="tab-politica">
                                        <main class="site-main" id="main">          
				<?php 
                                $my_query = new WP_Query('page_id=185');
                                while ($my_query->have_posts()) : $my_query->the_post();
                                $do_not_duplicate = $post->ID;?>
                                <?php //if(is_page(icl_object_id(185, 'page'))) : ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

                                <?php //endif;?>
				<?php endwhile; // end of the loop. ?>

                                        </main><!-- #main -->
                                    </div>
					<div class="tab-pane fade" id="tab-avisolegal" role="tabpanel" aria-labelledby="tab-avisolegal">
                                                
                                        <main class="site-main" id="main">

				<?php 
                                $my_query2 = new WP_Query('page_id=188');
                                while ($my_query2->have_posts()) : $my_query2->the_post();
                                $do_not_duplicate2 = $post->ID;?>
                                <?php //if(is_page(icl_object_id(188, 'page'))) : ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

                                <?php //endif;?>
				<?php endwhile; // end of the loop. ?>

                                        </main><!-- #main -->
					</div>
					<div class="tab-pane fade" id="tab-contatos" role="tabpanel" aria-labelledby="tab-contatos">
					
                                        <main class="site-main" id="main">

				<?php 
                                $my_query3 = new WP_Query('page_id=191');
                                while ($my_query3->have_posts()) : $my_query3->the_post();
                                $do_not_duplicate3 = $post->ID;?>
                                <?php //if(is_page(icl_object_id(191, 'page'))) : ?>

					<?php get_template_part( 'loop-templates/content', 'page_contactos' ); ?>

                                <?php //endif;?>
				<?php endwhile; // end of the loop. ?>

                                        </main><!-- #main -->	
                                           
					</div>
				</div>
			</div>
			<div class="col col-3 d-none d-sm-block lateralimage">
				<img src="<?php echo $side_image['bg-img']; ?>" class="img-responsive float-right img-fluid"/>
			</div>
		</div>
	</div>
</section><!-- .fastio-commonpages -->
<?php get_footer(); ?>
