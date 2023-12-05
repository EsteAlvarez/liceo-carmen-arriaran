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
	<!-- Modal -->
	<div class="modal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content marco">
				<div class="modal-header border-0">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body d-flex">
					<?php 
					$image = get_field('escudo');
					if( !empty( $image ) ): ?>
						<img class="img-fluid img-escudo mx-3" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
					<div class="mx-3"><h5 class="modal-title mb-3"><?php the_field('titulo_ventana_emergente');?></h5>
					<p><?php the_field('contenido_ventana_emergente');?></p></div>
				</div>
				<div class="modal-footer border-0 mx-4">
					<a type="button" class="btn boton-napsis p-2 pe-4 ps-4 rounded mt-1 mb-2" target="_blank" href="https://app.embluemail.com/Online/VON.aspx?data=i9rrmrEQKSsQN%2BC124nXi4VxN0ZQ4RBMPO%2Bgh69PWlb4EplWfuHhwvTWgYD4Cojasekf%2FFzRCg5cfwqvyDBWNO1pBrLZFL3163ShIWi7vxae0A8qyymZXjVvIBzySqoJ!-!n8pfWAd4qitR8WcJBEEYFyICGyzNr8wBYpRiE8wLC8uMNTMeUgxpy745ZIHiLmDN">Ver más</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<!--Carrusel-->
	<article class="row m-0 p-0">
		<div id="carouselExampleInterval" class="carousel slide p-0 scroll" data-bs-ride="carousel">
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
    <article class="container mt-5">
		<div class="row mb-5 mx-auto mt-5">
			<div class="col-lg-12 text-center p-lg-0 p-2 mb-5 scroll margin-y">
				<h1><?php the_field('titulo_primera_seccion');?></h1>
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
						<h2 class="mt3 fs-3"><?php the_field('titulo_mision');?></h2>
						<p><?php the_field('mision');?></p>
					</div>
				</div>
				<div class="col-lg-4 text-center mb-lg-0 mb-5 scroll">
					<div class="fondo-mision p-4 position-relative h-100 d-flex justify-content-center align-items-center flex-column">
						<div class="fondo-icono position-absolute top-0 start-50 translate-middle d-flex justify-content-center align-items-center rounded-circle">
							<i class="fa-solid fa-eye fs-3"></i>
						</div>
						<h2 class="mt3 fs-3"><?php the_field('titulo_vision');?></h2>
						<p><?php the_field('vision');?></p>
					</div>
				</div>
				<div class="col-lg-4 text-center scroll">
					<div class="fondo-mision p-4 position-relative h-100 d-flex justify-content-center align-items-center flex-column">
						<div class="fondo-icono position-absolute top-0 start-50 translate-middle d-flex justify-content-center align-items-center rounded-circle">
							<i class="fa-solid fa-suitcase fs-3"></i>
						</div>
						<h2 class="mt3 fs-3"><?php the_field('titulo_proyecto_educativo');?></h2>
						<p><?php the_field('proyecto_educativo');?></p>
					</div>
				</div>
			</div>
		</div>
    </article>
    <!--Liceo carmen arriarán-->

    <!--Napsis-->
    <article class="container margin-y">
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
    <article class="container margin-y">
		<div class="row mx-auto mb-5">
			<div class="col-lg-12 text-center p-lg-0 p-2 mb-5 scroll">
				<h2><?php the_field('titulo_seccion_tres');?></h2>
				<div class="d-flex justify-content-center align-items-center">
					<span class="linea-roja-encabezados"></span>
					<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
					<span class="linea-roja-encabezados"></span>
				</div>
			</div>

			<div class="accordion col-lg-6 scroll" id="accordionExample">
				<div class="accordion-item mb-3">
					<h2 class="accordion-header fw-bold">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<?php the_field('primera_pregunta');?>
					</button>
					</h2>
					<div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						<span><?php the_field('contenido_primera_pregunta');?></span>
					</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						<?php the_field('segunda_pregunta');?>
					</button>
					</h2>
					<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						<span><?php the_field('contenido_segunda_pregunta');?></span>
					</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						<?php the_field('tercera_pregunta');?>
					</button>
					</h2>
					<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						<span><?php the_field('contenido_tercera_pregunta');?></span>
					</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
						<?php the_field('cuarta_pregunta');?>
					</button>
					</h2>
					<div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						<span><?php the_field('contenido_cuarta_pregunta');?></span>
					</div>
					</div>
				</div>
			</div>
			<div class="accordion col-lg-6 scroll" id="accordionExample">
				<div class="accordion-item">
					<h2 class="accordion-header">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
						<?php the_field('quinta_pregunta');?>
					</button>
					</h2>
					<div id="collapseFive" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						<span><?php the_field('contenido_quinta_pregunta');?></span>
					</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
						<?php the_field('sexta_pregunta');?>
					</button>
					</h2>
					<div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						<span><?php the_field('contenido_sexta_pregunta');?></span>
					</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
						<?php the_field('septima_pregunta');?>
					</button>
					</h2>
					<div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						<span><?php the_field('contenido_septima_pregunta');?></span>
					</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
						<?php the_field('octava_pregunta');?>
					</button>
					</h2>
					<div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						<span><?php the_field('contenido_cuarta_pregunta');?></span>
					</div>
					</div>
				</div>
			</div>
    </article>
    <!--Preguntas Frecuentes-->
</section><!-- #post-<?php the_ID(); ?> -->
