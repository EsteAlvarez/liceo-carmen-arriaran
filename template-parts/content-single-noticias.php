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
			<li class="breadcrumb-item"><a href="https://estealvarez.laboratoriodiseno.cl/carmen-arriaran/comunicados-y-noticias/">Noticias</a></li>
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
				$mi_campo_fecha = get_field('fecha_de_noticia');
				if ($mi_campo_fecha) {
					echo '<p class="fecha-comunicado-single position-absolute top-50 end-0 translate-middle-y p-5">' . esc_html($mi_campo_fecha) . '</p>';
				}
			?>
   	    </div>
	</article>
	<article class="container p-lg-0 p-md-0 p-3 mt-lg-0 mt-md-5 mt-5">
		<div class="row">
		<div class="contenido-noticia col-lg-8 col-md-12 col-12">
			<h2 class="comunicados-single"><?php the_title();?></h2>
			<p class="mt-5"><?php the_content();?></p>
		</div>
		<div class="col-lg-4 col-md-12 col-12 mt-lg-0 mt-md-5 mt-5">
			<h2 class="comunicados-single fw-lighter"><?php the_field('titulo_de_seccion_extra');?></h2>
			<div class="row">
				<script>
				function incrustar_hoja_estilos_noticias() {
					var hoja_estilos_url = '<?php echo get_site_url() . '/wp-content/themes/carmen-arriaran/assets/modulos/modulo-noticias/modulo-noticias.css';?>';
					var hoja_estilos = document.createElement('link');
					hoja_estilos.rel = 'stylesheet';
					hoja_estilos.href = hoja_estilos_url;
					document.head.appendChild(hoja_estilos);
				}
				incrustar_hoja_estilos_noticias();
				</script>
				<!--Custom Loop-->
				<?php 
					$current_post_id = get_the_ID(); // Obtener el ID del comunicado actual
					$temp = $wp_query;
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; //Número de páginas
					$post_per_page = -1; // -1 muestra todos los posts Cantidad de posts a mostrar
					$args = array(
						'post_type' => 'noticias',
						'orderby' => 'date',
						'order' => 'ASC', // ASC ascendente
						'paged' => $paged,
						'posts_per_page' => $post_per_page,
						'tax_query' => array(
							array(
								'taxonomy' => 'categoria-noticias',
								'field' => 'slug',
								'terms' => 'noticias'
							),
						),
						'post__not_in' => array($current_post_id), // Excluir el comunicado actual
					);

					$wp_query = new WP_Query($args);
					if ($wp_query->have_posts()) :
						while ($wp_query->have_posts()) : $wp_query->the_post();
					?>
					<div class="mb-lg-4 mb-md-0 mb-5 col-lg-12 col-md-6 col-12">
						<div class="card carta-noticias mx-auto h-100 position-relative">
							<div class="fondo-carta mb-5">
								<div><?php the_post_thumbnail(); ?></div>
								<div class="card-body">
									<?php
										$mi_campo_fecha = get_field('fecha_de_noticia');
										if ($mi_campo_fecha) {
											echo '<p class="fecha-comunicado m-0 mb-1">' . $mi_campo_fecha . '</p>';
										}
									?>
									<h3 class="titulos-comunicados fs-5"><?php the_title();?></h3>
									<span class="contenido-extracto-noticias"><?php the_excerpt();?></span>
								</div>
							</div>
							<div class="boton-noticias position-absolute bottom-0 start-0 p-3">
								<a href="<?php the_permalink(); ?>">Ver Mas</a>
							</div>
						</div>
					</div>
				<?php
						endwhile;
						wp_reset_postdata(); // Restablecer datos del post
					else :
						// No se encontraron noticias
						echo 'No se encontraron noticias.';
					endif;
					$wp_query = $temp;
				?>
				<!--Custom Loop-->
				</div>
			</div>
		</div>
	</article>
</section><!-- #post-<?php the_ID(); ?> -->
