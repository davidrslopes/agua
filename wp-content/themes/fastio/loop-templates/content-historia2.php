<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="media">
		<div class="media-left media-middle">
			<span class="year media-object"><?php the_field('ano'); ?></span>
		</div>
		<div class="media-body">
		<?php the_title( '<h1 class="entry-title media-heading">', '</h1>' ); ?>
			<div class="entry-content">
				<?php the_excerpt() ?>
			</div><!-- .entry-content -->
		</div>
	</div>
</article><!-- #post-## -->
