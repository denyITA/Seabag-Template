<?php
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
remove_filter('the_content', 'wpautop' );
    // remove header links
    add_action('init', 'tjnz_head_cleanup');
    function tjnz_head_cleanup() {
        remove_action( 'wp_head', 'feed_links_extra', 3 );                      // Category Feeds
        remove_action( 'wp_head', 'feed_links', 2 );                            // Post and Comment Feeds
        remove_action( 'wp_head', 'rsd_link' );                                 // EditURI link
        remove_action( 'wp_head', 'wlwmanifest_link' );                         // Windows Live Writer
        remove_action( 'wp_head', 'index_rel_link' );                           // index link
        remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );              // previous link
        remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );               // start link
        remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );   // Links for Adjacent Posts
        remove_action( 'wp_head', 'wp_generator' );                             // WP version
        if (!is_admin()) {
            wp_deregister_script('jquery');                                     // De-Register jQuery
            wp_register_script('jquery', '', '', '', true);                     // Register as 'empty', because we manually insert our script in header.php
        }
    }

    // remove WP version from RSS
    add_filter('the_generator', 'tjnz_rss_version');
    function tjnz_rss_version() { return ''; }
function starter_scripts() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false, NULL, true );
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'starter_scripts' );

remove_action('wp_head', 'wp_enqueue_scripts', 1);
add_action('wp_footer', 'wp_enqueue_scripts', 5);

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


function read_more(){
    if (cml_get_current_language()->cml_locale === "it_IT") {
        $readmore = "Leggi di più";
        return $readmore;
    }
    else
        $readmore = "Read More";
        return $readmore;

}

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=> 'Company Retail',
		'id' => 'retail_tab',
		'before_widget' => '',
		'after_widget' => '</div>',
		'before_title' => '<!-- <div class="col-lg-6 resellQuote"><em>',
		'after_title' => '</em></div> --> <div class="col-lg-12 resellDescr">',
	));
}

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
function custom_excerpt_length( $length ) {
	return 15;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('social-menu',__( 'Social Menu' ));
  register_nav_menu('azienda-menu',__( 'Azienda Menu' ));
  register_nav_menu('contatti-menu',__( 'Contatti Menu' ));
  register_nav_menu('eshop',__( 'eshop Menu' ));

}
add_action( 'init', 'register_my_menu' );

function titolo_pagina($id) {
	$current_id = CMLLanguage::get_current_id();

	$convertito = CMLPost::get_translation($current_id, $id);
	$post_x = get_post($convertito);
	$title = $post_x->post_title;


	echo $title;
}

function contenuto_pagina($id) {
	$current_id = CMLLanguage::get_current_id();

	$convertito = CMLPost::get_translation($current_id, $id);
	$post_x = get_post($convertito);
	$content = $post_x->post_content;
	echo apply_filters( 'the_content', $post_x->post_content );

}

function riassunto_pagina($id) {
	$current_id = CMLLanguage::get_current_id();

	$convertito = CMLPost::get_translation($current_id, $id);

	$post = get_post( $convertito );
	setup_postdata( $post );
	the_excerpt($convertito);
	wp_reset_postdata();
}

function url_pagina($id) {
	$current_id = CMLLanguage::get_current_id();
	$convertito = CMLPost::get_translation($current_id, $id);
	$post = get_permalink($convertito);

	echo $post;
}

function wpse45700_get_menu_by_location( $location ) {
    if( empty($location) ) return false;

    $locations = get_nav_menu_locations();
    if( ! isset( $locations[$location] ) ) return false;

    $menu_obj = get_term( $locations[$location], 'nav_menu' );

    return $menu_obj;
}

function copertina_pagina($id) {
	$current_id = CMLLanguage::get_current_id();
	$convertito = CMLPost::get_translation($current_id, $id);
	$post_x = get_post($convertito);

	$src = wp_get_attachment_image_src( get_post_thumbnail_id($post_x->ID), array( 720,405 ), false, '' );
	echo $src[0];
}

add_filter( 'wpcf7_form_class_attr', 'your_custom_form_class_attr' );

function your_custom_form_class_attr( $class ) {
	$class .= ' foo bar';
	return $class;
}

function my_wpcf7_ajax_loader () {
    return  get_stylesheet_directory_uri() .'/css/balls.svg';
}
add_filter('wpcf7_ajax_loader', 'my_wpcf7_ajax_loader');

function pure_post($id) {
    $content = get_post($id)->post_content;
	echo apply_filters( 'the_content', get_post($id)->post_content );
}
?>
