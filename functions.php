<?php 

//Include libraries
	function cynthia_scripts() {
  		// CSS
		wp_enqueue_style('bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6');
		wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.6.3');
		wp_enqueue_style('customcss', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');

		//JS
		wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '2.2.3', true);
		wp_enqueue_script('angular', get_template_directory_uri() . '/js/angular.min.js', array(), '1.5.6', true);
	    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.6', true);
	    wp_enqueue_script('appjs', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true);
	    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/cynthia.js', array(), '1.0.0');
		//by putting true, this places the javascript files in the footer. By default it is false, therefore printed in the header

	}
	add_action('wp_enqueue_scripts', 'cynthia_scripts');

//Head Function
	function remove_version() {
		return '';
	}
	add_filter('the_generator', 'remove_version');

//Enable Menu Customization
	function menu_setup() {

		register_nav_menus(array(
			'footer' 	=> __('Footer', 'cynthia'),
			'social'	=> __( 'Social Links Menu', 'cynthia'
			)
		));
		add_theme_support('menus');

	}
	add_action('init', 'menu_setup');
    
// Enable Customizer Sections

	// Background
    add_theme_support('custom-background', apply_filters('zerif_custom_background_args', array(
        'default-color' => 'ffffff',
    )));

    // Logo
	add_theme_support( 'custom-logo', array(
		'height'      => 43,
		'width'       => 343,
		'flex-height' => false,
	));

	// Header
	$defaults = array(
		'random-default'         => false,
		'width'                  => 0,
		'height'                 => 0,
		'flex-height'            => false,
		'flex-width'             => false,
		'default-text-color'     => '',
		'header-text'            => true,
		'uploads'                => true,
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-header', $defaults );

// Enable support for HTML5 markup
    add_theme_support('html5', array(
        'comment-list',
        'search-form',
        'comment-form',
        'gallery',
        'caption'
    ));

// Post Editing Features

    // Format
    add_theme_support( 'post-formats', array(
		'image',
		'video',
		'link',
		'audio',
	) );
    
    // Thumbnail
	add_theme_support('post-thumbnails');

	// Woocommerce
	add_theme_support( 'woocommerce' );

//Enable Custom Post Type - PORTFOLIO
	// function custom_post_type (){
		
	// 	$labels = array(
	// 		'name' => 'Portfolio',
	// 		'singular_name' => 'Portfolio',
	// 		'add_new' => 'Add Item',
	// 		'all_items' => 'All Items',
	// 		'add_new_item' => 'Add Item',
	// 		'edit_item' => 'Edit Item',
	// 		'new_item' => 'New Item',
	// 		'view_item' => 'View Item',
	// 		'search_item' => 'Search Portfolio',
	// 		'not_found' => 'No items found',
	// 		'not_found_in_trash' => 'No items found in trash',
	// 		'parent_item_colon' => 'Parent Item'
	// 	);
	// 	$args = array(
	// 		'labels' => $labels,
	// 		'public' => true,
	// 		'has_archive' => true,
	// 		'publicly_queryable' => true,
	// 		'query_var' => true,
	// 		'rewrite' => true,
	// 		'capability_type' => 'post',
	// 		'hierarchical' => false,
	// 		'supports' => array(
	// 			'title',
	// 			'editor',
	// 			'excerpt',
	// 			'thumbnail',
	// 			'revisions',
	// 		),
	// 		//'taxonomies' => array('category', 'post_tag'),
	// 		'menu_position' => 5,
	// 		'exclude_from_search' => false
	// 	);
	// 	register_post_type('portfolio',$args);
	// }
	// add_action('init','custom_post_type');

// Enable Widget Sidebar Customization
	function widget_setup() {

		register_sidebar(
			array(
				'name'			=>	'Sidebar',
				'id'			=>	'sidebar-1',
				'class'			=>	'custom',
				'description'	=>	'Standard Sidebar',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
				)
			);
	}
	add_action( 'widgets_init', 'widget_setup' );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );

// Blog Page Fix
	if( ! function_exists( 'fix_no_editor_on_posts_page' ) ) {

	    /**
	     * Add the wp-editor back into WordPress after it was removed in 4.2.2.
	     *
	     * @param Object $post
	     * @return void
	     */
	    function fix_no_editor_on_posts_page( $post ) {
	        if( isset( $post ) && $post->ID != get_option('page_for_posts') ) {
	            return;
	        }

	        remove_action( 'edit_form_after_title', '_wp_posts_page_notice' );
	        add_post_type_support( 'page', 'editor' );
	    }
	    add_action( 'edit_form_after_title', 'fix_no_editor_on_posts_page', 0 );
	 }

	//Register Fonts
	if ( ! function_exists( 'cynthia_fonts_url' ) ) :
	function cynthia_fonts_url() {
		$fonts_url = '';
		$fonts     = array();
		$subsets   = 'latin,latin-ext';

		/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'cynthia' ) ) {
			$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
		}

		/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'cynthia' ) ) {
			$fonts[] = 'Montserrat:400,700';
		}

		/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'cynthia' ) ) {
			$fonts[] = 'Inconsolata:400';
		}

		if ( $fonts ) {
			$fonts_url = add_query_arg( array(
				'family' => urlencode( implode( '|', $fonts ) ),
				'subset' => urlencode( $subsets ),
			), 'https://fonts.googleapis.com/css' );
		}

		return $fonts_url;
	}
	endif;

	function add_categories_to_attachments() {
	register_taxonomy_for_object_type( 'category', 'attachment' );
	}
	add_action( 'init' , 'add_categories_to_attachments' );

?>