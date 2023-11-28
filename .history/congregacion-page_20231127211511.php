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
	<section>
		<h2 class="d-flex text-center justify-content-center mt-5">Congregación</h2>
		<div class="d-flex justify-content-center align-items-center">
			<span class="linea-roja-encabezados"></span>
			<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
			<span class="linea-roja-encabezados"></span>
		</div>
		<div>
		<?php the_field('resena');?>
		<?php the_field('enlace_congregacion');?>
		</div>
		
	</section>
	<section class="scroll">
		<h2 class="d-flex text-center justify-content-center mt-5">Formación del Liceo</h2>
		<div class="d-flex justify-content-center align-items-center">
			<span class="linea-roja-encabezados"></span>
			<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
			<span class="linea-roja-encabezados"></span>
		</div>
		<article class="col-md-12 row d-flex gap-5 justify-content-center mt-5">
			<!--1935-->
			<div class="card pBordeCard col-8 col-md-2 p-0 m-0">
				<span class="predCard text-white">
					<p class="ps-3 pt-1">1935</p>
				</span>
				<p class="p-3">Fundación de la 
				Congregación en España 
				para educar a la juventud.</p>
			</div>

			<!--1945-->
			<div class="card pBordeCard col-8 col-md-2 p-0 m-0">
				<span class="predCard text-white">
					<p class="ps-3 pt-1">1945</p>
				</span>
				<p class="p-3">Hermanas llegan a Chile
				para crear escuela técnica 
				para mujeres.</p>
			</div>

			<!--1976-->
			<div class="card pBordeCard col-8 col-md-2 p-0 m-0">
				<span class="predCard text-white">
					<p class="ps-3 pt-1">1976</p>
				</span>
				<p class="p-3">Liceo Técnico 
				femenino se traslada a 
				Departamental 4850.</p>
			</div>
		</article>

		<!--dibujo linea del tiempo-->
		<article class="container pLineaTiempo col-12 col-md-12 d-flex  align-items-center justify-content-center mt-3">
			<div class="col-2  col-md-2 pLineRed"></div>
			<i class="bi bi-circle-fill"></i>
			<div class="col-md-2 pLineRed"></div>
			<i class="bi bi-circle-fill"></i>
			<div class="col-md-2 pLineRed"></div>
			<i class="bi bi-circle-fill"></i>
			<div class="col-md-2 pLineRed"></div>
			<i class="bi bi-circle-fill"></i>
			<div class="col-md-2 pLineRed"></div>
			<i class="bi bi-circle-fill"></i>
			<div class="col-md-2 pLineRed"></div>	
		</article>

		<article class="col-md-12 row d-flex gap-5 justify-content-center mt-3">
			<!--2015-->
			<div class="card pBordeCard col-8 col-md-2 p-0 m-0">
				<span class="predCard text-white">
					<p class="ps-3 pt-1">2015</p>
				</span>
				<p class="p-3">Proyecto transferido a
					La Fundación Educacional 
					Liceo Carmen Arriarán</p>
			</div>
					
			<!--2019-->
			<div class="card pBordeCard col-8 col-md-2 p-0 m-0">
				<span class="predCard text-white">
					<p class="ps-3 pt-1">2019</p>
				</span>
				<p class="p-3">Liceo se prepara para 
				dejar de ser exclusivo 
				de mujeres.</p>
			</div>
		</article>
	</section>

	<div class="scroll mt-5">
		<h2 class="d-flex text-center justify-content-center">Colegios Dominicanos</h2>
		<div class="d-flex justify-content-center align-items-center">
			<span class="linea-roja-encabezados"></span>
			<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
			<span class="linea-roja-encabezados"></span>
		</div>
	</div>

	<section class="row col-md-12 d-flex justify-content-center gap-5 mt-5 mb-5 scroll">
		<!--señora del pilar-->
		<figure class="card border-0 pHoverSitios col-8 col-sm-5 col-md-3">
			<!--función para llamar la img a través de su id-->
			<?php	
			$image_id = 174;
			$image_url = wp_get_attachment_image_src($image_id, 'full')[0];
			?>
			<img  src="<?php echo esc_url($image_url); ?>" alt="nuestra señora del pilar">
			<figcaption class="p-2">
				<p>Puedes visitar el sitio de nuestras congregaciones, aquí encuentras a la Fundación Escuela Nuestra Señora del Pilar de la Congregación Dominicas Misioneras de la Sagrada Familia . </p>
			</figcaption>
			<a class="btn pBotonSitio" href="https://www.nsdp.cl/wp">Visita el sitio</a>
		</figure>

		<!--carmela romero-->
		<figure class="card border-0 pHoverSitios col-8 col-sm-5 col-md-3">
			<!--función para llamar la img-->
			<?php	
			$image_id = 175;
			$image_url = wp_get_attachment_image_src($image_id, 'full')[0];
			?>
			<img src="<?php echo esc_url($image_url); ?>" alt="carmela romero de espinoza">
			<figcaption class="p-2">
				<p>Puedes visitar el sitio de nuestras congregaciones, aquí encuentras a la Fundación Educacional Colegio Carmela Romero de Espinosa, Madres Dominicas. </p>
			</figcaption>	
			<a class="btn pBotonSitio" href="http://www.mmddconcepcion.cl/sitio/">Visita el sitio</a>
		</figure>

		<!--catalina de siena-->
		<figure class="card border-0 pHoverSitios col-8 col-sm-5 col-md-3">
			<!--función para llamar la img-->
			<?php	
			$image_id = 176;
			$image_url = wp_get_attachment_image_src($image_id, 'full')[0];
			?>
			<img src="<?php echo esc_url($image_url); ?>" alt="catalina de siena">
			<figcaption class="p-2">
				<p>Puedes visitar el sitio de nuestras congregaciones, aquí encuentras a la Escuela Santa Catalina de Siena.</p>
			</figcaption>
			<a class="btn pBotonSitio" href="https://www.catalinammdd.cl/inicio/">Visita el sitio</a>
		</figure>
	</section>
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
