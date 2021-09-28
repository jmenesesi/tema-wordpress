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


add_action( 'cmb2_admin_init', 'edc_seccion_nosotros' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function edc_seccion_nosotros() {
	$prefix = 'edc_group_';
	/**
	 * Repeatable Field Groups
	 */
	$edc_iconos = new_cmb2_box( array(
		'id'           => $prefix.'metabox',
		'title'        => esc_html__( 'Iconos con descripción', 'cmb2' ),
		'object_types' => array( 'page' ),
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true,
		'show_on' => array(
			'key' => 'page-template',
			'value' => 'page-iconos.php'
		)
	) );

	$edc_iconos->add_field( array(
		'name' => esc_html__( 'Titulo sección', 'cmb2' ),
		'desc' => esc_html__( 'Añada un titulo para la sección', 'cmb2' ),
		'id'   => $prefix.'titulo_iconos',
		'type' => 'text',
	) );

	// $group_field_id is the field id string, so in this case: 'yourprefix_group_demo'
	$group_field_id = $edc_iconos->add_field( array(
		'id'          => $prefix.'nosotros',
		'type'        => 'group',
		'description' => esc_html__( 'Agregue opciones según sea necesario', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Característica {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar otro grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	
	$edc_iconos->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Titulo', 'cmb2' ),
		'id'         => 'title_icono',
		'type'       => 'text',
	) );

	$edc_iconos->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'Descripción', 'cmb2' ),
		'description' => esc_html__( 'Agregue una descripción a esta característica', 'cmb2' ),
		'id'          => 'desc_icono',
		'type'        => 'textarea_small',
	) );

	$edc_iconos->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Icono', 'cmb2' ),
		'id'   => 'image_icono',
		'type' => 'file',
	) );

}

/**
 Blog
 */
add_action( 'cmb2_admin_init', 'edc_campos_blog' );

function edc_campos_blog() {
	$prefix = 'edc_blog_';
    $id_blog = get_option('page_for_posts');
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$edc_campos_homepage = new_cmb2_box( array(
		'id'           => $prefix . 'blog',
		'title'        => esc_html__( 'Campos Blog', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_blog ),
		), 
	) );

	$edc_campos_homepage->add_field( array(
		'name' => esc_html__( 'Slogan blog', 'cmb2' ),
		'desc' => esc_html__( 'Añada una descripción a la página web', 'cmb2' ),
		'id'   => $prefix.'slogan_blog',
		'type' => 'text',
	) );
}