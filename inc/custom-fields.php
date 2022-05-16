<?php

// CMB2 para el home


add_action( 'cmb2_admin_init', 'leroma_campos_homepage' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function leroma_campos_homepage() {

    $prefix = 'leroma_homepage_';
    $id_home = get_option('page_on_front');

	/**
	 * Metabox to be displayed on a single page ID
	 */
	$leroma_campos_homepage = new_cmb2_box( array(
		'id'           => $prefix . 'homepage',
		'title'        => esc_html__( 'Campos Homepage', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_home ),
		), // Specific post IDs to display this metabox
	) );

    $leroma_campos_homepage->add_field( array(
		'name' => esc_html__( 'Homepage', 'cmb2' ),
		'desc' => esc_html__( 'Modificaciones para la pagina de inicio', 'cmb2' ),
		'id'   => 'leroma_homepage_title',
		'type' => 'title',
	) );

    $leroma_campos_homepage->add_field( array(
		'name' => esc_html__( 'Logo', 'cmb2' ),
		'desc' => esc_html__( 'Subir una imagen para el logo de la pagina', 'cmb2' ),
		'id'   => 'leroma_homepage_logo',
		'type' => 'file',
	) );
    $leroma_campos_homepage->add_field( array(
		'name' => esc_html__( 'Campo de Prueba', 'cmb2' ),
		'desc' => esc_html__( 'field description (opasdfasdfsadfsdaftional)', 'cmb2' ),
		'id'   => $prefix . 'text',
		'type' => 'text',
	) );

    $leroma_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen 1 Slider', 'cmb2' ),
		'desc' => esc_html__( 'Subir una imagen para el slider superior', 'cmb2' ),
		'id'   => 'leroma_homepage_slider_1',
		'type' => 'file',
	) );
    
    $leroma_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen 2 Slider', 'cmb2' ),
		'desc' => esc_html__( 'Subir una imagen para el slider superior', 'cmb2' ),
		'id'   => 'leroma_homepage_slider_2',
		'type' => 'file',
	) );

    $leroma_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen 3 Slider', 'cmb2' ),
		'desc' => esc_html__( 'Subir una imagen para el slider superior', 'cmb2' ),
		'id'   => 'leroma_homepage_slider_3',
		'type' => 'file',
	) );



}

// CMB2 para el home


add_action( 'cmb2_admin_init', 'leroma_campos_contacto' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function leroma_campos_contacto() {


    $id = get_the_ID();

	/**
	 * Metabox to be displayed on a single page ID
	 */
	$leroma_campos_contacto = new_cmb2_box( array(
		'id'           => 'leroma_contacto',
		'title'        => esc_html__( 'Campos Contacto', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( 13 ),
		), // Specific post IDs to display this metabox
	) );

    $leroma_campos_contacto->add_field( array(
		'name' => esc_html__( 'Contacto', 'cmb2' ),
		'desc' => esc_html__( 'Modificaciones para la pagina de Contacto', 'cmb2' ),
		'id'   => 'leroma_contacto_title',
		'type' => 'title',
	) );


	$leroma_campos_contacto->add_field( array(
		'name' => esc_html__( 'Horarios de atencion', 'cmb2' ),
		'desc' => esc_html__( 'Ej: Lunes a Viernes de 10:00 a 18:00', 'cmb2' ),
		'id'   => 'leroma_contacto_horario',
		'type' => 'text',
	) );

    $leroma_campos_contacto->add_field( array(
		'name' => esc_html__( 'Telefono de Contacto', 'cmb2' ),
		'desc' => esc_html__( 'Ej: 11 5555-5555', 'cmb2' ),
		'id'   => 'leroma_contacto_telefono',
		'type' => 'text',
	) );

    $leroma_campos_contacto->add_field( array(
		'name' => esc_html__( 'Mail de Contacto', 'cmb2' ),
		'desc' => esc_html__( 'Ej: correo@corre.com', 'cmb2' ),
		'id'   => 'leroma_contacto_correo',
		'type' => 'text',
	) );

    $leroma_campos_contacto->add_field( array(
		'name' => esc_html__( 'Direccion', 'cmb2' ),
		'desc' => esc_html__( 'Ej: Av. San Martin 1111, Buenos Aires, Argentina', 'cmb2' ),
		'id'   => 'leroma_contacto_direccion',
		'type' => 'text',
	) );

}


