<?php

// Register Custom Post Type: Classes
function sibaproject_classes() {

	$labels = array(
		'name'                  => _x( 'Classes', 'Classes', 'siba-project' ),
		'singular_name'         => _x( 'Class', 'Class', 'siba-project' ),
		'menu_name'             => __( 'Classes', 'siba-project' ),
		'name_admin_bar'        => __( 'Class', 'siba-project' ),
		'archives'              => __( 'Item Archives', 'siba-project' ),
		'attributes'            => __( 'Item Attributes', 'siba-project' ),
		'parent_item_colon'     => __( 'Item Parent:', 'siba-project' ),
		'all_items'             => __( 'All Items', 'siba-project' ),
		'add_new_item'          => __( 'Add New Item', 'siba-project' ),
		'add_new'               => __( 'Add New', 'siba-project' ),
		'new_item'              => __( 'New Item', 'siba-project' ),
		'edit_item'             => __( 'Edit Item', 'siba-project' ),
		'update_item'           => __( 'Update Item', 'siba-project' ),
		'view_item'             => __( 'View Item', 'siba-project' ),
		'view_items'            => __( 'View Items', 'siba-project' ),
		'search_items'          => __( 'Search Item', 'siba-project' ),
		'not_found'             => __( 'Not found', 'siba-project' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'siba-project' ),
		'featured_image'        => __( 'Cover Image', 'siba-project' ),
		'set_featured_image'    => __( 'Set an image for this class', 'siba-project' ),
		'remove_featured_image' => __( 'Remove image', 'siba-project' ),
		'use_featured_image'    => __( 'Use featured image', 'siba-project' ),
		'insert_into_item'      => __( 'Inserir into item', 'siba-project' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'siba-project' ),
		'items_list'            => __( 'Items list', 'siba-project' ),
		'items_list_navigation' => __( 'Items list Navigation', 'siba-project' ),
		'filter_items_list'     => __( 'Filter items list', 'siba-project' ),
	);
	$args = array(
		'label'                 => __( 'Classes', 'siba-project' ),
		'description'           => __( 'Classes you provide', 'siba-project' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
		'taxonomies'            => array( ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false, // true as DEFAULT. Create Archive file.
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'classes', $args );
}
add_action( 'init', 'sibaproject_classes', 0 );

// Register Custom Post Type: Team
function sibaproject_team() {
	$labels = array(
		'name'                  => _x( 'Team', 'Team', 'siba-project' ),
		'singular_name'         => _x( 'Team', 'Team', 'siba-project' ),
		'menu_name'             => __( 'Team', 'siba-project' ),
		'name_admin_bar'        => __( 'Team', 'siba-project' ),
		'archives'              => __( 'Item Archives', 'siba-project' ),
		'attributes'            => __( 'Item Attributes', 'siba-project' ),
		'parent_item_colon'     => __( 'Item Parent:', 'siba-project' ),
		'all_items'             => __( 'All Items', 'siba-project' ),
		'add_new_item'          => __( 'Add New Item', 'siba-project' ),
		'add_new'               => __( 'Add New', 'siba-project' ),
		'new_item'              => __( 'New Item', 'siba-project' ),
		'edit_item'             => __( 'Edit Item', 'siba-project' ),
		'update_item'           => __( 'Update Item', 'siba-project' ),
		'view_item'             => __( 'View Item', 'siba-project' ),
		'view_items'            => __( 'View Items', 'siba-project' ),
		'search_items'          => __( 'Search Item', 'siba-project' ),
		'not_found'             => __( 'Not found', 'siba-project' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'siba-project' ),
		'featured_image'        => __( 'Profile Picture', 'siba-project' ),
		'set_featured_image'    => __( 'Set an image for this person', 'siba-project' ),
		'remove_featured_image' => __( 'Remove image', 'siba-project' ),
		'use_featured_image'    => __( 'Use featured image', 'siba-project' ),
		'insert_into_item'      => __( 'Inserir into item', 'siba-project' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'siba-project' ),
		'items_list'            => __( 'Items list', 'siba-project' ),
		'items_list_navigation' => __( 'Items list Navigation', 'siba-project' ),
		'filter_items_list'     => __( 'Filter items list', 'siba-project' ),
	);
	$args = array(
		'label'                 => __( 'Team', 'siba-project' ),
		'description'           => __( 'Your Team', 'siba-project' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'excerpt', 'editor', 'thumbnail', 'page-attributes' ),
		'taxonomies'            => array( ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false, // true as DEFAULT. Create Archive file.
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'sibaproject_team', 0 );

// Register Custom Post Type: Testimonials
function sibaproject_testimonials() {
	$labels = array(
		'name'                  => _x( 'Testimonials', 'Testimonials', 'siba-project' ),
		'singular_name'         => _x( 'Testimonial', 'Testimonial', 'siba-project' ),
		'menu_name'             => __( 'Testimonials', 'siba-project' ),
		'name_admin_bar'        => __( 'Testimonial', 'siba-project' ),
		'archives'              => __( 'Item Archives', 'siba-project' ),
		'attributes'            => __( 'Item Attributes', 'siba-project' ),
		'parent_item_colon'     => __( 'Item Parent:', 'siba-project' ),
		'all_items'             => __( 'All Items', 'siba-project' ),
		'add_new_item'          => __( 'Add New Item', 'siba-project' ),
		'add_new'               => __( 'Add New', 'siba-project' ),
		'new_item'              => __( 'New Item', 'siba-project' ),
		'edit_item'             => __( 'Edit Item', 'siba-project' ),
		'update_item'           => __( 'Update Item', 'siba-project' ),
		'view_item'             => __( 'View Item', 'siba-project' ),
		'view_items'            => __( 'View Items', 'siba-project' ),
		'search_items'          => __( 'Search Item', 'siba-project' ),
		'not_found'             => __( 'Not found', 'siba-project' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'siba-project' ),
		'featured_image'        => __( 'Profile Picture', 'siba-project' ),
		'set_featured_image'    => __( 'Set an image for this person', 'siba-project' ),
		'remove_featured_image' => __( 'Remove image', 'siba-project' ),
		'use_featured_image'    => __( 'Use featured image', 'siba-project' ),
		'insert_into_item'      => __( 'Inserir into item', 'siba-project' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'siba-project' ),
		'items_list'            => __( 'Items list', 'siba-project' ),
		'items_list_navigation' => __( 'Items list Navigation', 'siba-project' ),
		'filter_items_list'     => __( 'Filter items list', 'siba-project' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'siba-project' ),
		'description'           => __( 'The testimonials of your business', 'siba-project' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'  ),
		'taxonomies'            => array( ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false, // true as DEFAULT. Create Archive file.
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'sibaproject_testimonials', 0 );


// Custom Fields - Meta Box API
function sibaproject_get_meta_box( $meta_boxes ) {
	$prefix = 'sibaproject-';

	$meta_boxes[] = array(
		'id' => 'team-socialmedia',
		'title' => esc_html__( 'Social Media', 'siba-project' ),
		'post_types' => array('team' ),
		'context' => 'side', //normal, form_top, after_title, after_editor, before_permalink, advanced
		'priority' => 'low', //low, high, default
		'autosave' => 'true',
		'fields' => array(
			array(
				'id' => $prefix . 'facebook_link',
				'type' => 'url',
				'name' => esc_html__( 'Facebook Link', 'siba-project' ),
				'size' => 200,
				'placeholder' => esc_html__( 'Facebook link of this person (if any)', 'siba-project' ),
			),
			array(
				'id' => $prefix . 'whatsapp_number',
				'type' => 'text',
				'name' => esc_html__( 'WhatsApp Number', 'siba-project' ),
				'size' => 200,
				'placeholder' => esc_html__( 'WhatsApp number of this person (if any)', 'siba-project' ),
			),
			array(
				'id' => $prefix . 'instagram_link',
				'type' => 'url',
				'name' => esc_html__( 'Instagram Link', 'siba-project' ),
				'size' => 200,
				'placeholder' => esc_html__( 'Instagram link of this person (if any)', 'siba-project' ),
			),
			array(
				'id' => $prefix . 'linkedin_link',
				'type' => 'url',
				'name' => esc_html__( 'Linkedin Link', 'siba-project' ),
				'size' => 200,
				'placeholder' => esc_html__( 'Linkedin link of this person (if any)', 'siba-project' ),
			),
			array(
				'id' => $prefix . 'twitter_link',
				'type' => 'url',
				'name' => esc_html__( 'Twitter Link', 'siba-project' ),
				'size' => 200,
				'placeholder' => esc_html__( 'Twitter link of this person (if any)', 'siba-project' ),
			),
			array(
				'id' => $prefix . 'youtube_link',
				'type' => 'url',
				'name' => esc_html__( 'Youtube Link', 'siba-project' ),
				'size' => 200,
				'placeholder' => esc_html__( 'Youtube link of this person (if any)', 'siba-project' ),
			),
			array(
				'id' => $prefix . 'pinterest_link',
				'type' => 'url',
				'name' => esc_html__( 'Pinterest Link', 'siba-project' ),
				'size' => 200,
				'placeholder' => esc_html__( 'Pinterest link of this person (if any)', 'siba-project' ),
			),
		),
		'validation' => array(
    'rules'  => array(
        'sibaproject-facebook_link' => array(
            'url'  => true,
        ),
				'sibaproject-instagram_link' => array(
            'url'  => true,
        ),
				'sibaproject-linkedin_link' => array(
            'url'  => true,
        ),
				'sibaproject-twitter_link' => array(
            'url'  => true,
        ),
				'sibaproject-youtube_link' => array(
            'url'  => true,
        ),
				'sibaproject-pinterest_link' => array(
            'url'  => true,
        ),
    ),
)
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'sibaproject_get_meta_box' );
