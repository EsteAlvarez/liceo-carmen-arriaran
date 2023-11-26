<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Liceo_Carmen_Arriaran
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('m-0'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'carmen-arriaran' ); ?></a>
	<div class="pRedNav d-flex gap-2 algin-items-center">
	<i class="bi bi-telephone"></i>
	<p><?php the_field('numero_de_telefono');?></p>
	<i class="bi bi-envelope-fill"></i>
	<p><?php the_field('email');?></p>
	</div> <!--barra roja antes del nav-->

<header id="masthead" class="site-header container py-3 scroll">
	<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg d-flex align-items-center">
	<?php the_custom_logo();?>
	<?php dynamic_sidebar('nav_uno');?>
	
	<button class="btnMenu navbar-toggler menu-toggle" type="button" data-bs-toggle="collapse"  data-bs-target="#navbarNav"  aria-controls="primary-menu" aria-expanded="false"  aria-label="Toggle navigation">
		<?php esc_html_e( '', 'carmen-arriaran' ); ?>
		<span class="navbar-toggler-icon"></span>
	</button>
	
	<?php
	wp_nav_menu(
		array(
		'theme_location' => 'menu-1',
		'menu_id'        => 'primary-menu',
		));
		?>
</nav>






		<!-- <div class="site-branding ">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$carmen_arriaran_description = get_bloginfo( 'description', 'display' );
			if ( $carmen_arriaran_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $carmen_arriaran_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>.site-branding -->


	</header><!-- #masthead -->
