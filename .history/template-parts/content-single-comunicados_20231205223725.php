<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Liceo_Carmen_Arriaran
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<nav class="mt-5 migas" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="https://estealvarez.laboratoriodiseno.cl/carmen-arriaran/comunicados-y-noticias/">Comunicados</a></li>
		<li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
	</ol>
	</nav>
	
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="mt-5 mb-5 container">
		<h1 class="comunicados-single fs-2"><?php the_field('titulo_de_pagina');?></h1>

	</div>
	<article class="fondo-comunicado">
		<?php
			// Obtén la URL de la imagen destacada
			$thumbnail_url = get_the_post_thumbnail_url();
		?>
		<!-- Aplica la imagen como fondo del div -->
		<div class="imagen-fondo" style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');">
			<?php
				$mi_campo_fecha = get_field('fecha_del_comunicado');
				if ($mi_campo_fecha) {
					echo '<p class="fecha-comunicado-single">' . esc_html($mi_campo_fecha) . '</p>';
				}
			?>
   	    </div>
	</article>
	<article class="mt-5 mb-5 container">
		<div class="row m-0 p-0">
			<div class="col-lg-8 col-md-12">
				<h2 class="comunicados-single"><?php the_title();?></h2>
				<p class="mt-5"><?php the_content();?></p>
			</div>
			<aside class="col-lg-4 col-md-12 mt-lg-0 mt-md-5 mt-5 ps-lg-2 ps-md-0 ps-0">
				<div>
					<span class="comunicados-single fw-bold"><?php the_field('titulo_remitente');?></span>
					<?php
						$mi_campo_fecha = get_field('remitente');
						if ($mi_campo_fecha) {
							echo '<p class="remitente">' . esc_html($mi_campo_fecha) . '</p>';
						}
					?>
				</div>
				<div>
					<span class="comunicados-single fw-bold"><?php the_field('titulo_datos_importantes');?></span>
					<?php
						$mi_campo_fecha = get_field('datos_importantes');
						if ($mi_campo_fecha) {
							echo '<p class="datos-importantes">' . esc_html($mi_campo_fecha) . '</p>';
						}
					?>
				</div>
			</aside>
		</div>
	</article>
	<article class="container">
		<div class="row">
			<h2 class="comunicados-single fw-lighter mb-3"><?php the_field('titulo_de_seccion_extra');?></h2>
			<?php include get_template_directory() . '/assets/modulos/modulo-comunicados/loop-comunicados.php';?>
		</div>
	</article>
</section><!-- #post-<?php the_ID(); ?> -->
