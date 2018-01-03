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
            <a href="#myModal-2" data-id="<?php the_ID(); ?>" data-toggle="modal" data-target="#myModal-2" modal-click="<?php the_ID(); ?>">
            <?php  esc_html_e( 'ver', 'fastio' ); ?> <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </a>

	</div><!-- .entry-content -->
        </div>

</article><!-- #post-## -->
