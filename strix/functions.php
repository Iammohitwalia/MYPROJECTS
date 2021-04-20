<?php
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles()
{
	$parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
	$theme = wp_get_theme();
	wp_enqueue_style(
		$parenthandle,
		get_template_directory_uri() . '/style.css',
		array(),  // if the parent theme code has a dependency, copy it to here
		$theme->parent()->get('Version')
	);
	wp_enqueue_style(
		'child-style',
		get_stylesheet_uri(),
		array($parenthandle),
		$theme->get('Version') // this only works if you have Version in the style header
	);

}
//--------------Adding script to elementor
add_action( 'elementor/frontend/before_enqueue_scripts', function() {
wp_enqueue_script( 'plugin-slick-frontend', get_stylesheet_directory_uri() . '/slick.js', ['elementor-frontend', ], 'plugin_version',true );

wp_enqueue_script( 'plugin-name-frontend', get_stylesheet_directory_uri() . '/custom.js', ['elementor-frontend', ], 'plugin_version',true );

} );
function myslider() {
ob_start();
include( get_stylesheet_directory() . '/custom-slider.php' );
return ob_get_clean();
}
add_shortcode( 'myslider', 'myslider' );

// Creating a Portfolio Custom Post Type
function crunchify_deals_custom_post_type() {
	$labels = array(
		'name'                => __( 'Portfolios' ),
		'singular_name'       => __( 'Portfolio'),
		'menu_name'           => __( 'Portfolios'),
		'parent_item_colon'   => __( 'Parent Portfolio'),
		'all_items'           => __( 'All Portfolios'),
		'view_item'           => __( 'View Portfolio'),
		'add_new_item'        => __( 'Add New Portfolio'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Portfolio'),
		'update_item'         => __( 'Update Portfolio'),
		'search_items'        => __( 'Search Portfolio'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'Portfolios'),
		'description'         => __( 'Best Crunchify Portfolios'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'taxonomies' 	      => array('post_tag'),
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'portfolios', $args );
}
add_action( 'init', 'crunchify_deals_custom_post_type', 0 );

// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'crunchify_create_portfolios_custom_taxonomy', 0 );
 


//Teams custom post type

function crunchify_Teams_custom_post_type() {
	$labels = array(
		'name'                => __( 'Teams' ),
		'singular_name'       => __( 'Team'),
		'menu_name'           => __( 'Teams'),
		'parent_item_colon'   => __( 'Parent Team'),
		'all_items'           => __( 'All Teams'),
		'view_item'           => __( 'View Team'),
		'add_new_item'        => __( 'Add New Team'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Team'),
		'update_item'         => __( 'Update Team'),
		'search_items'        => __( 'Search Team'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'Teams'),
		'description'         => __( 'Best Crunchify Teams'),
		'labels'              => $labels,
		'supports'            => array( 'title','editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'taxonomies' 	      => array('post_tag'),
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'teams', $args );
}
add_action( 'init', 'crunchify_Teams_custom_post_type', 0 );

// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'crunchify_create_Teams_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "type" for your posts
function crunchify_create_Teams_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Types' ),
  ); 	
 
  register_taxonomy('types',array('teams'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}

?>