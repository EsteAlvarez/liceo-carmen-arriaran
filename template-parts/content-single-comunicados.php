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
	<div class="m-5 scroll">
		<h1 class="comunicados-single fs-2" style="margin-left: 5%;">Comunicados</h1>
	</div>
	<article class="fondo-comunicado scroll">
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
	<article class="mt-5 mb-5 container scroll">
		<div class="row m-0 p-0">
			<div class="col-lg-8 col-md-12 contenido-principal-scomunicados">
				<h2 class="comunicados-single"><?php the_title();?></h2>
				<p class="mt-5"><?php the_content();?></p>
			</div>
			<div class="col-lg-4 col-md-12 mt-lg-0 mt-md-5 mt-5 p-2">
				<div>
					<span class="comunicados-single fw-bold">Remitente</span>
					<?php
						$mi_campo_fecha = get_field('remitente');
						if ($mi_campo_fecha) {
							echo '<p class="remitente">' . esc_html($mi_campo_fecha) . '</p>';
						}
					?>
				</div>
				<div>
					<span class="comunicados-single fw-bold">Datos Importantes</span>
					<?php
						$mi_campo_fecha = get_field('datos_importantes');
						if ($mi_campo_fecha) {
							echo '<p class="datos-importantes">' . esc_html($mi_campo_fecha) . '</p>';
						}
					?>
				</div>
			</div>
		</div>
	</article>
	<article class="scroll container">
		<div class="row">
			<h2 class="comunicados-single">Mas Comunicados</h2>
			<?php include get_template_directory() . '/assets/modulos/modulo-comunicados/loop-comunicados.php';?>
		</div>
	</article>
</section><!-- #post-<?php the_ID(); ?> -->
