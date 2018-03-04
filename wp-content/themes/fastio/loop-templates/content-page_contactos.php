<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->
        <div class="row-fluid contactos">
            <?php
            $fabrica = get_field('nome_fabrica');
            $morada = get_field('morada');
            $codigo_postal = get_field('codigo_postal');
            $localidade = get_field('localidade');
            $texto_coordenadas_gps = get_field('texto_coordenadas_gps');
            $coordenadas_gps = get_field('coordenadas_gps');
            $texto_telefone= get_field('texto_telefone');
            $numero_telefone = get_field('numero_telefone');
            $texto_fax = get_field('texto_fax');
            $numero_fax = get_field('numero_fax');
            $texto_apoio_comercial = get_field('texto_apoio_comercial');
            $email = get_field('email');
            ?>
            <div class="col col-md-6 float-left">
               <?php if(!empty($fabrica)):?> 
                <b><?php echo $fabrica;?></b>
               <?php endif;?>
                </br>
                <?php if(!empty($morada)):?>
                <?php echo $morada;?>
                <?php endif;?>
                </br>
                <?php if(!empty($codigo_postal)):?>
                <?php echo $codigo_postal;?><?php if(!empty($localidade)):?> <?php echo $localidade;?><?php endif;?>
                <?php endif;?>
                </br>
                <?php if(!empty($texto_coordenadas_gps)):?>
                <b><?php echo $texto_coordenadas_gps;?></b>
                <?php endif;?>
                </br>
                <?php if(!empty($coordenadas_gps)):?>
                <?php echo $coordenadas_gps;?>
                <?php endif;?>
            </div>
            <div class="col col-md-6 float-right" <?php if(wp_is_mobile()){echo "style='margin-bottom:15px;'";}?>>
                <?php if(!empty($texto_telefone)):?> 
                <b><?php echo $texto_telefone;?></b>
               <?php endif;?>
                </br>
                <?php if(!empty($numero_telefone)):?>
                <?php echo $numero_telefone;?>
                <?php endif;?>
                </br>
                <?php if(!empty($texto_fax)):?>
                <b><?php echo $texto_fax;?></b>
                <?php endif;?>
                </br>
                <?php if(!empty($numero_fax)):?>
                <?php echo $numero_fax;?>
                <?php endif;?>
                </br>
                <?php if(!empty($texto_apoio_comercial)):?>
                <b><?php echo $texto_apoio_comercial;?></b>
                <?php endif;?>
                </br>
                <?php if(!empty($email)):?>
                <?php echo $email;?>
                <?php endif;?>
            </div>
        </div>
</article>
