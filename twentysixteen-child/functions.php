<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'genericons' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

register_sidebar( array(
		'name'          => __( 'Inhoud beneden 3', 'twentysixteen' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Appears at the bottom', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => __( 'Inhoud beneden 4', 'twentysixteen' ),
		'id'            => 'sidebar-5',
		'description'   => __( 'Appears at the bottom', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => __( 'Inhoud 404', 'twentysixteen' ),
		'id'            => 'sidebar-6',
		'description'   => __( 'Inhoud 404 pagina', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="entry-title">',
		'after_title'   => '</h1>',
	) );

function register_my_menu() {
  register_nav_menu('mini-menu',__( 'Mini Menu' ));
}
add_action( 'init', 'register_my_menu' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more', 21 );

function the_excerpt_more_link( $excerpt ){
    $post = get_post();
	if (!is_single()) :
    	$excerpt .= '<span class="nondisp"><a href="'. get_permalink($post->ID) . '"><br/><i>Lees verder</i></a></span>';
	endif;	
    return $excerpt;
}
add_filter( 'get_the_excerpt', 'the_excerpt_more_link', 21 );

// custom post type nieuwsberichten
function create_posttype() {
     register_post_type( 'nieuwsberichten',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Nieuwsberichten' ),
                'singular_name' => __( 'Nieuwsbericht' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'nieuwsberichten'),
            'show_in_rest' => true,
			'taxonomies' => array('post_tag','category'),
        )
    );
}
add_action( 'init', 'create_posttype' );

add_action( 'init', 'create_topics_nonhierarchical_taxonomy', 0 );
function create_topics_nonhierarchical_taxonomy() {
  $labels = array(
    'name' => _x( 'Bronnen', 'taxonomy general name' ),
    'singular_name' => _x( 'Bron', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Bronnen' ),
    'popular_items' => __( 'Popular Bronnen' ),
    'all_items' => __( 'All Bronnen' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Bron' ), 
    'update_item' => __( 'Update Bron' ),
    'add_new_item' => __( 'Add New Bron' ),
    'new_item_name' => __( 'New Bron Name' ),
    'separate_items_with_commas' => __( 'Separate bronnen with commas' ),
    'add_or_remove_items' => __( 'Add or remove bronnen' ),
    'choose_from_most_used' => __( 'Choose from the most used bronnen' ),
    'menu_name' => __( 'Bronnen' ),
  ); 
  register_taxonomy('bronnen','nieuwsberichten',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'bronnen' ),
  ));
}

function shapeSpace_filter_search($query) {
	if (!$query->is_admin && $query->is_search) {
		$query->set('post_type', array('post', 'page'));
	}
	return $query;
}
add_filter('pre_get_posts', 'shapeSpace_filter_search');