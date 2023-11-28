<script>
function incrustar_hoja_estilos_noticias() {
    var hoja_estilos_url = '<?php echo get_site_url() . '/wp-content/themes/liceo-carmen/liceo-carmen-arriaran/assets/modulos/modulo-noticias/modulo-noticias.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
}
incrustar_hoja_estilos_noticias();
</script>
<!--Script que permite llamar a la hoja de estilos cuando se muestre el custom post type-->


<!--Sección 1-->

<section class="container seccion-noticia mt-5">
<section class="row m-0 p-0">
    <!--Custom Loop-->
    <?php $active = true;
            $temp = $wp_query;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; //Número de paginas
            $post_per_page = 6; // -1 shows all posts Cantidad de post a mostrar
            $args = array(
                'post_type' => 'noticias',
                'orderby' => 'DSC',
                'order' => 'ASC',//DSC descendente 
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
       <div class="row" style="margin-bottom: 14%;">
            <div class="col-12 col-md-6 card carta-noticias" style="width: 33rem;">
                <div class="fondo-carta">
                    <div style="margin: 6%;"><?php the_post_thumbnail(); ?></div>
                    <div class="card-body">
                        <h5 class="titulos-comunicados"><?php the_title();?></h5>
                        <?php
                            $mi_campo_fecha = get_field('fecha_de_noticia');
                            if ($mi_campo_fecha) {
                                echo '<p class="fecha-comunicado">' . $mi_campo_fecha . '</p>';
                            }
                        ?>
                        <p class="card-text"><?php the_excerpt();?></p>
                        <div class="boton-noticias">
                            <a href="<?php the_permalink(); ?>">>>Ver Mas</a>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    <?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>
    <!--Custom Loop-->
</section>
<!--Sección 1-->