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
        <caption class="border rounded-bottom">Documentos</caption>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Proyecto Educativo Institucional (PEI)</td>
                <td><i class="fa-solid fa-file-pdf"></i></td>
				<td><i class="fa-solid fa-download"></i></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Reglamento Interno</td>
                <td><i class="fa-solid fa-file-pdf ms-4"></i></td>
                <td><i class="bi bi-download ms-4"></i></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Plan de Estudios</td>
                <td><i class="fa-solid fa-file-pdf ms-4"></i></td>
                <td><i class="bi bi-download ms-4"></i></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Manual del Personal</td>
                <td><i class="fa-solid fa-file-pdf ms-4"></i></td>
                <td><i class="bi bi-download ms-4"></i></td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Calendario Escolar</td>
                <td><i class="fa-solid fa-file-pdf ms-4"></i></td>
                <td><i class="bi bi-download ms-4"></i></td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Protocolos de Seguridad</td>
                <td><i class="fa-solid fa-file-pdf ms-4"></i></td>
                <td><i class="bi bi-download ms-4"></i></td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>Informe Institucional Anual</td>
                <td><i class="fa-solid fa-file-pdf ms-4"></i></td>
                <td><i class="bi bi-download ms-4"></i></td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td>Políticas de Evaluación y Promoción</td>
                <td><i class="fa-solid fa-file-pdf ms-4"></i></td>
                <td><i class="bi bi-download ms-4"></i></td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td>Políticas de Uso de Tecnología</td>
                <td><i class="fa-solid fa-file-pdf ms-4"></i></td>
                <td><i class="bi bi-download ms-4"></i></td>
            </tr>
        </tbody>
        </table>
		</div>
	</article>
</section><!-- #post-<?php the_ID(); ?> -->
