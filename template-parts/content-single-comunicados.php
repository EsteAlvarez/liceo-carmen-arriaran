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
	<div class="m-5">
		<h2 class="comunicados-single" style="margin-left: 5%;">Comunicados</h2>
	</div>
	<div class="fondo-comunicado">
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
	</div>
	<div class="m-5 d-flex">
		<div class="contenido-comunicado">
			<h3 class="comunicados-single"><?php the_title();?></h3>
			<p class="mt-5"><?php the_content();?></p>
		</div>
		<div class="info-extra">
			<div>
				<span class="comunicados-single">Remitente</span>
				<?php
					$mi_campo_fecha = get_field('remitente');
					if ($mi_campo_fecha) {
						echo '<p class="remitente">' . esc_html($mi_campo_fecha) . '</p>';
					}
				?>
			</div>
			<div>
				<span class="comunicados-single">Datos Importantes</span>
				<?php
					$mi_campo_fecha = get_field('datos_importantes');
					if ($mi_campo_fecha) {
						echo '<p class="datos-importantes">' . esc_html($mi_campo_fecha) . '</p>';
					}
				?>
			</div>
		</div>
	</div>
	<div class="">
		<p class="comunicados-single" style="margin-left: 7%;font-size: 23px;">Mas Comunicados</p>
		<?php include get_template_directory() . '/assets/modulos/modulo-comunicados/loop-comunicados.php';?>
	</div>

	
</article><!-- #post-<?php the_ID(); ?> -->
