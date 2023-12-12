<script>
function incrustar_hoja_estilos_noticias() {
    var hoja_estilos_url = '<?php echo get_site_url() . '/wp-content/themes/carmen-arriaran/assets/modulos/modulo-noticias/modulo-noticias.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
}
incrustar_hoja_estilos_noticias();
</script>
<!--Script que permite llamar a la hoja de estilos cuando se muestre el custom post type-->

<!--Sección 1-->
<div class="row">
    <!--Custom Loop-->
    <?php $active = true;
            $temp = $wp_query;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; //Número de paginas
            $post_per_page = 3; // -1 shows all posts Cantidad de post a mostrar
            $args = array(
                'post_type' => 'noticias',
                'orderby' => 'date',
                'order' => 'DSC',
                'paged' => $paged,
                'posts_per_page' => $post_per_page,
                'tax_query' => array (
                    array(
                        'taxonomy' => 'categoria-noticias',
                        'field' => 'slug',
                        'terms' => 'noticias'
                    ),
                ),
            );
            $wp_query = new WP_Query($args);
    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="col-lg-4 col-md-6 col-12 mb-lg-0 mb-md-5 mb-5 scroll">
            <div class="card carta-noticias mx-auto h-100 position-relative">
                <div class="fondo-carta mb-5">
                    <div><?php the_post_thumbnail(); ?></div>
                    <div class="card-body">
                        <?php
                            $mi_campo_fecha = get_field('fecha_de_noticia');
                            if ($mi_campo_fecha) {
                                echo '<p class="fecha-comunicado m-0 mb-1">' . $mi_campo_fecha . '</p>';
                            }
                        ?>
                        <h3 class="titulos-comunicados fs-5"><?php the_title();?></h3>
                        <span class="contenido-extracto-noticias"><?php the_excerpt();?></span>
                    </div>
                </div>
                <div class="boton-noticias position-absolute bottom-0 start-0 p-3">
                    <a href="<?php the_permalink(); ?>">Ver Mas</a>
                </div>
            </div>
       </div>
    <?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>
    <!--Custom Loop-->
</div>
<!--Sección 1-->