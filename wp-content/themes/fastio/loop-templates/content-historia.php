<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <div class="col-md-3">
         <span class="year"><?php the_field('ano'); ?></span>
    </div>
    <div class="col-md-9">
	<header class="entry-header">
           

            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">
                
		<?php the_excerpt() ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>
            <?php the_post(); if(trim($post->post_content) != "") : ?>
            <a href="#myModal-<?php the_ID(); ?>" data-id="<?php the_ID(); ?>" data-toggle="modal" id="clickme">
            <?php  esc_html_e( 'ver', 'fastio' ); ?><i class="fa fa-plus-circle" aria-hidden="true"></i>
            </a>
            <div class="main-content">

                    <?php the_content(); ?>

            </div>

            <?php endif; ?>
	</div><!-- .entry-content -->
        </div>

</article><!-- #post-## -->
