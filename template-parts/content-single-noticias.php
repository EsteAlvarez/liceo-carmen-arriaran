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
	<div class="m-5 scroll">
		<h2 class="comunicados-single" style="margin-left: 5%;">Noticias</h2>
	</div>
	<div class="fondo-comunicado scroll">
		<?php
			// Obtén la URL de la imagen destacada
			$thumbnail_url = get_the_post_thumbnail_url();
		?>
		<!-- Aplica la imagen como fondo del div -->
		<div class="imagen-fondo" style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');">
			<?php
				$mi_campo_fecha = get_field('fecha_de_noticia');
				if ($mi_campo_fecha) {
					echo '<p class="fecha-comunicado-single">' . esc_html($mi_campo_fecha) . '</p>';
				}
			?>
   	    </div>
	</div>
	<div class="m-5 d-flex scroll">
		<div class="contenido-noticia">
			<h3 class="comunicados-single"><?php the_title();?></h3>
			<p class="mt-5"><?php the_content();?></p>
		</div>
	</div>
	<div class="mas-noticias container scroll mb-5">
			<p class="comunicados-single" style="font-size: 23px;">Mas Noticias</p>
			<?php include get_template_directory() . '/assets/modulos/modulo-noticias/loop-noticias.php';?>
		</div>
</article><!-- #post-<?php the_ID(); ?> -->
