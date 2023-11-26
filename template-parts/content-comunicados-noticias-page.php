<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Liceo_Carmen_Arriaran
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div>
<?php include get_template_directory() . '/assets/modulos/modulo-comunicados/loop-comunicados.php';?>
</div>
</section><!-- #post-<?php the_ID(); ?> -->
