<?php
/**
 * Template Name: Inicio Carmen Arriaran
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

	<main id="primary" class="site-main container">
		<section class="row">
			<div class="col-lg-12 text-center p-lg-0 p-2 mb-5">
				<h2><?php the_field('titulo_primera_seccion');?></h2>
				<div class="d-flex justify-content-center align-items-center">
					<hr class="linea-roja-encabezados">
					<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
					<hr class="linea-roja-encabezados">
				</div>
				<p><?php echo the_content();?></p>
			</div>
			<div class="row">
				<div class="col-lg-4 text-center mb-lg-0 mb-3">
					<div class="fondo-mision p-4 position-relative h-100 d-flex justify-content-center align-items-center">
						<div class="fondo-icono position-absolute top-0 start-50 translate-middle d-flex justify-content-center align-items-center rounded-circle">
							<i class="fa-solid fa-book-bookmark fs-3"></i>
						</div>
						<h3 class="mt3"><?php the_field('titulo_mision');?></h3>
						<p><?php the_field('mision');?></p>
					</div>
				</div>
				<div class="col-lg-4 text-center mb-lg-0 mb-3">
					<div class="fondo-mision p-4 position-relative h-100 d-flex justify-content-center align-items-center">
						<div class="fondo-icono position-absolute top-0 start-50 translate-middle d-flex justify-content-center align-items-center rounded-circle">
							<i class="fa-solid fa-eye fs-3"></i>
						</div>
						<h3 class="mt3"><?php the_field('titulo_vision');?></h3>
						<p><?php the_field('vision');?></p>
					</div>
				</div>
				<div class="col-lg-4 text-center mb-lg-0 mb-3">
					<div class="fondo-mision p-4 position-relative h-100 d-flex justify-content-center align-items-center">
						<div class="fondo-icono position-absolute top-0 start-50 translate-middle d-flex justify-content-center align-items-center rounded-circle">
							<i class="fa-solid fa-suitcase fs-3"></i>
						</div>
						<h3 class="mt3"><?php the_field('titulo_proyecto_educativo');?></h3>
						<p><?php the_field('proyecto_educativo');?></p>
					</div>
				</div>
				
			</div>
		</section>



		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'home-page' );

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
