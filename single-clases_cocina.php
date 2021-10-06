<?php get_header(); ?>


<?php  while(have_posts()): the_post();  ?>

<?php get_template_part('template-parts/contenido', 'post');?>

<div class="container">
<div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <h2 class="separador text-center my-3">
                    ¿Qué incluye?
                </h2>
                <ul class="list-group">
                <?php 
                    $incluye = get_post_meta(get_the_ID(), 'edc_cursos_incluye', true);
                    foreach($incluye as $inc): ?>

                    <li class="list-group-item list-group-item-secondary text-light">
                        <?php echo $inc; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <h2 class="separador text-center my-3 mt-5">
                    Información Extra
                </h2>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-primary text-light">
                    <?php echo get_post_meta(get_the_ID(), 'edc_cursos_cupo', true); ?>    
                    Cupos Disponibles
                    </li>
                    <li class="list-group-item list-group-item-primary text-light">
                        <?php $total = get_post_meta(get_the_ID(), 'edc_cursos_precio_curso', true); ?>    
                        Costo: $<?php echo money_format('%i', $total); ?>    
                    </li>
                    <li class="list-group-item list-group-item-primary text-light">
                        Fecha Inicio: <?php echo get_post_meta(get_the_ID(), 'edc_cursos_fecha_inicio_curso', true); ?> - 
                        Fecha Fin: <?php echo get_post_meta(get_the_ID(), 'edc_cursos_fecha_fin_curso', true); ?>    
                    </li>
                    <li class="list-group-item list-group-item-primary text-light">
                        Horario: <?php echo get_post_meta(get_the_ID(), 'edc_cursos_hora_inicio_clase', true); ?> - <?php echo get_post_meta(get_the_ID(), 'edc_cursos_hora_fin_clase', true); ?> horas
                    </li>
                    <li class="list-group-item list-group-item-primary text-light">
                    <?php echo get_post_meta(get_the_ID(), 'edc_cursos_indicaciones', true); ?>
                    </li>
                </ul>
            </div> <!--col-md-6 -->
            <div class="col-md-6 text-center">
                <h2 class="separador text-center mt-5 my-md-3">
                    ¿Quién imparte?
                </h2>
                <?php 
                    $chefs = get_post_meta(get_the_ID(), 'edc_cursos_chefs', true); 
                    
                    $args = array(
                        'post_type' => 'chefs',
                        'post__in' => $chefs,
                        'posts_per_page' => 10
                    );
                    $instructor = new WP_Query($args);
                    while($instructor->have_posts()): $instructor->the_post();
                ?>
                <div>
                <div class="row justify-content-center mb-4">
                    <div class="col-md-7">
                        <?php the_post_thumbnail('cuadrada_mediana', array('class' => 'img-fluid rounded-circle')); ?>
                    </div>
                </div>
                <p class="instructor">
                    <?php the_title(); ?>
                </p>
                <p>
                    <?php the_content(); ?>
                </p>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
</div>

    <?php endwhile;?>
<?php get_footer(); ?>