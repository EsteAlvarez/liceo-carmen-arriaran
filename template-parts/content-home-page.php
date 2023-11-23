<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Liceo_Carmen_Arriaran
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
    <!--Liceo carmen arriarán-->
    <article class="row mb-5 mx-auto mt-5">
		<div class="col-lg-12 text-center p-lg-0 p-2 mb-5">
			<h2><?php the_field('titulo_primera_seccion');?></h2>
			<div class="d-flex justify-content-center align-items-center">
                <span class="linea-roja-encabezados"></span>
				<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
				<span class="linea-roja-encabezados"></span>
			</div>
			<p class="p-md-0 p-3"><?php echo the_content();?></p>
		</div>
		<div class="row mx-auto">
			<div class="col-lg-4 text-center mb-lg-0 mb-5">
				<div class="fondo-mision p-4 position-relative h-100 d-flex justify-content-center align-items-center flex-column">
					<div class="fondo-icono position-absolute top-0 start-50 translate-middle d-flex justify-content-center align-items-center rounded-circle">
						<i class="fa-solid fa-book-bookmark fs-3"></i>
					</div>
					<h3 class="mt3"><?php the_field('titulo_mision');?></h3>
					<p><?php the_field('mision');?></p>
				</div>
			</div>
			<div class="col-lg-4 text-center mb-lg-0 mb-5">
				<div class="fondo-mision p-4 position-relative h-100 d-flex justify-content-center align-items-center flex-column">
					<div class="fondo-icono position-absolute top-0 start-50 translate-middle d-flex justify-content-center align-items-center rounded-circle">
						<i class="fa-solid fa-eye fs-3"></i>
					</div>
					<h3 class="mt3"><?php the_field('titulo_vision');?></h3>
					<p><?php the_field('vision');?></p>
				</div>
			</div>
			<div class="col-lg-4 text-center">
				<div class="fondo-mision p-4 position-relative h-100 d-flex justify-content-center align-items-center flex-column">
					<div class="fondo-icono position-absolute top-0 start-50 translate-middle d-flex justify-content-center align-items-center rounded-circle">
						<i class="fa-solid fa-suitcase fs-3"></i>
					</div>
					<h3 class="mt3"><?php the_field('titulo_proyecto_educativo');?></h3>
					<p><?php the_field('proyecto_educativo');?></p>
				</div>
			</div>
		</div>
    </article>
    <!--Liceo carmen arriarán-->

    <!--Napsis-->
    <article class="row mx-auto">
        <div class="col-lg-12 text-center p-lg-0 p-2 mb-5">
			<h2><?php the_field('titulo_segunda_seccion');?></h2>
			<div class="d-flex justify-content-center align-items-center">
				<span class="linea-roja-encabezados"></span>
				<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
				<span class="linea-roja-encabezados"></span>
			</div>
		</div>
        <div class="row mx-auto mb-5">
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
    </article>
    <!--Napsis-->

    <!--Preguntas Frecuentes-->
    <article class="row mx-auto mb-5">
		<div class="col-lg-12 text-center p-lg-0 p-2 mb-5">
			<h2><?php the_field('titulo_seccion_tres');?></h2>
			<div class="d-flex justify-content-center align-items-center">
				<span class="linea-roja-encabezados"></span>
				<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
				<span class="linea-roja-encabezados"></span>
			</div>
		</div>

		<div class="col-lg-6">
			<div class="accordion">
				<div class="accordion-elemento mb-2">
					<div class="titulo-accordion fw-semibold"><?php the_field('primera_pregunta');?></div>
					<div class="contenido-accordion"><?php the_field('contenido_primera_pregunta');?></div>
				</div>
				<div class="accordion-elemento mb-2">
					<div class="titulo-accordion"><?php the_field('segunda_pregunta');?></div>
					<div class="contenido-accordion"><?php the_field('contenido_segunda_pregunta');?></div>
				</div>
				<div class="accordion-elemento mb-2">
					<div class="titulo-accordion"><?php the_field('tercera_pregunta');?></div>
					<div class="contenido-accordion"><?php the_field('contenido_tercera_pregunta');?></div>
				</div>
				<div class="accordion-elemento mb-2">
					<div class="titulo-accordion"><?php the_field('cuarta_pregunta');?></div>
					<div class="contenido-accordion"><?php the_field('contenido_cuarta_pregunta');?></div>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="accordion">
				<div class="accordion-elemento mb-2">
					<div class="titulo-accordion"><?php the_field('quinta_pregunta');?></div>
					<div class="contenido-accordion"><?php the_field('contenido_quinta_pregunta');?></div>
				</div>
				<div class="accordion-elemento mb-2">
					<div class="titulo-accordion"><?php the_field('sexta_pregunta');?></div>
					<div class="contenido-accordion"><?php the_field('contenido_sexta_pregunta');?></div>
				</div>
				<div class="accordion-elemento mb-2">
					<div class="titulo-accordion"><?php the_field('septima_pregunta');?></div>
					<div class="contenido-accordion"><?php the_field('contenido_septima_pregunta');?></div>
				</div>
				<div class="accordion-elemento mb-2">
					<div class="titulo-accordion"><?php the_field('octava_pregunta');?></div>
					<div class="contenido-accordion"><?php the_field('contenido_octava_pregunta');?></div>
				</div>
			</div>
		</div>
    </article>
    <!--Preguntas Frecuentes-->
</section><!-- #post-<?php the_ID(); ?> -->
