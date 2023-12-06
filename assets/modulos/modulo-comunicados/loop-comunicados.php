<script>
function incrustar_hoja_estilos_comunicados() {
    var hoja_estilos_url = '<?php echo get_site_url() . '/wp-content/themes/liceo-carmen-arriaran/assets/modulos/modulo-comunicados/modulo-comunicados.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
}
incrustar_hoja_estilos_comunicados();
</script>
<!--Script que permite llamar a la hoja de estilos cuando se muestre el custom post type-->


<!--Sección 1-->
<section class="container mt-5">
    <!--Custom Loop-->
    <?php $active = true;
            $temp = $wp_query;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; //Número de paginas
            $post_per_page = 3; // -1 shows all posts Cantidad de post a mostrar
            $args = array(
                'post_type' => 'comunicados',
                'orderby' => 'DSC',
                'order' => 'ASC',//DSC descendente 
                'paged' => $paged,
                'posts_per_page' => $post_per_page,
                'tax_query' => array (
                    array(
                        'taxonomy' => 'categoria-comunicados',
                        'field' => 'slug',
                        'terms' => 'comunicados'
                    ),
                ),
            );
            $wp_query = new WP_Query($args);
    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="comunicado d-flex p-0 mb-5">
            <div class="col-lg-3 p-0 m-0 d-lg-block d-md-none d-none contenedor-imagen"><?php the_post_thumbnail();?></div>
            <div class="contenido col-lg-9 p-3 m-0">
                <div class="d-flex flex-wrap justify-content-between">
                    <h3 class="titulos-comunicados fs-5 m-0 mb-1"><?php the_title();?></h3>
                    <?php
                        $mi_campo_fecha = get_field('fecha_del_comunicado');
                        if ($mi_campo_fecha) {
                            echo '<p class="fecha-comunicado">' . $mi_campo_fecha . '</p>';
                        }
                    ?>
                </div>
                <span><?php echo get_the_excerpt();?></span>
                <span class="ver-mas d-flex justify-content-end pe-3">
                    <a href="<?php the_permalink();?>"><i class="bi bi-arrow-right-circle-fill"></i>Ver Mas</a>
                    </span>
            </div>
        </div>
    <?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>
    <!--Custom Loop-->

</section>
<!--Sección 1-->