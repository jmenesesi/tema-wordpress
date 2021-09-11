<?php
//printf('<pre>%s</pre>', var_export(get_post_custom(get_the_ID()), true)); 
?>

<?php $titulo = get_post_meta(get_the_ID(), 'edc_group_titulo_iconos', true); ?>
<div class="container">
<section class="nosotros mt-5">
            <h2 class="text-center mb-5 separador">
                <?php echo $titulo; ?>
            </h2>
            <div class="row justify-content-center">
            <?php $iconos = get_post_meta(get_the_ID(), 'edc_group_nosotros', true);

                /*echo '<pre>';
                var_dump($iconos);
                echo '</pre>';*/

                foreach($iconos as $icono) {
            ?>
                <div class="col-md-4 text-center informacion">
                    <img src="<?php echo $icono['image_icono']; ?>" alt="<?php echo $icono['title_icono']; ?>" class="img-fluid mb-3">
                    <h3>
                        <?php echo $icono['title_icono']; ?>
                    </h3>
                    <p>
                    <?php echo $icono['desc_icono']; ?>
                    </p>
                </div><!--col-md-4-->
                <?php } ?>
            </div>
        </section>
</div>