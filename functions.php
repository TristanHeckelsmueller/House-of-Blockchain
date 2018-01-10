<?php

function myhob_files() {
  wp_enqueue_style('myhob_main_style',  get_stylesheet_uri(), NULL, microtime());
  wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyD5RpyAt1-2-ZFmJut9Ju5Awvf0WnS6RsI', NULL, '1.0', true);
  wp_enqueue_script('GoogleMaplocal', get_theme_file_uri( '/assets/scripts/modules/GoogleMap.js'), NULL, '1.0', true);
  wp_enqueue_script('myhob_main_script', get_theme_file_uri( '/assets/scripts/scripts.js'), NULL, '1.0', true);
  wp_enqueue_script('myhob_jquery', get_theme_file_uri( '/assets/scripts/frameworks/jquery-3.2.1.min.js'), NULL, '1.0', true);
  wp_enqueue_script('myhob_ham', get_theme_file_uri( '/assets/scripts/modules/hamburger.js'), NULL, '1.0', true);
  wp_enqueue_script('myhob_slider', get_theme_file_uri( '/assets/scripts/modules/slider.js'), NULL, '1.0', true);
  wp_enqueue_script('myhob_calendar', get_theme_file_uri( '/assets/scripts/modules/calendar.js'), NULL, '1.0', true);
  wp_enqueue_script('myhob_scroll', get_theme_file_uri( '/assets/scripts/modules/scroll.js'), NULL, '1.0', true);
  wp_enqueue_script('parallax', get_theme_file_uri( '/assets/scripts/modules/parallax.js'), NULL, '1.0', true);
  wp_enqueue_script('stars', get_theme_file_uri( '/assets/scripts/modules/stars.js'), NULL, '1.0', true);
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css', Null, microtime());

}
add_action('wp_enqueue_scripts', 'myhob_files');

function myhob_features(){
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'myhob_features');


function myhobMapKey($api){
  $api[key] ='AIzaSyD5RpyAt1-2-ZFmJut9Ju5Awvf0WnS6RsI';
  return $api;
}

add_filter('acf/fields/google_map/api', 'myhobMapKey');

function myhob_adjust_queries($query){
  if (!is_admin() AND is_post_type_archive('program') AND $query->is_main_query()) {
    $query->set('orderby', 'title');
    $query->set('order', 'ASC');
    $query->set('posts_per_page', -1);
  }
}

add_action('pre_get_posts', 'myhob_adjust_queries');


add_action('wp_loaded', 'noSubsAdminBar');

function noSubsAdminBar(){
  $ourCurrentUser = wp_get_current_user();

  if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber') {
    show_admin_bar(false);
  }
}

// Customize Login Screen

add_filter('login_headerurl', 'ourHeaderUrl');

function ourHeaderUrl(){
  return esc_url(site_url('/'));
}

add_action('login_enqueue_scripts', 'ourLoginCSS');

function ourLoginCSS(){
  wp_enqueue_style('myhob_main_style',  get_stylesheet_uri(), NULL, microtime());
}



// Redirect Login to FrontPage

add_action('admin_init', 'redirectSubstoFrontend');

function redirectSubstoFrontend(){
  $ourCurrentUser = wp_get_current_user();

  if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'admin') {
    wp_redirect(site_url('/news'));
    exit;
  }
}


//Advanced Custom Fields PHP Import
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_birth-date',
		'title' => 'Birth Date',
		'fields' => array (
			array (
				'key' => 'field_5a3b9cb20b21c',
				'label' => 'Birth Date',
				'name' => 'birth_date',
				'type' => 'date_picker',
				'required' => 1,
				'date_format' => 'yymmdd',
				'display_format' => 'dd/mm/yy',
				'first_day' => 1,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'tutor',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News';
    $submenu['edit.php'][5][0] = 'News';
    $submenu['edit.php'][10][0] = 'Add News';
    $submenu['edit.php'][16][0] = 'News Tags';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'News';
    $labels->singular_name = 'News';
    $labels->add_new = 'Add News';
    $labels->add_new_item = 'Add News';
    $labels->edit_item = 'Edit News';
    $labels->new_item = 'News';
    $labels->view_item = 'View News';
    $labels->search_items = 'Search News';
    $labels->not_found = 'No News found';
    $labels->not_found_in_trash = 'No News found in Trash';
    $labels->all_items = 'All News';
    $labels->menu_name = 'News';
    $labels->name_admin_bar = 'News';
}
add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );

//Change Produt Post Type to Course Post Type
function revcon_change_product_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Course';
    $submenu['edit.php'][5][0] = 'Course';
    $submenu['edit.php'][10][0] = 'Add Course';
    $submenu['edit.php'][16][0] = 'Course Tags';
}
function revcon_change_product_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['product']->labels;
    $labels->name = 'Courses';
    $labels->singular_name = 'Course';
    $labels->add_new = 'Add Course';
    $labels->add_new_item = 'Add Course';
    $labels->edit_item = 'Edit Course';
    $labels->new_item = 'Course';
    $labels->view_item = 'View Course';
    $labels->search_items = 'Search Course';
    $labels->not_found = 'No Course found';
    $labels->not_found_in_trash = 'No Course found in Trash';
    $labels->all_items = 'All Courses';
    $labels->menu_name = 'Courses';
    $labels->name_admin_bar = 'Courses';
}
add_action( 'admin_menu', 'revcon_change_product_label' );
add_action( 'init', 'revcon_change_product_object' );

//Dashboard Customization
add_action('admin_head', 'customizeDashboard');
function customizeDashboard() {
  echo '<style>
    #menu-posts-course{
      display: none;
    }
  </style>';
}



function add_svg_to_upload_mimes($upload_mimes)
	{
	$upload_mimes['svg'] = 'image/svg+xml';
	$upload_mimes['svgz'] = 'image/svg+xml';
	return $upload_mimes;
	}
add_filter('upload_mimes', 'add_svg_to_upload_mimes');

define('ALLOW_UNFILTERED_UPLOADS', true);

?>
