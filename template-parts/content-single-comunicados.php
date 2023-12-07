<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Liceo_Carmen_Arriaran
 */

?>


<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<nav class="mt-5 miga" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="https://estealvarez.laboratoriodiseno.cl/carmen-arriaran/comunicados-y-noticias/"><?php the_field('titulo_de_pagina');?></a></li>
			<li class="breadcrumb-item active name-comunicado" aria-current="page"><?php the_title(); ?></li>
		</ol>
	</nav>
	<div class="mt-5 mb-5 container">
		<h1 class="comunicados-single fs-2"><?php the_field('titulo_de_pagina');?></h1>

	</div>
	<article class="fondo-comunicado">
		<?php
			// Obtén la URL de la imagen destacada
			$thumbnail_url = get_the_post_thumbnail_url();
		?>
		<!-- Aplica la imagen como fondo del div -->
		<div class="imagen-fondo position-relative" style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');">
			<?php
				$mi_campo_fecha = get_field('fecha_del_comunicado');
				if ($mi_campo_fecha) {
					echo '<p class="fecha-comunicado-single position-absolute top-50 end-0 translate-middle-y p-5">' . esc_html($mi_campo_fecha) . '</p>';
				}
			?>
   	    </div>
	</article>
	<article class="mt-5 mb-5 p-lg-0 p-md-0 p-3 container">
		<div class="row m-0 p-0">
			<div class="col-lg-8 col-md-12 pe-lg-5 pe-md-0 pe-0">
				<h2 class="comunicados-single mb-5"><?php the_title();?></h2>
				<?php the_content();?>
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
			<!--Sección 1-->
			<div class="container mt-5">
				<script>
				function incrustar_hoja_estilos_comunicados() {
					var hoja_estilos_url = '<?php echo get_site_url() . '/wp-content/themes/carmen-arriaran/assets/modulos/modulo-comunicados/modulo-comunicados.css';?>';
					var hoja_estilos = document.createElement('link');
					hoja_estilos.rel = 'stylesheet';
					hoja_estilos.href = hoja_estilos_url;
					document.head.appendChild(hoja_estilos);
				}
				incrustar_hoja_estilos_comunicados();
				</script>
				<!--Custom Loop-->
				<?php
				$current_post_id = get_the_ID();
				$args = array(
					'post_type' => 'comunicados',
					'orderby' => 'date',
					'order' => 'DESC',
					'posts_per_page' => -1,
					'post__not_in' => array($current_post_id),
					'tax_query' => array(
						array(
							'taxonomy' => 'categoria-comunicados',
							'field' => 'slug',
							'terms' => 'comunicados'
						),
					),
				);

				$comunicados_query = new WP_Query($args);

				if ($comunicados_query->have_posts()) :
					while ($comunicados_query->have_posts()) : $comunicados_query->the_post();
						?>
						<div class="comunicado d-flex p-0 mb-5 position-relative scroll">
							<div class="col-lg-3 p-0 m-0 d-lg-block d-md-none d-none contenedor-imagen" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>');"></div>
							<div class="contenido col-lg-9 p-4 m-0 mb-lg-0 mb-md-5 mb-5">
								<div class="d-flex flex-wrap justify-content-between">
									<h3 class="titulos-comunicados fs-5 m-0 mb-2"><?php the_title();?></h3>
									<?php
										$mi_campo_fecha = get_field('fecha_del_comunicado');
										if ($mi_campo_fecha) {
											echo '<p class="fecha-comunicado m-0 p-0">' . $mi_campo_fecha . '</p>';
										}
									?>
								</div>
								<span class="contenedor-extracto-comunicados"><?php echo get_the_excerpt();?></span>
							</div>
							<div class="ver-mas d-flex justify-content-end p-3 pe-4 position-absolute bottom-0 end-0">
								<a href="<?php the_permalink();?>"><i class="bi bi-arrow-right-circle-fill"></i>Ver Mas</a>
							</div>
						</div>
					<?php
					endwhile;
					wp_reset_postdata(); // Restablecer datos del post
				else :
					// No se encontraron comunicados
					echo 'No se encontraron comunicados.';
				endif;
				?>
				<!--Custom Loop-->
			</div>
		</div>
	</article>
</section><!-- #post-<?php the_ID(); ?> -->
