<?php

/*
Plugin Name: Celsus Collection Managment System
Plugin URI: http://www.thecelsusarchive.org
Description: Basic Collection Management System for collectors or small museums
Version: 0.1
Author: Jamie Pitt
License: Apache License 2.0
*/

/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Items', 'Post Type General Name', 'text-domain' ),
        'singular_name'       => _x( 'Item', 'Post Type Singular Name', 'text-domain' ),
        'menu_name'           => __( 'Itemss', 'text-domain' ),
        'parent_item_colon'   => __( 'Parent item', 'text-domain' ),
        'all_items'           => __( 'All Itemss', 'text-domain' ),
        'view_item'           => __( 'View Item', 'text-domain' ),
        'add_new_item'        => __( 'Add New Item', 'text-domain' ),
        'add_new'             => __( 'Add New', 'text-domain' ),
        'edit_item'           => __( 'Edit Item', 'text-domain' ),
        'update_item'         => __( 'Update Item', 'text-domain' ),
        'search_items'        => __( 'Search Item', 'text-domain' ),
        'not_found'           => __( 'Not Found', 'text-domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text-domain' ),
    );
     
// Set other options for Custom Post Type
    $rewrite = array(
		'slug'                => 'item',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	); 
    $args = array(
        'label'               => __( 'item', 'text-domain' ),
        'description'         => __( 'item details', 'text-domain' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'thumbnail', 'revisions',),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => 'item',
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
        'rewrite' => $rewrite,
        
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'item', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );



// the meta box, details based on AMaGA Victoria Small Museums Cataloguing Manual

function ccms_register_meta_boxes() {
    add_meta_box( 'hcf-1', __( 'Catalogue Record', 'ccms' ), 'ccms_display_callback', 'item' );
}
add_action( 'add_meta_boxes', 'ccms_register_meta_boxes' );

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function ccms_display_callback( $post ) {
    include plugin_dir_path( __FILE__ ) . './form.php';
}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function ccms_save_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }
    $fields = [
        'ccms_identification_number',
        'ccms_item_type',
        'ccms_item_name',
        'ccms_item_title',
        'ccms_description',
        'ccms_inscriptions',
        'ccms_dimensions',
        'ccms_production_method',
        'ccms_production_material',
        'ccms_context',
        'ccms_statement',
        'ccms_creator',
        'ccms_where',
        'ccms_when',
        'ccms_provenance',
        'ccms_acquisition',
        'ccms_loans',
        'ccms_condition',
        'ccms_date',
        'ccms_risk',
        'ccms_location',
        'ccms_supplementary',
        'ccms_restrictions',
        'ccms_rights',
        'ccms_note',
        'ccms_file',
    ];
    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
     }
}


add_action( 'save_post', 'ccms_save_meta_box' );

/* Single Template */
function ccms_single_template($single) {
    global $wp_query, $post;

	/* Checks for single template by post type */
	if ($post->post_type == "item"){

		if(file_exists( TEMPLATEPATH  . 'templates/single.php')){
			return TEMPLATEPATH  . 'templates/single.php';
		}
		
		if(file_exists( dirname(__FILE__) . '/templates/single.php')){
			return dirname(__FILE__) . '/templates/single.php';
		}
		
	}
	
    return $single;
}
add_filter('single_template', 'ccms_single_template');

