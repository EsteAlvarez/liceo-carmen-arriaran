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
<footer id="colophon" class="site-footer pFondoFooter container-fluid m-0 p-0">
	<div class="row m-0 p-3">
		<!--logo-->
		<div class="col-lg-3 col-md-6 pLiceo text-center d-flex justify-content-center align-items-center flex-column border mb-lg-0 mb-md-3">
			<?php dynamic_sidebar('nav_dos');?>
		</div>
		<!--logos napsis-->
		<div class="col-lg-3 col-md-6 text-center d-flex justify-content-center align-items-center flex-column border mb-lg-0 mb-md-3">
			<?php dynamic_sidebar('nav_tres');?>
		</div>
		<!--info general-->
		<div class="col-lg-3 col-md-12 col-12 p-lg-3 d-flex justify-content-center align-items-center border ">		
			<?php dynamic_sidebar('nav_cuatro');?>
		</div>
		<!--mapa-->
		<div class="col-lg-3 col-3 border d-lg-flex d-md-none d-flex d-none justify-content-start align-items-center">
			<div class="pMapaFooter position-relative p-2 border w-100">
				<iframe class="mapaFooter shadow bg-body-tertiary me-2" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d4383.031692726244!2d-70.58587457924969!3d-33.509526594237464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sliceo%20carmen%20arriaran!5e0!3m2!1ses!2scl!4v1700965569070!5m2!1ses!2scl" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				<span class="pLineMap position-absolute top-50 end-0 translate-middle-y me-2"></span>
				<span class="pDirFooter border">Departamental 4850 - Peñalolen - Metro Macul </span>
			</div>	
		</div>
	</div>
	<!--linea de footer-->
	<div class="row m-0 pRedFooter d-flex justify-content-center align-items-center p-1">
		<span class="pe-3">2023 - Studio 5</span>
		<span>Todos los derechos reservados</span>
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
