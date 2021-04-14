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


function strappress_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'strappress'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'strappress'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Footer 1', 'strappress'),
		'id'            => 'footer-1',
		'description'   => esc_html__('Add widgets here.', 'strappress'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Footer 2', 'strappress'),
		'id'            => 'footer-2',
		'description'   => esc_html__('Add widgets here.', 'strappress'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Footer 3', 'strappress'),
		'id'            => 'footer-3',
		'description'   => esc_html__('Add widgets here.', 'strappress'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
	register_sidebar(array(
		'name'          => esc_html__('Footer 4', 'strappress'),
		'id'            => 'footer-4',
		'description'   => esc_html__('Add widgets here.', 'strappress'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
	register_sidebar(array(
		'name'          => esc_html__('Footer 5', 'strappress'),
		'id'            => 'footer-5',
		'description'   => esc_html__('Add widgets here.', 'strappress'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
}
add_action('widgets_init', 'strappress_widgets_init');



function cs_custom_post_types()
{

	$labels = array(
		'name' => 'Adventures',
		'singular_name' => 'Adventure',
		'menu_name' => 'Adventure',
		'name_admin_bar' => 'Adventure',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Aventure',
		'new_item' => 'New Adventure',
		'edit_item' => 'Edit Adventure',
		'view_item' => 'View Adventure',
		'all_items' => 'All Adventures',
		'search_items' => 'Search Adventures',
		'parent_item_colon' => 'Parent Adventures:',
		'not_found' => 'No Adventures found.',
		'not_found_in_trash' => 'No Adventures found in Trash.',
	);
	$args = array(
		'public' => true,
		'labels' => $labels,
		'has_archive' => true,
		'description' => 'Adventures are made with this post type.',
		'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
	);
	register_post_type('case-studies', $args);
}
add_action('init', 'cs_custom_post_types');


add_action('init', 'create_taxonomy', 0);

function create_taxonomy()
{
	// Labels part for the GUI
	$labels = array(
		'name' => _x('Services', 'services'),
		'singular_name' => _x('Service', 'service'),
		'search_items' => __('Search Services'),
		'popular_items' => __('Popular Services'),
		'all_items' => __('All Services'),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __('Edit Service'),
		'update_item' => __('Update Service'),
		'add_new_item' => __('Add New Service'),
	//	'separate_items_with_commas' => __('Separate services with commas'),
		'add_or_remove_items' => __('Add or remove services'),
		'choose_from_most_used' => __('Choose from the most used services'),
		'menu_name' => __('Services'),
	);

	register_taxonomy('services', 'case-studies', array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array('slug' => 'service'),

	));
}


 function my_trip_shortcode() {
ob_start();
include( get_stylesheet_directory() . '/template-parts/shortcode.php' );
return ob_get_clean();
}
add_shortcode( 'my_trip_shortcode', 'my_trip_shortcode' );

function myshortcode() {
ob_start();
include( get_stylesheet_directory() . '/template-parts/template-category.php' );
return ob_get_clean();
}
add_shortcode( 'myshortcode', 'myshortcode' );


add_action( 'init', 'create_instrument_taxonomies', 0 );
function create_instrument_taxonomies() {

// Add new taxonomy

$labels = array(

'name' => _x( 'Instruments', 'taxonomy general name', 'textdomain' ),

'singular_name' => _x( 'Instrument', 'taxonomy singular name', 'textdomain' ),

'search_items' => __( 'Search Instruments', 'textdomain' ),

'all_items' => __( 'All Instruments', 'textdomain' ),

'parent_item' => __( 'Parent Instrument', 'textdomain' ),

'parent_item_colon' => __( 'Parent Instrument:', 'textdomain' ),

'edit_item' => __( 'Edit Instrument', 'textdomain' ),

'update_item' => __( 'Update Instrument', 'textdomain' ),

'add_new_item' => __( 'Add New Instrument', 'textdomain' ),

'new_item_name' => __( 'New Instrument Name', 'textdomain' ),

'menu_name' => __( 'Instrument', 'textdomain' ),

);


$args = array(

'hierarchical' => true,

'labels' => $labels,

'show_ui' => true,

'show_admin_column' => true,

'query_var' => true,

'rewrite' => array( 'slug' => 'instrument' ),

);



register_taxonomy( 'instrument', array( 'case-studies' ), $args );

}

function cs_post_types()
{

	$labels = array(
		'name' => 'Podcasts',
		'singular_name' => 'Podcast',
		'menu_name' => 'Podcast',
		'name_admin_bar' => 'Podcast',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Podcast',
		'new_item' => 'New Podcast',
		'edit_item' => 'Edit Podcast',
		'view_item' => 'View Podcast',
		'all_items' => 'All Podcasts',
		'search_items' => 'Search podcasts',
		'parent_item_colon' => 'Parent Podcasts:',
		'not_found' => 'No Podcasts found.',
		'not_found_in_trash' => 'No Podcasts found in Trash.',
	);
	$args = array(
		'public' => true,
		'labels' => $labels,
		'has_archive' => true,
		'description' => 'Podcasts are made with this post type.',
		'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
	);
	register_post_type('case', $args);
}
add_action('init', 'cs_post_types');

add_action( 'init', 'create_taxonomies', 0 );
function create_taxonomies() {

// Add new taxonomy

$labels = array(

'name' => _x( 'lists', 'taxonomy general name', 'textdomain' ),

'singular_name' => _x( 'list', 'taxonomy singular name', 'textdomain' ),

'search_items' => __( 'Search lists', 'textdomain' ),

'all_items' => __( 'All lists', 'textdomain' ),

'parent_item' => __( 'Parent list', 'textdomain' ),

'parent_item_colon' => __( 'Parent list:', 'textdomain' ),

'edit_item' => __( 'Edit list', 'textdomain' ),

'update_item' => __( 'Update list', 'textdomain' ),

'add_new_item' => __( 'Add New list', 'textdomain' ),

'new_item_name' => __( 'New list Name', 'textdomain' ),

'menu_name' => __( 'list', 'textdomain' ),

);


$args = array(

'hierarchical' => true,

'labels' => $labels,

'show_ui' => true,

'show_admin_column' => true,

'query_var' => true,

'rewrite' => array( 'slug' => 'list' ),

);



register_taxonomy( 'list', array( 'case' ), $args );

}

function podcasts() {
ob_start();
include( get_stylesheet_directory() . '/template-parts/podcast.php' );
return ob_get_clean();
}
add_shortcode( 'podcast', 'podcasts' );


