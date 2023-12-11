<?php
/**
 * Template Name: Congregación
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Liceo_Carmen_Arriaran
 */

get_header();
?>

<main id="primary" class="site-main">
	<!-- Congregación -->
	<section>
		<h1 class="d-flex text-center justify-content-center mt-5 fs-2"><?php the_field('titulo_seccion_1');?></h1>
		<div class="d-flex justify-content-center align-items-center">
			<span class="linea-roja-encabezados"></span>
			<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
			<span class="linea-roja-encabezados"></span>
		</div>
		<article class="container text-center">
		<p class="mb-lg-0 mb-5 mt-5"><?php the_field('resena');?></p>
		<div class="mt-4"><a href="<?php the_field('enlace_congregacion');?>" class="boton-napsis p-2 pe-4 ps-4 rounded mt-3" target="_blank">Ver más</a>
		</div>
		</article>
	</section>
	<!-- Congregación -->

	<!-- Formación del liceo -->
	<section class="margin-y">
		<h2 class="d-flex text-center justify-content-center mt-5"><?php the_field('titulo_seccion_2');?></h2>
		<div class="d-flex justify-content-center align-items-center">
			<span class="linea-roja-encabezados"></span>
			<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
			<span class="linea-roja-encabezados"></span>
		</div>
		<article class="col-md-12 articulo-linea-tiempo row d-flex gap-5 justify-content-center mt-5">
			<!--1935-->
			<div class="card pBordeCard col-8 col-md-2 p-0 m-0">
				<span class="predCard text-white titulo-linea-tiempo"><p class="ps-3 pt-1"><?php the_field('primera_fecha');?></p></span>
				<p class="p-3 texto-linea-tiempo"><?php the_field('contenido_primera_fecha');?></p>
			</div>
			<!--1935-->
			<!--1945-->
			<div class="card pBordeCard col-8 col-md-2 p-0 m-0">
				<span class="predCard text-white titulo-linea-tiempo"><p class="ps-3 pt-1"><?php the_field('segunda_fecha');?></p></span>
				<p class="p-3 texto-linea-tiempo"><?php the_field('contenido_segunda_fecha');?></p>
			</div>
			<!--1945-->
			<!--1976-->
			<div class="card pBordeCard col-8 col-md-2 p-0 m-0">
				<span class="predCard text-white titulo-linea-tiempo"><p class="ps-3 pt-1"><?php the_field('tercera_fecha');?></p></span>
				<p class="p-3 texto-linea-tiempo"><?php the_field('contenido_tercera_fecha');?></p>
			</div>
			<!--1976-->
		</article>

		<!--dibujo linea del tiempo-->
		<div class="lineatiempo">
			<div class="container pLineaTiempo col-12 col-md-12 d-flex  align-items-center justify-content-center mt-3">
				<div class="col-2  col-md-2 pLineRed lineauno"></div>
				<i class="bi bi-circle-fill"></i>
				<div class="col-md-2 pLineRed"></div>
				<i class="bi bi-circle-fill"></i>
				<div class="col-md-2 pLineRed"></div>
				<i class="bi bi-circle-fill"></i>
				<div class="col-md-2 pLineRed"></div>
				<i class="bi bi-circle-fill"></i>
				<div class="col-md-2 pLineRed"></div>
				<i class="bi bi-circle-fill"></i>
				<div class="col-md-2 pLineRed lineados"></div>	
			</div>
		</div>
		<!--dibujo linea del tiempo-->

		<article class="col-md-12 row d-flex gap-5 justify-content-center mt-3">
			<!--2015-->
			<div class="card carta-linea pBordeCard col-8 col-md-2 p-0 m-0">
				<span class="predCard text-white titulo-linea-tiempo"><p class="ps-3 pt-1"><?php the_field('cuarta_fecha');?></p></span>
				<p class="p-3 texto-linea-tiempo"><?php the_field('contenido_cuarta_fecha');?></p>
			</div>
			<!--2015-->
			<!--2019-->
			<div class="card pBordeCard col-8 col-md-2 p-0 m-0">
				<span class="predCard text-white titulo-linea-tiempo"><p class="ps-3 pt-1"><?php the_field('quinta_fecha');?></p></span>
				<p class="p-3 texto-linea-tiempo"><?php the_field('contenido_quinta_fecha');?></p>
			</div>
			<!--2019-->
		</article>
	</section>

	<!-- Formación del liceo -->

	<!--Colegios Dominicanos-->
	<section class="row col-md-12 d-flex justify-content-center gap-5 mt-5 mb-5">
		<div>
			<h2 class="d-flex text-center justify-content-center margin-y"><?php the_field('titulo_seccion_3');?></h2>
			<div class="d-flex justify-content-center align-items-center">
				<span class="linea-roja-encabezados"></span>
				<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
				<span class="linea-roja-encabezados"></span>
			</div>
		</div>

		<!--señora del pilar-->
		<div>
			<figure class="card border pHoverSitios col-8 col-sm-5 col-md-3">
				<?php 
					$image = get_field('liceo_pilar');
					if( !empty( $image ) ): ?>
						<img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				<figcaption class="border">
					<p>Escuela Nuestra Señora del Pilar</p>
				</figcaption>
			</figure>
			<a class="btn pBotonSitio" href="https://nsdp.cl/wp/">Ir al sitio</a>
		</div>
			

		<!--carmela romero-->
			<figure class="card border-0 pHoverSitios col-8 col-sm-5 col-md-3">
				<?php 
					$image = get_field('liceo_carmela');
					if( !empty( $image ) ): ?>
						<img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				<figcaption class="p-2">
					<p>Colegio Carmela Romero Espinoza</p>
				</figcaption>
				<a class="btn pBotonSitio" href="http://www.mmddconcepcion.cl/sitio/">Ir al sitio</a>
			</figure>

		<!--catalina de siena-->
			<figure class="card border-0 pHoverSitios col-8 col-sm-5 col-md-3">
			<?php 
					$image = get_field('liceo_catalina');
					if( !empty( $image ) ): ?>
						<img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				<figcaption class="p-2">
					<p>Escuela Santa Catalina de Siena</p>
				</figcaption>
				<a class="btn pBotonSitio" href="https://www.catalinammdd.cl/inicio/">Ir al sitio</a>
			</figure>
		
	</section>
	<!--Colegios Dominicanos-->

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'congregacion-page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
