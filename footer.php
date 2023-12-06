<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Liceo_Carmen_Arriaran
 */

?>
<footer id="colophon" class="site-footer pFondoFooter col-md-12 w-100 margin-y">

<div class="row w-100">
	<!--logo-->
	<div class="col-xs-3 col-sm-12 col-md-3 pLogoFooter p-0 pLiceo text-center mt-5">
		<?php dynamic_sidebar('nav_dos');?>
	</div>

	<!--logos napsis-->
	<div class="col-6 col-sm-5 col-md-3 text-center mt-5">
		<?php dynamic_sidebar('nav_tres');?>
	</div>
	
	<!--info general-->
	<div class="col-6 col-sm-5 col-md-3 mt-5">		
		<?php dynamic_sidebar('nav_cuatro');?>
	</div>

	<!--mapa-->
	<div class="col-12 col-sm-12 col-md-2 pMapaFooter mt-5">
		<iframe class="mapaFooter shadow mb-5 bg-body-tertiary" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d4383.031692726244!2d-70.58587457924969!3d-33.509526594237464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sliceo%20carmen%20arriaran!5e0!3m2!1ses!2scl!4v1700965569070!5m2!1ses!2scl" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		<span class="pLineMap"></span>
		<p class="pDirFooter">Departamental 4850 - Peñalolen - Metro Macul </p>
	</div>
</div>

	<!--linea de footer-->
	<div class="pRedFooter d-flex justify-content-center gap-5 pt-1">
		<p>2023 - Studio 5</p>
		<p>Todos los derechos reservados</p>
	</div>
	<!--linea de footer-->
</footer><!-- #colophon -->


	
		<!-- <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'carmen-arriaran' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'carmen-arriaran' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'carmen-arriaran' ), 'carmen-arriaran', '<a href="http://underscores.me/">Studio 5</a>' );
				?>
		</div>.site-info -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
