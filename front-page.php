
<?php get_header(); ?>

    <?php while(have_posts()): the_post(); ?>

    <?php 
    //echo get_the_ID(); 
    ?> 

    <div class="container-fluid imagenes-principales">
        <div class="row imagen-superior imagen">
            <div class="col-md-6 bg-primary">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-sm-8 col-md-6">
                        <div class="contenido text-center text-light py-3">
                            <?php echo get_post_meta(get_the_ID(), 'edc_homepage_texto_superior_1', true); ?>
                        </div>
                    </div>
                </div>
            </div> <!-- .col-md-6-->
            <div class="col-md-6 imagen-fondo" style="background-image: url(<?php echo get_post_meta(get_the_ID(), 'edc_homepage_imagen_superior_1', true); ?>);">
            </div><!-- .col-md-6-->
        </div>
        <div class="row imagen-inferior imagen">
            <div class="col-md-6 bg-secondary">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-sm-8 col-md-6">
                        <div class="contenido text-center py-3">
                        <?php echo get_post_meta(get_the_ID(), 'edc_homepage_texto_superior_2', true); ?>
                        </div>
                    </div>
                </div>
            </div> <!-- .col-md-6-->
            <div class="col-md-6 imagen-fondo" style="background-image: url(<?php echo get_post_meta(get_the_ID(), 'edc_homepage_imagen_superior_2', true); ?>);">
            </div><!-- .col-md-6-->
        </div>
    </div> <!--.container-fluid-->

    <?php 
        $nosotros = new WP_Query('pagename=nosotros');
        while($nosotros->have_posts()) : $nosotros->the_post();
            get_template_part('template', 'parts/iconos');
        endwhile;
        wp_reset_postdata();
    ?>

    <section class="clases mt-5 py-5">
        <h1 class="separador text-center mb-3">Próximas Clases</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="./img/clase1.jpg" alt="Imagen de clase " class="card-img-top">
                        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between
                            align-items-center">
                            <p class="m-0">
                                02/Septiembre/2021 18:00 hrs
                            </p>
                            <span class="badge badge-secondary p-2">
                                $300
                            </span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Comida Italiana para principiantes</h3>
                            <p class="card-subtitle mb-2">
                                Aprende las bases de la comida italiana con este curso
                            </p>
                            <p class="card-text">
                                Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat mattis. Quisque egestas.
                            </p>
                            <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más Información</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="./img/clase2.jpg" alt="Imagen de clase " class="card-img-top">
                        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between
                            align-items-center">
                            <p class="m-0">
                                02/Septiembre/2021 18:00 hrs
                            </p>
                            <span class="badge badge-secondary p-2">
                                $300
                            </span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                                Planeación de Menús para bodas
                            </h3>
                            <p class="card-subtitle mb-2">
                                Añade la planeación de menús para bodas a tus habilidades.
                            </p>
                            <p class="card-text">
                                Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat mattis. Quisque egestas.
                            </p>
                            <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más Información</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="./img/clase3.jpg" alt="Imagen de clase " class="card-img-top">
                        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between
                            align-items-center">
                            <p class="m-0">
                                02/Septiembre/2021 18:00 hrs
                            </p>
                            <span class="badge badge-secondary p-2">
                                $300
                            </span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                                Preparación de Pasteles
                            </h3>
                            <p class="card-subtitle mb-2">
                                Aprende a preparar deliciosos postres con este curso.
                            </p>
                            <p class="card-text">
                                Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat mattis. Quisque egestas.
                            </p>
                            <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más Información</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="./img/clase4.jpg" alt="Imagen de clase " class="card-img-top">
                        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between
                            align-items-center">
                            <p class="m-0">
                                02/Septiembre/2021 18:00 hrs
                            </p>
                            <span class="badge badge-secondary p-2">
                                $300
                            </span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                                Comida Mexicana
                            </h3>
                            <p class="card-subtitle mb-2">
                                Prepara la mejor comida mexicana con este curso
                            </p>
                            <p class="card-text">
                                Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat mattis. Quisque egestas.
                            </p>
                            <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más Información</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="./img/clase5.jpg" alt="Imagen de clase " class="card-img-top">
                        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between
                            align-items-center">
                            <p class="m-0">
                                02/Septiembre/2021 18:00 hrs
                            </p>
                            <span class="badge badge-secondary p-2">
                                $300
                            </span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                                Comida de Marruecos
                            </h3>
                            <p class="card-subtitle mb-2">
                                Aprende deliciosas recetas de la comida marroquí.
                            </p>
                            <p class="card-text">
                                Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat mattis. Quisque egestas.
                            </p>
                            <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más Información</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="./img/clase6.jpg" alt="Imagen de clase " class="card-img-top">
                        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between
                            align-items-center">
                            <p class="m-0">
                                02/Septiembre/2021 18:00 hrs
                            </p>
                            <span class="badge badge-secondary p-2">
                                $300
                            </span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                                Prepara 10 tipos de ensaladas
                            </h3>
                            <p class="card-subtitle mb-2">
                                En este curso aprenderás hasta 10 tipos de ensaladas.
                            </p>
                            <p class="card-text">
                                Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat mattis. Quisque egestas.
                            </p>
                            <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más Información</a>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section><!--.clases-->

    <div class="licenciatura" style="background-image: url(<?php echo get_post_meta(get_the_ID(), 'edc_homepage_imagen_banner_inferior', true); ?>);">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="contenido text-light text-center">
                    <?php echo get_post_meta(get_the_ID(), 'edc_homepage_texto_banner_inferior', true); ?>
                        <?php $contacto = get_page_by_title('Contacto'); ?>
                        <a href="<?php echo get_permalink($contacto->ID); ?>" class="btn btn-primary text-uppercase">Más Información</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
        //printf('<pre>%s</pre>', var_export(get_post_custom(get_the_ID), true)); 
    ?> 

    <?php endwhile; ?>

    <?php get_footer(); ?>