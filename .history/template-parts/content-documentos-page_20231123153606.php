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
	<article>
			<div class="col-lg-12 text-center p-lg-0 p-2 mb-5">
				<h2><?php the_field('titulo_documentos');?></h2>
					<div class="d-flex justify-content-center align-items-center">
						<span class="linea-roja-encabezados"></span>
						<i class="fa-solid fa-graduation-cap ms-3 me-3"></i>
						<span class="linea-roja-encabezados"></span>
					</div>
			</div>
		<div>
			<table class="table table-dark table-hover caption-top">
			<caption>Documentos</caption>
			<thead>
				<tr>
				<th scope="col">#</th>
				<th scope="col">First</th>
				<th scope="col">Last</th>
				<th scope="col">Handle</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<th scope="row">1</th>
				<td>Proyecto Educativo Institucional</td>
				<td><i class="fa-solid fa-file-pdf"></i></td>
				<td><i class="fa-solid fa-download"></i></td>
				</tr>
				<tr>
				<th scope="row">2</th>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
				</tr>
				<tr>
				<th scope="row">3</th>
				<td colspan="2">Larry the Bird</td>
				<td>@twitter</td>
				</tr>
			</tbody>
			</table>
		</div>
	</article>
</section><!-- #post-<?php the_ID(); ?> -->
