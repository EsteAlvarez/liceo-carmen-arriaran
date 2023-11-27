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
<h2 class="d-flex text-center justify-content-center">Formación del Liceo</h2>
<div class="d-flex justify-content-center align-items-center">
	<span class="linea-roja-encabezados"></span>
	<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
	<span class="linea-roja-encabezados"></span>
</div>

<section class="col-md-12 row d-flex gap-3 justify-content-center mt-3">
<div class="card col-8 col-md-3">
kdsjhdklj
djkkjdkjdj
</div>
<div class="card col-8 col-md-3">
kdsjhdklj
djkkjdkjdj
</div>
<div class="card col-8 col-md-3">
kdsjhdklj
djkkjdkjdj
</div>
</section>

<section class="container d-flex  align-items-center justify-content-center ">
	
<div class="col-2 col-md-2 pLineRed "></div>
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

</section>

<section class="col-md-12 row d-flex gap-3 justify-content-center">
<div class="card col-8 col-md-3">
kdsjhdklj
djkkjdkjdj
</div>
<div class="card col-8 col-md-3">
kdsjhdklj
djkkjdkjdj
</div>
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
