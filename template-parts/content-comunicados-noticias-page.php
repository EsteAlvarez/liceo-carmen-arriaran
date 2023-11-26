<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Liceo_Carmen_Arriaran
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
	<div class="seccion-comunicados">
		<div>

		</div>
	</div>
	<div class="seccion-noticias">
		<div>
			
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div>
	<?php include get_template_directory() . '/assets/modulos/modulo-comunicados/loop-comunicados.php';?>
	</div>
	<div>
	<?php include get_template_directory() . '/assets/modulos/modulo-noticias/loop-noticias.php';?>
	</div>
</section><!-- #post-<?php the_ID(); ?> -->
