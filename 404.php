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
			<div>
				<h1>Error 404 - Página no encontrada</h1>
				<p>Lo sentimos, la página que buscas no está disponible.</p>
			</div>
			<?php
		}
		?>
		</section><!-- .error-404 -->
	</main><!-- #main -->

<?php
get_footer();
