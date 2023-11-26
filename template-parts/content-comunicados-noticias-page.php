<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Liceo_Carmen_Arriaran
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="seccion-comunicados">
		<div>
			<h1 class="text-center mb-3">Comunicados</h1>
			<div class="d-flex justify-content-center align-items-center">
				<span class="linea-roja-encabezados"></span>
				<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
				<span class="linea-roja-encabezados"></span>
			</div>
		</div>
		<div>
			<?php include get_template_directory() . '/assets/modulos/modulo-comunicados/loop-comunicados.php';?>
		</div>
		<div class="d-flex justify-content-center align-items-center">
			<a href="" class="boton-comunicados">Ver Mas</a>
		</div>

	</div>
	<div class="seccion-noticias">
		<div>
			
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div>
	<?php include get_template_directory() . '/assets/modulos/modulo-noticias/loop-noticias.php';?>
	</div>
</section><!-- #post-<?php the_ID(); ?> -->
