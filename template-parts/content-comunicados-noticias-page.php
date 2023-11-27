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
	<div class="seccion-comunicados scroll">
		<div class="titulo-comunicados">
			<h2 class="text-center mb-3">Comunicados</h1>
			<div class="d-flex justify-content-center align-items-center">
				<span class="linea-roja-encabezados"></span>
				<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
				<span class="linea-roja-encabezados"></span>
			</div>
		</div>
		<div class="scroll">
			<?php include get_template_directory() . '/assets/modulos/modulo-comunicados/loop-comunicados.php';?>
		</div>
		<div class="d-flex justify-content-center align-items-center" style="padding-top: 1%;padding-bottom: 3%;">
			<a href="" class="boton-comunicados">Ver Mas</a>
		</div>

	</div>
	<div class="seccion-noticias mb-5 mt-5 scroll">
		<div class="titulo-noticias mb-5">
			<h2 class="text-center">Noticias</h1>
			<div class="d-flex justify-content-center align-items-center">
				<span class="linea-roja-encabezados"></span>
				<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
				<span class="linea-roja-encabezados"></span>
			</div>
		</div>
		<div class="container mb-5 scroll">
			<?php include get_template_directory() . '/assets/modulos/modulo-noticias/loop-noticias.php';?>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
