<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Liceo_Carmen_Arriaran
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class('container-fluid p-0 m-0'); ?>>
	<!--Carrusel-->
	<article class="row">
		<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active" data-bs-interval="5000">
					<?php 
					$image = get_field('primera_imagen');
					if( !empty( $image ) ): ?>
						<img class="img-fluid imagen-carrusel" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
					<div class="carousel-caption d-none d-md-block">
						<h5><?php the_field('texto_primera_imagen');?></h5>
					</div>
				</div>
				<div class="carousel-item" data-bs-interval="5000">
					<?php 
						$image = get_field('segunda_imagen');
						if( !empty( $image ) ): ?>
							<img class="img-fluid imagen-carrusel" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					<div class="carousel-caption d-none d-md-block">
						<h5><?php the_field('texto_segunda_imagen');?></h5>
					</div>
				</div>
				<div class="carousel-item">
					<?php 
						$image = get_field('tercera_imagen');
						if( !empty( $image ) ): ?>
							<img class="img-fluid imagen-carrusel" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					<div class="carousel-caption d-none d-md-block">
						<h5><?php the_field('texto_tercera_imagen');?></h5>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</article>
	<!--Carrusel-->
    <!--Liceo carmen arriarán-->
    <article class="container">
		<div class="row mb-5 mx-auto mt-5">
			<div class="col-lg-12 text-center p-lg-0 p-2 mb-5 scroll">
				<h2><?php the_field('titulo_primera_seccion');?></h2>
				<div class="d-flex justify-content-center align-items-center">
					<span class="linea-roja-encabezados"></span>
					<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
					<span class="linea-roja-encabezados"></span>
				</div>
				<p class="p-md-0 p-3"><?php echo the_content();?></p>
			</div>
			<div class="row mx-auto">
				<div class="col-lg-4 text-center mb-lg-0 mb-5 scroll">
					<div class="fondo-mision p-4 position-relative h-100 d-flex justify-content-center align-items-center flex-column">
						<div class="fondo-icono position-absolute top-0 start-50 translate-middle d-flex justify-content-center align-items-center rounded-circle">
							<i class="fa-solid fa-book-bookmark fs-3"></i>
						</div>
						<h3 class="mt3"><?php the_field('titulo_mision');?></h3>
						<p><?php the_field('mision');?></p>
					</div>
				</div>
				<div class="col-lg-4 text-center mb-lg-0 mb-5 scroll">
					<div class="fondo-mision p-4 position-relative h-100 d-flex justify-content-center align-items-center flex-column">
						<div class="fondo-icono position-absolute top-0 start-50 translate-middle d-flex justify-content-center align-items-center rounded-circle">
							<i class="fa-solid fa-eye fs-3"></i>
						</div>
						<h3 class="mt3"><?php the_field('titulo_vision');?></h3>
						<p><?php the_field('vision');?></p>
					</div>
				</div>
				<div class="col-lg-4 text-center scroll">
					<div class="fondo-mision p-4 position-relative h-100 d-flex justify-content-center align-items-center flex-column">
						<div class="fondo-icono position-absolute top-0 start-50 translate-middle d-flex justify-content-center align-items-center rounded-circle">
							<i class="fa-solid fa-suitcase fs-3"></i>
						</div>
						<h3 class="mt3"><?php the_field('titulo_proyecto_educativo');?></h3>
						<p><?php the_field('proyecto_educativo');?></p>
					</div>
				</div>
			</div>
		</div>
    </article>
    <!--Liceo carmen arriarán-->

    <!--Napsis-->
    <article class="container">
		<div class="row mx-auto">
			<div class="col-lg-12 text-center p-lg-0 p-2 mb-5 scroll">
				<h2><?php the_field('titulo_segunda_seccion');?></h2>
				<div class="d-flex justify-content-center align-items-center">
					<span class="linea-roja-encabezados"></span>
					<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
					<span class="linea-roja-encabezados"></span>
				</div>
			</div>
			<div class="row mx-auto mb-5 scroll">
				<div class="col-lg-7 col-md-6 d-lg-block d-md-none d-none">
					<?php 
					$image = get_field('imagen_napsis');
					if( !empty( $image ) ): ?>
						<img class="img-fluid imagen-seccion-napsis" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</div>
				<div class="col-lg-5 col-md-12 text-center p-4 fondo-napsis d-flex justify-content-center align-items-center flex-column">
					<h3 class="mb-4"><?php the_field('titulo_napsis');?></h3>
					<p class="mb-4"><?php the_field('descripcion_napsis');?></p>
					<a class="boton-napsis p-2 pe-4 ps-4 rounded" href="#">Ir al Sitio</a><!--Agregar link-->
				</div>
			</div>
		</div>
    </article>
    <!--Napsis-->

    <!--Preguntas Frecuentes-->
    <article class="container">
		<div class="row mx-auto mb-5">
			<div class="col-lg-12 text-center p-lg-0 p-2 mb-5 scroll">
				<h2><?php the_field('titulo_seccion_tres');?></h2>
				<div class="d-flex justify-content-center align-items-center">
					<span class="linea-roja-encabezados"></span>
					<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
					<span class="linea-roja-encabezados"></span>
				</div>
			</div>

			<div class="col-lg-6 scroll">
				<div class="accordion">
					<div class="accordion-elemento mb-2">
						<p class="titulo-accordion fw-semibold m-0 p-3"><?php the_field('primera_pregunta');?></p>
						<p class="contenido-accordion"><?php the_field('contenido_primera_pregunta');?></p>
					</div>
					<div class="accordion-elemento mb-2">
						<p class="titulo-accordion fw-semibold m-0 p-3"><?php the_field('segunda_pregunta');?></p>
						<p class="contenido-accordion"><?php the_field('contenido_segunda_pregunta');?></p>
					</div>
					<div class="accordion-elemento mb-2">
						<p class="titulo-accordion fw-semibold m-0 p-3"><?php the_field('tercera_pregunta');?></p>
						<p class="contenido-accordion"><?php the_field('contenido_tercera_pregunta');?></p>
					</div>
					<div class="accordion-elemento mb-2">
						<p class="titulo-accordion fw-semibold m-0 p-3"><?php the_field('cuarta_pregunta');?></p>
						<p class="contenido-accordion"><?php the_field('contenido_cuarta_pregunta');?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 scroll">
				<div class="accordion">
					<div class="accordion-elemento mb-2">
						<p class="titulo-accordion fw-semibold m-0 p-3"><?php the_field('quinta_pregunta');?></p>
						<p class="contenido-accordion"><?php the_field('contenido_quinta_pregunta');?></p>
					</div>
					<div class="accordion-elemento mb-2">
						<p class="titulo-accordion fw-semibold m-0 p-3"><?php the_field('sexta_pregunta');?></p>
						<p class="contenido-accordion"><?php the_field('contenido_sexta_pregunta');?></p>
					</div>
					<div class="accordion-elemento mb-2">
						<p class="titulo-accordion fw-semibold m-0 p-3"><?php the_field('septima_pregunta');?></p>
						<p class="contenido-accordion"><?php the_field('contenido_septima_pregunta');?></p>
					</div>
					<div class="accordion-elemento mb-2">
						<p class="titulo-accordion fw-semibold m-0 p-3"><?php the_field('octava_pregunta');?></p>
						<p class="contenido-accordion"><?php the_field('contenido_octava_pregunta');?></p>
					</div>
				</div>
			</div>
		</div>
    </article>
    <!--Preguntas Frecuentes-->
</section><!-- #post-<?php the_ID(); ?> -->
