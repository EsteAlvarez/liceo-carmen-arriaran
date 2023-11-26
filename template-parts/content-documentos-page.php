<?php
/**
 * Template part for displaying page content in page.php	
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Liceo_Carmen_Arriaran
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
	<article>
			<div class="col-lg-12 text-center p-lg-0 p-2 mb-5 scroll">
				<h2><?php the_field('titulo_documentos');?></h2>
				<div class="d-flex justify-content-center align-items-center">
					<span class="linea-roja-encabezados"></span>
					<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
					<span class="linea-roja-encabezados"></span>
				</div>
				<div class="scroll"><?php echo the_content();?></div>
			</div>
	</article>
</section><!-- #post-<?php the_ID(); ?> -->
