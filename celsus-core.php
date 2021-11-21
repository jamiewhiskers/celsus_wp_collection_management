<?php

/*
Plugin Name: Celsus Collection Managment System
Plugin URI: http://www.thecelsusarchive.org
Description: Basic Collection Management System for collectors or small museums
Version: 0.0.2
Author: Jamie Pitt
License: Apache License 2.0
*/



/* The Actions! */
add_action( 'init', 'custom_post_type', 0 );
add_action( 'save_post', 'save_data' );
add_action( 'add_meta_boxes', 'ccms_register_meta_boxes' ); 

/* The Filters! */
add_filter('single_template', 'ccms_single_template');


	/**
	 * Generate Fields for catalog.
	 *
	 * Potentially make this an editable structure somehow in the future, xml file or something
	 * 
	 * support types
	 * text - small text input
	 * area - large text input
	 * date - date input
	 * 
	 * @since 0.0.2
	 */
    function get_fields() {
        global $fields;
		$fields = array(
			'id' => array(
				'title' => __( 'Identification Number', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_id',
				'type'  => 'text',
				'id'    => 'celsus_archive_item_id',
				'class' => 'large-text',
				'desc'  => __( 'The items identification number', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'type' => array(
				'title' => __( 'Type', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_type',
				'type'  => 'text',
				'id'    => 'celsus_archive_item_type',
				'class' => 'large-text',
				'desc'  => __( 'A one or two word classification of the item in its simplest terms', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'name' => array(
				'title' => __( 'Name', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_name',
				'type'  => 'text',
				'id'    => 'celsus_archive_item_name',
				'class' => 'large-text',
				'desc'  => __( 'A word or two providing descriptive information', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'title' => array(
				'title' => __( 'Title', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_title',
				'type'  => 'text',
				'id'    => 'celsus_archive_item_title',
				'class' => 'large-text',
				'desc'  => __( 'The formal title given to the item by its creator', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'description' => array(
				'title' => __( 'Description', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_description',
				'type'  => 'area',
				'id'    => 'celsus_archive_item_description',
				'class' => 'large-text',
				'desc'  => __( 'A description of the item that includes all details that cannot be captured by digitisation alone', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'inscriptions' => array(
				'title' => __( 'Inscriptions &amp; Markings', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_inscriptions',
				'type'  => 'area',
				'id'    => 'celsus_archive_item_inscriptions',
				'class' => 'large-text',
				'desc'  => __( 'A verbatim recording of any serial numbers, signatures, text or other inscriptions and markings that are present on the item, including the details of the placement of the inscription', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'dimensions' => array(
				'title' => __( 'Dimensions', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_dimensions',
				'type'  => 'text',
				'id'    => 'celsus_archive_item_dimensions',
				'class' => 'large-text',
				'desc'  => __( 'Accurate measurements of the item.', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'method' => array(
				'title' => __( 'Production Method', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_production_method',
				'type'  => 'text',
				'id'    => 'celsus_archive_item_production_method',
				'class' => 'large-text',
				'desc'  => __( 'The methods and techniques of how the item you are cataloguing was made.', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'materials' => array(
				'title' => __( 'Production Materials', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_production_materials',
				'type'  => 'text',
				'id'    => 'celsus_archive_item_production_materials',
				'class' => 'large-text',
				'desc'  => __( 'The materials that the item you are cataloguing is made or comprised of.', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'context' => array(
				'title' => __( 'Context or historical information', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_context',
				'type'  => 'area',
				'id'    => 'celsus_archive_item_context',
				'class' => 'large-text',
				'desc'  => __( 'The story of the item, link it to relevant historical events, themes, people if known, or provide contextual information about the item.', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'statement' => array(
				'title' => __( 'Statement of Significance', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_statement',
				'type'  => 'text',
				'id'    => 'celsus_archive_item_statement',
				'class' => 'large-text',
				'desc'  => __( 'A statement outlining the significance of the item, including why the item is significant and what significance criteria apply.', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'creator' => array(
				'title' => __( 'Creator/Maker details', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_creator',
				'type'  => 'text',
				'id'    => 'celsus_archive_item_creator',
				'class' => 'large-text',
				'desc'  => __( 'The creator name and any other relevant details.', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'where' => array(
				'title' => __( 'Creation Locaation', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_where',
				'type'  => 'text',
				'id'    => 'celsus_archive_item_where',
				'class' => 'large-text',
				'desc'  => __( 'The place of manufacture or creation if it is known.', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'when' => array(
				'title' => __( 'Creation Date', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_when',
				'type'  => 'text',
				'id'    => 'celsus_archive_item_when',
				'class' => 'large-text',
				'desc'  => __( 'The date the item was created.', 'celsus-archive' ),
				'sntz'  => 'text',
			),			
			'provenance' => array(
				'title' => __( 'Provenance', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_provenance',
				'type'  => 'text',
				'id'    => 'celsus_archive_item_provenance',
				'class' => 'large-text',
				'desc'  => __( 'As a general rule, for each event, record when and where it took place and any additional event details.', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'acquisition' => array(
				'title' => __( 'Acquisition', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_acquisition',
				'type'  => 'text',
				'id'    => 'celsus_archive_item_acquisition',
				'class' => 'large-text',
				'desc'  => __( 'How the item came to be in your organisations custody and the ownership status of the item.', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'loans' => array(
				'title' => __( 'Loans', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_loans',
				'type'  => 'text',
				'id'    => 'celsus_archive_item_loans',
				'class' => 'large-text',
				'desc'  => __( 'The details of any loan agreements pertaining to this item.', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'condition' => array(
				'title' => __( 'Condition', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_condition',
				'type'  => 'area',
				'id'    => 'celsus_archive_item_condition',
				'class' => 'large-text',
				'desc'  => __( 'A description of the condition of the item.', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'condate' => array(
				'title' => __( 'Condition Date', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_condate',
				'type'  => 'date',
				'id'    => 'celsus_archive_item_condate',
				'class' => 'large-text',
				'desc'  => __( 'The date of condition assessment.', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'risk' => array(
				'title' => __( 'Risk Assessment', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_risk',
				'type'  => 'text',
				'id'    => 'celsus_archive_item_risk',
				'class' => 'large-text',
				'desc'  => __( 'The details of any risk assessments and what actions you might take to mitigate those risks.', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'location' => array(
				'title' => __( 'Location', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_location',
				'type'  => 'text',
				'id'    => 'celsus_archive_item_location',
				'class' => 'large-text',
				'desc'  => __( 'The detail of where the item is located regularly and/or its current location.', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'restrictions' => array(
				'title' => __( 'Restrictions', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_restrictions',
				'type'  => 'text',
				'id'    => 'celsus_archive_item_restrictions',
				'class' => 'large-text',
				'desc'  => __( 'The details of any access restrictions that apply to this item.', 'celsus-archive' ),
				'sntz'  => 'text',
			),
			'rights' => array(
				'title' => __( 'Rights', 'celsus-archive' ),
				'name'  => '_celsus_archive_item_rights',
				'type'  => 'area',
				'id'    => 'celsus_archive_item_rights',
				'class' => 'large-text',
				'desc'  => __( 'The details of any copyright or moral rights that apply to the item. For example, the name and contact detail of rights holder, the applicable copyright category and duration.', 'celsus-archive' ),
				'sntz'  => 'text',
			),			

			
		);

		return $fields;
	}



	/**
	 * Displays fields in metaboxes.
	 *
	 * @since 0.0.2
	 */
	function display_fields() {

		foreach ( get_fields() as $field ) {
			// Get data if it was already set.
			$value = get_post_meta( get_the_ID(), $field['name'], true );

			// Display input.
			echo '<div class="ptk-field-wrap">';

			printf(
				'<label for="%1$s"><strong>%2$s</strong></label>',
				esc_attr( $field['name'] ),
				esc_html( $field['title'] )
			);
            if(esc_attr( $field['type']=="text")){
			printf( '<input name="%1$s" type="%2$s" value="%3$s" class="%4$s" placeholder="%5$s"> ',
				esc_attr( $field['name'] ),
				esc_attr( $field['type'] ),
				esc_attr( $value ),
				esc_attr( $field['class'] ),
				esc_attr( $field['desc'] )
			);
            }elseif(esc_attr( $field['type']=="area")){
			printf('<textarea id="%2$s" name="%1$s" rows="4" cols="50" class="%4$s">%5$s</textarea>',
				esc_attr( $field['name'] ),
				esc_attr( $field['type'] ),
				esc_attr( $value ),
				esc_attr( $field['class'] ),
				esc_attr( $field['desc'] )
			);               
            }elseif(esc_attr( $field['type']=="date")){
			printf('<input name="%1$s" type="%2$s" value="%3$s" class="%4$s" placeholder="%5$s">',
				esc_attr( $field['name'] ),
				esc_attr( $field['type'] ),
				esc_attr( $value ),
				esc_attr( $field['class'] ),
				esc_attr( $field['desc'] )
			);
            }

			echo '</div>';
		}

		// Output nonce.
		wp_nonce_field( plugin_basename( __FILE__ ), '_celsus_archive_nonce' );

	}

	/**
	 * Saves Metabox data to a database.
	 *
	 * @param int    $post_id ID of the post we are working with.
	 * @param object $post    Post object.
	 * @since 0.0.2
	 */
	function save_data( $post_id ) {
		// Check if nonce is set.
		if ( ! isset( $_POST['_celsus_archive_nonce'] ) ) {
			return;
		}

		// In case it is, verify it.
		$nonce = sanitize_key( $_POST['_celsus_archive_nonce'] );
		if ( ! wp_verify_nonce( $nonce, plugin_basename( __FILE__ ) ) ) {
			return;
		}

		// Return if it is a revision or autosave.
		if ( wp_is_post_autosave( $post_id ) || wp_is_post_revision( $post_id ) ) {
			return;
		}

		// Is the user allowed to edit the post or page?
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}

		// Loop through meta array, saving or deleting data.
		foreach ( get_fields() as $field ) {
			if ( isset( $_POST[ $field['name'] ] ) ) {

				// Sanitize and save data.
				if ( 'url' == $field['sntz'] ) {
					$value = esc_url_raw( wp_unslash( $_POST[ $field['name'] ] ) );
				} else {
					$value = sanitize_text_field( wp_unslash( $_POST[ $field['name'] ] ) );
				}
				update_post_meta( $post_id, $field['name'], $value );

			} else {
				delete_post_meta( $post_id, $field['name'] );
			}
		}

	}


	/**
	 * prep the custom post type.
	 *
	 * @since 0.0.1
	 */
    function custom_post_type() {
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
 





	/**
	 * Register the meta box.
	 *
	 * @since 0.0.1
	 */
    function ccms_register_meta_boxes() {
        add_meta_box( 'hcf-1', __( 'Catalogue Record', 'ccms' ), 'display_fields', 'item' );
    }



	/**
	 * make sure we use the right template for the plugin
	 *
	 * @since 0.0.1
	 */
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




