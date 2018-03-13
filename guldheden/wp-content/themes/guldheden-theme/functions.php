<?php
// Enqueues general scripts and stylesheets
function enqueue_files() {
	wp_enqueue_style( 'mainstyles', get_template_directory_uri().'/style.css' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/css/font-awesome.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'slidercss', get_template_directory_uri().'/flexslider/flexslider.css' );
	wp_enqueue_script( 'jq', get_template_directory_uri().'/js/jquery.js' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_files' );


// Register the menu function in the theme
function register_menu() {
register_nav_menus(array("main-menu" => __("Main Menu")));
}
add_action('init', 'register_menu');

// Register the information-template menu in the theme
function register_info_menu() {
register_nav_menus(array("info-menu" => __("Info Menu")));
}
add_action('init', 'register_info_menu');


// Adding theme support for custom images
add_theme_support( 'post-thumbnails' );


// Adding custom image size of the slider images
add_image_size( 'slidersize', 1000, 500, true );


//Header media buttons
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Body Settings',
		'menu_title'	=> 'Body',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

}

//---------------------------------------------------
//1
function excerpt_rd_more( $more ) {
    return '...<a href="'.get_the_permalink().'">
		[Read more...]</a>';
}
add_filter( 'excerpt_more', 'excerpt_rd_more' );

//2
function secure_error() {
	return'Something is wrong.';
}
add_filter( 'login_error', 'secure_error' );

//3
function custom_length() {
	return 70;
}
add_filter( 'excerpt_length', 'custom_length' );

//4
function link_thumbnail_images( $html, $post_id, $post_image_id ) {

If (! is_singular()) {

$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
return $html;

} else {

return $html;

}

}
add_filter( 'post_thumbnail_html', 'link_thumbnail_images', 10, 3 );

//5
function remove_wp_version() {
return '';
}
add_filter('the_generator', 'remove_wp_version');

//---------------------------------------------------
