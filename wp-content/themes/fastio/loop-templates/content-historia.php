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
                $post_id    = get_the_id();
            ?>
            <?php if ( !empty( get_the_content() ) ) : ?>
            <a href="#" data-id="<?php the_ID(); ?>" data-toggle="modal" data-target="#post<?php echo $post_id; ?>" modal-click="<?php the_ID() ?>">
            <?php  esc_html_e( 'ver', 'fastio' ); ?> <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </a>
            <?php endif; ?>
	</div><!-- .entry-content -->
        </div>

</article><!-- #post-## -->
<!-- Modal -->
            <div class="modal fade" id="post<?php echo $post_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                                <div class="modal-body">
                        <div class="row">
                          <div class="col-md-8 leftcolumnmodal">
                              <?php the_content()?>
                          </div>
                          <div class="col-md-4 rightcolumnmodal">
                          <button type="button" class="close modalfecharbtn" data-dismiss="modal" aria-hidden="true"><?php  esc_html_e( 'FECHAR', 'fastio' ); ?> X</button>
                      
                            <!-- Here showing the title of the post -->
                            <h4><span class="year"><?php the_field('ano'); ?></span> - <?php the_title();?></h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
