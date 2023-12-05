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
	<div class="mt-5 mb-5 container">
		<h1 class="comunicados-single fs-2">Noticias</h1>
	</div>
	<article class="fondo-comunicado">
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
	</article>
	<article class="m-5">
		<div class="contenido-noticia">
			<h2 class="comunicados-single"><?php the_title();?></h2>
			<p class="mt-5"><?php the_content();?></p>
		</div>
	</article>
	<article class="mas-noticias container mb-5">
		<div class="row">
			<h2 class="comunicados-single fw-lighter">Mas Noticias</h2>
			<?php include get_template_directory() . '/assets/modulos/modulo-noticias/loop-noticias.php';?>
		</div>
	</article>
</section><!-- #post-<?php the_ID(); ?> -->
