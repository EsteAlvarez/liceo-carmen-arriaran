<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Liceo_Carmen_Arriaran
 */

get_header();
?>

	<main id="primary" class="site-main container">
		<section class="error-404 not-found">
		<?php if (is_404()) {
			?>
			<div class="mt-5">
				<h1 class="fs-2">Error 404 - Página no encontrada</h1>
				<p class="mb-5">Lo sentimos, la página que buscas no está disponible.</p>
				<span><a class="boton-napsis" href="<?php echo esc_url( home_url( '/index.php' ) ); ?>">Volver al Inicio</a></span>
			</div>
			<?php
			}
		?>
		</section><!-- .error-404 -->
	</main><!-- #main -->

<?php
get_footer();
