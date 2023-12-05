<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Liceo_Carmen_Arriaran
 */

?>
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<article class="seccion-comunicados scroll">
		<div class="titulo-comunicados">
			<h2 class="text-center"><?php the_field('titulo_seccion_uno');?></h1>
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
			<a href="#" class="boton-napsis p-2 pe-4 ps-4 rounded">Ver Mas</a>
		</div>
	</article>
	<article class="seccion-noticias mb-5 mt-5 scroll">
		<div class="titulo-noticias mb-5">
			<h2 class="text-center margin-y"><?php the_field('titulo_seccion_dos');?></h1>
			<div class="d-flex justify-content-center align-items-center">
				<span class="linea-roja-encabezados"></span>
				<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
				<span class="linea-roja-encabezados"></span>
			</div>
		</div>
		<div class="container mb-5 mt-5">
			<?php include get_template_directory() . '/assets/modulos/modulo-noticias/loop-noticias.php';?>
		</div>
	</article>
</section><!-- #post-<?php the_ID(); ?> -->
