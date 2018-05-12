<?php 

add_action( 'cmb2_admin_init', 'cmb2_boomrang_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_boomrang_metaboxes() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_boomrang_';

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'test_metabox',
		'title'         => __( 'Test Metabox', 'boomrang' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on'       => array( 'key' => 'page-template', 'value' => 'templates/about.php' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Textarea for left column
	$cmb->add_field( array(
		'name'       => __( 'Left Column', 'boomrang' ),
		'desc'       => __( 'Content for left column', 'boomrang' ),
		'id'         => $prefix . 'left',
		'type'       => 'textarea',
	) );

	// Textarea for right column
	$cmb->add_field( array(
		'name'       => __( 'Right Column', 'boomrang' ),
		'desc'       => __( 'Content for left column', 'boomrang' ),
		'id'         => $prefix . 'right',
		'type'       => 'textarea',
	) );

	/**
	 * Metabox for Pages
	 */

	$cmb = new_cmb2_box( array(
		'id'            => 'page_metabox',
		'title'         => __( 'Hero Content', 'boomrang' ),
		'object_types'  => array( 'page', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Title', 'boomrang' ),
		'desc'       => __( 'Title that show in hero', 'boomrang' ),
		'id'         => $prefix . 'hero_title',
		'type'       => 'text',
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );

	/**
	 * Metabox for project
	 */
	$cmb_project = new_cmb2_box( array(
		'id'            => 'project_metabox',
		'title'         => __( 'Images', 'boomrang' ),
		'object_types'  => array( 'project', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Images for project
	$cmb_project->add_field( array(
		'name'       => __( 'Images', 'boomrang' ),
		'desc'       => __( 'Upload images', 'boomrang' ),
		'id'         => $prefix . 'images',
		'type'       => 'file_list',
	) );


	// Add other metaboxes as needed

}