<?php


add_action( 'cmb2_admin_init', 'yourprefix_register_comment_metabox' );
/**
 * Hook in and register a metabox for the admin comment edit page.
 */
function yourprefix_register_comment_metabox() {

    /**
     * Sample metabox to demonstrate each field type included
     */
    $cmb = new_cmb2_box( array(
        'id'           => 'myCities',
        'title'        => 'Select City',
        'object_types' => array( 'product' ),
    ) );

   
    $cmb->add_field( array(
		'name'             => esc_html__( 'Select City', 'cmb2' ),
		'desc'             => esc_html__( 'Choose the city of product', 'cmb2' ),
		'id'               => 'product_cities',
		'type'             => 'select',
		'show_option_none' => false,
		'options'          => array(
			'cairo' => esc_html__( 'Cairo', 'cmb2' ),
			'giza'   => esc_html__( 'Giza', 'cmb2' ),
			'alex'     => esc_html__( 'Alex', 'cmb2' ),
		),
	) );


}