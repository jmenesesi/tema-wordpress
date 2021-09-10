<?php 

/**
 * Metaboxes para el home page
 */

add_action( 'cmb2_admin_init', 'edc_campos_home_page' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function edc_campos_home_page() {

    $prefix = 'edc_homepage_';
    $id_home = get_option('page_on_front');
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$edc_campos_homepage = new_cmb2_box( array(
		'id'           => $prefix . 'homepage',
		'title'        => esc_html__( 'Campos Homepage', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_home ),
		), 
	) );

    $edc_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Texto Superior 1', 'cmb2' ),
		'desc'    => esc_html__( 'Texto para la parte superior del sitio web', 'cmb2' ),
		'id'      => $prefix.'texto_superior_1',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

    $edc_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen Hero 1', 'cmb2' ),
		'desc' => esc_html__( 'Primera imagen para la parte superior', 'cmb2' ),
		'id'   => $prefix.'imagen_superior_1',
		'type' => 'file',
	) );

    $edc_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Texto Superior 2', 'cmb2' ),
		'desc'    => esc_html__( 'Texto para la parte superior del sitio web', 'cmb2' ),
		'id'      => $prefix.'texto_superior_2',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

    $edc_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen Hero 2', 'cmb2' ),
		'desc' => esc_html__( 'Primera imagen para la parte superior', 'cmb2' ),
		'id'   => $prefix.'imagen_superior_2',
		'type' => 'file',
	) );

    //Banner licenciatura 
    // Pie de pagina home

    $edc_campos_homepage->add_field( array(
		'name'    => esc_html__( 'Texto Banner inferior', 'cmb2' ),
		'desc'    => esc_html__( 'Texto para la parte inferior del sitio web', 'cmb2' ),
		'id'      => $prefix.'texto_banner_inferior',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

    $edc_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen Banner Inferior', 'cmb2' ),
		'desc' => esc_html__( 'Imagen de fondo para banner inferior', 'cmb2' ),
		'id'   => $prefix.'imagen_banner_inferior',
		'type' => 'file',
	) );
}